<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: dashboard.php");
    exit;
}
 
// Include config file
require_once "includes/db_connect.php";
 
// Define variables and initialize with empty values
$email = $password = "";
$errors = [];
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if email is empty
    if(empty(trim($_POST["email"]))){
        $errors[] = "Please enter email.";
    } else{
        $email = trim($_POST["email"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $errors[] = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($errors)){
        // Prepare a select statement
        $sql = "SELECT id, full_name, email, password FROM users WHERE email = ?";
        
        if($stmt = $conn->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("s", $param_email);
            
            // Set parameters
            $param_email = $email;
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Store result
                $result = $stmt->get_result();
                
                // Check if email exists, if yes then verify password
                if($result->num_rows == 1){                    
                    // Fetch the user data
                    $user = $result->fetch_assoc();
                    if(password_verify($password, $user['password'])){
                        // Password is correct, so start a new session
                        session_start();
                        
                        // Store data in session variables
                        $_SESSION["loggedin"] = true;
                        $_SESSION["id"] = $user['id'];
                        $_SESSION["email"] = $user['email'];                            
                        $_SESSION["full_name"] = $user['full_name'];
                        
                        // Redirect user to dashboard page
                        header("location: dashboard.php");
                    } else{
                        // Display an error message if password is not valid
                        $errors[] = "Invalid email or password.";
                    }
                } else{
                    // Display an error message if email doesn't exist
                    $errors[] = "No account found with that email.";
                }
            } else{
                $errors[] = "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            $stmt->close();
        }
    }
    
    // Close connection
    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Back - Manchitra</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="auth-page">
    <div class="auth-container">
        <div class="auth-card">
            <div class="auth-header">
                <h2>Welcome Back!</h2>
                <p>Log in to continue to Manchitra</p>
            </div>
            <?php 
            if(!empty($errors)){
                echo '<div class="alert alert-danger">';
                foreach($errors as $error){
                    echo '<div>' . htmlspecialchars($error) . '</div>';
                }
                echo '</div>';
            }
            ?>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <div class="form-group">
                    <label>Email Address</label>
                    <input type="email" name="email" value="<?php echo htmlspecialchars($email); ?>" required>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" required>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn-primary">Log In</button>
                </div>
            </form>
            <div class="auth-footer">
                <p>Don't have an account? <a href="register.php">Sign up</a></p>
            </div>
        </div>
    </div>
</body>
</html>

<?php
session_start();
require_once "includes/db_connect.php";

$fullname = $email = $password = "";
$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate full name
    if (empty(trim($_POST["full_name"]))) {
        $errors[] = "Please enter your full name.";
    } else {
        $fullname = trim($_POST["full_name"]);
    }

    // Validate email
    if (empty(trim($_POST["email"]))) {
        $errors[] = "Please enter your email.";
    } else {
        // Check if email is already taken
        $sql = "SELECT id FROM users WHERE email = ?";
        if ($stmt = $conn->prepare($sql)) {
            $stmt->bind_param("s", $param_email);
            $param_email = trim($_POST["email"]);
            if ($stmt->execute()) {
                $stmt->store_result();
                if ($stmt->num_rows == 1) {
                    $errors[] = "This email is already taken.";
                } else {
                    $email = trim($_POST["email"]);
                }
            } else {
                $errors[] = "Oops! Something went wrong. Please try again later.";
            }
            $stmt->close();
        }
    }

    // Validate password
    if (empty(trim($_POST["password"]))) {
        $errors[] = "Please enter a password.";
    } elseif (strlen(trim($_POST["password"])) < 6) {
        $errors[] = "Password must have at least 6 characters.";
    } else {
        $password = trim($_POST["password"]);
    }

    // Check input errors before inserting in database
    if (empty($errors)) {
        // Prepare an insert statement
        $sql = "INSERT INTO users (full_name, email, password) VALUES (?, ?, ?)";

        if ($stmt = $conn->prepare($sql)) {
            $stmt->bind_param("sss", $param_fullname, $param_email, $param_password);

            $param_fullname = $fullname;
            $param_email = $email;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash

            if ($stmt->execute()) {
                // Redirect to login page
                header("location: login.php");
            } else {
                $errors[] = "Something went wrong. Please try again later.";
            }
            $stmt->close();
        }
    }
    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account - Manchitra</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="auth-page">
    <div class="auth-container">
        <div class="auth-card">
            <div class="auth-header">
                <h2>Create Your Account</h2>
                <p>Get started with Manchitra today</p>
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
                    <label>Full Name</label>
                    <input type="text" name="full_name" value="<?php echo htmlspecialchars($fullname); ?>" required>
                </div>
                <div class="form-group">
                    <label>Email Address</label>
                    <input type="email" name="email" value="<?php echo htmlspecialchars($email); ?>" required>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" required>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn-primary">Sign Up</button>
                </div>
            </form>
            <div class="auth-footer">
                <p>Already have an account? <a href="login.php">Log in</a></p>
            </div>
        </div>
    </div>
</body>
</html>

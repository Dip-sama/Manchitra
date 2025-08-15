<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if yes then redirect him to dashboard page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: dashboard.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Manchitra</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Roboto:wght@400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- <link rel="stylesheet" href="css/style.css"> -->
     <style>
        body, html {
    margin: 0;
    padding: 0;
    height: 100%;
    font-family: 'Roboto', sans-serif;
    color: #fff;
}

.hero-container {
    height: 100%;
    background-image: url('./images/bg3.jpg'); /* This is your new image */
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    position: relative;
}




.hero-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    /* background: rgb(250, 247, 247); Dark overlay to make text readable */
}

.hero-content {
    position: relative;
    z-index: 1;
    padding: 30px;
    background: transparent;
    border-radius: 15px;
    backdrop-filter: blur(5px);
    -webkit-backdrop-filter: blur(5px);
    border: 1px solid rgba(255, 255, 255, 0.1);
}

.logo {
    width: 80px;
    margin-bottom: 15px;
}

.hero-content h1 {
    font-family: 'Playfair Display', serif;
    font-size: 4rem;
    margin: 0 0 10px 0;
    font-weight: 700;
}

.hero-content p {
    font-size: 1.25rem;
    margin-bottom: 30px;
    max-width: 600px;
}

.hero-buttons {
    display: flex;
    justify-content: center;
    gap: 20px;
}

.btn {
    padding: 12px 30px;
    text-decoration: none;
    font-size: 1rem;
    font-weight: bold;
    border-radius: 50px;
    transition: all 0.3s ease;
    border: 2px solid transparent;
    cursor: pointer;
}

.btn-primary {
    background-color: transparent;
    color: #fff;
    border: 2px solid #fff;
}

.btn-primary:hover {
    background-color: #fff;
    color:rgb(0, 0, 0);
    border-color:rgb(45, 159, 235);
}

.btn-secondary {
    background-color: transparent;
    color: #fff;
    border: 2px solid #fff;
}

.btn-secondary:hover {
    background-color: #fff;
    color:rgb(0, 0, 0);
    border-color:rgb(45, 159, 235);
}

/* Responsive styles for mobile */
@media (max-width: 768px) {
    .hero-content h1 {
        font-size: 3rem;
    }
    .hero-content p {
        font-size: 1rem;
    }
    .hero-buttons {
        flex-direction: column;
        align-items: center;
    }
    .btn {
        width: 80%;
        max-width: 200px;
    }
}
     </style>
</head>
<body>
    <div class="hero-container">
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <div class="logo" style="width: 80px; height: 80px; background: linear-gradient(135deg, #ff6b6b, #feca57); border-radius: 20px; display: flex; align-items: center; justify-content: center; margin: 0 auto 15px; font-size: 40px; color: white; box-shadow: 0 10px 30px rgba(255, 107, 107, 0.3);">
                <i class="fas fa-om"></i>
            </div>
            <h1>Manchitra</h1>
            <p>Explore the vibrant tapestry of Durga Puja with Manchitra, your guide to the festivities.</p>
            <div class="hero-buttons">
                <a href="login.php" class="btn btn-primary">Login</a>
                <a href="register.php" class="btn btn-secondary">Register</a>
            </div>
        </div>
    </div>
</body>
</html>

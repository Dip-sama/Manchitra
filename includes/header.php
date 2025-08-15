<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $pageTitle ?? 'Manchitra'; ?></title>
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body class="site-view">
    <div class="top-nav">
        <div class="nav-left">
            <div class="logo-area">
                <i class="material-icons">explore</i>
                <h1>Manchitra</h1>
            </div>
            <div class="nav-links">
                <a href="dashboard.php">Home</a>
                <a href="mandaps.php">Mandaps</a>
                <a href="events.php">Events</a>
                <a href="explore.php">Explore</a>
            </div>
        </div>
        <div class="nav-right">
            <div class="user-area">
                <a href="#" class="nav-icon"><i class="material-icons">notifications</i></a>
                <a href="profile.php" class="user-profile">
                    <img src="https://i.pravatar.cc/32?u=<?php echo htmlspecialchars($_SESSION['id']); ?>" alt="User Avatar">
                </a>
            </div>
            <button class="hamburger" id="hamburger-btn" aria-label="Open menu">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </div>
    <div class="mobile-menu" id="mobile-menu">
        <a href="dashboard.php">Home</a>
        <a href="mandaps.php">Mandaps</a>
        <a href="events.php">Events</a>
        <a href="explore.php">Explore</a>
        <a href="profile.php">Profile</a>
        <a href="logout.php">Log out</a>
    </div>
    <div class="page-container">
    <script>
    // Hamburger menu toggle
    document.addEventListener('DOMContentLoaded', function() {
        var btn = document.getElementById('hamburger-btn');
        var menu = document.getElementById('mobile-menu');
        btn && btn.addEventListener('click', function() {
            menu.classList.toggle('open');
        });
    });
    </script> 
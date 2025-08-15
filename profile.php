<?php
$pageTitle = "Profile - Manchitra";
require_once "includes/header.php";

// This logic was moved from the old profile page to ensure full_name is available
// It can be removed if login/registration flow guarantees it's always in the session
require_once "includes/db_connect.php";
if (!isset($_SESSION["full_name"]) && isset($_SESSION['id'])) {
    $sql = "SELECT full_name FROM users WHERE id = ?";
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("i", $_SESSION["id"]);
        if ($stmt->execute()) {
            $stmt->bind_result($full_name);
            if ($stmt->fetch()) {
                $_SESSION["full_name"] = $full_name;
            }
        }
        $stmt->close();
    }
}
?>

<div class="profile-container">
    <div class="profile-card">
        <div class="profile-avatar">
            <img src="https://i.pravatar.cc/150?u=<?php echo htmlspecialchars($_SESSION['id']); ?>" alt="User Avatar">
        </div>
        <div class="profile-details">
            <h2><?php echo htmlspecialchars($_SESSION["full_name"] ?? 'User'); ?></h2>
            <p><?php echo htmlspecialchars($_SESSION["email"]); ?></p>
        </div>
    </div>

    <div class="profile-actions">
        <a href="edit.php" class="action-link">Edit Profile</a>
        <a href="settings.php" class="action-link">Account Settings</a>
        <a href="logout.php" class="action-link danger">Log Out</a>
    </div>
</div>

<?php require_once "includes/footer.php"; ?> 
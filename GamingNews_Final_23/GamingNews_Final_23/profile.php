<?php ob_start(); ?>

<!-- HEADER -->
<?php include "includes/header.php" ?>

<!-- NAVIGATION -->
<?php include "includes/navigation.php" ?>

<?php
// if user not logged in then page should redirect to index.php.
if (!isset($_SESSION['logged_in'])) {
    header("Location: ./index.php");
    exit();
}

// Using session to take username then taking user data from db by using username.
$user_id = $_SESSION['user_id'];
$sql = 'SELECT * FROM users WHERE user_id=:ui';
$stmt = $connection->prepare($sql);
$stmt->execute(['ui' => $user_id]);
$users = $stmt->fetchAll();

foreach ($users as $user) {
    $name = $user->user_firstname;
    $username = $user->username;
    $user_bio = $user->biography;
?>
    <!-- User profile starts from here. -->
    <div class="content-area">
        <div class="profile-top">
            <img src="assets/images/profile-image/dummy-profile.jpg" alt="profile-picture">
            <div class="user-detail">
                <h2><?php echo $name ?></h2>
                <h4>@<?php echo $username ?></h4>
                <button><a href="./update-profile.php">Edit Profile</a></button>
                <h3>Achievements in Gaming</h3>
                <p><?php echo $user_bio ?></p>
            </div>
        </div>
    </div>
<?php } ?>
</body>

</html>
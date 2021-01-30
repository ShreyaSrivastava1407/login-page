<?php ob_start(); ?>

<!-- HEADER -->
<?php include "includes/header.php" ?>

<!-- NAVIGATION -->
<?php include "includes/navigation.php" ?>

<?php
// Taking username from url.
if (isset($_GET['username'])) {
    $writer_username =  $_GET['username'];
}

// Taking data for showing post writer detail.
$sql = 'SELECT * FROM users WHERE username=:un';
$stmt = $connection->prepare($sql);
$stmt->execute(['un' => $writer_username]);
$users = $stmt->fetchAll();

// If user write some random username or wrong username then redirect to index.php.
if (!$users) {
    header("Location: index.php");
    exit();
}

foreach ($users as $user) {
    $name = $user->user_firstname;
    $username = $user->username;
    $user_bio = $user->biography;
?>

    <!-- Writer profile starts from here. -->
    <div class="content-area">
        <div class="profile-top">
            <img src="assets/images/profile-image/dummy-profile.jpg" alt="profile-picture">
            <div class="user-detail">
                <h2><?php echo $name ?></h2>
                <h4>@<?php echo $username ?></h4>
                <h3>Achievements in Gaming</h3>
                <p><?php echo $user_bio; ?></p>
            </div>
        </div>
    </div>
<?php } ?>
</body>

</html>
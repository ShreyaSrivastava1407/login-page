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

$user_id = $_SESSION['user_id'];


// Using session to take username then updating user data in db by using username.
$user_name = $_SESSION['username'];
if (isset($_POST['update-bio'])) {
    $user_bio = $_POST['userbio'];

    // Updating Profile
    $sql = "UPDATE users SET biography = :ub WHERE user_id = :ui";
    $stmt = $connection->prepare($sql);
    $stmt->execute(['ub' => $user_bio, 'ui' => $user_id]);
    $users = $stmt->fetchAll();

    header("Location: profile.php");
    exit();
}

$sql = 'SELECT * FROM users WHERE user_id=:ui';
$stmt = $connection->prepare($sql);
$stmt->execute(['ui' => $user_id]);
$users = $stmt->fetchAll();

foreach ($users as $user) {
    $name = $user->user_firstname;
    $username = $user->username;
    $user_bio = $user->biography;
?>

    <div class="content-area">
        <div class="profile-top">
            <img src="assets/images/profile-image/dummy-profile.jpg" alt="profile-picture">

            <div class="user-detail">
                <h2><?php echo $name ?></h2>
                <h4>@<?php echo $username ?></h4>

                <h3>Achievements in Gaming</h3>
                <form action="" method="post" enctype="multipart/form-data">
                    <textarea name="userbio" cols="26" rows="15"> <?php echo $user_bio ?> </textarea>
                    <button name="update-bio">Update</button>
                    <!-- <input type="submit" name="update-bio" value="Update"> -->
                </form>
            </div>

        </div>
    </div>
<?php } ?>
</body>

</html>
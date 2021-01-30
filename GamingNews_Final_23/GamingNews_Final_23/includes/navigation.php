<nav>
    <a href="./index.php">
        <img class="logo-top" src="./assets/images/logo_head.png" alt="nav-icon" />
    </a>

    <div class="search-container">
        <form action="./search.php" method="post">
            <input type="text" placeholder="Search" name="search" />
            <button name="submit" class="fa fa-search" type="submit"></button>
        </form>
    </div>

    <?php

    if (isset($_SESSION['logged_in'])) {
        // Giving different access to user on the basis of user role. 
        if (isset($_SESSION['user_role'])) {
            if ($_SESSION['user_role'] == 'user') {
                echo "<div class='dropdown'>";
                echo "<button class='dropbtn'><i class='login-signup fa fa-user'></i></button>";
                echo "<div class='dropdown-content'>";
                echo "<a href='./profile.php'>Profile</a>";
                echo "<a href='includes/logout.php'>Logout</a>";
                echo "</div>";
                echo "</div>";
            } else if ($_SESSION['user_role'] == 'admin') {
                echo "<div class='dropdown'>";
                echo "<button class='dropbtn'><i class='login-signup fa fa-user'></i></button>";
                echo "<div class='dropdown-content'>";
                echo "<a href='./profile.php'>Profile</a>";
                echo "<a href='./admin/admin-index.php'>Admin</a>";
                echo "<a href='includes/logout.php'>Logout</a>";
                echo "</div>";
                echo "</div>";
            }
        }
    } else {
        echo "<a href='./login.php'><i class='login-signup fa fa-user'></i></a>";
    }
    ?>
</nav>

<?php include "sidebar.php" ?>



<?php
// if (isset($_SESSION['logged_in'])) {
//     echo "<div class='dropdown'>";
//     echo "<button class='dropbtn'><i class='login-signup fa fa-user'></i></button>";
//     echo "<div class='dropdown-content'>";
//     echo "<a href='./profile.php'>Profile</a>";
//     echo "<a href='includes/logout.php'>Logout</a>";
//     echo "</div>";
//     echo "</div>";
// } else {
//     echo "<a href='./login.php'><i class='login-signup fa fa-user'></i></a>";
// }
?>


<!-- <a href="./login.php"><i class="login-signup fa fa-user"></i></a> -->

<!-- <div class="dropdown">
            <button class="dropbtn"><i class="login-signup fa fa-user"></i></button>
            <div class="dropdown-content">
                <a href="#">Profile</a>
                <a href="./includes/logout.php">Logout</a>
            </div>
        </div> -->
<?php
// Not working on xampp 5.6
// require_once("config.php");
// working
include "./includes/config.php";
?>
<div class="sidebar">
    <ul class="entities">

        <?php
        // use below code if include wont work
        // try {
        //     $connection = new PDO("mysql:dbname=thegamingbuddy;host=localhost", "root", "");
        //     // $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        //     $connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        // } catch (PDOException $e) {
        //     exit("Connection failed: " . $e->getMessage());
        // }
        
        //  Take all categories to show in sidebar.
        $sql = "SELECT * FROM categories";
        $stmt = $connection->prepare($sql);
        $stmt->execute();
        $cats = $stmt->fetchAll();

        foreach ($cats as $cat) {
            $cat_id = $cat->cat_id;
            $cat_title = $cat->cat_title;
            $cat_image = $cat->cat_image;

        ?>
            <a href="./category.php?category=<?php echo $cat_id ?>">
                <div class="sidebar-option">
                    <img class="sidebar-img" src=" ./assets/images/sidebar-icon/<?php echo $cat_image ?>" alt="" />
                    <li><?php echo $cat_title ?></li>
                </div>
            </a>
        <?php } ?>
    </ul>

    <div class="sidebar-footer">
        <ul>
            <li><a href="#">About</a></li>
            <li><a href="#">Developers</a></li>
            <li><a href="#">Contact Us</a></li>
            <li><a href="#">Write for Us</a></li>
            <li><a href="#">Why Us?</a></li>
        </ul>
        <h4 class="copyright"><span>&#169;</span>2020 Google</h4>
    </div>
</div>
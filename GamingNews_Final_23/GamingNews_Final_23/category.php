<?php ob_start(); ?>

<!-- HEADER -->
<?php include "includes/header.php" ?>

<!-- NAVIGATION -->
<?php include "includes/navigation.php" ?>

<div class="content-area">
    <?php
    // Taking post_category_id from url.
    if (isset($_GET['category'])) {
        $post_category_id = $_GET['category'];
    }

    $status = 'online';
    $sql = 'SELECT * FROM posts WHERE post_category_id=:pci && status = :st ORDER BY post_id DESC';
    $stmt = $connection->prepare($sql);
    $stmt->execute(['pci' => $post_category_id, 'st' => $status]);
    $posts = $stmt->fetchAll();

    foreach ($posts as $post) {
        $post_title = $post->post_title;
        $post_content = $post->post_content;
        $post_author = $post->post_author;
        $post_date = $post->post_date;
        $external_link = $post->external_link;
        $post_image = $post->post_image;
        $image_credit = $post->image_credit;
    ?>

        <div class="content-news">
            <div class="news-main">
                <?php
                // Image only show in posts if image exist in db.
                if (!$post_image == '') {
                    echo "<div class='image'>";
                    echo "<img src=' $post_image' />";
                    echo "<h6>Image Credit: $image_credit</h6>";
                    echo "</div>";
                }
                ?>
                <div class="news-reading">
                    <h2><?php echo $post_title ?></h2>
                    <p><?php echo $post_content ?></p>
                </div>
            </div>
            <div class="news-footer">
                <div class="news-info">
                    <h5 class="writer-name">Summarized by: <a href="writer-profile.php?username=<?php echo $post_author ?>"><?php echo $post_author ?></a></h5>
                    <h5 class="news-time"><?php echo $post_date ?></h5>
                </div>
                <!-- External link is referencing the article which is summarized on this website. -->
                <a target="_blank" href="<?php echo $external_link ?>"><i class="external-link fa fa-external-link"></i></a>
            </div>
        </div>

    <?php } ?>
</div>

</body>

</html>
<?php include 'assets/data/lien_nav_data.php'; ?>
<!-- La fabrique des hyperliens -->
<?php
    foreach ($link as $value) {
        echo '<a class="nav-link text-white" href="' . $value['url'] . '">' . $value['title'] . '</a>';
    }
?>
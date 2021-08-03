<?php
require "header.php";
?>
<main>
    <?php
    // http://localhost/ala/sopranos/main.php?page=contact
    $requestedPage = $_GET['page'];
    if($requestedPage == 'about') {
    require "about.php";
    }
    if($requestedPage == 'contact') {
        require "contact.php";
    }
    ?>
</main>
<?php
require "footer.php";
?>
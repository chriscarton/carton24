<?php
$requested_page = 'accueil'; // default page

//Pour les pages dans le dossier pages
if (isset($_GET['page'])) {
    $allowed_pages = ['accueil']; // list of allowed pages
    $requested_page = str_replace('.php', '', $_GET['page']);
    if (in_array($requested_page, $allowed_pages)) {
        $page = $_GET['page'];
    }

    $path = "pages/{$requested_page}.php";

//Pour les articles dans le dossier articles
}else if (isset($_GET['article'])) {
    $allowed_pages = ['mobile-first']; // list of allowed pages
    $requested_page = str_replace('.php', '', $_GET['article']);
    if (in_array($requested_page, $allowed_pages)) {
        $page = $_GET['article'];
    }

    $path = "articles/{$requested_page}.php";
}else{
    $path = "pages/accueil.php";
}

?>
<?php require 'header.php'; ?>
<?php require $path; ?>
<?php require 'footer.php'; ?>
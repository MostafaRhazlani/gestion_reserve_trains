<?php
    require_once './autoload.php';
    require_once './views/includes/header.php';
    require_once './controllers/homeController.php';

    $home = new homeController();

    $pages = ["home","voyage","reserve","reservations","add_voyage","update_voyage","delete_voyage"];

    if(isset($_GET['page'])) {
        if(in_array($_GET['page'], $pages)) {
            $page = $_GET['page'];
            $home->index($page);
        } else {
            include('views/includes/404.php');
        }
    } else {
        $home->index('home');
    }

    require_once('./views/includes/footer.php');
?>

<?php
    require_once './autoload.php';
    require_once './views/includes/header.php';
    include_once ('./route.php');

    include('./views/navbar.php');

    Route::contentToRender();
      
    require_once('./views/includes/footer.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reserve Train</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.4/dist/sweetalert2.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>public/css/dropify.min.css">

<script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.4/dist/sweetalert2.min.js"></script>
    <script src="<?php echo BASE_URL ?>public/js/dropify.min.js"></script>
</head>
<?php if($_GET['page'] != 'home') { ?>

    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="<?php echo BASE_URL;?>public/images/trainline-600px.webp" alt="Logo" width="100" height="50" class="d-inline-block align-text-top">
            </a>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-light active" aria-current="page" href="<?php echo BASE_URL;?>?page=home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="<?php echo BASE_URL;?>?page=voyage">Voyage</a>
                    </li>
                    <li class="nav-item">   
                        <a class="nav-link text-light" href="<?php echo BASE_URL;?>?page=train">Trains</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="<?php echo BASE_URL;?>?page=contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

<?php } ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Reserve Train</title>
    <!-- bootstrap and mdb -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>public/css/mdb.min.css">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- select2 - sweetalert2 - dropify -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.4/dist/sweetalert2.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL ?>public/css/dropify.min.css">

    <!-- my style css -->
    <link rel="stylesheet" href="<?php echo BASE_URL ?>public/css/style.css">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">



    <!-- script bootstrap and mdb -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <script src="<?php echo BASE_URL ?>public/js/mdb.min.js"></script>

    <!--  -->
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>

    <!-- script select2 and sweetalert and dropify -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.4/dist/sweetalert2.min.js"></script>
    <script src="<?php echo BASE_URL ?>public/js/dropify.min.js"></script>
</head>
<?php if($_GET['page'] != 'home') { ?>
    <nav class="navbar navbar-expand-lg navbar-light bg-white">

        <div class="container-fluid">

            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
                data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="col-9 mx-auto">
                    <div class="d-flex align-items-center justify-content-between">
                        <a class="navbar-brand mt-2 mt-lg-0" href="#">
                            <img src="<?php echo BASE_URL;?>public/images/trainline-600px.webp" width="100" height="50"
                                alt="MDB Logo" loading="lazy" />
                        </a>

                        <div class="d-flex">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo BASE_URL;?>?page=home">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo BASE_URL;?>?page=voyage">Voyage</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo BASE_URL;?>?page=client-voyage">Tickets</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo BASE_URL;?>?page=train">Train</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">About Me</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo BASE_URL;?>?page=contact">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex align-items-center">
                <a class="link-secondary me-3" href="#">
                    <i class="fas fa-shopping-cart"></i>
                </a>
                <div class="dropdown">
                    <a class="link-secondary me-3 dropdown-toggle hidden-arrow" href="#" id="navbarDropdownMenuLink"
                        role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-bell"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                        <li>
                            <a class="dropdown-item" href="#">Some news</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">Another news</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </li>
                    </ul>
                </div>
                <div class="dropdown mb-1 me-5 dropstart">
                    <a class="" href="#" role="button" id="dropdownMenuLink" data-mdb-toggle="dropdown" aria-expanded="false">
                        <img src="<?php echo BASE_URL; ?>public/images/images.png" alt="" width="25" height="25" class="rounded-circle" >
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                        <li><a class="dropdown-item" href="#"> <i class="fas fa-user-alt pe-2"></i>My Profile</a></li>
                        <li><a class="dropdown-item" href="#"> <i class="far fa-calendar-check pe-2"></i>My Reservations</a></li>
                        <li><a class="dropdown-item" href="#"> <i class="fas fa-cog pe-2"></i>Settings</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="#"> <i class="fas fa-door-open pe-2"></i>Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
<?php } ?>

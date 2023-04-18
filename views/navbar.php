<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <!-- Container wrapper -->
  <div class="container-fluid">
    <!-- Toggle button -->
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Navbar brand -->
      <a class="navbar-brand mt-2 mt-lg-0" href="<?php echo BASE_URL?>">
        <img
          src="<?php echo BASE_URL?>public/images/trainline-600px.webp"
          width=""
          height="50"
          alt="MDB Logo"
          loading="lazy"
        />
      </a>
      <!-- Left links -->
      <div class="col-11">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex justify-content-center">
            <li class="nav-item me-3">
                <a class="nav-link" href="<?php echo BASE_URL;?>home"><i class="fa-solid fa-house"></i> Home</a>
            </li>
            <li class="nav-item me-3">
                <a class="nav-link" href="<?php echo BASE_URL;?>voyage"><i class="fa-solid fa-calendar-plus"></i> Voyage</a>
            </li>
            <li class="nav-item me-3">
                <a class="nav-link" href="<?php echo BASE_URL;?>train"><i class="fa-solid fa-train"></i> Train</a>
            </li>
            <li class="nav-item me-3">
                <a class="nav-link" href="#"><i class="fa-solid fa-circle-exclamation"></i> About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="fa-solid fa-envelope"></i> Contact</a>
            </li>
        </ul>
      </div>
      <!-- Left links -->
    </div>
    
      <!-- Avatar -->
      <div class="dropdown">
        <a
          class="dropdown-toggle d-flex align-items-center hidden-arrow"
          href="#"
          id="navbarDropdownMenuAvatar"
          role="button"
          data-mdb-toggle="dropdown"
          aria-expanded="false"
        >
          <img
            src="<?php echo BASE_URL; ?>public/images/images.png"
            class="rounded-circle"
            height="50"
            alt="Black and White Portrait of a Man"
            loading="lazy"
          />
        </a>
        <ul
          class="dropdown-menu dropdown-menu-end"
          aria-labelledby="navbarDropdownMenuAvatar"
        >
            <li><a class="dropdown-item" href="#"> <i class="fas fa-user-alt pe-2"></i>My Profile</a></li>
                <li><a class="dropdown-item" href="<?php echo BASE_URL;?>reserve/logout"> <i class="far fa-calendar-check pe-2"></i>My Reservations</a></li>
                <li><a class="dropdown-item" href="#"> <i class="fas fa-cog pe-2"></i>Settings</a></li>
                <li><hr class="dropdown-divider" /></li>
                <li><a class="dropdown-item" href="<?php echo BASE_URL;?>user/logout"> <i class="fas fa-door-open pe-2"></i>Logout</a></li>
        </ul>
      </div>
    </div>
    <!-- Right elements -->
  </div>
  <!-- Container wrapper -->
</nav>
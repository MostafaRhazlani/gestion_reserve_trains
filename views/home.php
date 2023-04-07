<section class="img">
    <div class="container h-100">
        <header>
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <a href="<?php echo BASE_URL; ?>?page=home"><img src="<?php echo BASE_URL; ?>public/images/trainline-600px.webp" alt="" width="200" height="100"></a>
                    <button class="navbar-toggler bg-secondary" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active text-light" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-light" href="#">About Me</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-light" href="#">Contact</a>
                            </li>
                        </ul>
                        <div class="d-flex">
                            <div class="dropdown">
                                <a class="ms-2" href="#" role="button" id="dropdownMenuLink" data-mdb-toggle="dropdown" aria-expanded="false">
                                    <img src="<?php echo BASE_URL; ?>public/images/images.png" alt="" width="50" height="50" class="rounded-circle" >
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                    <li><a class="dropdown-item" href="#"> <i class="fas fa-user-alt pe-2"></i>My Profile</a></li>
                                    <li><a class="dropdown-item" href="#"> <i class="far fa-calendar-check pe-2"></i>My Reservations</a></li>
                                    <li><a class="dropdown-item" href="#"> <i class="fas fa-cog pe-2"></i>Settings</a></li>
                                    <li><a class="dropdown-item" href="<?php echo BASE_URL;?>?page=login-register"> <i class="fas fa-door-open pe-2"></i>Logout</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <div class="col-8 mx-auto row align-items-center h-50">
            <div class="text-center">
                <h1 class="text-light fw-lighter font-size">Welcome <br> Every Body</h1>
            </div>
        </div>
        <div class="col-12">
            <div class=" col-10 mx-auto">
                <div class="card-body bg-light rounded ">
                    <form action="<?php echo BASE_URL; ?>?page=client-voyage" method="post" class="row p-4">
                        <div class="col-3">
                            <div class="input-field">
                                <i class="fa-solid fa-user"></i>
                                <input type="text" placeholder="Departure station">
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="input-field">
                                <i class="fa-solid fa-user"></i>
                                <input type="text" placeholder="Arrival station">
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="input-field">
                                <i class="fa-solid fa-user"></i>
                                <input type="date">
                            </div>
                        </div>
                        <div class="col-3 d-flex align-items-center">
                            <button type="submit" class="btn btn-danger rounded-pill w-100 h-75"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
  // Get a reference to the select element
  const departure_s = document.getElementById('departure_s');
  const arrival_s = document.getElementById('arrival_s');

  // Fetch data from API and fill select options
  fetch('https://countriesnow.space/api/v0.1/countries/cities', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json'
    },
    body: JSON.stringify({
      country: 'morocco'
    })
  })
  .then(response => response.json())
  .then(data => {
      fill_select(data);
  })
  .catch(error => {
    console.error('Error:', error);
  });

  function fill_select(data) {
    data.data.forEach(city => {
      const option_departure_s = document.createElement('option');
      const option_arrival_s = document.createElement('option');

      option_departure_s.value = city;
      option_departure_s.textContent = city;
      departure_s.appendChild(option_departure_s);

      option_arrival_s.value = city;
      option_arrival_s.textContent = city;
      arrival_s.appendChild(option_arrival_s);
    });
  }
</script>



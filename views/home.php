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
                            <button class="btn btn-warning">Register</button>  
                            <button class="btn btn-success ms-2">Log in</button>
                            <div class="btn-group ms-2">
                                <button type="button" class="btn btn-danger">Action</button>
                                <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                                    <span class="visually-hidden">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">My Account</a></li>
                                    <li><a class="dropdown-item" href="#">My reservation</a></li>
                                    <li><a class="dropdown-item" href="#">Setting</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="#">Log out</a></li>
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
                    <form action="<?php echo BASE_URL; ?>?page=voyage" method="post" class="row p-4">
                        <div class="col mx-1">
                            <div class="mb-2">
                                <span><i class="fa-solid fa-location-dot"></i></span>
                                <label for="" class="">Departure Station</label>
                            </div>
                            <input type="text" class="form-control" placeholder="Departure Station" aria-label="First name" id="departure_s">
                        </div>
                        <div class="col mx-1">
                            <div class="mb-2">
                                <span><i class="fa-solid fa-location-dot"></i></span>
                                <label for="">Arrival Station</label>
                            </div>
                        <input type="text" class="form-control" placeholder="Arrival Station" aria-label="First name" id="arrival_s">
                        </div>
                        <div class="col mx-1">
                            <div class="mb-2">
                                <span><i class="fa-solid fa-calendar-days"></i></span>
                                <label for="">Date Departure</label>
                            </div>
                            <input type="date" class="form-control" aria-label="First name">
                        </div>
                        <div class="col-2 mx-1 d-flex align-items-end">
                            <button type="submit" class="btn btn-danger w-100 h-100"><i class="fa-solid fa-magnifying-glass"></i></button>
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



<?php

  $getNameTrains = new trianController();
  $trains = $getNameTrains->getAll();

  if(isset($_POST['submit'])) {
    $addVoyage = new voyageController();
    $addVoyage->addVoyage();
  }
?>

<div class="container">
  <div class="row my-5">
    <div class="col-md-6 mx-auto">
    <?php include('./views/includes/alerts.php'); ?>
      <div class="card">
        <div class="card-header bg-danger text-light ">Ajouter un voyage</div>
        <div class="card-body bg-light">
            <form action="" method="post">
              <div class="input-group mb-3">
                <!-- <label class="input-group-text" for="inputGroupSelect01">Options</label> -->
                <select name="id_train" class="form-select" id="inputGroupSelect01">
                  <?php foreach ($trains as $train) :?>
                      <option value="<?php echo $train->id_train ?>" >
                        <?php echo $train->name_train; ?>
                      </option>
                  <?php endforeach; ?>
                </select>
              </div>

              <div class="form-group mb-4">
                <label class="ms-2" for="departure_s">Departure Station</label>
                <select name="departure_s" class="form-control select2" id="departure_s">
                  <option value="">Departure Station</option>
                </select>
              </div>

              <div class="form-group mb-4">
                <label class="ms-2" for="arrival_s">Arrival Station</label>
                <!-- <input type="text" name="arrival_s" class="form-control" placeholder="Arrival station" id="arrival_s"> -->
                <select name="arrival_s" class="form-control select2" id="arrival_s">
                  <option value="">Departure Station</option>
                </select>
              </div>

              <div class="form-group mb-4">
                <label class="ms-2" for="date_d">Date departure</label>
                <input type="datetime-local" name="date_departure" class="form-control" id="date_d">
              </div>

              <div class="form-group mb-4">
                <label class="ms-2" for="date_a">Date arrival</label>
                <input type="datetime-local" name="date_arrival" class="form-control" id="date_a">
              </div>

              <div class="form-group mb-4">
                <label class="ms-2" for="prix">Prix</label>
                <input type="number" name="prix" class="form-control" placeholder="Prix" id="prix">
              </div>

              <div class="form-group mb-2 float-end">
                <button type="submit" class="btn btn-danger px-4" name="submit">Valider</button>
                <a href="<?php echo BASE_URL; ?>?page=voyage" class="btn btn btn-secondary px-4">
                  Close
                </a>
              </div>
            </form>
        </div>
      </div>
    </div>
  </div>
</div>


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
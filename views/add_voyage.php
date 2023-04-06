<?php

  $getNameTrains = new trainController();
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
                <select name="id_train" class="form-select" aria-label="Default select example" id="trains">
                  <?php foreach ($trains as $train) :?>
                    <option value="<?php echo $train->id_train ?>" >
                      <?php echo $train->name_train; ?>
                    </option>
                  <?php endforeach; ?>
                </select>
              </div>

              <div class="form-group mb-4">
                <label class="ms-2" for="departure_s">Departure Station</label>
                <select name="departure_s" class="form-select" aria-label="Default select example" id="departure_s">
                    <option value="">Departure Station</option>
                </select>
              </div>

              <div class="form-group mb-4">
                <label class="ms-2" for="arrival_s">Arrival Station</label>
                <select name="arrival_s" class="form-select" aria-label="Default select example" id="arrival_s">
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
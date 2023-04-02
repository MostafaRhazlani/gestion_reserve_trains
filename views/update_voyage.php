<?php

if(isset($_POST['id'])) {
  $getVoyage = new voyageController();
  $voyage = $getVoyage->getById();
}

$getNameTrains = new trainController();
$trains = $getNameTrains->getAll();

if(isset($_POST['submit'])) {
  $editVoyage = new voyageController();
  $editVoyage->update();
}
?>


<div class="container">
  <div class="row my-5">
    <div class="col-md-6 mx-auto">
    <?php include('./views/includes/alerts.php'); ?>
      <div class="card">
        <div class="card-header bg-danger text-light ">Modifier un voyage</div>
        <div class="card-body bg-light">
          <a href="<?php echo BASE_URL; ?>?page=voyage" class="btn btn-sm btn-warning ms-2 mb-2">
            <i class="fas fa-home"></i>
          </a>
            <form action="" method="post">
              <div class="input-group mb-3">
                <!-- <label class="input-group-text" for="inputGroupSelect01">Options</label> -->
                <select name="id_train" class="form-select" id="inputGroupSelect01">
                  <?php foreach ($trains as $train) :?>
                      <option value="<?php echo $train->id_train ?>" <?php if($voyage->id_train == $train->id_train) echo "selected" ?> >
                        <?php echo $train->name_train; ?>
                      </option>
                  <?php endforeach; ?>
                </select>
                <input type="hidden" name="id_voyage" value="<?php echo $voyage->id_voyage;?>">
              </div>

              <div class="form-group mb-4">
                <label class="ms-2" for="departure_s">Departure Station</label>
                <input type="text" name="departure_s" value="<?php echo $voyage->departure_s ?>" class="form-control" placeholder="Departure station" id="departure_s">
              </div>

              <div class="form-group mb-4">
                <label class="ms-2" for="arrival_s">Arrival Station</label>
                <input type="text" name="arrival_s" value="<?php echo $voyage->arrival_s ?>" class="form-control" placeholder="Arrival station" id="arrival_s">
              </div>

              <div class="form-group mb-4">
                <label class="ms-2" for="date_d">Date departure</label>
                <input type="datetime-local" name="date_departure" value="<?php echo $voyage->date_departure ?>" class="form-control" id="date_d">
              </div>

              <div class="form-group mb-4">
                <label class="ms-2" for="date_a">Date arrival</label>
                <input type="datetime-local" name="date_arrival" value="<?php echo $voyage->date_arrival ?>" class="form-control" id="date_a">
              </div>

              <div class="form-group mb-4">
                <label class="ms-2" for="prix">Prix</label>
                <input type="number" name="prix" value="<?php echo $voyage->prix ?>" class="form-control" placeholder="Prix" id="prix">
              </div>

              <div class="form-group mb-2">
                <button type="submit" class="btn btn-danger" name="submit">Valider</button>
              </div>
            </form>
        </div>
      </div>
    </div>
  </div>
</div>
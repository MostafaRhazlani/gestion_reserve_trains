<?php

// if(isset($_POST['id_train'])) {
//   $getTrain = new trainController();
//   $trains = $getTrain->getByIdTrain();
// }

// if(isset($_POST['submit'])) {
//   $updateTrain = new trainController();
//   $updateTrain->update();
// }
?>


<div class="container">
  <div class="row my-5">
    <div class="col-md-6 mx-auto">
    <?php include('./views/includes/alerts.php'); ?>
      <div class="card">
        <div class="card-header bg-danger text-light ">Edition a train</div>
        <div class="card-body bg-light">
            <form action="<?php echo BASE_URL; ?>train/update" method="post" enctype="multipart/form-data">

                <div class="form-group mb-4">
                    <label class="ms-2" for="name_train">Train</label>
                    <input type="text" name="name_train" value="<?php echo $trains->name_train ?>" class="form-control" placeholder="Name train" id="name_train">
                  <input type="hidden" name="id_train" value="<?php echo $trains->id_train;?>">
                </div>

                <div class="form-group mb-4">
                    <label class="ms-2" for="capacity">capacity</label>
                    <input type="number" name="capacity" value="<?php echo $trains->capacity ?>" class="form-control" placeholder="Arrival station" id="capacity">
                </div>

                <div class="form-group mb-4">
                    <label class="ms-2" for="photo">Photo</label>
                    <input type="file" name="photo" data-default-file="<?php echo BASE_URL ."public/images/". $trains->photo ?>" class="dropify" id="photo">
                </div>

                <div class="form-group mb-2 d-flex justify-content-end">
                    <button type="submit" class="btn btn-danger" name="submit">Valider</button>
                    <a href="<?php echo BASE_URL; ?>/train/index" class="btn btn btn-secondary ms-2 px-4">
                    Close
                    </a>
                </div>
            </form>
        </div>
      </div>
    </div>
  </div>
</div>
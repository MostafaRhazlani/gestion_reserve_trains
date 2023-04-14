<div class="container">
  <div class="row my-5">
    <div class="col-md-6 mx-auto">
    <?php include('./views/includes/alerts.php'); ?>
      <div class="card">
        <div class="card-header bg-danger text-light ">Addition a voyage</div>
        <div class="card-body bg-light">
            <form action="<?php echo BASE_URL; ?>train/store" method="post">

              <div class="form-group mb-4">
                <label class="ms-2" for="departure_s">Name train</label>
                <input type="text" class="form-control" name="name_train" placeholder="Enter name train">
              </div>

              <div class="form-group mb-4">
                <label class="ms-2" for="departure_s">Capacity</label>
                <input type="number" class="form-control" name="capacity" placeholder="Enter name train">
              </div>

              <div class="form-group mb-4">
                    <label class="ms-2" for="photo">Photo</label>
                    <input type="file" class="dropify" name="photo" id="photo">
              </div>

              <div class="form-group mb-2 float-end">
                <button type="submit" class="btn btn-danger px-4" name="submit">Valider</button>
                <a href="<?php echo BASE_URL; ?>/train/index" class="btn btn btn-secondary px-4">
                  Close
                </a>
              </div>
            </form>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
    $trainController = new trianController();
    $trains = $trainController->getAll();
?>

<section class="py-5">
    <div class="container">
        <div class="col-12 col-md-10 mx-auto">
            <?php include('./views/includes/alerts.php'); ?>
            <div class="card">
                <div class="card-header bg-danger text-light">Companies</div>
                <div class="card-body bg-light">
                <a href="<?php echo BASE_URL; ?>?page=add_cpmpanies" class="btn btn-sm btn-danger ms-2 mb-2 py-2 px-3">
                    Add New Voyage
                </a>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Train</th>
                                <th>Photo</th>
                                <th>Capacity</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (count($trains) > 0) {?>
                                <?php foreach ($trains as $train) :?>
                                    <tr>
                                        <td><?php echo $train->name_train; ?></td>
                                        <td> 
                                            <img  src="<?php echo BASE_URL ."images/". $train->photo ?>"
                                            width="50px" height="30px" class="rounded-pill">
                                        </td>
                                        <td><?php echo $train->capacity; ?></td>

                                        <td class="d-flex flex-tr">
                                            <form action="<?php echo BASE_URL; ?>?page=update_train" method="post" class="mr-1">
                                                <input type="hidden" name="id" value="">
                                                <button class="btn btn-sm btn-danger">
                                                    <i class="fa fa-edit"></i>
                                                </button>
                                            </form>
                                            <form action="<?php echo BASE_URL; ?>?page=delete_train" method="post" class="mr-1" onclick="return confirm('واش باغي تمحي هاذ الخرا ولا لا')">
                                                <input type="hidden" name="id" value="" >
                                                &nbsp;
                                                <button class="btn btn-sm btn-warning">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach ?>
                            <?php }else{ ?>
                                <tr>
                                    <th colspan="8" class="text-center py-5">No data</th>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

    
    
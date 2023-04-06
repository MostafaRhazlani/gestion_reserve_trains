<?php
    $trainController = new trainController();
    $trains = $trainController->getAll();

?>

<section class="py-5">
    <div class="container">
        <div class="col-10 col-md-8 mx-auto">
            <?php include('./views/includes/alerts.php'); ?>
            <div class="card">
                <div class="card-header bg-danger text-light">Companies</div>
                <div class="card-body bg-light">
                <a href="<?php echo BASE_URL; ?>?page=add_train" class="btn btn-sm btn-danger ms-2 mb-2 py-2 px-3">
                    Add New Voyage
                </a>
                    <table class="table align-middle mb-0 bg-white">
                        <thead>
                            <tr>
                                <th>Photo</th>
                                <th>Train</th>
                                <th>Capacity</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (count($trains) > 0) {?>
                                <?php foreach ($trains as $train) :?>
                                    <tr>
                                        <td> 
                                            <img
                                                src="<?php echo BASE_URL ."public/images/". $train->photo ?>"
                                                alt=""
                                                style="width: 45px; height: 45px"
                                                class="rounded-circle"
                                            />
                                        </td>
                                        <td><?php echo $train->name_train; ?></td>
                                        <td><?php echo $train->capacity; ?></td>

                                        <td>
                                            <div class="d-flex justify-content-center">
                                                <form action="<?php echo BASE_URL; ?>?page=update_train" method="post" class="mr-1">
                                                    <input type="hidden" name="id_train" value="<?php echo $train->id_train;?>">
                                                    <button type="submit" class="btn btn-link btn-sm btn-rounded">
                                                        Edit
                                                    </button>
                                                </form>
                                                <form action="<?php echo BASE_URL; ?>?page=delete_voyage" method="post" class="mr-1" onclick="return confirm('واش باغي تمحي هاذ الخرا ولا لا')">
                                                    <input type="hidden" name="id" value="<?php echo $train->id_train;?>"/>
                                                    <button type="submit" class="btn btn-link btn-sm btn-rounded">
                                                        Delete
                                                    </button>
                                                </form>
                                            </div>
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

    
    
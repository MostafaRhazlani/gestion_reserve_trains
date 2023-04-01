<?php
    $voyageController = new voyageController();
    $voyages = $voyageController->getAll();
?>

<section class="py-5">
    <div class="container">
        <div class="col-12 col-md-10 mx-auto">
            <?php include('./views/includes/alerts.php'); ?>
            <div class="card">
                <div class="card-header bg-danger text-light">Gestion reserve trains</div>
                <div class="card-body bg-light">
                <a href="<?php echo BASE_URL; ?>?page=add_voyage" class="btn btn-sm btn-danger ms-2 mb-2 py-2 px-3">
                    Add New Voyage
                </a>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Train</th>
                                <th>Departure station</th>
                                <th>Arrival station</th>
                                <th>Date departure</th>
                                <th>Date arrival</th>
                                <th>Prix</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (count($voyages) > 0) {?>
                                <?php foreach ($voyages as $voyage) :?>
                                    <tr>
                                        <td><?php echo $voyage['name_train']; ?></td>
                                        <td><?php echo $voyage['departure_s']; ?></td>
                                        <td><?php echo $voyage['arrival_s']; ?></td>
                                        <td><?php echo $voyage['date_departure']; ?></td>
                                        <td><?php echo $voyage['date_arrival']; ?></td>
                                        <td><?php echo $voyage['prix']; ?></td>

                                        <td class="d-flex flex-tr">
                                            <form action="<?php echo BASE_URL; ?>?page=update_voyage" method="post" class="mr-1">
                                                <input type="hidden" name="id" value="<?php echo $voyage['id_voyage'];?>">
                                                <button class="btn btn-sm btn-danger">
                                                    <i class="fa fa-edit"></i>
                                                </button>
                                            </form>
                                            <form action="<?php echo BASE_URL; ?>?page=delete_voyage" method="post" class="mr-1" onclick="return confirm('واش باغي تمحي هاذ الخرا ولا لا')">
                                                <input type="hidden" name="id" value="<?php echo $voyage['id_voyage'];?>">
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

    
    
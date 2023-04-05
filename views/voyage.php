<?php
    $voyageController = new voyageController();
    $voyages = $voyageController->getAll();
?>

<section class="py-5">
    <div class="container">
        <div class="col-12 col-md-12 mx-auto">
            <?php include('./views/includes/alerts.php'); ?>
            <div class="card">
                <div class="card-header bg-danger text-light">Gestion reserve trains</div>
                <div class="card-body bg-light">
                <a href="<?php echo BASE_URL; ?>?page=add_voyage" class="btn btn-sm btn-danger ms-2 mb-2 py-2 px-3">
                    Add New Voyage
                </a>
                    <table class="table align-middle mb-0 bg-white">
                        <thead class="bg-light">
                            <tr>
                            <th>Train</th>
                            <th>Departure Station</th>
                            <th>Arrival Station</th>
                            <th>Date Departure</th>
                            <th>Date Arrival</th>
                            <th>Capacity</th>
                            <th>Prix</th>
                            <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (count($voyages) > 0) {?>
                                <?php foreach ($voyages as $voyage) :?>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img
                                                    src="<?php echo BASE_URL ."public/images/". $voyage['photo'] ?>"
                                                    alt=""
                                                    style="width: 45px; height: 45px"
                                                    class="rounded-circle"
                                                    />
                                                <div class="ms-3">
                                                    <p class="fw-bold mb-1"><?php echo $voyage['name_train']; ?></p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="fw-normal mb-1"><?php echo $voyage['departure_s']; ?></p>
                                        </td>
                                        <td>
                                        <p class="fw-normal mb-1"><?php echo $voyage['arrival_s']; ?></p>
                                        </td>
                                        <td>
                                        <p class="fw-normal mb-1"><?php echo $voyage['date_departure']; ?></p>
                                        </td>
                                        <td>
                                        <p class="fw-normal mb-1"><?php echo $voyage['date_arrival']; ?></p>
                                        </td>
                                        <td>
                                        <p class="fw-normal mb-1"><?php echo $voyage['capacity']; ?></p>
                                        </td>
                                        <td>
                                        <p class="fw-normal mb-1"><?php echo $voyage['prix']; ?></p>
                                        </td>
                                        <td>
                                            <div class="d-flex justify-content-center">
                                                <form action="<?php echo BASE_URL; ?>?page=update_voyage" method="post" class="mr-1">
                                                    <input type="hidden" name="id" value="<?php echo $voyage['id_voyage'];?>">
                                                    <button type="submit" class="btn btn-link btn-sm btn-rounded">
                                                        Edit
                                                    </button>
                                                </form>
                                                <form action="<?php echo BASE_URL; ?>?page=delete_voyage" method="post" class="mr-1" onclick="return confirm('واش باغي تمحي هاذ الخرا ولا لا')">
                                                    <input type="hidden" name="id" value="<?php echo $voyage['id_voyage'];?>">
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

    
    
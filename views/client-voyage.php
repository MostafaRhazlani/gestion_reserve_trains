<?php
    $voyageController = new voyageController();
    $voyages = $voyageController->getAll();
        
    function timeDeff($endtimestamp, $starttimestamp) {
        $origin = date_create($endtimestamp);
        $target = date_create($starttimestamp);
            $interval = date_diff($origin, $target);
            echo $interval->format('%H : %i');
    }
?>

<div class="container mt-5">
    <div class="col-12 d-flex">
        <!-- search -->
        <div class="col-3">
            <div class="card h-100vh">
                <div class="card-body">
                    <h4 class="card-title">Search</h4>
                    <form action="">
                        <div class="mb-4">
                            <input type="text" id="typeText" placeholder="Departure station" class="form-control form-control-lg" />
                        </div>
                        <div class="mb-4">
                            <input type="text" id="formControlLg" placeholder="Arrival Station" class="form-control form-control-lg" />
                        </div>
                        <div class="mb-4">
                            <input type="date" id="formControlLg" class="form-control form-control-lg" />
                        </div>
                        <button type="button" class="btn btn-danger w-100">Search</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- end search -->
        <!-- card -->
        <div class="col-8">
            <?php if (count($voyages) > 0) {?>
                <?php foreach ($voyages as $voyage) :?>
                    <div class="col-12 ms-5 mb-4">
                        <div class="card color">
                            <div class="card-body">
                                <div class="col-12 d-flex">
                                    <div class="col-9">
                                        <div class="d-flex">
                                            <div class="d-flex">
                                                <img src="<?php echo BASE_URL ."public/images/". $voyage['photo'] ?>" alt="" class="rounded-4 voyage-img" width="150" height="140">
                                            </div>
                                            <div class="w-100">
                                                <div class="d-flex">
                                                    <h3 class="ms-2 text-primary"><?php echo $voyage['name_train']; ?></h3>
                                                    <div class="mx-auto text-center">
                                                        <h5>Capacity</h5>
                                                        <span>13 / <?php echo $voyage['capacity']; ?></span>
                                                    </div>
                                                </div>
                                                <div class=" mx-auto">
                                                    <div class="col-10 mx-auto d-flex mt-4">
                                                        <div class="col-4 text-center" >
                                                            <p class="m-0">Departure</p>
                                                            <span class="fs-5"><?php echo date('H : i', strtotime($voyage['date_departure'])); ?></span>
                                                            <p class="m-0"><?php echo $voyage['departure_s']; ?></p>
                                                        </div>
                                                        <div class="col-4 position mb-4">
                                                            <p class="m-0"><?php echo timeDeff($voyage['date_departure'],$voyage['date_arrival']) ?></p>
                                                            <div class="circle circle-left"></div>
                                                            <div class="line"></div>
                                                            <div class="circle circle-right"></div>
                                                        </div>
                                                        <div class="col-4 text-center">
                                                            <p class="m-0">Departure</p>
                                                            <span class="fs-5"><?php echo date('H : i', strtotime($voyage['date_arrival']));  ?></span>
                                                            <p class="m-0"><?php echo  $voyage['arrival_s']; ?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="row-line"></div>
                                    </div>
                                    <div class="col-3 text-center p-3">
                                        <h1 class="mb-4"><?php echo $voyage['prix']; ?> <span class="fs-5">MAD</span></h1>
                                        <button type="button" class="btn btn-danger w-100">Reserve</button>
                                    </div>
                                </div>
                                <div class="col-12 mt-4">
                                    <div class="border p-2 rounded-pill">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <p class="m-0 ms-2 fs-5 fw-light">if you want to reserve for your friends too</p>
                                            <button class="btn btn-danger rounded-pill">Reserve for your friends</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            <?php }else{ ?>
                <tr>
                    <th colspan="8" class="text-center py-5">No data</th>
                </tr>
            <?php } ?>
        </div>
        <!-- end card -->
    </div>
</div>
<div class="container mt-5">
    <div class="col-12 d-flex">
        <!-- search -->
        <div class="col-3">
            <div class="card h-100vh">
                <div class="card-body">
                    <h4 class="card-title">Search</h4>
                    <form action="<?php echo BASE_URL; ?>" method="post">
                        <input type="hidden" name="page" value="client-voyage" />
                        <div class="mb-4">
                            <input type="text" name="by_departure" id="typeText" placeholder="Departure station"
                                class="form-control form-control-lg" />
                        </div>
                        <div class="mb-4">
                            <input type="text" name="by_arrival" id="formControlLg" placeholder="Arrival Station"
                                class="form-control form-control-lg" />
                        </div>
                        <div class="mb-4">
                            <input type="date" name="by_date" id="formControlLg" class="form-control form-control-lg" />
                        </div>
                        <button type="submit" name="submit" class="btn btn-danger w-100">Search</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- end search -->
        <!-- card -->
        <div class="col-8">
            <div class="accordion" id="accordionExample">
                <?php if (count($voyages) > 0) {?>
                    <?php foreach ($voyages as $voyage) :?>
                        <div class="col-12 ms-5 mb-4">
                            <div class="card color">
                                <div class="card-body">
                                    <div class="col-12 d-flex">
                                        <div class="col-9">
                                            <div class="d-flex">
                                                <div class="d-flex">
                                                    <img src="<?php echo BASE_URL ."public/images/". $voyage['photo'] ?>" alt=""
                                                        class="rounded-4 voyage-img" width="150" height="140">
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
                                                            <div class="col-4 text-center">
                                                                <p class="m-0">Departure</p>
                                                                <span
                                                                    class="fs-5"><?php echo date('H : i', strtotime($voyage['date_departure'])); ?></span>
                                                                <p class="m-0"><?php echo $voyage['departure_s']; ?></p>
                                                            </div>
                                                            <div class="col-4 position mb-4">
                                                                <p class="m-0">
                                                                    <?php echo timeDeff($voyage['date_departure'],$voyage['date_arrival']) ?>
                                                                </p>
                                                                <div class="circle circle-left"></div>
                                                                <div class="line"></div>
                                                                <div class="circle circle-right"></div>
                                                            </div>
                                                            <div class="col-4 text-center">
                                                                <p class="m-0">Departure</p>
                                                                <span
                                                                    class="fs-5"><?php echo date('H : i', strtotime($voyage['date_arrival']));  ?></span>
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
                                            <button type="button" class="btn btn-danger w-100" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal">Reserve</button>
                                        </div>
                                    </div>
                                    <div class="col-12 mt-4">
                                        <div class="border p-2 rounded-pill">
                                            <div class="d-flex justify-content-end">
                                                
                                                <button class="btn btn-danger rounded-pill w-25" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                                                    aria-controls="collapseOne">
                                                    Show More
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <strong>This is the first item's accordion body.</strong> It is shown by default,
                                            until
                                            the collapse
                                            plugin adds the appropriate classes that we use to style each element. These classes
                                            control the
                                            overall appearance, as well as the showing and hiding via CSS transitions. You can
                                            modify any of
                                            this with custom CSS or overriding our default variables. It's also worth noting
                                            that
                                            just about any
                                            HTML can go within the <code>.accordion-body</code>, though the transition does
                                            limit
                                            overflow.
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
        </div>
        <!-- end card -->
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-header d-flex flex-column-reverse">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Reserve Your Voyage</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="col-11 mx-auto">
                        <div class="col-12">
                            <div class="mb-5">
                                <button class="btn btn-danger rounded-pill" type="button" 
                                        data-bs-toggle="collapse" 
                                        data-bs-target="#flush-collapseOne" 
                                        aria-expanded="false" 
                                        aria-controls="flush-collapseOne"
                                >
                                    Reserve for your friends
                                </button>

                                <!-- Accordion -->
                                <div id="flush-collapseOne" class="accordion-collapse collapse" 
                                    aria-labelledby="flush-headingOne" 
                                    data-bs-parent="#accordionFlushExample"
                                >
                                    <div class="accordion-body">
                                        <form action="">
                                            <div class="col-10 mx-auto mt-3 d-flex justify-content-between">
                                                <div class="col-5 ">
                                                    <div class="form-group">
                                                        <label for="">First Name</label>
                                                        <input type="text" class="form-control mb-3" placeholder="First Name">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Last Name</label>
                                                        <input type="text" class="form-control" placeholder="Last Name">
                                                    </div>
                                                </div>
                                                <div class="col-5">
                                                    <div class="form-group">
                                                        <label for="">CIN</label>
                                                        <input type="text" class="form-control mb-3" placeholder="Enter Your CIN">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Phone</label>
                                                        <input type="text" class="form-control" placeholder="Enter Your Phone">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="height: 300px; overflow: scroll;">
                            <table class="table table-striped table-hover">
                                <thead class="sticky-top bg-light">
                                    <tr>
                                        <th class="text-primary" scope="col">Full Name</th>
                                        <th class="text-primary" scope="col">CIN</th>
                                        <th class="text-primary" scope="col">Phone</th>
                                        <th class="text-primary text-center" scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">Mostafa Rhazlani</th>
                                        <td>HH2003</td>
                                        <td>0771537210</td>
                                        <td>
                                            <div class="d-flex justify-content-center">
                                                <form action="" method="post" class="mr-1"
                                                    onclick="return confirm('واش باغي تمحي هاذ الخرا ولا لا')">
                                                    <input type="hidden" name="id" value="">
                                                    <button type="submit"
                                                        class="btn btn-link btn-sm btn-rounded text-danger">
                                                        <i class="fa-solid fa-trash-can"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Othmane Rhazlani</th>
                                        <td>NN1998</td>
                                        <td>0771000811</td>
                                        <td>
                                            <div class="d-flex justify-content-center">
                                                <form action="" method="post" class="mr-1"
                                                    onclick="return confirm('واش باغي تمحي هاذ الخرا ولا لا')">
                                                    <input type="hidden" name="id" value="">
                                                    <button type="submit"
                                                        class="btn btn-link btn-sm btn-rounded text-danger">
                                                        <i class="fa-solid fa-trash-can"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Azdin Rhazlani</th>
                                        <td>AA2007</td>
                                        <td>0680026000</td>
                                        <td>
                                            <div class="d-flex justify-content-center">
                                                <form action="" method="post" class="mr-1"
                                                    onclick="return confirm('واش باغي تمحي هاذ الخرا ولا لا')">
                                                    <input type="hidden" name="id" value="">
                                                    <button type="submit"
                                                        class="btn btn-link btn-sm btn-rounded text-danger">
                                                        <i class="fa-solid fa-trash-can"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Azdin Rhazlani</th>
                                        <td>AA2007</td>
                                        <td>0680026000</td>
                                        <td>
                                            <div class="d-flex justify-content-center">
                                                <form action="" method="post" class="mr-1"
                                                    onclick="return confirm('واش باغي تمحي هاذ الخرا ولا لا')">
                                                    <input type="hidden" name="id" value="">
                                                    <button type="submit"
                                                        class="btn btn-link btn-sm btn-rounded text-danger">
                                                        <i class="fa-solid fa-trash-can"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Azdin Rhazlani</th>
                                        <td>AA2007</td>
                                        <td>0680026000</td>
                                        <td>
                                            <div class="d-flex justify-content-center">
                                                <form action="" method="post" class="mr-1"
                                                    onclick="return confirm('واش باغي تمحي هاذ الخرا ولا لا')">
                                                    <input type="hidden" name="id" value="">
                                                    <button type="submit"
                                                        class="btn btn-link btn-sm btn-rounded text-danger">
                                                        <i class="fa-solid fa-trash-can"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Azdin Rhazlani</th>
                                        <td>AA2007</td>
                                        <td>0680026000</td>
                                        <td>
                                            <div class="d-flex justify-content-center">
                                                <form action="" method="post" class="mr-1"
                                                    onclick="return confirm('واش باغي تمحي هاذ الخرا ولا لا')">
                                                    <input type="hidden" name="id" value="">
                                                    <button type="submit"
                                                        class="btn btn-link btn-sm btn-rounded text-danger">
                                                        <i class="fa-solid fa-trash-can"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-danger">Reserve Now</button>
                </div>
            </div>
        </div>
    </div>
</div>
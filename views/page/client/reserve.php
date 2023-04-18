<div class="container">
    <div class="col-11 mx-auto">
            
            <div class="col-7 mx-auto bg-light rounded">
                <div class="d-flex justify-content-between align-items-center">
                        <div class="p-4 d-flex">
                            <img src="<?php echo BASE_URL ."public/images/". $voyages->photo?>" alt=""
                                class="rounded-4 voyage-img" width="150" height="140">
                                <h3 class="ms-2 text-primary"><?php echo $voyages->name_train; ?></h3>
                        </div>
                        <div class="p-4">
                            <div class="text-center">
                                <h5>Capacity</h5>
                                <span>13 / <?php echo $voyages->capacity?></span>
                            </div>
                        </div>
                </div>
            </div>
            <div class="col-12 mt-3">
                <div class="mb-3">
                    <button class="btn btn-danger rounded" type="button" 
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
                            <form action="" onsubmit="event.preventDefault();onFormSubmit();" autocomplete="off">
                                <div class="col-8 mx-auto mt-3 d-flex justify-content-between">
                                    <div class="col-5">
                                        <div class="form-group">
                                            <label for="">First Name</label>
                                            <label for="" class="validation-error d-none" id="ValidationError">This field is required</label>
                                            <input type="text" name="firstName" id="firstName" class="form-control mb-3" placeholder="First Name">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Last Name</label>
                                            <input type="text" name="lastName" id="lastName" class="form-control" placeholder="Last Name">
                                        </div>
                                    </div>
                                    <div class="col-5">
                                        <div class="form-group">
                                            <label for="">CIN</label>
                                            <input type="text" name="cin" id="cin" class="form-control mb-3" placeholder="Enter Your CIN">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Phone</label>
                                            <input type="text" name="number" id="number" class="form-control" placeholder="Enter Your Phone">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-8 mx-auto mt-3">
                                    <div class=" d-flex justify-content-center">
                                        <input type="submit" value="Add" class="btn btn-primary w-25" name="submit"></input>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <form  action="<?php echo BASE_URL; ?>reserve/storePassages" method="post">
                <div class="list">
                    <table id="employeeList" class="table table-striped table-hover">
                        <thead class="sticky-top bg-light">
                            <tr>
                                <th class="text-primary" scope="col">Full Name</th>
                                <th class="text-primary" scope="col">CIN</th>
                                <th class="text-primary" scope="col">Phone</th>
                                <th class="text-primary text-center" scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <input type="hidden" name="iduser" value="<?= $_SESSION['user']->iduser?>">
                            <input type="hidden" name="id_voyage" value="<?php echo $voyages->id_voyage?>">
                            <tr>
                                <th scope="row">
                                    <input type="text" name="fullname_passage[]" value="<?= $_SESSION['user']->fullname?>">
                                </th>
                                <td>
                                    <input type="text" name="CIN[]" value="<?= $_SESSION['user']->CIN?>">
                                </td>
                                <td>
                                    <input type="text" name="phone[]" value="<?= $_SESSION['user']->phone ?>">
                                </td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                    <input type="submit" name="submit" value="Reserve Now" class="btn btn-danger">
                </div>
            </form>
            <div class="float-end mt-5">
            </div>
    </div>
</div>
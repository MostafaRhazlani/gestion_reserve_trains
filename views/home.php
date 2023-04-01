<section class="bg-danger py-5">
    <div class="col-md-8 mx-auto my-5">
        <form action="<?php echo BASE_URL; ?>?page=voyage" method="post" class="row bg-light rounded-4 p-4">
            <div class="col-9">
                <div class="row">
                    <div class="col-6 mb-3">
                        <label class="ms-2 mb-2" for="d_station">My departure station</label>
                        <input type="text" class="form-control rounded-pill p-2 px-5 ps-4" name="search" placeholder="Departure Station" aria-label="First name">
                        
                    </div>
                    <div class="col-6 mb-3">
                        <label class="ms-2 mb-2" for="d_station">My departure date</label>
                        <input type="date" class="form-control rounded-pill p-2 ps-4 flatpickr" aria-label="Last name">
                    </div>
                    <div class="col-6">
                        <label class="ms-2 mb-2" for="d_station">My arrival station</label>
                        <input type="text" class="form-control rounded-pill p-2 px-5 ps-4" placeholder="Arrival Station" aria-label="First name">
                        
                    </div>
                    <div class="col-6">
                        <label class="ms-2 mb-2" for="passage">Number of passengers</label>
                        <input type="number" class="form-control rounded-pill p-2 ps-4" placeholder="Passengers" aria-label="Last name">
                    </div>
                </div>
            </div>
            <div class="col-3 mt-4 ">
                <button type="submit" class="btn btn-outline-danger rounded-4 w-100 h-100">
                    <i class="fa-solid fa-magnifying-glass fs-1"></i>
                </button>
            </div>
        </form>
    </div>
</section>
    
    
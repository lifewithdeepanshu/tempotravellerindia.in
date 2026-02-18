<div class="modal fade" id="bookingModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content booking-modal">

                <!-- Header -->
                <div class="modal-header border-0">
                    <h5 class="modal-title">
                        <i class="bi bi-bus-front"></i> Book Your Tempo Traveller
                    </h5>
                    <button type="button" class="btn-close shadow-none" data-bs-dismiss="modal"></button>
                </div>

                <!-- Body -->
                <div class="modal-body">

                    <form id="bookingForm">

                        <div class="row g-3">

                            <input type="text" name="company" style="display:none">
                            <input type="hidden" name="page_url" value="">
                            <input type="hidden" name="csrf_token" id="csrf_token">


                            <!-- Name -->
                            <div class="col-md-6">
                                <label class="form-label">Full Name</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-person"></i></span>
                                    <input type="text" name="name" class="form-control" placeholder="Enter your name"
                                        required>
                                </div>
                            </div>

                            <!-- Phone -->
                            <div class="col-md-6">
                                <label class="form-label">Phone Number</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-telephone"></i></span>
                                    <input type="tel" name="phone" class="form-control" placeholder="Enter phone number"
                                        required>
                                </div>
                            </div>

                            <!-- From -->
                            <div class="col-md-6">
                                <label class="form-label">From (Pickup Location)</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-geo-alt"></i></span>
                                    <input type="text" name="pickup" class="form-control" placeholder="Pickup location">
                                </div>
                            </div>

                            <!-- To -->
                            <div class="col-md-6">
                                <label class="form-label">To (Destination)</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-flag"></i></span>
                                    <input type="text" name="destination" class="form-control"
                                        placeholder="Destination">
                                </div>
                            </div>

                            <!-- Start Date -->
                            <div class="col-md-6">
                                <label class="form-label">Start Travel Date</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-calendar-event"></i></span>
                                    <input type="date" name="start_date" class="form-control">
                                </div>
                            </div>

                            <!-- End Date -->
                            <div class="col-md-6">
                                <label class="form-label">End Travel Date</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-calendar-check"></i></span>
                                    <input type="date" name="end_date" class="form-control">
                                </div>
                            </div>

                            <!-- Passengers -->
                            <div class="col-md-12">
                                <label class="form-label">Number of Passengers</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-people"></i></span>
                                    <input type="number" name="passengers" class="form-control" placeholder="e.g. 12">
                                </div>
                            </div>

                        </div>

                        <!-- Submit -->
                        <div class="mt-4 text-center">
                            <button type="submit" class="btn btn-form px-5">
                                <i class="bi bi-send"></i> Submit Enquiry
                            </button>
                        </div>

                    </form>

                </div>

            </div>
        </div>
    </div>
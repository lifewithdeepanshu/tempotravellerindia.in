<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Tempo Traveller India</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/pages/main-seater.css">
</head>

<body>
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

    <?php include 'assets/php/navbar.php'; ?>

    <section class="seater-hero">
        <div class="hero-overlay"></div>

        <div class="container">
            <div class="hero-content">
                <span class="hero-badge">🚐 Trusted Tempo Traveller Service</span>

                <h1>
                    12 <span>Tempo Traveller on Rent</span>
                </h1>

                <p>
                    Luxury & AC Tempo Traveller for Family Trips, Corporate Tours,
                    Wedding Guests & Outstation Travel with Professional Drivers.
                </p>

                <div class="hero-btns">
                    <a href="tel:9999029051" class="btn-call">
                        <i class="bi bi-telephone-fill"></i> Call Now
                    </a>
                    <a href="https://wa.me/919999029051" class="btn-whatsapp">
                        <i class="bi bi-whatsapp"></i> WhatsApp
                    </a>
                </div>

                <div class="hero-highlights">
                    <div>❄️ Fully AC</div>
                    <div>💺 Pushback Seats</div>
                    <div>🎵 Music System</div>
                    <div>👨‍✈️ Expert Driver</div>
                </div>
            </div>
        </div>
    </section>

    <section class="simple-content">
        <div class="container">

            <h2>9, 12, 16, 20 & 26 Seater Tempo Traveller on Rent</h2>

            <p>
                We provide comfortable and affordable Tempo Traveller on rent for
                family trips, corporate tours, wedding transportation, school trips
                and outstation travel. Our fleet includes 9 seater, 12 seater,
                16 seater, 20 seater and 26 seater Tempo Travellers across
                Delhi, Noida, Ghaziabad, Gurgaon and Faridabad.
            </p>

            <h3>Available Seating Options</h3>
            <ul>
                <li><a href="/9-seater-tempo-traveller.html">9 Seater</a> – Ideal for small family groups</li>
                <li><a href="/12-seater-tempo-traveller.html">12 Seater</a> – Perfect for corporate or medium groups
                </li>
                <li><a href="/16-seater-tempo-traveller.html">16 Seater</a> – Most popular for outstation tours</li>
                <li><a href="/20-seater-tempo-traveller.html">20 Seater</a> – Suitable for wedding guests</li>
                <li><a href="/26-seater-tempo-traveller.html">26 Seater</a> – Best for large group travel</li>
            </ul>

            <h3>Features & Amenities</h3>
            <ul>
                <li>Fully Air Conditioned</li>
                <li>Pushback Seats</li>
                <li>Music System</li>
                <li>Charging Points</li>
                <li>Spacious Luggage Space</li>
                <li>Experienced Driver</li>
            </ul>

            <h3>Tempo Traveller Rental Charges</h3>

            <!-- Scrollable Table Wrapper -->
            <div class="table-responsive">
                <table class="pricing-table">
                    <thead>
                        <tr>
                            <th>Seating</th>
                            <th>Starting Price (Per KM)</th>
                            <th>Minimum KM / Day</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>9 Seater</td>
                            <td>₹18 / KM</td>
                            <td>250 KM</td>
                        </tr>
                        <tr>
                            <td>12 Seater</td>
                            <td>₹20 / KM</td>
                            <td>250 KM</td>
                        </tr>
                        <tr>
                            <td>16 Seater</td>
                            <td>₹22 / KM</td>
                            <td>250 KM</td>
                        </tr>
                        <tr>
                            <td>20 Seater</td>
                            <td>₹25 / KM</td>
                            <td>250 KM</td>
                        </tr>
                        <tr>
                            <td>26 Seater</td>
                            <td>₹28 / KM</td>
                            <td>250 KM</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <p class="note">
                * Toll tax, parking and state taxes are extra. Prices may vary depending on season and route.
            </p>

        </div>
    </section>

    <section class="usp-section py-5">
        <div class="container">

            <!-- Heading -->
            <div class="row align-items-center mb-5">
                <div class="col-lg-6">
                    <span class="badge bg-success-subtle text-success px-4 py-2 rounded-pill">
                        <i class="bi bi-patch-check-fill"></i> Why Choose Us
                    </span>
                    <h2 class="fw-bold mt-3">
                        Trusted Tempo Traveller Service<br>
                        Across Delhi NCR
                    </h2>
                    <p class="text-muted mt-3">
                        We don’t just provide vehicles, we deliver comfort,
                        safety and peace of mind for every journey.
                    </p>
                </div>

                <div class="col-lg-6 text-lg-end mt-4 mt-lg-0">
                    <a href="#bookingModal" data-bs-toggle="modal" class="btn btn-premium">
                        <i class="bi bi-bus-front-fill"></i> Book Your Ride Now
                    </a>
                </div>
            </div>

            <!-- USP Cards -->
            <div class="row g-4">

                <div class="col-lg-4 col-md-6">
                    <div class="usp-card h-100">
                        <div class="usp-icon">
                            <i class="bi bi-shield-check"></i>
                        </div>
                        <h5>Safe & Sanitized Vehicles</h5>
                        <p>
                            Regularly sanitized, well-maintained vehicles
                            for a worry-free and hygienic travel experience.
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="usp-card h-100">
                        <div class="usp-icon">
                            <i class="bi bi-person-badge-fill"></i>
                        </div>
                        <h5>Experienced Drivers</h5>
                        <p>
                            Verified, professional and polite drivers
                            with excellent route knowledge.
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="usp-card h-100">
                        <div class="usp-icon">
                            <i class="bi bi-cash-stack"></i>
                        </div>
                        <h5>Transparent Pricing</h5>
                        <p>
                            No hidden charges. What you see is what you pay —
                            fair and competitive pricing.
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="usp-card h-100">
                        <div class="usp-icon">
                            <i class="bi bi-clock-history"></i>
                        </div>
                        <h5>24/7 Availability</h5>
                        <p>
                            Book anytime, anywhere. We are always ready
                            to serve your travel needs.
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="usp-card h-100">
                        <div class="usp-icon">
                            <i class="bi bi-geo-alt-fill"></i>
                        </div>
                        <h5>All India Permit</h5>
                        <p>
                            Travel freely across states with our fully
                            permitted tempo travellers.
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="usp-card h-100">
                        <div class="usp-icon">
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <h5>1000+ Happy Customers</h5>
                        <p>
                            Trusted by families, corporates, and travel
                            partners across NCR.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="our-fleet py-5">
        <div class="container">

            <!-- Heading -->
            <div class="text-center mb-5">
                <span class="section-badge">
                    <i class="bi bi-truck-front-fill"></i> Our Fleet
                </span>
                <h2 class="section-title mt-3">
                    Well-Maintained Vehicles for <span>Every Group Size</span>
                </h2>
                <p class="section-subtitle mt-3">
                    Choose from our modern and well-equipped Tempo Travellers designed
                    for comfort, safety, and long journeys.
                </p>
            </div>

            <!-- Fleet Cards -->
            <div class="row g-4">

                <!-- 9 Seater -->
                <div class="col-lg-4 col-md-6">
                    <div class="fleet-card">
                        <div class="fleet-img">
                            <img src="image.jpg" alt="9 Seater Tempo Traveller">
                            <span class="fleet-badge">Most Popular</span>
                        </div>
                        <div class="fleet-body">
                            <h5>9 Seater Tempo Traveller</h5>
                            <ul>
                                <li><i class="bi bi-people-fill"></i> Ideal for small groups</li>
                                <li><i class="bi bi-snow"></i> Fully Air-Conditioned</li>
                                <li><i class="bi bi-shield-check"></i> Safety Checked</li>
                            </ul>
                            <a href="/contact" class="fleet-btn">Book Now</a>
                        </div>
                    </div>
                </div>

                <!-- 12 Seater -->
                <div class="col-lg-4 col-md-6">
                    <div class="fleet-card">
                        <div class="fleet-img">
                            <img src="image.jpg" alt="12 Seater Tempo Traveller">
                        </div>
                        <div class="fleet-body">
                            <h5>12 Seater Tempo Traveller</h5>
                            <ul>
                                <li><i class="bi bi-people-fill"></i> Perfect for family trips</li>
                                <li><i class="bi bi-tv"></i> Music & Entertainment</li>
                                <li><i class="bi bi-snow"></i> AC & Pushback Seats</li>
                            </ul>
                            <a href="/contact" class="fleet-btn">Book Now</a>
                        </div>
                    </div>
                </div>

                <!-- 15/17 Seater -->
                <div class="col-lg-4 col-md-6">
                    <div class="fleet-card">
                        <div class="fleet-img">
                            <img src="image.jpg" alt="17 Seater Tempo Traveller">
                            <span class="fleet-badge luxury">Luxury</span>
                        </div>
                        <div class="fleet-body">
                            <h5>15 / 17 Seater Tempo Traveller</h5>
                            <ul>
                                <li><i class="bi bi-people-fill"></i> Large group comfort</li>
                                <li><i class="bi bi-stars"></i> Maharaja Seating</li>
                                <li><i class="bi bi-usb-plug"></i> Charging Points</li>
                            </ul>
                            <a href="/contact" class="fleet-btn">Book Now</a>
                        </div>
                    </div>
                </div>

            </div>

            <!-- CTA -->
            <div class="text-center mt-5">
                <a href="/fleet" class="btn explore-btn">
                    View Full Fleet
                    <i class="bi bi-arrow-right"></i>
                </a>
            </div>

        </div>
    </section>

    <section class="faq-section py-5">
        <div class="container">

            <!-- Heading -->
            <div class="text-center mb-5">
                <span class="badge bg-info-subtle text-info px-4 py-2 rounded-pill">
                    <i class="bi bi-question-circle-fill"></i> FAQs
                </span>
                <h2 class="fw-bold mt-3">Frequently Asked Questions</h2>
                <p class="text-muted mt-2">
                    Everything you need to know before booking a tempo traveller
                </p>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-9">

                    <div class="accordion faq-accordion" id="faqAccordion">

                        <!-- FAQ 1 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                    How can I book a tempo traveller?
                                </button>
                            </h2>
                            <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    You can fill out our enquiry form or contact us directly via
                                    call or WhatsApp. Share your travel details and our team
                                    will send you the best quotation.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 2 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#faq2">
                                    How much advance payment is required to confirm the booking?
                                </button>
                            </h2>
                            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Usually 20%–30% advance payment is required to confirm the booking.
                                    The remaining amount can be paid before or during the trip,
                                    as discussed at the time of booking.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 3 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#faq3">
                                    Are there any hidden charges?
                                </button>
                            </h2>
                            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    No, there are no hidden charges. Our quotation clearly mentions
                                    vehicle charges, driver allowance, tolls, parking, and taxes (if applicable).
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 4 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#faq4">
                                    What is included in the tempo traveller rental cost?
                                </button>
                            </h2>
                            <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    The cost includes the vehicle, driver, fuel, and standard route charges.
                                    Toll, parking, state tax, and driver night allowance (if any)
                                    are communicated clearly before booking.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 5 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#faq5">
                                    Can I cancel or reschedule my booking?
                                </button>
                            </h2>
                            <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Yes, bookings can be cancelled or rescheduled. Cancellation
                                    charges depend on how close the cancellation is to the travel date.
                                    Please contact us for exact details.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 6 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#faq6">
                                    What seating options are available?
                                </button>
                            </h2>
                            <div id="faq6" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    We offer 9, 12, 15, 17, and 20-seater tempo travellers
                                    with options like pushback seats, Maharaja seating,
                                    and luxury interiors.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 7 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#faq7">
                                    Are your drivers experienced and verified?
                                </button>
                            </h2>
                            <div id="faq7" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Yes, all our drivers are experienced, verified,
                                    and well-trained for long-distance and group travel.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 8 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#faq8">
                                    Do tempo travellers have AC and luggage space?
                                </button>
                            </h2>
                            <div id="faq8" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Yes, all tempo travellers are fully air-conditioned
                                    and come with sufficient luggage space for group travel.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 9 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#faq9">
                                    Can we go outstation or travel across states?
                                </button>
                            </h2>
                            <div id="faq9" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Yes, our tempo travellers have all-India permits
                                    and are suitable for outstation and interstate travel.
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 10 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#faq10">
                                    What if the trip duration exceeds the agreed time?
                                </button>
                            </h2>
                            <div id="faq10" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    Extra hours or kilometers, if any, are charged as per
                                    the agreed rate shared at the time of booking.
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- CTA -->
                    <div class="text-center mt-5">
                        <p class="mb-3 text-muted">
                            Still have questions? We’re just a call or WhatsApp away.
                        </p>
                        <a href="tel:9999029051" class="btn btn-outline-primary rounded-pill me-2 hero-btn">
                            <i class="bi bi-telephone-fill"></i> Call Now
                        </a>
                        <a href="https://wa.me/919999029051" target="_blank"
                            class="btn btn-success rounded-pill shadow hero-btn">
                            <i class="bi bi-whatsapp"></i> WhatsApp Us
                        </a>
                    </div>

                </div>
            </div>

        </div>
    </section>

    <section class="service-areas">
        <div class="container">
            <div class="section-heading text-center">
                <span class="sub-title">🌍 We Serve Across NCR</span>
                <h2>Tempo Traveller Service Areas</h2>
                <p>We provide 9, 12, 16, 20 & 26 Seater Tempo Traveller on Rent across major NCR cities.</p>
            </div>

            <div class="areas-grid">

                <a href="/tempo-traveller-in-delhi" class="area-card">
                    <h3>Delhi</h3>
                    <p>Luxury & AC Tempo Traveller available for local & outstation trips.</p>
                </a>

                <a href="/tempo-traveller-in-noida" class="area-card">
                    <h3>Noida</h3>
                    <p>Affordable Tempo Traveller rental with experienced drivers.</p>
                </a>

                <a href="/tempo-traveller-in-ghaziabad" class="area-card">
                    <h3>Ghaziabad</h3>
                    <p>Comfortable group travel for weddings, tours & corporate trips.</p>
                </a>

                <a href="/tempo-traveller-in-gurgaon" class="area-card">
                    <h3>Gurgaon</h3>
                    <p>Premium Tempo Traveller service with on-time pickup.</p>
                </a>

                <a href="/tempo-traveller-in-faridabad" class="area-card">
                    <h3>Faridabad</h3>
                    <p>Reliable & budget-friendly Tempo Traveller booking.</p>
                </a>

            </div>
        </div>
    </section>


    <section class="lux-testimonial py-5">
        <div class="container">

            <div class="text-center mb-5">
                <span class="lux-pill">
                    <i class="bi bi-shield-check"></i> Trusted Reviews
                </span>
                <h2 class="fw-bold mt-3">Customer Love & Experiences</h2>
                <p class="text-muted">Real feedback from our customers</p>
            </div>

            <!-- Reviews injected here -->
            <div class="row g-4" id="reviewsContainer"></div>

        </div>
    </section>

    <!-- Contact & Booking Section -->
    <section class="contact-section py-5">
        <div class="container">

            <!-- Heading -->
            <div class="text-center mb-5">
                <span class="badge bg-primary-subtle text-primary px-4 py-2 rounded-pill">
                    <i class="bi bi-headset"></i> Contact & Booking
                </span>
                <h2 class="fw-bold mt-3">Get Instant Quotation</h2>
                <p class="text-muted mt-2">
                    Call, WhatsApp or share your requirement to get best pricing
                </p>
            </div>

            <div class="row g-4 align-items-stretch">

                <!-- Contact Info -->
                <div class="col-lg-5">
                    <div class="contact-info h-100">

                        <h4 class="fw-semibold mb-4">
                            Talk to Travel Expert
                        </h4>

                        <div class="contact-item">
                            <div class="contact-icon bg-primary">
                                <i class="bi bi-telephone-fill"></i>
                            </div>
                            <div>
                                <span>Call Us</span>
                                <p><a href="tel:9999029051">+91 99990 29051</a></p>
                            </div>
                        </div>

                        <div class="contact-item">
                            <div class="contact-icon bg-success">
                                <i class="bi bi-whatsapp"></i>
                            </div>
                            <div>
                                <span>WhatsApp</span>
                                <p><a href="https://wa.me/919999029051" target="_blank">
                                        Chat on WhatsApp
                                    </a></p>
                            </div>
                        </div>

                        <div class="contact-item">
                            <div class="contact-icon bg-warning">
                                <i class="bi bi-clock-fill"></i>
                            </div>
                            <div>
                                <span>Availability</span>
                                <p>24×7 Booking Support</p>
                            </div>
                        </div>

                        <hr class="my-4">

                        <ul class="contact-points">
                            <li><i class="bi bi-check-circle-fill"></i> Instant response</li>
                            <li><i class="bi bi-check-circle-fill"></i> Transparent pricing</li>
                            <li><i class="bi bi-check-circle-fill"></i> Verified drivers</li>
                            <li><i class="bi bi-check-circle-fill"></i> All India permit vehicles</li>
                        </ul>

                    </div>
                </div>

                <!-- WhatsApp Form -->
                <div class="col-lg-7">
                    <div class="contact-form h-100">

                        <h4 class="fw-semibold mb-4">
                            Share Your Travel Details
                        </h4>

                        <form id="contactFormtoWhatsApp">
                            <div class="row g-3">

                                <div class="col-md-6">
                                    <input type="text" id="name" class="form-control" placeholder="Your Name *"
                                        required>
                                </div>

                                <div class="col-md-6">
                                    <input type="tel" id="mobile" class="form-control" placeholder="Mobile Number *"
                                        required>
                                </div>

                                <div class="col-md-6">
                                    <input type="text" id="pickup" class="form-control" placeholder="Pickup Location *"
                                        required>
                                </div>

                                <div class="col-md-6">
                                    <input type="text" id="destination" class="form-control" placeholder="Destination *"
                                        required>
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label small text-muted">Start Date</label>
                                    <input type="date" id="startDate" class="form-control" required>
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label small text-muted">End Date</label>
                                    <input type="date" id="endDate" class="form-control" required>
                                </div>

                                <div class="col-md-12">
                                    <select id="passengers" class="form-select" required>
                                        <option value="">Passengers *</option>
                                        <option>9 Seater</option>
                                        <option>12 Seater</option>
                                        <option>15 Seater</option>
                                        <option>17 Seater</option>
                                        <option>20 Seater</option>
                                    </select>
                                </div>

                                <div class="col-md-12">
                                    <textarea id="message" class="form-control message-textarea" rows="3"
                                        placeholder="Briefly describe your requirement"></textarea>
                                </div>

                                <div class="col-12 mt-3">
                                    <button type="submit" class="btn btn-success w-100 hero-btn">
                                        <i class="bi bi-whatsapp"></i>
                                        Get Quotation on WhatsApp
                                    </button>
                                </div>

                            </div>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer id="site-footer"></footer>

    <!-- Sticky CTA Buttons -->
    <div class="sticky-cta" id="stickyCTA">

        <!-- Call -->
        <a href="tel:9999029051" class="cta-btn call">
            <i class="bi bi-telephone"></i>
            <span>Call</span>
        </a>

        <!-- Form -->
        <button class="cta-btn form" data-bs-toggle="modal" data-bs-target="#bookingModal">
            <i class="bi bi-calendar-check"></i>
            <span>Form</span>
        </button>

        <!-- WhatsApp -->
        <a href="https://wa.me/919999029051" target="_blank" class="cta-btn whatsapp">
            <i class="bi bi-whatsapp"></i>
            <span>WhatsApp</span>
        </a>

    </div>

    <!-- back to top button -->
    <button id="backToTop" class="back-to-top">
        <i class="bi bi-arrow-up"></i>
    </button>

    <script type="module" src="assets/js/pages/main-seater.js"></script>
</body>

</html>
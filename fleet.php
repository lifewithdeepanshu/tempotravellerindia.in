<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Tempo Traveller India</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/pages/fleet.css">
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

    <div class="top-bar">
        <div class="container d-flex justify-content-between align-items-center">
            <span><i class="bi bi-geo-alt"></i> Delhi NCR</span>
            <div class="top-actions">
                <a href="tel:9999029051">
                    <i class="bi bi-telephone"></i> 9999029051
                </a>
                <a href="https://wa.me/919999029051" class="whatsapp">
                    <i class="bi bi-whatsapp"></i> WhatsApp
                </a>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg main-navbar sticky-top">
        <div class="container">

            <!-- Logo -->
            <a class="navbar-brand" href="/">
                <img src="/logo.jpg" alt="Tempo Traveller India" class="logo">
            </a>

            <!-- Mobile Toggle (No Border) -->
            <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#mobileMenu">
                <i class="bi bi-list fs-1"></i>
            </button>

            <!-- Desktop Menu -->
            <div class="collapse navbar-collapse" id="mainNavbar">
                <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-2" id="desktopMenuContainer"></ul>
            </div>


        </div>
    </nav>

    <!-- Mobile Menu Offcanvas -->
    <div class="main-navbar offcanvas offcanvas-start" id="mobileMenu">
        <div class="offcanvas-header">
            <img src="/logo.jpg" class="logo">
            <button class="btn-close shadow-none" data-bs-dismiss="offcanvas"></button>
        </div>
        <div class="offcanvas-body" id="mobileMenuContainer"></div>
    </div>

    <section class="fleet-hero position-relative overflow-hidden">
        <div class="container">
            <div class="row align-items-center  py-5">

                <!-- Left Content -->
                <div class="col-lg-6 text-white">
                    <span class="badge bg-warning text-dark mb-3 px-3 py-2">
                        Premium • Comfortable • Reliable
                    </span>

                    <h1 class="fw-bold display-5 mt-3">
                        Explore Our Luxury & Comfort Fleet <br>
                        <span class="text-warning">Built for Every Journey</span>
                    </h1>

                    <p class="lead mt-3">
                        Choose from 9 to 20+ seater Tempo Travellers & luxury vehicles,
                        perfect for tours, events, corporate travel & family trips.
                    </p>

                    <!-- Highlights -->
                    <div class="d-flex flex-wrap gap-3 mt-4 hero-highlights">
                        <span>🚐 Multiple Seating Options</span>
                        <span>❄️ Fully AC Vehicles</span>
                        <span>👨‍✈️ Trained Drivers</span>
                    </div>

                    <!-- CTA -->
                    <div class="d-flex gap-3 mt-5 flex-wrap">
                        <a href="#fleet-list" class="btn btn-warning btn-lg px-4">
                            View Fleet
                        </a>
                        <a href="https://wa.me/919999029051" class="btn btn-outline-light btn-lg px-4">
                            WhatsApp Now
                        </a>
                    </div>
                </div>

                <!-- Right Image -->
                <div class="col-lg-6 text-center mt-5 mt-lg-0">
                    <img src="image.jpg" class="img-fluid hero-vehicle-img" alt="Tempo Traveller Fleet">
                </div>

            </div>
        </div>

        <!-- Overlay -->
        <div class="hero-overlay"></div>
    </section>

    <section class="fleet-intro-section">
        <div class="container">

            <!-- Header -->
            <div class="row mb-5">
                <div class="col-lg-6">
                    <span class="fleet-intro-intro-label">OUR fleet-intro</span>
                    <h2 class="fleet-intro-title">
                        Travel Smarter.<br>
                        <span>Ride Better.</span>
                    </h2>
                </div>

                <div class="col-lg-6">
                    <p class="fleet-intro-desc">
                        Our premium fleet-intro is designed for comfort, safety, and style.
                        Whether it’s a family trip, corporate tour, or luxury travel,
                        our vehicles deliver a smooth and reliable experience.
                    </p>
                </div>
            </div>

            <!-- Feature Cards -->
            <div class="row g-4">

                <div class="col-lg-4">
                    <div class="fleet-intro-card">
                        <div class="fleet-intro-icon">🚐</div>
                        <h5>Versatile fleet-intro</h5>
                        <p>9 to 20+ seater Tempo Travellers for every group size.</p>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="fleet-intro-card">
                        <div class="fleet-intro-icon">❄️</div>
                        <h5>Premium Comfort</h5>
                        <p>Fully air-conditioned vehicles with pushback seating.</p>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="fleet-intro-card">
                        <div class="fleet-intro-icon">🧼</div>
                        <h5>Clean & Sanitized</h5>
                        <p>Hygienic interiors maintained before every journey.</p>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="fleet-intro-card">
                        <div class="fleet-intro-icon">👨‍✈️</div>
                        <h5>Expert Drivers</h5>
                        <p>Trained, verified and experienced drivers you can trust.</p>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="fleet-intro-card">
                        <div class="fleet-intro-icon">🧳</div>
                        <h5>Spacious Luggage</h5>
                        <p>Ample space for bags, equipment and long tours.</p>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="fleet-intro-card highlight">
                        <div class="fleet-intro-icon">⭐</div>
                        <h5>Trusted Experience</h5>
                        <p>Thousands of successful trips across India.</p>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <section class="fleetCategories">
        <div class="container">

            <!-- Header -->
            <div class="fleetHeader text-center mb-5">
                <span class="fleetLabel">FLEET CATEGORIES</span>
                <h2 class="fleetHeading">
                    Choose the Perfect Vehicle for Your Journey
                </h2>
                <p class="fleetSubtext">
                    Premium vehicles for family trips, corporate travel,
                    events and outstation tours.
                </p>
            </div>

            <!-- Cards -->
            <div class="row g-4">

                <!-- Tempo Traveller -->
                <div class="col-lg-4">
                    <div class="fleetTypeCard">
                        <img src="image.jpg" alt="Tempo Traveller">
                        <div class="fleetOverlay"></div>

                        <div class="fleetCardContent">
                            <h3>Tempo Traveller</h3>
                            <p>Comfortable group travel with modern amenities.</p>
                            <a href="fleet.html#tempo-traveller" class="fleetBtn">Explore Vehicles →</a>
                        </div>
                    </div>
                </div>

                <!-- Bus -->
                <div class="col-lg-4">
                    <div class="fleetTypeCard">
                        <img src="image.jpg" alt="Bus">
                        <div class="fleetOverlay"></div>

                        <div class="fleetCardContent">
                            <h3>Bus</h3>
                            <p>Best choice for large groups, tours & events.</p>
                            <a href="#bus" class="fleetBtn">Explore Vehicles →</a>
                        </div>
                    </div>
                </div>

                <!-- Innova -->
                <div class="col-lg-4">
                    <div class="fleetTypeCard">
                        <img src="image.jpg" alt="Innova">
                        <div class="fleetOverlay"></div>

                        <div class="fleetCardContent">
                            <h3>Innova</h3>
                            <p>Luxury comfort for families & executives.</p>
                            <a href="#innova" class="fleetBtn">Explore Vehicles →</a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <section class="vehicleFleet" id="fleet-vehicles">
        <div class="container">

            <!-- Header -->
            <div class="vehicleHeader text-center mb-5">
                <span class="fleetLabel">OUR VEHICLES</span>
                <h2 class="fleetHeading">Choose Your Ideal Vehicle</h2>
                <p class="fleetSubtext">
                    Select from our wide range of well-maintained vehicles
                    suited for every group size and travel need.
                </p>
            </div>

            <!-- Category Tabs -->
            <div class="vehicleTabs text-center mb-4">
                <button class="vehicleTab" data-filter="all">All</button>
                <button class="vehicleTab" data-filter="tempo-traveller">Tempo Traveller</button>
                <button class="vehicleTab" data-filter="bus">Bus</button>
                <button class="vehicleTab" data-filter="innova">Innova</button>
            </div>


            <!-- Vehicle Cards -->
            <div class="row g-4 vehicleGrid">

                <!-- Tempo Traveller -->
                <div class="col-lg-4 col-md-6 vehicleItem tempo-traveller">
                    <div class="vehicleCard">
                        <img src="image.jpg" alt="12 Seater Tempo Traveller">

                        <div class="vehicleBody">
                            <h5>12 Seater Tempo Traveller</h5>

                            <ul class="vehicleSpecs">
                                <li>❄️ AC</li>
                                <li>🪑 Pushback Seats</li>
                                <li>🧳 Luggage Space</li>
                                <li>🎵 Music System</li>
                            </ul>

                            <div class="vehicleActions">
                                <a href="#" class="btnPrimary">Book Now</a>
                                <a href="https://wa.me/919999029051" class="btnOutline">
                                    WhatsApp
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Bus -->
                <div class="col-lg-4 col-md-6 vehicleItem bus">
                    <div class="vehicleCard">
                        <img src="image.jpg" alt="40 Seater Bus">

                        <div class="vehicleBody">
                            <h5>40 Seater Bus</h5>

                            <ul class="vehicleSpecs">
                                <li>❄️ AC / Non-AC</li>
                                <li>👥 Large Capacity</li>
                                <li>🧳 Extra Luggage</li>
                                <li>🛣️ Long Routes</li>
                            </ul>

                            <div class="vehicleActions">
                                <a href="#" class="btnPrimary">Book Now</a>
                                <a href="https://wa.me/919999029051" class="btnOutline">
                                    WhatsApp
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Innova -->
                <div class="col-lg-4 col-md-6 vehicleItem innova">
                    <div class="vehicleCard">
                        <img src="image.jpg" alt="Innova Crysta">

                        <div class="vehicleBody">
                            <h5>Innova Crysta</h5>

                            <ul class="vehicleSpecs">
                                <li>❄️ Climate Control</li>
                                <li>✨ Luxury Interior</li>
                                <li>👨‍✈️ Executive Travel</li>
                                <li>🧳 Comfort Ride</li>
                            </ul>

                            <div class="vehicleActions">
                                <a href="#" class="btnPrimary">Book Now</a>
                                <a href="https://wa.me/919999029051" class="btnOutline">
                                    WhatsApp
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

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

    <section class="fleet-uses">
    <div class="container">

        <!-- Section Header -->
        <div class="text-center mb-5">
            <span class="uses-badge">
                <i class="bi bi-stars"></i> Versatile Travel Solutions
            </span>
            <h2 class="fleet-section-title">Popular Uses of Our Fleet</h2>
            <p class="fleet-section-subtitle">
                Reliable vehicles tailored for every travel need — comfort, safety & convenience guaranteed.
            </p>
        </div>

        <!-- Uses Grid -->
        <div class="row g-4">

            <div class="col-lg-4 col-md-6">
                <div class="use-card">
                    <div class="use-icon">
                        <i class="bi bi-briefcase-fill"></i>
                    </div>
                    <h5>Corporate Travel</h5>
                    <p>
                        Ideal for office transport, business meetings, conferences and executive tours.
                    </p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="use-card">
                    <div class="use-icon">
                        <i class="bi bi-people-fill"></i>
                    </div>
                    <h5>Group Tours</h5>
                    <p>
                        Comfortable rides for families, friends and large groups on long journeys.
                    </p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="use-card">
                    <div class="use-icon">
                        <i class="bi bi-map-fill"></i>
                    </div>
                    <h5>Outstation Trips</h5>
                    <p>
                        Perfect for hill stations, pilgrimage tours and multi-day travel plans.
                    </p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="use-card">
                    <div class="use-icon">
                        <i class="bi bi-mortarboard-fill"></i>
                    </div>
                    <h5>School & College Trips</h5>
                    <p>
                        Safe and reliable vehicles for educational tours, picnics and excursions.
                    </p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="use-card">
                    <div class="use-icon">
                        <i class="bi bi-heart-fill"></i>
                    </div>
                    <h5>Weddings & Events</h5>
                    <p>
                        Guest transportation for weddings, parties and special celebrations.
                    </p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="use-card">
                    <div class="use-icon">
                        <i class="bi bi-airplane-fill"></i>
                    </div>
                    <h5>Airport Transfers</h5>
                    <p>
                        Hassle-free airport pickups and drops with ample luggage space.
                    </p>
                </div>
            </div>

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

    <footer id="site-footer"></footer>

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

    <script type="module" src="assets/js/pages/fleet.js"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Services</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/pages/services.css">
</head>

<body>
    <?php include 'assets/php/components/pop-out-form.php'; ?>

    <?php include 'assets/php/layout/top-bar.php'; ?>

    <?php include 'assets/php/layout/menu.php'; ?>

    <section class="services-hero position-relative overflow-hidden">
        <div class="container">
            <div class="row align-items-center min-vh-75">

                <!-- Left Content -->
                <div class="col-lg-7 text-center text-lg-start">
                    <span class="badge hero-badge mb-3">
                        🚐 Professional & Reliable Services
                    </span>

                    <h1 class="hero-title mt-3">
                        Our <span>Premium Travel Services</span><br>
                        Designed for Comfort & Safety
                    </h1>

                    <p class="hero-desc mt-4">
                        From local trips to outstation journeys, we provide well-maintained vehicles,
                        professional drivers, and transparent pricing—so you travel stress-free.
                    </p>

                    <!-- CTA Buttons -->
                    <div class="hero-btns mt-4">
                        <a href="tel:9999029051" class="btn btn-primary btn-lg me-3 mb-3">
                            <i class="bi bi-telephone-fill"></i> Call Now
                        </a>
                        <a href="https://wa.me/919999029051" class="btn btn-outline-light btn-lg mb-3">
                            <i class="bi bi-whatsapp"></i> WhatsApp Us
                        </a>
                    </div>

                    <!-- Trust Points -->
                    <div class="hero-trust mt-4">
                        <span><i class="bi bi-check-circle-fill"></i> 24×7 Support</span>
                        <span><i class="bi bi-check-circle-fill"></i> Verified Drivers</span>
                        <span><i class="bi bi-check-circle-fill"></i> No Hidden Charges</span>
                    </div>
                </div>

                <!-- Right Visual -->
                <div class="col-lg-5 d-none d-lg-block">
                    <div class="hero-image text-center">
                        <img src="image.jpg" class="img-fluid" alt="Our Services">
                    </div>
                </div>

            </div>
        </div>

        <!-- Decorative Shapes -->
        <div class="hero-shape shape-1"></div>
        <div class="hero-shape shape-2"></div>
    </section>

    <section class="services-overview py-5">
        <div class="container">

            <!-- Section Heading -->
            <div class="text-center mb-5">
                <span class="section-badge">
                    🚐 What We Offer
                </span>
                <h2 class="section-title mt-3">
                    Our <span>Premium Services</span>
                </h2>
                <p class="section-desc">
                    Comfortable, reliable, and affordable travel solutions tailored for every journey.
                </p>
            </div>

            <!-- Services Grid -->
            <div class="row g-4">

                <!-- Service Card -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="bi bi-geo-alt-fill"></i>
                        </div>
                        <h4>Outstation Travel</h4>
                        <p>
                            Smooth and safe long-distance journeys with experienced drivers and clean vehicles.
                        </p>
                        <a href="#outstationService" class="service-link">
                            Explore Service <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="bi bi-building"></i>
                        </div>
                        <h4>Corporate Travel</h4>
                        <p>
                            Professional transport solutions for meetings, events, and employee travel needs.
                        </p>
                        <a href="#" class="service-link">
                            Explore Service <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="bi bi-people-fill"></i>
                        </div>
                        <h4>Group Tours</h4>
                        <p>
                            Perfect vehicles for family trips, friends tours, and group travel adventures.
                        </p>
                        <a href="#" class="service-link">
                            Explore Service <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="bi bi-airplane-fill"></i>
                        </div>
                        <h4>Airport Transfers</h4>
                        <p>
                            On-time pickup & drop service ensuring a stress-free airport commute.
                        </p>
                        <a href="#" class="service-link">
                            Explore Service <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="bi bi-calendar-event-fill"></i>
                        </div>
                        <h4>Wedding & Events</h4>
                        <p>
                            Elegant and spacious vehicles for weddings, parties, and special occasions.
                        </p>
                        <a href="#" class="service-link">
                            Explore Service <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="bi bi-map-fill"></i>
                        </div>
                        <h4>Local Sightseeing</h4>
                        <p>
                            Explore nearby attractions comfortably with flexible local tour packages.
                        </p>
                        <a href="#" class="service-link">
                            Explore Service <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="individual-service py-5" id="outstationService">
        <div class="container">
            <div class="row align-items-center g-5">

                <div class="col-lg-6">
                    <div class="service-image">
                        <img src="image.jpg" class="img-fluid" alt="Outstation Travel Service">
                        <span class="image-badge">Most Booked</span>
                    </div>
                </div>

                <div class="col-lg-6">
                    <span class="service-tag">🚐 Our Service</span>
                    <h2 class="service-title mt-3">Outstation Travel</h2>

                    <p class="service-desc mt-3">
                        Plan your long-distance journeys with comfort and reliability.
                        Our outstation travel service ensures safe rides, professional drivers,
                        and well-maintained vehicles for family trips, pilgrimages, and group vacations.
                    </p>

                    <ul class="service-features mt-4">
                        <li><i class="bi bi-check-circle-fill"></i> Comfortable seating for long journeys</li>
                        <li><i class="bi bi-check-circle-fill"></i> Verified & experienced drivers</li>
                        <li><i class="bi bi-check-circle-fill"></i> Flexible pickup & drop</li>
                        <li><i class="bi bi-check-circle-fill"></i> Transparent pricing</li>
                    </ul>

                    <div class="service-ideal mt-4">
                        <h6>Ideal For:</h6>
                        <span>Family Trips</span>
                        <span>Pilgrimages</span>
                        <span>Hill Stations</span>
                        <span>Weekend Getaways</span>
                    </div>

                    <div class="service-cta mt-4">
                        <div class="cta-buttons">

                            <a href="tel:9999029051" class="cta-btn call-btn">
                                <i class="bi bi-telephone-fill"></i>
                                <span>Call</span>
                            </a>

                            <a href="/contact" class="cta-btn book-btn">
                                <i class="bi bi-calendar-check"></i>
                                <span>Book</span>
                            </a>

                            <a href="https://wa.me/919999029051" class="cta-btn whatsapp-btn">
                                <i class="bi bi-whatsapp"></i>
                                <span>WhatsApp</span>
                            </a>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="individual-service py-5" id="corporateService">
        <div class="container">
            <div class="row align-items-center g-5 flex-lg-row-reverse">

                <div class="col-lg-6">
                    <div class="service-image">
                        <img src="image.jpg" class="img-fluid" alt="Corporate Travel Service">
                        <span class="image-badge">Professional Service</span>
                    </div>
                </div>

                <div class="col-lg-6">
                    <span class="service-tag">🏢 Business Travel</span>
                    <h2 class="service-title mt-3">Corporate Travel</h2>

                    <p class="service-desc mt-3">
                        Reliable and punctual transportation for corporate meetings,
                        team outings, conferences, and client visits. We ensure
                        professionalism, comfort, and timely arrivals.
                    </p>

                    <ul class="service-features mt-4">
                        <li><i class="bi bi-check-circle-fill"></i> On-time guaranteed service</li>
                        <li><i class="bi bi-check-circle-fill"></i> Clean & executive vehicles</li>
                        <li><i class="bi bi-check-circle-fill"></i> Corporate billing support</li>
                        <li><i class="bi bi-check-circle-fill"></i> Dedicated customer support</li>
                    </ul>

                    <div class="service-ideal mt-4">
                        <h6>Ideal For:</h6>
                        <span>Corporate Events</span>
                        <span>Team Outings</span>
                        <span>Client Meetings</span>
                        <span>Office Transfers</span>
                    </div>

                    <div class="service-cta mt-4">
                        <a href="tel:9999029051" class="btn btn-primary btn-lg me-3 mb-2">
                            Call Now
                        </a>
                        <a href="https://wa.me/919999029051" class="btn btn-outline-primary btn-lg mb-2">
                            WhatsApp
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="individual-service py-5" id="groupTourService">
        <div class="container">
            <div class="row align-items-center g-5">

                <div class="col-lg-6">
                    <div class="service-image">
                        <img src="image.jpg" class="img-fluid" alt="Group Tours Service">
                        <span class="image-badge">Best for Groups</span>
                    </div>
                </div>

                <div class="col-lg-6">
                    <span class="service-tag">👨‍👩‍👧‍👦 Travel Together</span>
                    <h2 class="service-title mt-3">Group Tours</h2>

                    <p class="service-desc mt-3">
                        Enjoy hassle-free travel with your friends, family, or colleagues.
                        Our spacious tempo travellers are perfect for group tours, ensuring
                        comfort, safety, and fun throughout the journey.
                    </p>

                    <ul class="service-features mt-4">
                        <li><i class="bi bi-check-circle-fill"></i> Large seating capacity</li>
                        <li><i class="bi bi-check-circle-fill"></i> Ample luggage space</li>
                        <li><i class="bi bi-check-circle-fill"></i> Music system & AC</li>
                        <li><i class="bi bi-check-circle-fill"></i> Affordable group pricing</li>
                    </ul>

                    <div class="service-ideal mt-4">
                        <h6>Ideal For:</h6>
                        <span>School Trips</span>
                        <span>Friends Tours</span>
                        <span>Religious Tours</span>
                        <span>Adventure Trips</span>
                    </div>

                    <div class="service-cta mt-4">
                        <a href="tel:9999029051" class="btn btn-primary btn-lg me-3 mb-2">Call Now</a>
                        <a href="https://wa.me/919999029051" class="btn btn-outline-primary btn-lg mb-2">WhatsApp</a>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="individual-service py-5" id="airportService">
        <div class="container">
            <div class="row align-items-center g-5 flex-lg-row-reverse">

                <div class="col-lg-6">
                    <div class="service-image">
                        <img src="image.jpg" class="img-fluid" alt="Airport Transfer Service">
                        <span class="image-badge">24/7 Available</span>
                    </div>
                </div>

                <div class="col-lg-6">
                    <span class="service-tag">✈️ On-Time Pickup</span>
                    <h2 class="service-title mt-3">Airport Transfers</h2>

                    <p class="service-desc mt-3">
                        Get timely pickups and drops for domestic and international flights.
                        Our airport transfer service ensures punctuality, comfort, and stress-free travel.
                    </p>

                    <ul class="service-features mt-4">
                        <li><i class="bi bi-check-circle-fill"></i> Flight tracking support</li>
                        <li><i class="bi bi-check-circle-fill"></i> 24/7 availability</li>
                        <li><i class="bi bi-check-circle-fill"></i> Professional drivers</li>
                        <li><i class="bi bi-check-circle-fill"></i> Clean & sanitized vehicles</li>
                    </ul>

                    <div class="service-ideal mt-4">
                        <h6>Ideal For:</h6>
                        <span>Airport Pickup</span>
                        <span>Airport Drop</span>
                        <span>Business Travelers</span>
                        <span>Family Transfers</span>
                    </div>

                    <div class="service-cta mt-4">
                        <a href="tel:9999029051" class="btn btn-primary btn-lg me-3 mb-2">Call Now</a>
                        <a href="https://wa.me/919999029051" class="btn btn-outline-primary btn-lg mb-2">WhatsApp</a>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="individual-service py-5" id="weddingService">
        <div class="container">
            <div class="row align-items-center g-5">

                <div class="col-lg-6">
                    <div class="service-image">
                        <img src="image.jpg" class="img-fluid" alt="Wedding & Events Service">
                        <span class="image-badge">Premium Service</span>
                    </div>
                </div>

                <div class="col-lg-6">
                    <span class="service-tag">💍 Special Occasions</span>
                    <h2 class="service-title mt-3">Wedding & Events</h2>

                    <p class="service-desc mt-3">
                        Make your special occasions smooth and memorable with our reliable
                        transport service for weddings, parties, and events.
                    </p>

                    <ul class="service-features mt-4">
                        <li><i class="bi bi-check-circle-fill"></i> Well-decorated vehicles</li>
                        <li><i class="bi bi-check-circle-fill"></i> Bulk booking available</li>
                        <li><i class="bi bi-check-circle-fill"></i> On-time coordination</li>
                        <li><i class="bi bi-check-circle-fill"></i> Professional support</li>
                    </ul>

                    <div class="service-ideal mt-4">
                        <h6>Ideal For:</h6>
                        <span>Weddings</span>
                        <span>Engagements</span>
                        <span>Corporate Events</span>
                        <span>Family Functions</span>
                    </div>

                    <div class="service-cta mt-4">
                        <a href="tel:9999029051" class="btn btn-primary btn-lg me-3 mb-2">Call Now</a>
                        <a href="https://wa.me/919999029051" class="btn btn-outline-primary btn-lg mb-2">WhatsApp</a>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="individual-service py-5" id="localService">
        <div class="container">
            <div class="row align-items-center g-5 flex-lg-row-reverse">

                <div class="col-lg-6">
                    <div class="service-image">
                        <img src="image.jpg" class="img-fluid" alt="Local Sightseeing Service">
                        <span class="image-badge">City Tours</span>
                    </div>
                </div>

                <div class="col-lg-6">
                    <span class="service-tag">🌆 Explore the City</span>
                    <h2 class="service-title mt-3">Local Sightseeing</h2>

                    <p class="service-desc mt-3">
                        Explore nearby attractions comfortably with our local sightseeing
                        packages. Perfect for one-day trips, city tours, and weekend outings.
                    </p>

                    <ul class="service-features mt-4">
                        <li><i class="bi bi-check-circle-fill"></i> Flexible hourly packages</li>
                        <li><i class="bi bi-check-circle-fill"></i> Knowledgeable drivers</li>
                        <li><i class="bi bi-check-circle-fill"></i> Customizable routes</li>
                        <li><i class="bi bi-check-circle-fill"></i> Affordable pricing</li>
                    </ul>

                    <div class="service-ideal mt-4">
                        <h6>Ideal For:</h6>
                        <span>City Tours</span>
                        <span>Temple Visits</span>
                        <span>Shopping Trips</span>
                        <span>Family Outings</span>
                    </div>

                    <div class="service-cta mt-4">
                        <a href="tel:9999029051" class="btn btn-primary btn-lg me-3 mb-2">Call Now</a>
                        <a href="https://wa.me/919999029051" class="btn btn-outline-primary btn-lg mb-2">WhatsApp</a>
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

    <section class="process-section py-5">
        <div class="container">

            <!-- Heading -->
            <div class="text-center mb-5">
                <span class="badge bg-warning-subtle text-warning px-4 py-2 rounded-pill">
                    <i class="bi bi-diagram-3-fill"></i> How It Works
                </span>
                <h2 class="fw-bold mt-3">
                    Simple & Transparent Booking Process
                </h2>
                <p class="text-muted mt-2">
                    Share your travel requirement and we’ll handle the rest
                </p>
            </div>

            <!-- Process Steps -->
            <div class="row g-4">

                <!-- Step 1 -->
                <div class="col-lg-3 col-md-6">
                    <div class="process-card h-100">
                        <div class="step-circle">01</div>
                        <div class="process-icon">
                            <i class="bi bi-chat-dots-fill"></i>
                        </div>
                        <h5>Share Your Requirement</h5>
                        <p>
                            Fill the enquiry form or contact us via
                            call or WhatsApp with your trip details.
                        </p>
                    </div>
                </div>

                <!-- Step 2 -->
                <div class="col-lg-3 col-md-6">
                    <div class="process-card h-100">
                        <div class="step-circle">02</div>
                        <div class="process-icon">
                            <i class="bi bi-file-text-fill"></i>
                        </div>
                        <h5>Get Best Quotation</h5>
                        <p>
                            Our team checks availability and sends you
                            the best price with complete details.
                        </p>
                    </div>
                </div>

                <!-- Step 3 -->
                <div class="col-lg-3 col-md-6">
                    <div class="process-card h-100">
                        <div class="step-circle">03</div>
                        <div class="process-icon">
                            <i class="bi bi-wallet2"></i>
                        </div>
                        <h5>Pay Advance & Confirm</h5>
                        <p>
                            Pay a small advance amount to confirm
                            your vehicle booking.
                        </p>
                    </div>
                </div>

                <!-- Step 4 -->
                <div class="col-lg-3 col-md-6">
                    <div class="process-card h-100">
                        <div class="step-circle">04</div>
                        <div class="process-icon">
                            <i class="bi bi-bus-front-fill"></i>
                        </div>
                        <h5>Vehicle Reserved</h5>
                        <p>
                            Your tempo traveller is reserved and ready.
                            Enjoy a safe and comfortable journey.
                        </p>
                    </div>
                </div>

            </div>

            <p class="text-center text-muted mt-4 small">
                ✔ No hidden charges &nbsp;|&nbsp;
                ✔ Flexible payment options &nbsp;|&nbsp;
                ✔ Booking confirmation on advance payment
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
                        <h5>10K+ Happy Customers</h5>
                        <p>
                            Trusted by families, corporates, and travel
                            partners across NCR.
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

    <script type="module" src="assets/js/pages/services.js"></script>
</body>

</html>
<?php
include 'assets/php/core/core.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Tempo Traveller India - Luxury Tempo Traveller on Rent in Delhi NCR</title>
    <meta name="description"
        content="Book premium tempo traveller rental services in Delhi NCR. Safe, comfortable & affordable travel solutions for family tours, corporate trips, weddings & outstation journeys. Contact us for best prices and reliable service.">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/pages/index.css">
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

    <!-- <button class="btn btn-cta" data-bs-toggle="modal" data-bs-target="#bookingModal">
        <i class="bi bi-calendar-check"></i> Book Tempo Traveller
    </button> -->

    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center hero-inner">

                <!-- CONTENT -->
                <div class="col-lg-7 text-white">

                    <span class="hero-badge">
                        🚐 Premium Tempo Traveller Service
                    </span>

                    <h1 class="hero-title mt-4">
                        Book <span>Luxury Tempo Traveller</span><br>
                        for Safe, Smooth & Stylish Travel
                    </h1>

                    <p class="hero-subtitle mt-4">
                        Family Tours • Corporate Trips • Wedding Travel • Outstation Journeys
                        <br>
                        <strong>Delhi • Noida • Gurgaon • Faridabad • NCR</strong>
                    </p>

                    <!-- CTA BUTTONS -->
                    <div class="hero-buttons mt-5">
                        <a href="tel:9999029051" class="btn btn-primary btn-lg hero-btn">
                            <i class="bi bi-telephone-fill"></i> Call Now
                        </a>

                        <a href="https://wa.me/919999029051" target="_blank" class="btn btn-success btn-lg hero-btn">
                            <i class="bi bi-whatsapp"></i> WhatsApp
                        </a>
                    </div>

                </div>

                <!-- IMAGE -->
                <div class="col-lg-5 d-none d-lg-flex justify-content-center">
                    <img src="image.jpg" alt="Luxury Tempo Traveller" class="hero-image">
                </div>

            </div>
        </div>
    </section>

    <section class="highlights-bar">
        <div class="container">
            <div class="row text-center g-3">

                <div class="col-6 col-md-3">
                    <div class="highlight-item">
                        <i class="bi bi-shield-check"></i>
                        <span>Safe & Sanitized</span>
                    </div>
                </div>

                <div class="col-6 col-md-3">
                    <div class="highlight-item">
                        <i class="bi bi-person-badge"></i>
                        <span>Experienced Drivers</span>
                    </div>
                </div>

                <div class="col-6 col-md-3">
                    <div class="highlight-item">
                        <i class="bi bi-stars"></i>
                        <span>Luxury Fleet</span>
                    </div>
                </div>

                <div class="col-6 col-md-3">
                    <div class="highlight-item">
                        <i class="bi bi-currency-rupee"></i>
                        <span>Best Price Guaranteed</span>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="about-home">
        <div class="container">
            <div class="row align-items-center g-4">

                <!-- IMAGE -->
                <div class="col-lg-5">
                    <div class="about-image">
                        <img src="image.jpg" alt="About Tempo Traveller India">
                    </div>
                </div>

                <!-- CONTENT -->
                <div class="col-lg-7">

                    <span class="section-badge">
                        About Us
                    </span>

                    <h2 class="section-title mt-3">
                        Trusted Tempo Traveller Rental Service <br>
                        in <span>Delhi NCR</span>
                    </h2>

                    <p class="section-text mt-3">
                        We are a professional tempo traveller rental service provider offering
                        safe, comfortable, and affordable travel solutions across Delhi NCR.
                        From family tours and corporate travel to weddings and long outstation
                        journeys, we focus on comfort, reliability, and customer satisfaction.
                    </p>

                    <p class="section-text">
                        Our fleet includes luxury, well-maintained tempo travellers driven by
                        experienced chauffeurs to ensure a smooth and stress-free journey.
                    </p>

                    <!-- FEATURES -->
                    <div class="about-features mt-4">
                        <div><i class="bi bi-check-circle-fill"></i> Clean & Luxury Vehicles</div>
                        <div><i class="bi bi-check-circle-fill"></i> On-Time Pickup & Drop</div>
                        <div><i class="bi bi-check-circle-fill"></i> Transparent Pricing</div>
                    </div>

                    <!-- CTA -->
                    <div class="mt-4">
                        <a href="/about-us" class="btn btn-premium">
                            Know More About Us <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>

                </div>

            </div>
        </div>
    </section>

    <section class="services-section py-5">
        <div class="container">

            <!-- Section Heading -->
            <div class="text-center mb-5">
                <span class="badge bg-primary-subtle text-primary px-4 py-2 rounded-pill">
                    <i class="bi bi-stars"></i> Our Services
                </span>
                <h2 class="fw-bold mt-3">Premium Travel Services We Offer</h2>
                <p class="text-muted mt-2">
                    Comfortable, reliable & luxury tempo traveller services across Delhi NCR
                </p>
            </div>

            <!-- Services Grid -->
            <div class="row g-4">

                <!-- Service Card -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-card h-100">
                        <div class="icon-box">
                            <i class="bi bi-people-fill"></i>
                        </div>
                        <h5>Family & Group Tours</h5>
                        <p>
                            Spacious and luxury tempo travellers for family trips, picnics,
                            and group outings.
                        </p>
                        <a href="#" class="service-btn">
                            Explore More <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="service-card h-100">
                        <div class="icon-box">
                            <i class="bi bi-briefcase-fill"></i>
                        </div>
                        <h5>Corporate Travel</h5>
                        <p>
                            Professional transport solutions for meetings, events,
                            and office outings.
                        </p>
                        <a href="#" class="service-btn">
                            Explore More <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="service-card h-100">
                        <div class="icon-box">
                            <i class="bi bi-heart-fill"></i>
                        </div>
                        <h5>Wedding & Event Travel</h5>
                        <p>
                            Reliable tempo travellers for weddings, guests pickup,
                            and special occasions.
                        </p>
                        <a href="#" class="service-btn">
                            Explore More <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="service-card h-100">
                        <div class="icon-box">
                            <i class="bi bi-geo-alt-fill"></i>
                        </div>
                        <h5>Outstation Trips</h5>
                        <p>
                            Comfortable long-distance travel for hill stations,
                            religious & leisure tours.
                        </p>
                        <a href="#" class="service-btn">
                            Explore More <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="service-card h-100">
                        <div class="icon-box">
                            <i class="bi bi-airplane-fill"></i>
                        </div>
                        <h5>Airport Transfers</h5>
                        <p>
                            On-time and hassle-free airport pickup and drop services
                            across NCR.
                        </p>
                        <a href="#" class="service-btn">
                            Explore More <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="service-card h-100">
                        <div class="icon-box">
                            <i class="bi bi-shield-check"></i>
                        </div>
                        <h5>Safe & Sanitized Travel</h5>
                        <p>
                            Well-maintained, sanitized vehicles with experienced
                            and verified drivers.
                        </p>
                        <a href="#" class="service-btn">
                            Explore More <i class="bi bi-arrow-right"></i>
                        </a>
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


    <section class="season-best">
        <div class="container">

            <!-- Heading -->
            <div class="text-center mb-5">
                <span class="badge bg-primary-subtle text-primary px-3 py-2 rounded-pill">
                    <i class="bi bi-geo-alt-fill"></i> Seasonal Picks
                </span>
                <h2 class="mt-3">Best Destinations for This Season</h2>
                <p class="text-muted">
                    Comfortable weather, scenic routes & perfect for tempo traveller journeys
                </p>
            </div>

            <div class="row g-4" id="seasonDestinations"></div>

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

    <script type="module" src="assets/js/pages/index.js"></script>
</body>

</html>
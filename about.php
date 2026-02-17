<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Tempo Traveller India</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/pages/about.css">
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

    <!-- About Hero -->
    <section class="about-hero position-relative overflow-hidden">
        <div class="container">
            <div class="row align-items-center min-vh-60">

                <!-- Left Content -->
                <div class="col-lg-7">
                    <span class="about-badge mb-3 d-inline-block">
                        <i class="bi bi-award-fill"></i> Trusted Travel Partner in Delhi NCR
                    </span>

                    <h1 class="about-title">
                        About <span>Our Journey</span> <br>
                        Towards Safe & Comfortable Travel
                    </h1>

                    <p class="about-subtitle">
                        We specialize in premium Tempo Traveller rental services for family tours,
                        corporate travel, weddings, and outstation trips across Delhi NCR.
                    </p>

                    <!-- Breadcrumb -->
                    <nav class="breadcrumb-wrapper">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active">About Us</li>
                        </ol>
                    </nav>

                    <!-- CTA Buttons -->
                    <div class="about-cta d-flex flex-wrap gap-3 mt-4">
                        <a href="tel:9999029051" class="btn btn-primary btn-lg">
                            <i class="bi bi-telephone-fill"></i> Call Now
                        </a>
                        <a href="https://wa.me/919999029051" target="_blank" class="btn btn-outline-light btn-lg">
                            <i class="bi bi-whatsapp"></i> WhatsApp
                        </a>
                    </div>
                </div>

                <!-- Right Visual -->
                <div class="col-lg-5 text-center mt-5 mt-lg-0">
                    <div class="about-hero-card">
                        <i class="bi bi-bus-front-fill"></i>
                        <h4>10+ Years of Experience</h4>
                        <p>Thousands of happy journeys delivered safely</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="who-we-are py-5">
        <div class="container">
            <div class="row align-items-center g-5">

                <!-- Left Content -->
                <div class="col-lg-6">
                    <span class="section-badge">
                        <i class="bi bi-people-fill"></i> Who We Are
                    </span>

                    <h2 class="section-title mt-3">
                        Your Trusted Travel Partner <br>
                        <span>Since 2012</span>
                    </h2>

                    <p class="section-text mt-4">
                        <strong>JBL Travels</strong>, a brand operated under
                        <strong>RDNP Services Pvt. Ltd.</strong>, has been delivering safe,
                        comfortable, and reliable Tempo Traveller rental services across
                        Delhi NCR and outstation destinations since 2012.
                    </p>

                    <p class="section-text">
                        With over a decade of experience, we specialize in group travel,
                        family tours, corporate transportation, weddings, and customized
                        travel solutions — ensuring every journey is smooth, secure, and
                        memorable.
                    </p>

                    <!-- Highlights -->
                    <div class="who-highlights mt-4">
                        <div class="highlight-item">
                            <i class="bi bi-check-circle-fill"></i>
                            10+ Years of Industry Experience
                        </div>
                        <div class="highlight-item">
                            <i class="bi bi-check-circle-fill"></i>
                            Trusted by Thousands of Happy Travelers
                        </div>
                        <div class="highlight-item">
                            <i class="bi bi-check-circle-fill"></i>
                            Operated by RDNP Services Pvt. Ltd.
                        </div>
                    </div>
                </div>

                <!-- Right Card -->
                <div class="col-lg-6">
                    <div class="who-card">
                        <div class="who-card-icon">
                            <i class="bi bi-bus-front-fill"></i>
                        </div>

                        <h4>JBL Travels</h4>
                        <p class="who-card-sub">
                            A Name Synonymous with Comfort, Safety & Reliability
                        </p>

                        <div class="who-card-stats">
                            <div class="stat">
                                <h3>2012</h3>
                                <span>Established</span>
                            </div>
                            <div class="stat">
                                <h3>10K+</h3>
                                <span>Happy Trips</span>
                            </div>
                            <div class="stat">
                                <h3>Delhi NCR</h3>
                                <span>Service Area</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="mvv-section py-5">
        <div class="container">

            <!-- Section Heading -->
            <div class="text-center mb-5">
                <span class="badge bg-primary-subtle text-primary px-3 py-2 rounded-pill">
                    <i class="bi bi-compass-fill"></i> Our Purpose
                </span>
                <h2 class="section-title mt-3">
                    Mission, Vision & <span>Values</span>
                </h2>
                <p class="section-subtitle mt-3">
                    Driving every journey with purpose, passion, and responsibility.
                </p>
            </div>

            <!-- Cards -->
            <div class="row g-4">

                <!-- Mission -->
                <div class="col-lg-4">
                    <div class="mvv-card">
                        <div class="mvv-icon bg-primary">
                            <i class="bi bi-bullseye"></i>
                        </div>
                        <h4>Our Mission</h4>
                        <p>
                            To provide safe, reliable, and comfortable group travel solutions
                            through well-maintained vehicles, professional drivers, and
                            transparent pricing — ensuring a stress-free journey for every customer.
                        </p>
                    </div>
                </div>

                <!-- Vision -->
                <div class="col-lg-4">
                    <div class="mvv-card">
                        <div class="mvv-icon bg-success">
                            <i class="bi bi-eye-fill"></i>
                        </div>
                        <h4>Our Vision</h4>
                        <p>
                            To become one of India’s most trusted and customer-centric travel
                            service providers, setting new benchmarks in comfort, safety,
                            and service excellence across every destination we serve.
                        </p>
                    </div>
                </div>

                <!-- Values -->
                <div class="col-lg-4">
                    <div class="mvv-card">
                        <div class="mvv-icon bg-warning">
                            <i class="bi bi-heart-fill"></i>
                        </div>
                        <h4>Our Core Values</h4>
                        <ul class="mvv-values">
                            <li><i class="bi bi-check-circle-fill"></i> Safety First</li>
                            <li><i class="bi bi-check-circle-fill"></i> Customer Satisfaction</li>
                            <li><i class="bi bi-check-circle-fill"></i> Transparency & Trust</li>
                            <li><i class="bi bi-check-circle-fill"></i> Professional Service</li>
                            <li><i class="bi bi-check-circle-fill"></i> Commitment to Excellence</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="what-we-do py-5">
        <div class="container">

            <!-- Heading -->
            <div class="text-center mb-5">
                <span class="badge bg-primary-subtle text-primary px-3 py-2 rounded-pill">
                    <i class="bi bi-briefcase-fill"></i> What We Do
                </span>
                <h2 class="section-title mt-3">
                    Travel Solutions Designed for <span>Every Journey</span>
                </h2>
                <p class="section-subtitle mt-3">
                    At JBL Travels, we offer reliable and comfortable Tempo Traveller rental
                    services tailored to meet diverse travel needs.
                </p>
            </div>

            <!-- Services -->
            <div class="row g-4">

                <div class="col-lg-3 col-md-6">
                    <div class="service-card">
                        <i class="bi bi-bus-front-fill"></i>
                        <h5>Tempo Traveller Rental</h5>
                        <p>
                            Well-maintained Tempo Travellers with professional drivers for smooth
                            and safe group travel.
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="service-card">
                        <i class="bi bi-people-fill"></i>
                        <h5>Family & Group Tours</h5>
                        <p>
                            Comfortable travel solutions for family outings, friends trips,
                            and group tours.
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="service-card">
                        <i class="bi bi-buildings-fill"></i>
                        <h5>Corporate Travel</h5>
                        <p>
                            Professional transportation services for corporate meetings,
                            events, and employee travel.
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="service-card">
                        <i class="bi bi-heart-fill"></i>
                        <h5>Wedding & Event Travel</h5>
                        <p>
                            Hassle-free transportation for wedding guests and special events
                            with premium comfort.
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="service-card">
                        <i class="bi bi-geo-alt-fill"></i>
                        <h5>Outstation Trips</h5>
                        <p>
                            Reliable outstation travel services covering popular destinations
                            across North India.
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="service-card">
                        <i class="bi bi-stars"></i>
                        <h5>Luxury Travel Options</h5>
                        <p>
                            Premium Maharaja & luxury Tempo Travellers for elite and comfortable
                            travel experiences.
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="service-card">
                        <i class="bi bi-shield-check"></i>
                        <h5>Safe & Sanitized Travel</h5>
                        <p>
                            Regularly sanitized vehicles with trained drivers ensuring complete
                            safety and hygiene.
                        </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="service-card">
                        <i class="bi bi-headset"></i>
                        <h5>24×7 Customer Support</h5>
                        <p>
                            Dedicated support team available anytime to assist with bookings
                            and travel queries.
                        </p>
                    </div>
                </div>

            </div>

            <!-- CTA -->
            <div class="text-center mt-5">
                <a href="/services" class="btn explore-btn">
                    Explore Our Services
                    <i class="bi bi-arrow-right"></i>
                </a>

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

    <section class="our-fleet py-5">
        <div class="container">

            <!-- Heading -->
            <div class="text-center mb-5">
                <span class="badge bg-primary-subtle text-primary px-3 py-2 rounded-pill">
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


    <script type="module" src="assets/js/pages/about.js"></script>
</body>

</html>

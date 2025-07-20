<!DOCTYPE html>
<html lang="en">
<?php $headTitle = 'Whizwheels - Bike Rental'; ?>
<?php include './partials/head.php' ?>


<body>

    <!-- Preloader Start -->
    <?php include './partials/preloader.php' ?>

    <!-- Back To Top Start -->
    <?php include './partials/scroll-up.php' ?>

    <!-- Offcanvas Area Start -->
    <?php include './partials/offcanvas.php' ?>

    <!-- Header Section Start -->
    <header class="header-section">
        <div class="header-top-section style-two">
            <div class="container-fluid">
                <div class="header-top-wrapper style-2">
                    <ul class="contact-list">
                        <li>
                            <i class="fas fa-envelope"></i>
                            <a href="mailto:contact@whizwheels.bike" class="link">contact@whizwheels.bike</a>
                        </li>
                        <li>
                            <i class="fas fa-map-marker-alt"></i>
                            Honnavara, Karnataka, India
                        </li>
                    </ul>
                    <div class="header-top-right">
                        <ul class="top-list">
                            <li><a href="faq.php">Help</a></li>
                            <li><a href="contact.php">Support</a></li>
                            <li><a href="contact.php">Contact</a></li>
                        </ul>
                        <div class="social-icon d-flex align-items-center">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                            <a href="#"><i class="fa-brands fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="header-sticky" class="header-3">
            <div class="container-fluid">
                <div class="mega-menu-wrapper">
                    <div class="header-main">
                        <div class="header-left">
                            <div class="logo">
                                <a href="index.php" class="header-logo-1">
                                    <img src="assets/img/logo/white-logo-2.svg" alt="logo-img">
                                </a>
                                <a href="index.php" class="header-logo-2">
                                    <img src="assets/img/logo/black-logo.svg" alt="logo-img">
                                </a>
                            </div>
                            <div class="mean__menu-wrapper">
                                <div class="main-menu">
                                    <nav id="mobile-menu">
                                        <ul>
                                            <li class="has-dropdown active menu-thumb">
                                                <a href="index.php">
                                                    Home
                                                    <i class="fas fa-angle-down"></i>
                                                </a>
                                                <ul class="submenu">
                                                    <li><a href="index.php">Home 01</a></li>
                                                    <li><a href="index-2.php">Home 02</a></li>
                                                    <li><a href="index-3.php">Home 03</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="about.php">About Us</a>
                                            </li>
                                            <li class="has-dropdown">
                                                <a href="news.php">
                                                    Pages
                                                    <i class="fas fa-angle-down"></i>
                                                </a>
                                                <ul class="submenu">
                                                    <li><a href="gallery.php">Gallery</a></li>
                                                    <li><a href="faq.php">Faq's</a></li>
                                                </ul>
                                            </li>
                                            <li class="has-dropdown">
                                                <a href="bike-grid.php">
                                                    Bikes
                                                    <i class="fas fa-angle-down"></i>
                                                </a>
                                                <ul class="submenu">
                                                    <li><a href="bike-grid.php">Bike Grid</a></li>
                                                    <li><a href="bike-list.php">Bike List</a></li>
                                                    <li><a href="bike-details.php">Bike Details</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="news.php">
                                                    Blog
                                                    <i class="fas fa-angle-down"></i>
                                                </a>
                                                <ul class="submenu">
                                                    <li><a href="news.php">Blog</a></li>
                                                    <li><a href="news-details.php">Blog Details</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="contact.php">Contact</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="header-right d-flex justify-content-end align-items-center">
                            <div class="icon-items">
                                <div class="icon">
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                                <div class="content">
                                    <p>Call Anytime</p>
                                    <h6><a href="tel:+919876543210">+91 98765 43210</a></h6>
                                </div>
                            </div>
                            <a href="#0" class="search-trigger search-icon"><i
                                    class="fa-regular fa-magnifying-glass"></i></a>
                            <div class="header-button">
                                <a href="bike-grid.php" class="theme-btn">
                                    Find a Bike
                                </a>
                            </div>
                            <div class="header__hamburger d-xl-none my-auto">
                                <div class="sidebar__toggle">
                                    <i class="fas fa-bars"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Search Area Start -->
    <?php include './partials/search-wrap.php' ?>

    <!-- Hero Section Start -->
    <section class="hero-section hero-3 fix">
        <div class="array-button">
            <button class="image-array-left bg-cover" style="background-image: url('https://placehold.co/200x200/a2d2ff/333333?text=Ride+1');">
                <i class="fa-solid fa-chevron-left"></i>
            </button>
            <button class="image-array-right bg-cover" style="background-image: url('https://placehold.co/200x200/ffafcc/333333?text=Ride+2');">
                <i class="fa-solid fa-chevron-right"></i>
            </button>
        </div>
        <h6 class="search-text">Search Any Bike</h6>
        <div class="line-icon">
            <img src="assets/img/hero/icon.png" alt="img">
        </div>
        <div class="swiper hero-slider-3">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="hero-image bg-cover" style="background-image: url('https://placehold.co/1920x1080/cddafd/333333?text=Explore+Honnavara');">
                        <div class="line-shape" data-animation="slideInLeft" data-duration="3s" data-delay="2.1s">
                            <img src="assets/img/hero/line-shape-1.png" alt="shape-img">
                        </div>
                        <div class="line-shape-2" data-animation="slideInLeft" data-duration="3s" data-delay="2.3s">
                            <img src="assets/img/hero/line-shape-2.png" alt="shape-img">
                        </div>
                    </div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-xl-12">
                                <div class="hero-content">
                                    <h4 class="text-white" data-animation="fadeInUp" data-delay="1.3s">
                                        Welcome to Whizwheels Rentals
                                    </h4>
                                    <h1 class="text-white" data-animation="fadeInUp" data-delay="1.3s">
                                        Save Big <br>
                                        with Bike Rental
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="hero-image bg-cover" style="background-image: url('https://placehold.co/1920x1080/b9fbc0/333333?text=Ride+in+Style');">
                        <div class="line-shape" data-animation="slideInLeft" data-duration="3s" data-delay="2.1s">
                            <img src="assets/img/hero/line-shape-1.png" alt="shape-img">
                        </div>
                        <div class="line-shape-2" data-animation="slideInLeft" data-duration="3s" data-delay="2.3s">
                            <img src="assets/img/hero/line-shape-2.png" alt="shape-img">
                        </div>
                    </div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-xl-12">
                                <div class="hero-content">
                                    <h4 class="text-white" data-animation="fadeInUp" data-delay="1.3s">
                                        Welcome to Whizwheels Rentals
                                    </h4>
                                    <h1 class="text-white" data-animation="fadeInUp" data-delay="1.3s">
                                        Your Adventure <br>
                                        Awaits on Two Wheels
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Search Booking Section Start -->
    <section class="search-booking-section section-padding">
        <div class="container">
            <div class="search-booking-wrapper">
                <div class="booking-man float-bob-x">
                    <img src="https://placehold.co/400x500/fde4cf/333333?text=Happy+Rider" alt="img">
                </div>
                <div class="row g-4 justify-content-between">
                    <div class="col-xl-6 col-lg-6">
                        <div class="search-booking-content">
                            <div class="section-title">
                                <img src="assets/img/sub-icon.png" alt="icon-img" class="wow fadeInUp">
                                <span class="wow fadeInUp" data-wow-delay=".2s">Get to know us</span>
                                <h2 class="wow fadeInUp" data-wow-delay=".4s">
                                    Search, Book & <br>
                                    Rent a Bike Easily
                                </h2>
                            </div>
                            <p class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".6s">
                                Lorem ipsum is simply ipun txns mane so dummy text of free <br> available in market the
                                printing and typesetting industry has <br> been the industry's standard dummy text ever.
                            </p>
                            <div class="icon-area">
                                <div class="icon-items wow fadeInUp" data-wow-delay=".3s">
                                    <div class="icon">
                                        <img src="assets/img/feature-benefit/icon-1.png" alt="icon-img">
                                    </div>
                                    <h4>
                                        Easier & <br>
                                        Faster Bookings
                                    </h4>
                                </div>
                                <div class="icon-items wow fadeInUp" data-wow-delay=".5s">
                                    <div class="icon">
                                        <img src="assets/img/feature-benefit/icon-2.png" alt="icon-img">
                                    </div>
                                    <h4>
                                        Too Many <br>
                                        Pickup Locations
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6">
                        <div class="product-search-area">
                            <form action="#" id="contact-form" method="POST">
                                <div class="row g-4">
                                    <div class="col-md-12">
                                        <div class="pickup-items">
                                            <label class="field-label">Pickup Location</label>
                                            <div class="category-oneadjust">
                                                <select name="cate" class="category">
                                                    <option value="1">Apsarakonda Falls</option>
                                                    <option value="2">Murudeshwar Beach</option>
                                                    <option value="3">Kasarkod Beach</option>
                                                    <option value="4">Sharavathi Mangrove Boardwalk</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="pickup-items">
                                            <label class="field-label">Pick-up Date</label>
                                            <div id="datepicker3" class="input-group date" data-date-format="dd-mm-yyyy">
                                                <input class="form-control" type="text" placeholder="Check in" readonly>
                                                <span class="input-group-addon"> <i
                                                        class="fa-solid fa-calendar-days"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="pickup-items">
                                            <label class="field-label">Drop-off Date</label>
                                            <div id="datepicker4" class="input-group date"
                                                data-date-format="dd-mm-yyyy">
                                                <input class="form-control" type="text" placeholder="Check out" readonly>
                                                <span class="input-group-addon"> <i
                                                        class="fa-solid fa-calendar-days"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="pickup-items">
                                            <label class="field-label">Bike Type</label>
                                            <div class="category-oneadjust">
                                                <select name="cate" class="category">
                                                    <option value="1">All Bikes</option>
                                                    <option value="2">Mountain</option>
                                                    <option value="3">Road</option>
                                                    <option value="4">Cruiser</option>
                                                    <option value="5">Electric</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="pickup-items">
                                            <button type="submit" class="theme-btn">
                                                Find a Bike
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Bike Rentals Section Start -->
    <section class="car-rentals-section-2 section-padding fix">
        <div class="container">
            <div class="section-title text-center">
                <img src="assets/img/sub-icon.png" alt="icon-img" class="wow fadeInUp">
                <span class="wow fadeInUp" data-wow-delay=".2s">Checkout our new bikes</span>
                <h2 class="wow fadeInUp" data-wow-delay=".4s">
                    Bikes We’re Offering <br>
                    for Rentals
                </h2>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="car-rentals-items">
                        <div class="car-image">
                            <img src="https://placehold.co/600x400/9bf6ff/333333?text=Himalayan+Explorer" alt="img">
                        </div>
                        <div class="car-content">
                            <div class="post-cat">
                                2024 Model
                            </div>
                            <div class="star">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half-stroke"></i>
                                <span>5 Reviews</span>
                            </div>
                            <h4><a href="bike-details.php">Himalayan Explorer</a></h4>
                            <h6>₹1500 <span>/ Day</span></h6>
                            <a href="bike-details.php" class="theme-btn bg-color w-100 text-center">Book Now <i
                                    class="fa-solid fa-arrow-right ps-1"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                    <div class="car-rentals-items">
                        <div class="car-image">
                            <img src="https://placehold.co/600x400/caffbf/333333?text=City+Sprinter" alt="img">
                        </div>
                        <div class="car-content">
                            <div class="post-cat">
                                2024 Model
                            </div>
                            <div class="star">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <span>8 Reviews</span>
                            </div>
                            <h4><a href="bike-details.php">City Sprinter Road Bike</a></h4>
                            <h6>₹1800 <span>/ Day</span></h6>
                            <a href="bike-details.php" class="theme-btn bg-color w-100 text-center">Book Now <i
                                    class="fa-solid fa-arrow-right ps-1"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                    <div class="car-rentals-items">
                        <div class="car-image">
                            <img src="https://placehold.co/600x400/a0c4ff/333333?text=Volt-Ryder" alt="img">
                        </div>
                        <div class="car-content">
                            <div class="post-cat">
                                2024 Model
                            </div>
                            <div class="star">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <span>12 Reviews</span>
                            </div>
                            <h4><a href="bike-details.php">Volt-Ryder Electric</a></h4>
                            <h6>₹2500 <span>/ Day</span></h6>
                            <a href="bike-details.php" class="theme-btn bg-color w-100 text-center">Book Now <i
                                    class="fa-solid fa-arrow-right ps-1"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Section Start -->
    <div class="gallery-section-2 fix">
        <div class="gallery-wrapper">
            <div class="row g-4">
                <div class="col-xxl-5 col-xl-6 col-lg-7">
                    <div class="row g-3">
                        <div class="col-lg-6 col-md-6">
                            <div class="gallery-image">
                                <img src="https://placehold.co/600x800/fbf8cc/333333?text=Bike+Gallery+1" alt="img">
                                <div class="icon-box">
                                    <a href="https://placehold.co/1200x1600/fbf8cc/333333?text=Bike+Gallery+1" class="icon img-popup-2">
                                        <i class="fa-solid fa-plus"></i>
                                    </a>
                                </div>
                                <div class="mask"></div>
                                <div class="mask-second"></div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="row g-3">
                                <div class="col-lg-12">
                                    <div class="gallery-image">
                                        <img src="https://placehold.co/600x400/fde4cf/333333?text=Bike+Gallery+2" alt="img">
                                        <div class="icon-box">
                                            <a href="https://placehold.co/1200x800/fde4cf/333333?text=Bike+Gallery+2" class="icon img-popup-2">
                                                <i class="fa-solid fa-plus"></i>
                                            </a>
                                        </div>
                                        <div class="mask"></div>
                                        <div class="mask-second"></div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="gallery-image">
                                        <img src="https://placehold.co/600x400/ffcfd2/333333?text=Bike+Gallery+3" alt="img">
                                        <div class="icon-box">
                                            <a href="https://placehold.co/1200x800/ffcfd2/333333?text=Bike+Gallery+3" class="icon img-popup-2">
                                                <i class="fa-solid fa-plus"></i>
                                            </a>
                                        </div>
                                        <div class="mask"></div>
                                        <div class="mask-second"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-6 col-lg-5 col-md-6">
                    <div class="gallery-image style-width">
                        <img src="https://placehold.co/600x800/f1c0e8/333333?text=Bike+Gallery+4" alt="img">
                        <div class="icon-box">
                            <a href="https://placehold.co/1200x1600/f1c0e8/333333?text=Bike+Gallery+4" class="icon img-popup-2">
                                <i class="fa-solid fa-plus"></i>
                            </a>
                        </div>
                        <div class="mask"></div>
                        <div class="mask-second"></div>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-6 col-lg-4 col-md-6">
                    <div class="gallery-content">
                        <div class="icon">
                            <img src="assets/img/gallery/icon.png" alt="img">
                        </div>
                        <h2>
                            Trusted & Reliable
                            Bike Rentals <br>
                            Gallery
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Testimonial Section Start -->
    <section class="testimonial-section-3 bg-cover section-padding fix"
        style="background-image: url('assets/img/testimonial/bg-testimonial-home3.png');">
        <div class="container">
            <div class="testimonial-wrapper-2">
                <div class="swiper testimonial-slider-3">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testimonial-single-items">
                                <div class="testimonial-img bg-cover"
                                    style="background-image: url('assets/img/testimonial/01.jpg');"></div>
                                <div class="testimonial-content">
                                    <p>
                                        This is due to their excellent service, competitive pricing and customer
                                        support. It’s throughly refresing to get such a personal touch.
                                    </p>
                                    <div class="name-job">
                                        <h3 class="name">
                                            Arjun Sharma
                                        </h3>
                                        <div class="separator">.</div>
                                        <span class="job">Customer</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-single-items">
                                <div class="testimonial-img bg-cover"
                                    style="background-image: url('assets/img/testimonial/02.jpg');"></div>
                                <div class="testimonial-content">
                                    <p>
                                        This is due to their excellent service, competitive pricing and customer
                                        support. It’s throughly refresing to get such a personal touch.
                                    </p>
                                    <div class="name-job">
                                        <h3 class="name">
                                            Priya Patel
                                        </h3>
                                        <div class="separator">.</div>
                                        <span class="job">Customer</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-single-items">
                                <div class="testimonial-img bg-cover"
                                    style="background-image: url('assets/img/testimonial/03.jpg');"></div>
                                <div class="testimonial-content">
                                    <p>
                                        This is due to their excellent service, competitive pricing and customer
                                        support. It’s throughly refresing to get such a personal touch.
                                    </p>
                                    <div class="name-job">
                                        <h3 class="name">
                                            Aarav Singh
                                        </h3>
                                        <div class="separator">.</div>
                                        <span class="job">Customer</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="client-img-items">
                    <div class="client-img bg-cover" style="background-image: url('assets/img/testimonial/01.jpg');">
                    </div>
                    <div class="client-img bg-cover" style="background-image: url('assets/img/testimonial/02.jpg');">
                    </div>
                    <div class="client-img bg-cover" style="background-image: url('assets/img/testimonial/03.jpg');">
                    </div>
                    <div class="array-button wow fadeInUp" data-wow-delay=".6s">
                        <button class="array-prev"><i class="fa-solid fa-arrow-left-long"></i></button>
                        <button class="array-next"><i class="fa-solid fa-arrow-right-long"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Faster Booking Section Start -->
    <section class="faster-booking-section fix section-padding pt-0">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3 wow fadeInUp" data-wow-delay=".3s">
                    <div class="faster-booking-image">
                        <img src="https://placehold.co/400x500/cfbaf0/333333?text=Easy+Booking" alt="img">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay=".5s">
                    <div class="faster-booking-items">
                        <div class="thumb">
                            <img src="https://placehold.co/800x600/a3c4f3/333333?text=Quick+Process" alt="img">
                        </div>
                        <div class="content">
                            <div class="icon">
                                <img src="assets/img/feature-benefit/icon-1.png" alt="icon-img">
                            </div>
                            <h4>
                                Easier & <br>
                                Faster Bookings
                            </h4>
                            <p>
                                Sed ut perspiciatis unde omnis <br> iste natus.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 wow fadeInUp" data-wow-delay=".7s">
                    <div class="faster-booking-image">
                        <img src="https://placehold.co/400x500/90dbf4/333333?text=Ride+Now" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section Start -->
    <section class="team-section fix section-padding pt-0">
        <div class="container">
            <div class="section-title text-center">
                <img src="assets/img/sub-icon.png" alt="icon-img" class="wow fadeInUp">
                <span class="wow fadeInUp" data-wow-delay=".2s">Our expert people</span>
                <h2 class="wow fadeInUp" data-wow-delay=".4s">
                    Meet Our Professional <br>
                    Team Members
                </h2>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="team-card-items">
                        <div class="border-shape">
                            <img src="assets/img/team/border.png" alt="img">
                        </div>
                        <div class="team-image">
                            <img src="assets/img/team/team-01.jpg" alt="team-img">
                        </div>
                        <div class="team-content">
                            <h3><a href="index-3.php">Mike Hardson</a></h3>
                            <p>manager</p>
                            <div class="social-icon d-flex align-items-center justify-content-center">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                    <div class="team-card-items">
                        <div class="border-shape">
                            <img src="assets/img/team/border.png" alt="img">
                        </div>
                        <div class="team-image">
                            <img src="assets/img/team/team-02.jpg" alt="team-img">
                        </div>
                        <div class="team-content">
                            <h3><a href="index-3.php">Aleesha Brown</a></h3>
                            <p>manager</p>
                            <div class="social-icon d-flex align-items-center justify-content-center">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                    <div class="team-card-items">
                        <div class="border-shape">
                            <img src="assets/img/team/border.png" alt="img">
                        </div>
                        <div class="team-image">
                            <img src="assets/img/team/team-03.jpg" alt="team-img">
                        </div>
                        <div class="team-content">
                            <h3><a href="index-3.php">David Jhonson</a></h3>
                            <p>manager</p>
                            <div class="social-icon d-flex align-items-center justify-content-center">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- News Section Start -->
    <section class="news-section section-padding fix bg-cover" style="background-image: url('assets/img/news/bg.jpg');">
        <div class="container">
            <div class="section-title text-center">
                <img src="assets/img/sub-icon.png" alt="icon-img" class="wow fadeInUp">
                <span class="wow fadeInUp" data-wow-delay=".2s">From the Blog</span>
                <h2 class="text-white wow fadeInUp" data-wow-delay=".4s">
                    Latest News & <br>
                    Articles From the Blog
                </h2>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="news-card-items">
                        <div class="news-image">
                            <img src="https://placehold.co/600x400/8eecf5/333333?text=Blog+Post+1" alt="news-img">
                            <div class="post-date">
                                <h6>
                                    20 <br>
                                    Jul
                                </h6>
                            </div>
                        </div>
                        <div class="news-content">
                            <div class="post-client">
                                <img src="assets/img/news/client.png" alt="img">
                            </div>
                            <div class="news-cont">
                                <span>by Arjun Sharma</span>
                                <h3><a href="news-details.php">Top 5 Scenic Biking Trails in Honnavara</a></h3>
                                <p>Discover the best routes to explore the natural beauty around the city on two wheels...</p>
                            </div>
                            <ul>
                                <li>
                                    <i class="fa-solid fa-comments"></i>
                                    2 Comments
                                </li>
                                <li>
                                    <a href="news-details.php">
                                        <i class="fa-solid fa-arrow-right-long"></i>
                                        More
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                    <div class="news-card-items">
                        <div class="news-image">
                            <img src="https://placehold.co/600x400/98f5e1/333333?text=Blog+Post+2" alt="news-img">
                            <div class="post-date">
                                <h6>
                                    15 <br>
                                    Jul
                                </h6>
                            </div>
                        </div>
                        <div class="news-content">
                            <div class="post-client">
                                <img src="assets/img/news/client.png" alt="img">
                            </div>
                            <div class="news-cont">
                                <span>by Priya Patel</span>
                                <h3><a href="news-details.php">Choosing the Right Bike for Your Ride</a></h3>
                                <p>A quick guide to help you select the perfect bike from our fleet for your adventure...</p>
                            </div>
                            <ul>
                                <li>
                                    <i class="fa-solid fa-comments"></i>
                                    5 Comments
                                </li>
                                <li>
                                    <a href="news-details.php">
                                        <i class="fa-solid fa-arrow-right-long"></i>
                                        More
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                    <div class="news-card-items">
                        <div class="news-image">
                            <img src="https://placehold.co/600x400/b9fbc0/333333?text=Blog+Post+3" alt="news-img">
                            <div class="post-date">
                                <h6>
                                    10 <br>
                                    Jul
                                </h6>
                            </div>
                        </div>
                        <div class="news-content">
                            <div class="post-client">
                                <img src="assets/img/news/client.png" alt="img">
                            </div>
                            <div class="news-cont">
                                <span>by Aarav Singh</span>
                                <h3><a href="news-details.php">Health Benefits of Regular Cycling</a></h3>
                                <p>Explore how renting a bike and cycling regularly can improve your physical and mental well-being...</p>
                            </div>
                            <ul>
                                <li>
                                    <i class="fa-solid fa-comments"></i>
                                    8 Comments
                                </li>
                                <li>
                                    <a href="news-details.php">
                                        <i class="fa-solid fa-arrow-right-long"></i>
                                        More
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Cta Bike Booking Section Start -->
    <section class="cta-car-booking-section bg-cover section-padding"
        style="background-image: url('assets/img/cta/cta-service.jpg');">
        <div class="container">
            <div class="row g-4 justify-content-center">
                <div class="col-lg-12">
                    <div class="cta-car-booking-items">
                        <div class="content">
                            <h2 class="wow fadeInUp" data-wow-delay=".3s">
                                Save Time & Money with Top <br>
                                Rent Bike Service in Town
                            </h2>
                            <div class="button-items">
                                <a href="about.php" class="theme-btn bg-white wow fadeInUp"
                                    data-wow-delay=".5s">Discover More</a>
                                <a href="bike-grid.php" class="theme-btn bg-header wow fadeInUp"
                                    data-wow-delay=".7s">Book Your Bike</a>
                            </div>
                        </div>
                        <div class="car-image">
                            <img src="https://placehold.co/800x600/fbf8cc/333333?text=Book+Your+Bike" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Faq Section Start -->
    <section class="faq-section fix section-padding">
        <div class="container">
            <div class="faq-wrapper">
                <div class="row g-4">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay=".4s">
                        <div class="faq-image">
                            <img src="https://placehold.co/600x600/fde4cf/333333?text=Got+Questions%3F" alt="img">
                            <div class="color-shape float-bob-y">
                                <img src="assets/img/faq-color-shape.png" alt="img">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="faq-content">
                            <div class="section-title">
                                <img src="assets/img/sub-icon.png" alt="icon-img" class="wow fadeInUp">
                                <span class="wow fadeInUp" data-wow-delay=".2s">Frequently asked questions</span>
                                <h2 class="wow fadeInUp" data-wow-delay=".4s">
                                    Question & Answers
                                </h2>
                            </div>
                            <div class="faq-accordion mt-4 mt-md-0">
                                <div class="accordion" id="accordion">
                                    <div class="accordion-item mb-4 wow fadeInUp" data-wow-delay=".3s">
                                        <h5 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#faq1" aria-expanded="false"
                                                aria-controls="faq1">
                                                What documents are required to rent a bike?
                                            </button>
                                        </h5>
                                        <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                You will need a valid driving license, and a copy of your Aadhaar card or Passport for identification purposes. For international visitors, a valid passport and international driving permit are required.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item mb-4 wow fadeInUp" data-wow-delay=".5s">
                                        <h5 class="accordion-header">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#faq2" aria-expanded="true" aria-controls="faq2">
                                                Is a helmet provided with the rental?
                                            </button>
                                        </h5>
                                        <div id="faq2" class="accordion-collapse show" data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                Yes, we provide one helmet with each bike rental, as wearing one is mandatory for your safety and by law. If you need an additional helmet for a pillion rider, it can be provided for a small extra charge.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item wow fadeInUp" data-wow-delay=".7s">
                                        <h5 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#faq3" aria-expanded="false"
                                                aria-controls="faq3">
                                                Is there a security deposit for renting a bike?
                                            </button>
                                        </h5>
                                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                            <div class="accordion-body">
                                                Yes, a refundable security deposit is required at the time of pickup. The amount varies depending on the bike model. The deposit will be returned to you in full after the bike is returned in its original condition.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Brand Section Start -->
    <div class="brand-wrapper style-2 pt-0 pb-80">
        <div class="array-button">
            <button class="array-prev-2"><i class="far fa-chevron-left"></i></button>
            <button class="array-next-2"><i class="far fa-chevron-right"></i></button>
        </div>
        <div class="container">
            <div class="swiper brand-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="brand-image style-color">
                            <img src="assets/img/brand/01.png" alt="img">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-image style-color">
                            <img src="assets/img/brand/02.png" alt="img">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-image style-color">
                            <img src="assets/img/brand/03.png" alt="img">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-image style-color">
                            <img src="assets/img/brand/04.png" alt="img">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-image style-color">
                            <img src="assets/img/brand/05.png" alt="img">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-image style-color">
                            <img src="assets/img/brand/06.png" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Cta Cheap Rental Section Start -->
    <section class="cta-cheap-rental-section">
        <div class="container">
            <div class="cta-cheap-rental">
                <div class="cta-cheap-rental-left wow fadeInUp" data-wow-delay="
                    .3s">
                    <div class="logo-thumb">
                        <a href="index.php">
                            <img src="assets/img/logo/white-logo.svg" alt="logo-img">
                        </a>
                    </div>
                    <h4 class="text-white">Save big with our affordable bike rentals</h4>
                </div>
                <div class="social-icon d-flex align-items-center wow fadeInUp" data-wow-delay="
                    .5s">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                    <a href="#"><i class="fa-brands fa-youtube"></i></a>
                </div>
            </div>
        </div>
    </section>

    <?php include './partials/footer.php' ?>

    <?php include './partials/script.php' ?>
</body>

</html>

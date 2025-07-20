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
    <header id="header-sticky" class="header-2">
        <div class="container-fluid">
            <div class="mega-menu-wrapper">
                <div class="header-main">
                    <div class="header-left">
                        <div class="logo">
                            <a href="index.php" class="header-logo">
                                <img src="assets/img/logo/black-logo.svg" alt="logo-img">
                            </a>
                        </div>
                        <a href="#0" class="search-trigger search-icon"><i
                                class="fa-regular fa-magnifying-glass"></i></a>
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
    </header>

    <!-- Search Area Start -->
    <?php include './partials/search-wrap.php' ?>

    <!-- Hero Section Start -->
    <section class="hero-section-2 bg-cover fix" style="background-image: url('assets/img/hero/hero-bg.jpg');">
        <div class="radius-shape">
            <img src="assets/img/circle.png" alt="shape-img">
        </div>
        <div class="shadow-shape">
            <img src="assets/img/hero/shadow.png" alt="img">
        </div>
        <div class="array-button">
            <button class="image-array-left bg-cover" style="background-image: url('https://placehold.co/200x200/a2d2ff/333333?text=Ride+1');">
                <i class="fa-solid fa-chevron-left"></i>
            </button>
            <button class="image-array-right bg-cover" style="background-image: url('https://placehold.co/200x200/ffafcc/333333?text=Ride+2');">
                <i class="fa-solid fa-chevron-right"></i>
            </button>
        </div>
        <div class="swiper hero-slider-2">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="hero-2">
                        <div class="top-image" data-animation="fadeInDown" data-delay="1.5s">
                            <img src="assets/img/hero/top-img.png" alt="img">
                        </div>
                        <div class="circle-shape" data-animation="fadeInDown" data-delay="1.5s">
                            <img src="assets/img/hero/circle.png" alt="img">
                        </div>
                        <div class="container">
                            <div class="row g-4 align-items-center">
                                <div class="col-xl-7 col-lg-6">
                                    <div class="hero-content">
                                        <h6 data-animation="fadeInUp" data-delay=".3s" class="hero-title">Welcome to
                                            Whizwheels Rental</h6>
                                        <h1 data-animation="fadeInUp" data-delay=".5s">
                                            Search, Book <br>
                                            & Rent a Bike
                                            <span>Easily</span>
                                        </h1>
                                    </div>
                                </div>
                                <div class="col-xl-5 col-lg-6">
                                    <div class="hero-image" data-animation="fadeInUp" data-delay=".7s">
                                        <img src="https://placehold.co/800x600/cddafd/333333?text=Awesome+Bike" alt="img">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="hero-2">
                        <div class="top-image" data-animation="fadeInDown" data-delay="1.5s">
                            <img src="assets/img/hero/top-img.png" alt="img">
                        </div>
                        <div class="circle-shape" data-animation="fadeInDown" data-delay="1.5s">
                            <img src="assets/img/hero/circle.png" alt="img">
                        </div>
                        <div class="container">
                            <div class="row g-4 align-items-center">
                                <div class="col-xl-7 col-lg-6">
                                    <div class="hero-content">
                                        <h6 data-animation="fadeInUp" data-delay=".3s" class="hero-title">Welcome to
                                            Whizwheels Rental</h6>
                                        <h1 data-animation="fadeInUp" data-delay=".5s">
                                            Your Adventure <br>
                                            Starts on Two
                                            <span>Wheels</span>
                                        </h1>
                                    </div>
                                </div>
                                <div class="col-xl-5 col-lg-6">
                                    <div class="hero-image" data-animation="fadeInUp" data-delay=".7s">
                                        <img src="https://placehold.co/800x600/ffafcc/333333?text=Another+Bike" alt="img">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pick Up Location Section Start -->
    <div class="pickup-loaction-area-2">
        <div class="container">
            <div class="pickup-wrapper style-2 wow fadeInUp" data-wow-delay=".4s">
                <div class="pickup-items">
                    <label class="field-label">Pick-up Location</label>
                    <div class="category-oneadjust">
                        <select name="cate" class="category">
                            <option value="1">Select Location</option>
                            <option value="2">Mysore Palace</option>
                            <option value="3">Brindavan Gardens</option>
                            <option value="4">KRS Backwaters</option>
                            <option value="5">Chamundi Hills</option>
                        </select>
                    </div>
                </div>
                <div class="pickup-items">
                    <label class="field-label">Pickup Date</label>
                    <div id="datepicker" class="input-group date" data-date-format="dd-mm-yyyy">
                        <input class="form-control" type="text" placeholder="Check in" readonly>
                        <span class="input-group-addon"> <i class="fa-solid fa-calendar-days"></i></span>
                    </div>
                </div>
                <div class="pickup-items">
                    <label class="field-label">Dropoff Date</label>
                    <div id="datepicker2" class="input-group date" data-date-format="dd-mm-yyyy">
                        <input class="form-control" type="text" placeholder="Check out" readonly>
                        <span class="input-group-addon"> <i class="fa-solid fa-calendar-days"></i></span>
                    </div>
                </div>
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
                <div class="pickup-items">
                    <label class="field-label style-2">button</label>
                    <button class="pickup-btn" type="submit">
                        Find a Bike
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Select Bike Section Start -->
    <section class="select-car-section section-padding fix">
        <div class="container">
            <div class="section-title text-center">
                <img src="assets/img/sub-icon.png" alt="img" class="wow fadeInUp">
                <span class="wow fadeInUp" data-wow-delay=".2s">Select Bike Types</span>
                <h2 class="wow fadeInUp" data-wow-delay=".4s">
                    We’re Offering Popular <br>
                    Bike Models
                </h2>
            </div>
            <div class="row">
                <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".2s">
                    <div class="select-car-items">
                        <div class="thumb">
                            <img src="https://placehold.co/300x200/ffadad/333333?text=Mountain" alt="">
                        </div>
                        <div class="bg-overlay"></div>
                        <div class="icon">
                            <i class="fa-solid fa-mountain-sun fa-2x text-white"></i>
                        </div>
                        <div class="content">
                            <h5><a href="bike-details.php">Mountain</a></h5>
                            <p>10 Bikes Available</p>
                        </div>
                        <a href="bike-details.php" class="arrow-icon"><i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="select-car-items">
                        <div class="thumb">
                            <img src="https://placehold.co/300x200/ffd6a5/333333?text=Road" alt="">
                        </div>
                        <div class="bg-overlay"></div>
                        <div class="icon">
                            <i class="fa-solid fa-road fa-2x text-white"></i>
                        </div>
                        <div class="content">
                            <h5><a href="bike-details.php">Road</a></h5>
                            <p>12 Bikes Available</p>
                        </div>
                        <a href="bike-details.php" class="arrow-icon"><i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".4s">
                    <div class="select-car-items">
                        <div class="thumb">
                            <img src="https://placehold.co/300x200/fdffb6/333333?text=Cruiser" alt="">
                        </div>
                        <div class="bg-overlay"></div>
                        <div class="icon">
                            <i class="fa-solid fa-couch fa-2x text-white"></i>
                        </div>
                        <div class="content">
                            <h5><a href="bike-details.php">Cruiser</a></h5>
                            <p>8 Bikes Available</p>
                        </div>
                        <a href="bike-details.php" class="arrow-icon"><i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".5s">
                    <div class="select-car-items">
                        <div class="thumb">
                            <img src="https://placehold.co/300x200/caffbf/333333?text=Hybrid" alt="">
                        </div>
                        <div class="bg-overlay"></div>
                        <div class="icon">
                            <i class="fa-solid fa-city fa-2x text-white"></i>
                        </div>
                        <div class="content">
                            <h5><a href="bike-details.php">Hybrid</a></h5>
                            <p>15 Bikes Available</p>
                        </div>
                        <a href="bike-details.php" class="arrow-icon"><i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".6s">
                    <div class="select-car-items">
                        <div class="thumb">
                            <img src="https://placehold.co/300x200/9bf6ff/333333?text=Electric" alt="">
                        </div>
                        <div class="bg-overlay"></div>
                        <div class="icon">
                            <i class="fa-solid fa-bolt-lightning fa-2x text-white"></i>
                        </div>
                        <div class="content">
                            <h5><a href="bike-details.php">Electric</a></h5>
                            <p>5 Bikes Available</p>
                        </div>
                        <a href="bike-details.php" class="arrow-icon"><i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".7s">
                    <div class="select-car-items">
                        <div class="thumb">
                            <img src="https://placehold.co/300x200/a0c4ff/333333?text=Kids" alt="">
                        </div>
                        <div class="bg-overlay"></div>
                        <div class="icon">
                            <i class="fa-solid fa-child fa-2x text-white"></i>
                        </div>
                        <div class="content">
                            <h5><a href="bike-details.php">Kids</a></h5>
                            <p>7 Bikes Available</p>
                        </div>
                        <a href="bike-details.php" class="arrow-icon"><i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section Start -->
    <section class="about-section-2 fix section-padding bg-cover"
        style="background-image: url('assets/img/car/car-bg.jpg');">
        <div class="container">
            <div class="about-wrapper-2">
                <div class="row g-4">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="about-image">
                            <img src="https://placehold.co/600x700/b9fbc0/333333?text=About+Whizwheels" alt="about-image">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-content">
                            <div class="section-title">
                                <img src="assets/img/sub-icon.png" alt="icon-img" class="wow fadeInUp">
                                <span class="wow fadeInUp" data-wow-delay=".2s">Get to know us</span>
                                <h2 class="wow fadeInUp" data-wow-delay=".4s">
                                    Trusted & Leading in
                                    Bike Rental Services
                                </h2>
                            </div>
                            <p class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".6s">
                                There are many variations of passages of Lorem Ipsum available, but the majority have
                                suffered alteration in some form, by injected humour, or randomised.
                            </p>
                            <div class="about-list-wrapper">
                                <div class="about-list-items wow fadeInUp" data-wow-delay=".3s">
                                    <ul>
                                        <li>
                                            <i class="fa-solid fa-arrow-right"></i>
                                            Wide Range of Quality Bikes
                                        </li>
                                        <li>
                                            <i class="fa-solid fa-arrow-right"></i>
                                            Competitive Pricing & Offers
                                        </li>
                                        <li>
                                            <i class="fa-solid fa-arrow-right"></i>
                                            Easy Online Booking System
                                        </li>
                                        <li>
                                            <i class="fa-solid fa-arrow-right"></i>
                                            Friendly Customer Support
                                        </li>
                                    </ul>
                                    <a href="about.php" class="theme-btn">Discover More</a>
                                </div>
                                <div class="author-items wow fadeInUp" data-wow-delay=".5s">
                                    <div class="icon">
                                        <i class="fa-solid fa-phone"></i>
                                    </div>
                                    <p>Need help? Talk to an <br> Expert</p>
                                    <h6><a href="tel:+919876543210">+91 98765 43210</a></h6>
                                </div>
                            </div>
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
            <div class="car-rentals-wrapper style-2">
                <div class="array-button">
                    <button class="array-prev"><i class="far fa-chevron-left"></i></button>
                    <button class="array-next"><i class="far fa-chevron-right"></i></button>
                </div>
                <div class="swiper car-rentals-slider-2">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
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
                        <div class="swiper-slide">
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
                        <div class="swiper-slide">
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
            </div>
        </div>
    </section>

    <!-- How Works Section Start -->
    <section class="how-works-section fix section-padding pt-0">
        <div class="container">
            <div class="section-title text-center">
                <img src="assets/img/sub-icon.png" alt="img" class="wow fadeInUp">
                <span class="wow fadeInUp" data-wow-delay=".2s">Simple 4 easy steps</span>
                <h2 class="wow fadeInUp" data-wow-delay=".4s">See How It Works</h2>
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                    <div class="how-works-items">
                        <h6 class="title"><a href="bike-details.php">Search</a></h6>
                        <div class="icon-box">
                            <div class="icon">
                                <img src="assets/img/how-work/icon-1.png" alt="img" class="icon-1">
                                <img src="assets/img/how-work/icon-11.png" alt="img" class="icon-2">
                            </div>
                        </div>
                        <p>
                            Find the perfect bike for your trip by searching our wide selection of available models and locations.
                        </p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                    <div class="how-works-items">
                        <h6 class="title"><a href="bike-details.php">Select</a></h6>
                        <div class="icon-box">
                            <div class="icon">
                                <img src="assets/img/how-work/icon-2.png" alt="img" class="icon-1">
                                <img src="assets/img/how-work/icon-22.png" alt="img" class="icon-2">
                            </div>
                        </div>
                        <p>
                            Choose the bike that best suits your needs, from mountain bikes for trails to cruisers for city rides.
                        </p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                    <div class="how-works-items">
                        <h6 class="title"><a href="bike-details.php">Book</a></h6>
                        <div class="icon-box">
                            <div class="icon">
                                <img src="assets/img/how-work/icon-3.png" alt="img" class="icon-1">
                                <img src="assets/img/how-work/icon-33.png" alt="img" class="icon-2">
                            </div>
                        </div>
                        <p>
                            Complete your booking online in just a few clicks. It's fast, simple, and secure.
                        </p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                    <div class="how-works-items">
                        <h6 class="title"><a href="bike-details.php">Ride</a></h6>
                        <div class="icon-box">
                            <div class="icon">
                                <i class="fa-solid fa-person-biking fa-3x"></i>
                            </div>
                        </div>
                        <p>
                            Pick up your bike from the chosen location and enjoy your ride. Adventure awaits!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Rental Benefit Section Start -->
    <section class="rental-benefit-section fix section-padding pb-0">
        <div class="container">
            <div class="rental-benefit-wrapper">
                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="rental-benefit-image">
                            <img src="https://placehold.co/800x900/fde4cf/333333?text=Ride+with+Benefits" alt="img">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="rental-benefit-content">
                            <div class="section-title">
                                <img src="assets/img/sub-icon.png" alt="img" class="wow fadeInUp">
                                <span class="wow fadeInUp" data-wow-delay=".2s">our benefits</span>
                                <h2 class="text-white wow fadeInUp" data-wow-delay=".4s">
                                    Why You Should Ride
                                    with Whizwheels
                                </h2>
                            </div>
                            <p class="wow fadeInUp" data-wow-delay=".6s">
                                There are many variations of passages of available but the majority have suffered.
                                Alteration in some form, lipsum is simply free text by injected humou or randomised
                                words even believable.
                            </p>
                            <div class="icon-items wow fadeInUp" data-wow-delay=".3s">
                                <div class="icon">
                                    <img src="assets/img/feature-benefit/icon-4.png" alt="img">
                                </div>
                                <div class="content">
                                    <p>Benefit 01</p>
                                    <h3>Easy & Fast Booking</h3>
                                </div>
                            </div>
                            <div class="icon-items style-bottom wow fadeInUp" data-wow-delay=".5s">
                                <div class="icon">
                                    <img src="assets/img/feature-benefit/icon-5.png" alt="img">
                                </div>
                                <div class="content">
                                    <p>Benefit 02</p>
                                    <h3>Many Pickup Locations</h3>
                                </div>
                            </div>
                            <div class="benefit-counter-items wow fadeInUp" data-wow-delay=".7s">
                                <div class="icon-img">
                                    <img src="assets/img/feature-benefit/icon-6.png" alt="img">
                                    <div class="divider"></div>
                                </div>
                                <div class="content">
                                    <h2><span class="count">86,700</span></h2>
                                    <p>Our Satisfied Customers </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Brand Section Start -->
    <div class="brand-wrapper style-2 pt-80 pb-80">
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

    <!-- Bike Sale Section Start -->
    <section class="car-sale-section fix section-padding pt-0">
        <div class="container-fluid">
            <div class="car-sale-wrapper">
                <div class="sale-shape">
                    <img src="assets/img/bg-shape-saleoff.png" alt="shape-img">
                </div>
                <div class="badge-shape">
                    <img src="assets/img/bagde.png" alt="shape-img">
                </div>
                <div class="car-shape">
                    <img src="https://placehold.co/600x400/fbf8cc/333333?text=Sale+Bike" alt="img">
                </div>
                <div class="car-sale-content">
                    <h2 class="wow fadeInUp" data-wow-delay=".3s">Sale 25% Off</h2>
                    <h3 class="wow fadeInUp" data-wow-delay=".5s">on all bike rentals for 1 week</h3>
                    <a href="bike-grid.php" class="theme-btn bg-header wow fadeInUp" data-wow-delay=".7s">Book Your
                        Bike</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonial Section Start -->
    <section class="testimonial-section fix section-padding">
        <div class="container">
            <div class="testimonial-wrapper">
                <div class="row g-4">
                    <div class="col-lg-4">
                        <div class="section-title">
                            <img src="assets/img/sub-icon.png" alt="img" class="wow fadeInUp">
                            <span class="wow fadeInUp" data-wow-delay=".2s">our testimonials</span>
                            <h2 class="wow fadeInUp" data-wow-delay=".4s">
                                What They’re
                                Talking About
                                Whizwheels
                            </h2>
                        </div>
                        <p class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".6s">
                            Aliquam viverra arcu. Donec aliquet blandit enim feugiat. Suspendisse id quam sed eros
                            tincidunt luctus sit amet eu nibh tempus turpis.
                        </p>
                        <div class="array-button mt-5 wow fadeInUp" data-wow-delay=".6s">
                            <button class="array-prev"><i class="fa-solid fa-arrow-left-long"></i></button>
                            <button class="array-next"><i class="fa-solid fa-arrow-right-long"></i></button>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="testimonial-items">
                            <div class="swiper testimonial-slider-2">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="client-info-items">
                                            <p>
                                                This is due to their excellent service, competitive pricing and customer
                                                support. It’s throughly refresing to get such a personal touch. Duis
                                                aute irure dolor in reprehenderit in voluptate velit esse cillum.
                                            </p>
                                            <div class="info">
                                                <div class="icon">
                                                    <img src="assets/img/quote.png" alt="img">
                                                </div>
                                                <div class="name-job">
                                                    <h5 class="name">
                                                        Arjun Sharma
                                                    </h5>
                                                    <div class="separator">.</div>
                                                    <span class="job">Customer</span>
                                                </div>
                                                <div class="triangle">
                                                    <div class="inner-triangle"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="client-info-items">
                                            <p>
                                                This is due to their excellent service, competitive pricing and customer
                                                support. It’s throughly refresing to get such a personal touch. Duis
                                                aute irure dolor in reprehenderit in voluptate velit esse cillum.
                                            </p>
                                            <div class="info">
                                                <div class="icon">
                                                    <img src="assets/img/quote.png" alt="img">
                                                </div>
                                                <div class="name-job">
                                                    <h5 class="name">
                                                        Priya Patel
                                                    </h5>
                                                    <div class="separator">.</div>
                                                    <span class="job">Customer</span>
                                                </div>
                                                <div class="triangle">
                                                    <div class="inner-triangle"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-image">
                                <img src="assets/img/testimonial/right-testimonial.png" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Bike Slider Section Start -->
    <div class="car-slider-section section-padding pt-0">
        <div class="car-slider-wrapper">
            <div class="swiper car-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="car-slider-image">
                            <img src="https://placehold.co/600x400/a2d2ff/333333?text=Bike+1" alt="img">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="car-slider-image">
                            <img src="https://placehold.co/600x400/ffafcc/333333?text=Bike+2" alt="img">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="car-slider-image">
                            <img src="https://placehold.co/600x400/caffbf/333333?text=Bike+3" alt="img">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="car-slider-image">
                            <img src="https://placehold.co/600x400/ffd6a5/333333?text=Bike+4" alt="img">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="car-slider-image">
                            <img src="https://placehold.co/600x400/ffadad/333333?text=Bike+5" alt="img">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="car-slider-image">
                            <img src="https://placehold.co/600x400/9bf6ff/333333?text=Bike+6" alt="img">
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

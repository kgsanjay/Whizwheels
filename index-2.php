<!DOCTYPE html>
<html lang="en">
<?php $headTitle = 'Remons'; ?>
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
                                    <li>
                                        <a href="program-details.php">
                                            Cars
                                            <i class="fas fa-angle-down"></i>
                                        </a>
                                        <ul class="submenu">
                                            <li><a href="car-grid.php">Car Grid</a></li>
                                            <li><a href="car-list.php">Car List</a></li>
                                            <li><a href="car-list-sidebar.php">Car Sidebar</a></li>
                                            <li><a href="car-details.php">Car Details</a></li>
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
                                <h6><a href="tel:+9288009850">+92 (8800) - 9850</a></h6>
                            </div>
                        </div>
                        <div class="header-button">
                            <a href="car-details.php" class="theme-btn">
                                Find a Car
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
            <button class="image-array-left bg-cover" style="background-image: url('assets/img/bg-slideshow-02.jpg');">
                <i class="fa-solid fa-chevron-left"></i>
            </button>
            <button class="image-array-right bg-cover" style="background-image: url('assets/img/bg-slideshow-02.jpg');">
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
                                            Remons Rental</h6>
                                        <h1 data-animation="fadeInUp" data-delay=".5s">
                                            Search, Book <br>
                                            & Rent Car
                                            <span>Easily</span>
                                        </h1>
                                    </div>
                                </div>
                                <div class="col-xl-5 col-lg-6">
                                    <div class="hero-image" data-animation="fadeInUp" data-delay=".7s">
                                        <img src="assets/img/hero/car.png" alt="img">
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
                                            Remons Rental</h6>
                                        <h1 data-animation="fadeInUp" data-delay=".5s">
                                            Search, Book <br>
                                            & Rent Car
                                            <span>Easily</span>
                                        </h1>
                                    </div>
                                </div>
                                <div class="col-xl-5 col-lg-6">
                                    <div class="hero-image" data-animation="fadeInUp" data-delay=".7s">
                                        <img src="assets/img/hero/car.png" alt="img">
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
                            <option value="1">
                                Select Location
                            </option>
                            <option value="1">
                                Houston
                            </option>
                            <option value="1">
                                Texas
                            </option>
                            <option value="1">
                                New York
                            </option>
                            <option value="1">
                                Other Location
                            </option>
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
                        <input class="form-control" type="text" placeholder="Check in" readonly>
                        <span class="input-group-addon"> <i class="fa-solid fa-calendar-days"></i></span>
                    </div>
                </div>
                <div class="pickup-items">
                    <label class="field-label">Car Type</label>
                    <div class="category-oneadjust">
                        <select name="cate" class="category">
                            <option value="1">
                                cars
                            </option>
                            <option value="1">
                                sedan
                            </option>
                            <option value="1">
                                sports
                            </option>
                            <option value="1">
                                jeep
                            </option>
                            <option value="1">
                                limousine
                            </option>
                        </select>
                    </div>
                </div>
                <div class="pickup-items">
                    <label class="field-label style-2">button</label>
                    <button class="pickup-btn" type="submit">
                        Find a Car
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Select Car Section Start -->
    <section class="select-car-section section-padding fix">
        <div class="container">
            <div class="section-title text-center">
                <img src="assets/img/sub-icon.png" alt="img" class="wow fadeInUp">
                <span class="wow fadeInUp" data-wow-delay=".2s">select car types</span>
                <h2 class="wow fadeInUp" data-wow-delay=".4s">
                    We’re Offering Popular <br>
                    Cars Models
                </h2>
            </div>
            <div class="row">
                <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".2s">
                    <div class="select-car-items">
                        <div class="thumb">
                            <img src="assets/img/car/popular-car-1.jpg" alt="">
                        </div>
                        <div class="bg-overlay"></div>
                        <div class="icon">
                            <img src="assets/img/car/icon/01.png" alt="img">
                        </div>
                        <div class="content">
                            <h5><a href="car-details.php">Sedan</a></h5>
                            <p>10 Cars Available</p>
                        </div>
                        <a href="car-details.php" class="arrow-icon"><i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="select-car-items">
                        <div class="thumb">
                            <img src="assets/img/car/popular-car-2.jpg" alt="">
                        </div>
                        <div class="bg-overlay"></div>
                        <div class="icon">
                            <img src="assets/img/car/icon/02.png" alt="img">
                        </div>
                        <div class="content">
                            <h5><a href="car-details.php">SUV</a></h5>
                            <p>10 Cars Available</p>
                        </div>
                        <a href="car-details.php" class="arrow-icon"><i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".4s">
                    <div class="select-car-items">
                        <div class="thumb">
                            <img src="assets/img/car/popular-car-3.jpg" alt="img">
                        </div>
                        <div class="bg-overlay"></div>
                        <div class="icon">
                            <img src="assets/img/car/icon/03.png" alt="img">
                        </div>
                        <div class="content">
                            <h5><a href="car-details.php">Limousine</a></h5>
                            <p>10 Cars Available</p>
                        </div>
                        <a href="car-details.php" class="arrow-icon"><i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".5s">
                    <div class="select-car-items">
                        <div class="thumb">
                            <img src="assets/img/car/popular-car-4.jpg" alt="img">
                        </div>
                        <div class="bg-overlay"></div>
                        <div class="icon">
                            <img src="assets/img/car/icon/04.png" alt="img">
                        </div>
                        <div class="content">
                            <h5><a href="car-details.php">Cabriolet</a></h5>
                            <p>10 Cars Available</p>
                        </div>
                        <a href="car-details.php" class="arrow-icon"><i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".6s">
                    <div class="select-car-items">
                        <div class="thumb">
                            <img src="assets/img/car/popular-car-5.jpg" alt="img">
                        </div>
                        <div class="bg-overlay"></div>
                        <div class="icon">
                            <img src="assets/img/car/icon/05.png" alt="img">
                        </div>
                        <div class="content">
                            <h5><a href="car-details.php">Pickup</a></h5>
                            <p>10 Cars Available</p>
                        </div>
                        <a href="car-details.php" class="arrow-icon"><i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".7s">
                    <div class="select-car-items">
                        <div class="thumb">
                            <img src="assets/img/car/popular-car-6.jpg" alt="img">
                        </div>
                        <div class="bg-overlay"></div>
                        <div class="icon">
                            <img src="assets/img/car/icon/06.png" alt="img">
                        </div>
                        <div class="content">
                            <h5><a href="car-details.php">Compact</a></h5>
                            <p>10 Cars Available</p>
                        </div>
                        <a href="car-details.php" class="arrow-icon"><i class="fa-solid fa-arrow-right"></i></a>
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
                            <img src="assets/img/about/01.png" alt="about-image">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-content">
                            <div class="section-title">
                                <img src="assets/img/sub-icon.png" alt="icon-img" class="wow fadeInUp">
                                <span class="wow fadeInUp" data-wow-delay=".2s">Get to know us</span>
                                <h2 class="wow fadeInUp" data-wow-delay=".4s">
                                    Trusted & Leading in
                                    Car Rent Services
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
                                            Nsectetur cing elit
                                        </li>
                                        <li>
                                            <i class="fa-solid fa-arrow-right"></i>
                                            Suspe ndisse suscit sagittis leo
                                        </li>
                                        <li>
                                            <i class="fa-solid fa-arrow-right"></i>
                                            If you are going to use pasage
                                        </li>
                                        <li>
                                            <i class="fa-solid fa-arrow-right"></i>
                                            Generators on the to repeatY
                                        </li>
                                    </ul>
                                    <a href="about.php" class="theme-btn">Discover More</a>
                                </div>
                                <div class="author-items wow fadeInUp" data-wow-delay=".5s">
                                    <div class="icon">
                                        <i class="fa-solid fa-phone"></i>
                                    </div>
                                    <p>Need help? Talk to an <br> Expert</p>
                                    <h6><a href="tel:9288009850">+92 (8800) - 9850</a></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Car Rentals Section Start -->
    <section class="car-rentals-section-2 section-padding fix">
        <div class="container">
            <div class="section-title text-center">
                <img src="assets/img/sub-icon.png" alt="icon-img" class="wow fadeInUp">
                <span class="wow fadeInUp" data-wow-delay=".2s">Checkout our new cars</span>
                <h2 class="wow fadeInUp" data-wow-delay=".4s">
                    Cars We’re Offering <br>
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
                                    <img src="assets/img/car/01.jpg" alt="img">
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
                                        <span>2 Reviews</span>
                                    </div>
                                    <h4><a href="car-details.php">Hyundai Accent Limited</a></h4>
                                    <h6>$70.00 <span>/ Day</span></h6>
                                    <div class="icon-items">
                                        <ul>
                                            <li>
                                                <img src="assets/img/car/seat.svg" alt="img" class="me-1">
                                                6 Seats
                                            </li>
                                            <li>
                                                <img src="assets/img/car/door.svg" alt="img" class="me-1">
                                                2 Doors
                                            </li>
                                        </ul>
                                        <ul>
                                            <li>
                                                <img src="assets/img/car/automatic.svg" alt="img" class="me-1">
                                                Automatic
                                            </li>
                                            <li>
                                                <img src="assets/img/car/petrol.svg" alt="img" class="me-1">
                                                Petrol
                                            </li>
                                        </ul>
                                    </div>
                                    <a href="car-details.php" class="theme-btn bg-color w-100 text-center">book now <i
                                            class="fa-solid fa-arrow-right ps-1"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="car-rentals-items">
                                <div class="car-image">
                                    <img src="assets/img/car/02.jpg" alt="img">
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
                                        <span>2 Reviews</span>
                                    </div>
                                    <h4><a href="car-details.php">Hyundai Accent Limited</a></h4>
                                    <h6>$70.00 <span>/ Day</span></h6>
                                    <div class="icon-items">
                                        <ul>
                                            <li>
                                                <img src="assets/img/car/seat.svg" alt="img" class="me-1">
                                                6 Seats
                                            </li>
                                            <li>
                                                <img src="assets/img/car/door.svg" alt="img" class="me-1">
                                                2 Doors
                                            </li>
                                        </ul>
                                        <ul>
                                            <li>
                                                <img src="assets/img/car/automatic.svg" alt="img" class="me-1">
                                                Automatic
                                            </li>
                                            <li>
                                                <img src="assets/img/car/petrol.svg" alt="img" class="me-1">
                                                Petrol
                                            </li>
                                        </ul>
                                    </div>
                                    <a href="car-details.php" class="theme-btn bg-color w-100 text-center">book now <i
                                            class="fa-solid fa-arrow-right ps-1"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="car-rentals-items">
                                <div class="car-image">
                                    <img src="assets/img/car/03.jpg" alt="img">
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
                                        <span>2 Reviews</span>
                                    </div>
                                    <h4><a href="car-details.php">Hyundai Accent Limited</a></h4>
                                    <h6>$70.00 <span>/ Day</span></h6>
                                    <div class="icon-items">
                                        <ul>
                                            <li>
                                                <img src="assets/img/car/seat.svg" alt="img" class="me-1">
                                                6 Seats
                                            </li>
                                            <li>
                                                <img src="assets/img/car/door.svg" alt="img" class="me-1">
                                                2 Doors
                                            </li>
                                        </ul>
                                        <ul>
                                            <li>
                                                <img src="assets/img/car/automatic.svg" alt="img" class="me-1">
                                                Automatic
                                            </li>
                                            <li>
                                                <img src="assets/img/car/petrol.svg" alt="img" class="me-1">
                                                Petrol
                                            </li>
                                        </ul>
                                    </div>
                                    <a href="car-details.php" class="theme-btn bg-color w-100 text-center">book now <i
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
                        <h6 class="title"><a href="car-details.php">Search</a></h6>
                        <div class="icon-box">
                            <div class="icon">
                                <img src="assets/img/how-work/icon-1.png" alt="img" class="icon-1">
                                <img src="assets/img/how-work/icon-11.png" alt="img" class="icon-2">
                            </div>
                        </div>
                        <p>
                            Aliquam viverra arcu. Donec aliquet blandit enim feugiat. Suspendisse id quam sed eros.
                        </p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                    <div class="how-works-items">
                        <h6 class="title"><a href="car-details.php">Select</a></h6>
                        <div class="icon-box">
                            <div class="icon">
                                <img src="assets/img/how-work/icon-2.png" alt="img" class="icon-1">
                                <img src="assets/img/how-work/icon-22.png" alt="img" class="icon-2">
                            </div>
                        </div>
                        <p>
                            Aliquam viverra arcu. Donec aliquet blandit enim feugiat. Suspendisse id quam sed eros.
                        </p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                    <div class="how-works-items">
                        <h6 class="title"><a href="car-details.php">Book</a></h6>
                        <div class="icon-box">
                            <div class="icon">
                                <img src="assets/img/how-work/icon-3.png" alt="img" class="icon-1">
                                <img src="assets/img/how-work/icon-33.png" alt="img" class="icon-2">
                            </div>
                        </div>
                        <p>
                            Aliquam viverra arcu. Donec aliquet blandit enim feugiat. Suspendisse id quam sed eros.
                        </p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".8s">
                    <div class="how-works-items">
                        <h6 class="title"><a href="car-details.php">Drive</a></h6>
                        <div class="icon-box">
                            <div class="icon">
                                <img src="assets/img/how-work/icon-4.png" alt="img" class="icon-1">
                                <img src="assets/img/how-work/icon-44.png" alt="img" class="icon-2">
                            </div>
                        </div>
                        <p>
                            Aliquam viverra arcu. Donec aliquet blandit enim feugiat. Suspendisse id quam sed eros.
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
                            <img src="assets/img/big-stretch-left-image.jpg" alt="img">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="rental-benefit-content">
                            <div class="section-title">
                                <img src="assets/img/sub-icon.png" alt="img" class="wow fadeInUp">
                                <span class="wow fadeInUp" data-wow-delay=".2s">our benefits</span>
                                <h2 class="text-white wow fadeInUp" data-wow-delay=".4s">
                                    Why You Should Use
                                    Remons Rental
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

    <!-- Car Sale Section Start -->
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
                    <img src="assets/img/car.png" alt="img">
                </div>
                <div class="car-sale-content">
                    <h2 class="wow fadeInUp" data-wow-delay=".3s">Sale 50% Off</h2>
                    <h3 class="wow fadeInUp" data-wow-delay=".5s">on all rental cars for 1 month</h3>
                    <a href="car-details.php" class="theme-btn bg-header wow fadeInUp" data-wow-delay=".7s">Book Your
                        Car</a>
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
                                Remons
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
                                                        Jessica Brown
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
                                                        Jessica Brown
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
                                                        Jessica Brown
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

    <!-- Car Slider Section Start -->
    <div class="car-slider-section section-padding pt-0">
        <div class="car-slider-wrapper">
            <div class="swiper car-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="car-slider-image">
                            <img src="assets/img/car-slider/01.jpg" alt="img">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="car-slider-image">
                            <img src="assets/img/car-slider/02.jpg" alt="img">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="car-slider-image">
                            <img src="assets/img/car-slider/03.jpg" alt="img">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="car-slider-image">
                            <img src="assets/img/car-slider/04.jpg" alt="img">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="car-slider-image">
                            <img src="assets/img/car-slider/05.jpg" alt="img">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="car-slider-image">
                            <img src="assets/img/car-slider/06.jpg" alt="img">
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
                    <h4 class="text-white">Save big with our cheap car rental</h4>
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
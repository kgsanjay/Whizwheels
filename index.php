<!DOCTYPE html>
<html lang="en">
<?php $headTitle = 'Whizwheels - Bike Rental'; ?>
<?php include './partials/head.php' ?>

<body>

    <?php include './partials/preloader.php' ?>

    <?php include './partials/scroll-up.php' ?>

    <?php include './partials/header-top.php' ?>

    <?php include './partials/header.php' ?>


    <!-- Search Area Start -->
    <?php include './partials/search-wrap.php' ?>

    <!-- Hero Section Start -->
    <section class="hero-section hero-1 fix">
        <div class="array-button">
            <button class="image-array-left">
                <i class="fa-solid fa-chevron-left"></i>
            </button>
            <button class="image-array-right">
                <i class="fa-solid fa-chevron-right"></i>
            </button>
        </div>
        <div class="swiper hero-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="hero-image bg-cover" style="background-image: url('https://placehold.co/1920x1080/a2d2ff/333333?text=Awesome+Bike+Trails');">
                        <div class="overlay-shape">
                            <img src="assets/img/hero/overlay.png" alt="img">
                        </div>
                    </div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-xl-12">
                                <div class="hero-content text-center">
                                    <h4 class="text-white" data-animation="fadeInUp" data-delay="1.3s">
                                        Rent Your Dream Bike Today
                                    </h4>
                                    <h1 class="text-white" data-animation="fadeInUp" data-delay="1.3s">
                                        Bike <span>Rental</span>
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="hero-image bg-cover" style="background-image: url('https://placehold.co/1920x1080/ffafcc/333333?text=Explore+Honnavara');">
                        <div class="overlay-shape">
                            <img src="assets/img/hero/overlay.png" alt="img">
                        </div>
                    </div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-xl-12">
                                <div class="hero-content text-center">
                                    <h4 class="text-white" data-animation="fadeInUp" data-delay="1.3s">
                                        Book Any Bike at a Low Price
                                    </h4>
                                    <h1 class="text-white" data-animation="fadeInUp" data-delay="1.3s">
                                        Ride in <span>Style</span>
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pick Up Location Section Start -->
    <div class="pickup-loaction-area bg-cover" style="background-image: url('assets/img/brand-bg.png');">
        <div class="container">
            <form id="whatsappBookingForm" class="pickup-wrapper wow fadeInUp" data-wow-delay=".4s">
                <div class="pickup-items">
                    <label for="pickup_location" class="field-label">Pick-up Location</label>
                    <div class="category-oneadjust">
                        <select name="pickup_location" id="pickup_location" class="category">
                            <option value="Not Selected">Select Location</option>
                            <option value="Apsarakonda Falls">Apsarakonda Falls</option>
                            <option value="Murudeshwar Beach">Murudeshwar Beach</option>
                            <option value="Kasarkod Beach">Kasarkod Beach</option>
                            <option value="Sharavathi Mangrove Boardwalk">Sharavathi Mangrove Boardwalk</option>
                        </select>
                    </div>
                </div>
                <div class="pickup-items">
                    <label for="pickup_date" class="field-label">Pickup Date</label>
                    <div id="datepicker" class="input-group date" data-date-format="dd-mm-yyyy">
                        <input class="form-control" name="pickup_date" id="pickup_date" type="text" placeholder="Select Date" readonly>
                        <span class="input-group-addon"> <i class="fa-solid fa-calendar-days"></i></span>
                    </div>
                </div>
                <div class="pickup-items">
                    <label for="dropoff_date" class="field-label">Dropoff Date</label>
                    <div id="datepicker2" class="input-group date" data-date-format="dd-mm-yyyy">
                        <input class="form-control" name="dropoff_date" id="dropoff_date" type="text" placeholder="Select Date" readonly>
                        <span class="input-group-addon"> <i class="fa-solid fa-calendar-days"></i></span>
                    </div>
                </div>
                <div class="pickup-items">
                    <label for="bike_type" class="field-label">Bike Type</label>
                    <div class="category-oneadjust">
                        <select name="bike_type" id="bike_type" class="category">
                            <option value="Any">All Bikes</option>
                            <option value="Mountain Bike">Mountain Bike</option>
                            <option value="Road Bike">Road Bike</option>
                            <option value="Cruiser">Cruiser</option>
                            <option value="Electric Bike">Electric Bike</option>
                        </select>
                    </div>
                </div>
                <div class="pickup-items">
                    <label class="field-label style-2">button</label>
                    <button class="pickup-btn" type="submit">
                        Book Now
                    </button>
                </div>
            </form>
            <div class="brand-wrapper pt-80 pb-80">
                <div class="array-button">
                    <button class="array-prev-2"><i class="far fa-chevron-left"></i></button>
                    <button class="array-next-2"><i class="far fa-chevron-right"></i></button>
                </div>
                <div class="swiper brand-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="brand-image">
                                <img src="assets/img/brand/01.png" alt="brand-img">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-image">
                                <img src="assets/img/brand/02.png" alt="brand-img">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-image">
                                <img src="assets/img/brand/03.png" alt="brand-img">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-image">
                                <img src="assets/img/brand/04.png" alt="brand-img">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-image">
                                <img src="assets/img/brand/05.png" alt="brand-img">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-image">
                                <img src="assets/img/brand/06.png" alt="brand-img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Feature Benefit Section Start -->
    <section class="feature-benefit section section-padding fix">
        <div class="container">
            <div class="section-title text-center">
                <img src="assets/img/sub-icon.png" alt="icon-img" class="wow fadeInUp">
                <span class="wow fadeInUp" data-wow-delay=".2s">our benefits</span>
                <h2 class="wow fadeInUp" data-wow-delay=".4s">
                    Why You Should Ride <br>
                    With Whizwheels
                </h2>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="feature-benefit-items">
                        <div class="icon-box-shape">
                            <img src="assets/img/feature-benefit/box-icon-bg1.png" alt="shape-img">
                        </div>
                        <div class="bg-button-shape">
                            <img src="assets/img/feature-benefit/bg-button-iconbox.png" alt="shape-img">
                        </div>
                        <div class="feature-content">
                            <h4>
                                <a href="bike-details.php">
                                    Easier & <br>
                                    Faster Bookings
                                </a>
                            </h4>
                            <p>Neque porro quisquam est, qui fre dolorem ipsum quia dolor.</p>
                            <div class="icon">
                                <img src="assets/img/feature-benefit/icon-1.png" alt="icon-img">
                            </div>
                        </div>
                        <div class="feature-button">
                            <a href="bike-details.php" class="link-btn">View More <i
                                    class="fa-solid fa-arrow-right ps-1"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                    <div class="feature-benefit-items">
                        <div class="icon-box-shape">
                            <img src="assets/img/feature-benefit/box-icon-bg2.png" alt="shape-img">
                        </div>
                        <div class="bg-button-shape">
                            <img src="assets/img/feature-benefit/bg-button-iconbox.png" alt="shape-img">
                        </div>
                        <div class="feature-content">
                            <h4>
                                <a href="bike-details.php">
                                    Too Many <br>
                                    Pickup Locations
                                </a>
                            </h4>
                            <p>Neque porro quisquam est, qui fre dolorem ipsum quia dolor.</p>
                            <div class="icon">
                                <img src="assets/img/feature-benefit/icon-2.png" alt="icon-img">
                            </div>
                        </div>
                        <div class="feature-button">
                            <a href="bike-details.php" class="link-btn">View More <i
                                    class="fa-solid fa-arrow-right ps-1"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                    <div class="feature-benefit-items">
                        <div class="icon-box-shape">
                            <img src="assets/img/feature-benefit/box-icon-bg3.png" alt="shape-img">
                        </div>
                        <div class="bg-button-shape">
                            <img src="assets/img/feature-benefit/bg-button-iconbox.png" alt="shape-img">
                        </div>
                        <div class="feature-content">
                            <h4>
                                <a href="bike-details.php">
                                    Customers <br>
                                    100% Satisfied
                                </a>
                            </h4>
                            <p>Neque porro quisquam est, qui fre dolorem ipsum quia dolor.</p>
                            <div class="icon">
                                <img src="assets/img/feature-benefit/icon-3.png" alt="icon-img">
                            </div>
                        </div>
                        <div class="feature-button">
                            <a href="bike-details.php" class="link-btn">View More <i
                                    class="fa-solid fa-arrow-right ps-1"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section Start -->
    <section class="about-section fix section-padding pt-0">
        <div class="container">
            <div class="about-wrapper">
                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="about-image-items">
                            <div class="color-shape">
                                <img src="assets/img/about/secondary-shape-color-full.png" alt="shape-img">
                            </div>
                            <div class="car-shape wow fadeInUp" data-wow-delay=".7s">
                                <img src="https://placehold.co/400x300/cddafd/333333?text=Ride+Free" alt="shape-img">
                            </div>
                            <div class="counter-content wow fadeInLeft" data-wow-delay=".4s">
                                <h2 class="text-white"><span class="count">10</span></h2>
                                <p class="text-white">
                                    Years of <br>
                                    Experience
                                </p>
                            </div>
                            <div class="about-image-1 wow fadeInDown" data-wow-delay=".3s">
                                <img src="https://placehold.co/400x500/a2d2ff/333333?text=Mountain+Biking" alt="about-image">
                            </div>
                            <div class="about-image-2 wow fadeInLeft" data-wow-delay=".5s">
                                <img src="https://placehold.co/300x400/ffafcc/333333?text=City+Rides" alt="about-image">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-content">
                            <div class="section-title">
                                <img src="assets/img/sub-icon.png" alt="icon-img" class="wow fadeInUp">
                                <span class="wow fadeInUp" data-wow-delay=".2s">Get to know us</span>
                                <h2 class="wow fadeInUp" data-wow-delay=".4s">
                                    Services with a Wide
                                    Range of Bikes
                                </h2>
                            </div>
                            <h4 class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".3s">
                                Committed to providing our customers with exceptional service.
                            </h4>
                            <p class="wow fadeInUp" data-wow-delay=".5s">
                                Lorem ipsum is simply ipun txns mane so dummy text of free available in market the
                                printing and typesetting industry has been the industry's standard dummy text ever.
                            </p>
                            <div class="about-list-item wow fadeInUp" data-wow-delay=".7s">
                                <ul>
                                    <li>
                                        Many Pickup Locations
                                    </li>
                                    <li>
                                        Offering Low Prices
                                    </li>
                                </ul>
                                <ul>
                                    <li>
                                        24/7 Customer Support
                                    </li>
                                    <li>
                                        Well-Maintained Bikes
                                    </li>
                                </ul>
                            </div>
                            <a href="about.php" class="theme-btn wow fadeInUp" data-wow-delay=".8s">Discover More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Bike Rentals Section Start -->
    <section class="car-rentals-section section-padding fix">
        <div class="container">
            <div class="section-title text-center">
                <img src="assets/img/sub-icon.png" alt="icon-img" class="wow fadeInUp">
                <span class="wow fadeInUp" data-wow-delay=".2s">Checkout our new bikes</span>
                <h2 class="wow fadeInUp" data-wow-delay=".4s">
                    Bikes We’re Offering <br>
                    for Rentals
                </h2>
            </div>
        </div>
        <div class="car-rentals-wrapper">
            <div class="array-button">
                <button class="array-prev"><i class="far fa-chevron-left"></i></button>
                <button class="array-next"><i class="far fa-chevron-right"></i></button>
            </div>
            <div class="swiper car-rentals-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="car-rentals-items">
                            <div class="car-image">
                                <img src="https://placehold.co/600x400/fdffb6/333333?text=Mountain+Bike" alt="bike-img">
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
                                <h4><a href="bike-details.php">Mountain Explorer</a></h4>
                                <h6>₹1500 <span>/ Day</span></h6>
                                <a href="bike-details.php" class="theme-btn bg-color w-100 text-center">book now <i
                                        class="fa-solid fa-arrow-right ps-1"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="car-rentals-items">
                            <div class="car-image">
                                <img src="https://placehold.co/600x400/caffbf/333333?text=Road+Bike" alt="bike-img">
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
                                <h4><a href="bike-details.php">Speed Demon Road Bike</a></h4>
                                <h6>₹1800 <span>/ Day</span></h6>
                                <a href="bike-details.php" class="theme-btn bg-color w-100 text-center">book now <i
                                        class="fa-solid fa-arrow-right ps-1"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="car-rentals-items">
                            <div class="car-image">
                                <img src="https://placehold.co/600x400/9bf6ff/333333?text=City+Cruiser" alt="bike-img">
                            </div>
                            <div class="car-content">
                                <div class="post-cat">
                                    2023 Model
                                </div>
                                <div class="star">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <span>4 Reviews</span>
                                </div>
                                <h4><a href="bike-details.php">Comfort Cruiser</a></h4>
                                <h6>₹1200 <span>/ Day</span></h6>
                                <a href="bike-details.php" class="theme-btn bg-color w-100 text-center">book now <i
                                        class="fa-solid fa-arrow-right ps-1"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="car-rentals-items">
                            <div class="car-image">
                                <img src="https://placehold.co/600x400/a0c4ff/333333?text=Electric+Bike" alt="bike-img">
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
                                <h4><a href="bike-details.php">Electric Bolt</a></h4>
                                <h6>₹2500 <span>/ Day</span></h6>
                                <a href="bike-details.php" class="theme-btn bg-color w-100 text-center">book now <i
                                        class="fa-solid fa-arrow-right ps-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Bike Service Section Start -->
    <section class="car-service-section">
        <div class="container">
            <div class="car-service-wrapper">
                <div class="shape-image">
                    <img src="assets/img/car/shape-column.png" alt="shape-img">
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="service-car-image">
                            <img src="https://placehold.co/800x600/ffd6a5/333333?text=Premium+Bikes" alt="img">
                            <div class="color-shape">
                                <img src="assets/img/car/secondary-shape-color.png" alt="shape-img">
                            </div>
                            <div class="booking-content">
                                <p>Call for booking</p>
                                <h3><a href="tel:+919876543210">+91 98765 43210</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="service-car-content">
                            <h2 class="wow fadeInUp" data-wow-delay=".3s">
                                Looking for a Premium <br>
                                Bike Rental?
                            </h2>
                            <h3 class="wow fadeInUp" data-wow-delay=".5s">
                                <span>Starting at</span> <sup>₹</sup> 900 <span class="text">/day</span>
                            </h3>
                            <a href="bike-grid.php" class="theme-btn wow fadeInUp" data-wow-delay=".7s">Discover More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Funfact Section Start -->
    <section class="funfact-section section-padding bg-cover"
        style="background-image: url('assets/img/funfact-bg.jpg');">
        <div class="container">
            <div class="funfact-wrapper">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-6">
                        <div class="section-title mb-0">
                            <img src="assets/img/sub-icon-2.png" alt="icon-img" class="wow fadeInUp">
                            <span class="wow fadeInUp" data-wow-delay=".2s">fun facts</span>
                            <h2 class="text-white wow fadeInUp" data-wow-delay=".4s">
                                Save Time & Money <br>
                                with Top Bike Rent <br>
                                Services
                            </h2>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="funfact-counter-area">
                            <div class="funfact-items wow fadeInUp" data-wow-delay=".3s">
                                <div class="icon">
                                    <i class="fa-solid fa-bicycle fa-2x text-white"></i>
                                </div>
                                <h2><span class="count">1500</span></h2>
                                <p>
                                    Bikes <br>
                                    Rented
                                </p>
                            </div>
                            <div class="funfact-items wow fadeInUp" data-wow-delay=".5s">
                                <div class="icon">
                                    <img src="assets/img/icon/center.png" alt="img">
                                </div>
                                <h2><span class="count">230</span></h2>
                                <p>
                                    Center <br>
                                    solutions
                                </p>
                            </div>
                            <div class="funfact-items wow fadeInUp" data-wow-delay=".7s">
                                <div class="icon">
                                    <img src="assets/img/icon/like.png" alt="img">
                                </div>
                                <h2><span class="count">950</span></h2>
                                <p>
                                    happy <br>
                                    customers
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Popular Bike Section Start -->
    <section class="popular-car-section fix section-padding">
        <div class="container">
            <div class="section-title text-center">
                <img src="assets/img/sub-icon.png" alt="icon-img" class="wow fadeInUp">
                <span class="wow fadeInUp" data-wow-delay=".2s">select bike types</span>
                <h2 class="wow fadeInUp" data-wow-delay=".4s">
                    We’re Offering Popular <br>
                    Bike Models
                </h2>
            </div>
            <div class="row g-4 mt-30">
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="popular-card-items">
                        <div class="content">
                            <h4><a href="bike-details.php">Mountain Bikes</a></h4>
                            <p>Available for Rent</p>
                        </div>
                        <div class="car-image">
                            <img src="https://placehold.co/600x400/ffadad/333333?text=Mountain+Bikes" alt="img">
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                    <div class="popular-card-items">
                        <div class="content">
                            <h4><a href="bike-details.php">Road Bikes</a></h4>
                            <p>Available for Rent</p>
                        </div>
                        <div class="car-image">
                            <img src="https://placehold.co/600x400/ffd6a5/333333?text=Road+Bikes" alt="img">
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                    <div class="popular-card-items">
                        <div class="content">
                            <h4><a href="bike-details.php">Cruiser Bikes</a></h4>
                            <p>Available for Rent</p>
                        </div>
                        <div class="car-image">
                            <img src="https://placehold.co/600x400/fdffb6/333333?text=Cruiser+Bikes" alt="img">
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="popular-card-items">
                        <div class="content">
                            <h4><a href="bike-details.php">Hybrid Bikes</a></h4>
                            <p>Available for Rent</p>
                        </div>
                        <div class="car-image">
                            <img src="https://placehold.co/600x400/caffbf/333333?text=Hybrid+Bikes" alt="img">
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                    <div class="popular-card-items">
                        <div class="content">
                            <h4><a href="bike-details.php">Electric Bikes</a></h4>
                            <p>Available for Rent</p>
                        </div>
                        <div class="car-image">
                            <img src="https://placehold.co/600x400/9bf6ff/333333?text=Electric+Bikes" alt="img">
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                    <div class="popular-card-items">
                        <div class="content">
                            <h4><a href="bike-details.php">Kids Bikes</a></h4>
                            <p>Available for Rent</p>
                        </div>
                        <div class="car-image">
                            <img src="https://placehold.co/600x400/a0c4ff/333333?text=Kids+Bikes" alt="img">
                        </div>
                    </div>
                </div>
            </div>
            <div class="popular-car-text wow fadeInUp" data-wow-delay=".4s">
                <h6>Bike rental services specifically for our customers.</h6>
                <a href="bike-grid.php" class="theme-btn">Find a Bike</a>
            </div>
        </div>
    </section>

    <!-- Testimonial Section Start -->
    <section class="testimonial-section fix section-padding">
        <div class="testimonial-bg-shape">
            <img src="assets/img/testimonial/testimonial-bg.jpg" alt="shape-img">
        </div>
        <div class="container">
            <div class="section-title-area">
                <div class="section-title">
                    <img src="assets/img/sub-icon.png" alt="icon-img" class="wow fadeInUp">
                    <span class="wow fadeInUp" data-wow-delay=".2s">our testimonials</span>
                    <h2 class="wow fadeInUp" data-wow-delay=".4s">
                        What They’re Talking <br>
                        About Whizwheels
                    </h2>
                </div>
                <p class="wow fadeInUp" data-wow-delay=".5s">
                    Lorem ipsum dolor sit amet nsectetur cing elituspe ndisse suscipit <br> sagitis leo sit.
                </p>
            </div>
            <div class="swiper testimonial-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="testimonial-card-items">
                            <div class="testimoni-bg-shape">
                                <div class="testimonial-items-top">
                                    <div class="icon">
                                        <i class="fa-solid fa-quote-left"></i>
                                    </div>
                                    <p>
                                        I was very impresed by the Whizwheels service lorem ipsum is simply free text used
                                        by copy typing refreshing. Neque porro est qui dolorem ipsum quia.
                                    </p>
                                    <div class="star">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="client-info-items d-flex align-items-center gap-3">
                                <div class="client-img bg-cover"
                                    style="background-image: url('assets/img/testimonial/client-1.png');"></div>
                                <div class="content">
                                    <h5>
                                        Jessica Brown
                                    </h5>
                                    <span>Customer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-card-items">
                            <div class="testimoni-bg-shape">
                                <div class="testimonial-items-top">
                                    <div class="icon">
                                        <i class="fa-solid fa-quote-left"></i>
                                    </div>
                                    <p>
                                        I was very impresed by the Whizwheels service lorem ipsum is simply free text used
                                        by copy typing refreshing. Neque porro est qui dolorem ipsum quia.
                                    </p>
                                    <div class="star">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="client-info-items d-flex align-items-center gap-3">
                                <div class="client-img bg-cover"
                                    style="background-image: url('assets/img/testimonial/client-2.png');"></div>
                                <div class="content">
                                    <h5>
                                        Kevin Martin
                                    </h5>
                                    <span>Customer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-card-items">
                            <div class="testimoni-bg-shape">
                                <div class="testimonial-items-top">
                                    <div class="icon">
                                        <i class="fa-solid fa-quote-left"></i>
                                    </div>
                                    <p>
                                        I was very impresed by the Whizwheels service lorem ipsum is simply free text used
                                        by copy typing refreshing. Neque porro est qui dolorem ipsum quia.
                                    </p>
                                    <div class="star">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="client-info-items d-flex align-items-center gap-3">
                                <div class="client-img bg-cover"
                                    style="background-image: url('assets/img/testimonial/client-3.png');"></div>
                                <div class="content">
                                    <h5>
                                        Jessica Brown
                                    </h5>
                                    <span>Customer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Section Start -->
    <div class="gallery-section fix">
        <div class="gallery-wrapper">
            <div class="row g-4">
                <div class="col-xxl-4 col-xl-5 col-lg-5">
                    <div class="row g-4">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="row g-4">
                                <div class="col-md-12">
                                    <div class="gallery-image">
                                        <img src="https://placehold.co/300x300/fbf8cc/333333?text=Bike+Gallery+1" alt="img">
                                        <div class="icon-box">
                                            <a href="https://placehold.co/800x800/fbf8cc/333333?text=Bike+Gallery+1" class="icon img-popup-2">
                                                <i class="fa-solid fa-plus"></i>
                                            </a>
                                        </div>
                                        <div class="mask"></div>
                                        <div class="mask-second"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="gallery-image">
                                        <img src="https://placehold.co/300x300/fde4cf/333333?text=Bike+Gallery+2" alt="img">
                                        <div class="icon-box">
                                            <a href="https://placehold.co/800x800/fde4cf/333333?text=Bike+Gallery+2" class="icon img-popup-2">
                                                <i class="fa-solid fa-plus"></i>
                                            </a>
                                        </div>
                                        <div class="mask"></div>
                                        <div class="mask-second"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="gallery-image">
                                <img src="https://placehold.co/300x625/ffcfd2/333333?text=Bike+Gallery+3" alt="img">
                                <div class="icon-box">
                                    <a href="https://placehold.co/800x1200/ffcfd2/333333?text=Bike+Gallery+3" class="icon img-popup-2 style-two">
                                        <i class="fa-solid fa-plus"></i>
                                    </a>
                                </div>
                                <div class="mask"></div>
                                <div class="mask-second"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-7 col-lg-7">
                    <div class="row g-4">
                        <div class="col-md-4 col-sm-6">
                            <div class="gallery-image">
                                <img src="https://placehold.co/300x300/f1c0e8/333333?text=Bike+Gallery+4" alt="img">
                                <div class="icon-box">
                                    <a href="https://placehold.co/800x800/f1c0e8/333333?text=Bike+Gallery+4" class="icon img-popup-2">
                                        <i class="fa-solid fa-plus"></i>
                                    </a>
                                </div>
                                <div class="mask"></div>
                                <div class="mask-second"></div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="gallery-image">
                                <img src="https://placehold.co/300x300/cfbaf0/333333?text=Bike+Gallery+5" alt="img">
                                <div class="icon-box">
                                    <a href="https://placehold.co/800x800/cfbaf0/333333?text=Bike+Gallery+5" class="icon img-popup-2">
                                        <i class="fa-solid fa-plus"></i>
                                    </a>
                                </div>
                                <div class="mask"></div>
                                <div class="mask-second"></div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="gallery-image">
                                <img src="https://placehold.co/300x300/a3c4f3/333333?text=Bike+Gallery+6" alt="img">
                                <div class="icon-box">
                                    <a href="https://placehold.co/800x800/a3c4f3/333333?text=Bike+Gallery+6" class="icon img-popup-2">
                                        <i class="fa-solid fa-plus"></i>
                                    </a>
                                </div>
                                <div class="mask"></div>
                                <div class="mask-second"></div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="gallery-image">
                                <img src="https://placehold.co/300x300/90dbf4/333333?text=Bike+Gallery+7" alt="img">
                                <div class="icon-box">
                                    <a href="https://placehold.co/800x800/90dbf4/333333?text=Bike+Gallery+7" class="icon img-popup-2">
                                        <i class="fa-solid fa-plus"></i>
                                    </a>
                                </div>
                                <div class="mask"></div>
                                <div class="mask-second"></div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="gallery-image">
                                <img src="https://placehold.co/625x300/8eecf5/333333?text=Bike+Gallery+8" alt="img">
                                <div class="icon-box">
                                    <a href="https://placehold.co/1200x800/8eecf5/333333?text=Bike+Gallery+8" class="icon img-popup-2">
                                        <i class="fa-solid fa-plus"></i>
                                    </a>
                                </div>
                                <div class="mask"></div>
                                <div class="mask-second"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-2 col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="gallery-image style-2">
                        <img src="https://placehold.co/300x625/98f5e1/333333?text=Bike+Gallery+9" alt="img">
                        <div class="icon-box">
                            <a href="https://placehold.co/800x1200/98f5e1/333333?text=Bike+Gallery+9" class="icon img-popup-2 style-two">
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

    <!-- News Section Start -->
    <section class="news-section section-padding fix">
        <div class="container">
            <div class="section-title text-center">
                <img src="assets/img/sub-icon.png" alt="icon-img" class="wow fadeInUp">
                <span class="wow fadeInUp" data-wow-delay=".2s">From the Blog</span>
                <h2 class="wow fadeInUp" data-wow-delay=".4s">
                    Latest News & <br>
                    Articles From the Blog
                </h2>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="news-card-items">
                        <div class="news-image">
                            <img src="https://placehold.co/600x400/b9fbc0/333333?text=Blog+Post+1" alt="news-img">
                            <div class="post-date">
                                <h6>
                                    20 <br>
                                    Mar
                                </h6>
                            </div>
                        </div>
                        <div class="news-content">
                            <div class="post-client">
                                <img src="assets/img/news/client.png" alt="img">
                            </div>
                            <div class="news-cont">
                                <span>by Mike Hardson</span>
                                <h3><a href="news-details.php">Top 5 Scenic Biking Trails to Explore This Summer</a></h3>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem…</p>
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
                            <img src="https://placehold.co/600x400/90dbf4/333333?text=Blog+Post+2" alt="news-img">
                            <div class="post-date">
                                <h6>
                                    26 <br>
                                    Mar
                                </h6>
                            </div>
                        </div>
                        <div class="news-content">
                            <div class="post-client">
                                <img src="assets/img/news/client.png" alt="img">
                            </div>
                            <div class="news-cont">
                                <span>by Sarah Green</span>
                                <h3><a href="news-details.php">A Guide to Choosing the Perfect Rental Bike</a></h3>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem…</p>
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
                            <img src="https://placehold.co/600x400/f1c0e8/333333?text=Blog+Post+3" alt="news-img">
                            <div class="post-date">
                                <h6>
                                    29 <br>
                                    Mar
                                </h6>
                            </div>
                        </div>
                        <div class="news-content">
                            <div class="post-client">
                                <img src="assets/img/news/client.png" alt="img">
                            </div>
                            <div class="news-cont">
                                <span>by Alex Johnson</span>
                                <h3><a href="news-details.php">Benefits of City Biking for Health and Environment</a></h3>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem…</p>
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

    <!-- Cta Rental Section Start -->
    <section class="cta-rental-section bg-cover fix section-padding"
        style="background-image: url('assets/img/cta/bg-app.jpg');">
        <div class="container">
            <div class="row g-4 justify-content-between align-items-center">
                <div class="col-lg-6">
                    <div class="cta-rental-items">
                        <h4 class="wow fadeInUp" data-wow-delay=".3s">Faster, easier access to bike rental services</h4>
                        <h2 class="wow fadeInUp" data-wow-delay=".5s">Premium Bike Rental</h2>
                        <div class="rental-app-button">
                            <a href="index.php" class="app-button-items wow fadeInUp" data-wow-delay=".7s">
                                <span class="button-icon"><i class="fa-solid fa-play"></i></span>
                                <span class="button-text">
                                    <span class="text">Get in</span> <br>
                                    <span class="headding-text">Google Play</span>
                                </span>
                            </a>
                            <a href="index.php" class="app-button-items style-2 wow fadeInUp" data-wow-delay=".8s">
                                <span class="button-icon"><i class="fa-brands fa-apple"></i></span>
                                <span class="button-text">
                                    <span class="text">Get in</span> <br>
                                    <span class="headding-text">Play Store</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 wow fadeInUp" data-wow-delay=".4s">
                    <div class="mobile-remons-image">
                        <img src="assets/img/mobile-remons.png" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </section>

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
                    <h4 class="text-white">Save big with our cheap bike rental</h4>
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

    <!-- Booking Success Popup -->
    <div id="bookingPopup" class="booking-popup">
        <div class="popup-content">
            <span class="close-popup">&times;</span>
            <h3>Booking Request Sent!</h3>
            <p>Thank you for your interest. Our team will contact you soon to confirm your booking.</p>
            <p>We have opened WhatsApp for you to send the booking details.</p>
        </div>
    </div>

    <?php include './partials/script.php' ?>

    <script>
        // Wait for the document to be fully loaded
        document.addEventListener('DOMContentLoaded', function () {
            
            // Find the form by its ID
            const bookingForm = document.getElementById('whatsappBookingForm');
            
            // Find the popup and its close button
            const popup = document.getElementById('bookingPopup');
            const closePopup = document.querySelector('.close-popup');

            // Add an event listener for the form submission
            bookingForm.addEventListener('submit', function (event) {
                // Prevent the form from submitting the traditional way
                event.preventDefault();

                // Create a FormData object from the form
                const formData = new FormData(bookingForm);

                // Use fetch to send the data to your PHP script
                fetch('assets/inc/process-booking.php', {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.json()) // Parse the JSON response from the server
                .then(data => {
                    // Check if the script was successful and returned a WhatsApp URL
                    if (data.success && data.whatsapp_url) {
                        // Open WhatsApp in a new tab
                        window.open(data.whatsapp_url, '_blank');

                        // Show the success popup
                        popup.style.display = 'block';

                        // Reset the form fields
                        bookingForm.reset();
                        
                        // If you use a custom select library like 'nice-select', you might need this
                        // to visually update the dropdowns back to their placeholder text.
                        if (typeof($) !== 'undefined' && $.fn.niceSelect) {
                            $('select.category').niceSelect('update');
                        }

                    } else {
                        // If there was an error, log it to the console.
                        // You could show an error popup here as well.
                        console.error('Error:', data.message || 'An unknown error occurred.');
                    }
                })
                .catch(error => {
                    // Handle network errors (e.g., if the server can't be reached)
                    console.error('Fetch Error:', error);
                });
            });

            // Add event listener to the close button of the popup
            closePopup.addEventListener('click', function () {
                popup.style.display = 'none';
            });

            // Also close the popup if the user clicks outside of the content area
            window.addEventListener('click', function (event) {
                if (event.target == popup) {
                    popup.style.display = 'none';
                }
            });
        });
    </script>

    <style>
        /* Basic styling for the popup */
        .booking-popup {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 9999; /* Sit on top */
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto; /* Enable scroll if needed */
            background-color: rgba(0,0,0,0.6); /* Black w/ opacity */
            padding-top: 60px;
        }

        .popup-content {
            background-color: #fefefe;
            margin: 5% auto;
            padding: 30px;
            border: 1px solid #888;
            width: 80%;
            max-width: 500px;
            border-radius: 10px;
            text-align: center;
            position: relative;
            animation: fadeIn 0.5s;
        }

        @keyframes fadeIn {
            from {opacity: 0;}
            to {opacity: 1;}
        }

        .close-popup {
            color: #aaa;
            position: absolute;
            top: 10px;
            right: 20px;
            font-size: 28px;
            font-weight: bold;
        }

        .close-popup:hover,
        .close-popup:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
    </style>

</body>

</html>

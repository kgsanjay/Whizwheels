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
                    <div class="hero-image bg-cover" style="background-image: url('assets/img/hero/hero-2.png');">
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
                                         <!-- welcome to <span>WhizWheels</span> -->

                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="hero-image bg-cover" style="background-image: url('assets/img/hero/hero-3.png');">
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
        <div class="container pb-4">
            <form id="whatsappBookingForm" class="pickup-wrapper wow fadeInUp" data-wow-delay=".4s">
                <div class="pickup-items">
                    <label for="pickup_location" class="field-label">Pick-up Location</label>
                    <div class="category-oneadjust">
                        <select name="pickup_location" id="pickup_location" class="category">
                            <option value="" selected disabled>Select Location</option>
                            <option value="Palya Road, Honnavar">Palya Road, Honnavar</option>
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
                    <!-- CHANGED: Bike type is now specific to available bikes -->
                    <label for="bike_type" class="field-label">Bike Type</label>
                    <div class="category-oneadjust">
                        <select name="bike_type" id="bike_type" class="category">
                            <option value="Honda Dio DLX">Honda Dio DLX</option>
                            <option value="Any">Any Available</option>
                        </select>
                    </div>
                </div>
                <div class="pickup-items">
                    <label class="field-label style-2">button</label>
                    <button class="pickup-btn" type="submit" disabled>
                        Book Now
                    </button>
                </div>
            </form>
            <!-- <div class="brand-wrapper pt-80 pb-80">
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
            </div> -->
        </div>
    </div>

    <!-- Feature Benefit Section Start -->
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
                                <a href="">
                                    Easier & <br>
                                    Faster Bookings
                                </a>
                            </h4>
                            <p>Book your favorite bike in just a few clicks with our simple online process.</p>
                            <div class="icon">
                                <img src="assets/img/feature-benefit/icon-1.png" alt="icon-img">
                            </div>
                        </div>
                        <div class="feature-button">
                            <a href="" class="link-btn">View More <i
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
                                <a href="">
                                    Well-Maintained <br>
                                    Bikes
                                </a>
                            </h4>
                            <p>For a safe ride, our bikes are professionally maintained and serviced.</p>
                            <div class="icon">
                                <img src="assets/img/feature-benefit/icon-2.png" alt="icon-img">
                            </div>
                        </div>
                        <div class="feature-button">
                            <a href="" class="link-btn">View More <i
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
                                <a href="">
                                    Customers <br>
                                    100% Satisfied
                                </a>
                            </h4>
                            <p>We pride ourselves on providing excellent service and ensuring customer happiness.</p>
                            <div class="icon">
                                <img src="assets/img/feature-benefit/icon-3.png" alt="icon-img">
                            </div>
                        </div>
                        <div class="feature-button">
                            <a href="" class="link-btn">View More <i
                                    class="fa-solid fa-arrow-right ps-1"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section Start -->
   <section class="about-section fix section-padding pt-0" id="about">
        <div class="container">
            <div class="about-wrapper">
                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="about-image-items">
                            <div class="color-shape">
                                <img src="assets/img/about/secondary-shape-color-full.png" alt="shape-img">
                            </div>
                            <div class="car-shape wow fadeInUp" data-wow-delay=".7s">
                                <img src="assets/img/about/bike-rental.png" alt="shape-img">
                            </div>
                            <div class="counter-content wow fadeInLeft" data-wow-delay=".4s">
                                <h2 class="text-white"><span class="count">500</span>+</h2>
                                <p class="text-white">
                                    Happy <br>
                                    Customers
                                </p>

                            </div>
                            <div class="about-image-1 wow fadeInDown" data-wow-delay=".3s">
                                <img src="assets/img/about/mountain-biking.png" alt="about-image">
                            </div>
                            <div class="about-image-2 wow fadeInLeft" data-wow-delay=".5s">
                                <img src="assets/img/about/city-ride.png" alt="about-image">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-content">
                            <div class="section-title">
                                <img src="assets/img/sub-icon.png" alt="icon-img" class="wow fadeInUp">
                                <span class="wow fadeInUp" data-wow-delay=".2s">Get to know us</span>
                                <h2 class="wow fadeInUp" data-wow-delay=".4s">
                                    Your Adventure, Our Priority
                                </h2>
                            </div>
                            <h4 class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".3s">
                                More than just rentals, we offer complete travel solutions.
                            </h4>
                            <p class="wow fadeInUp" data-wow-delay=".5s">
                                At Whizwheels, we believe your trip to Honnavar should be unforgettable. We provide top-quality, reliable bikes for you to explore the stunning coastline and lush landscapes. But we don't stop there. We also offer curated home stays and exciting boating excursions to make your stay truly special.
                            </p>
                            <div class="about-list-item wow fadeInUp" data-wow-delay=".7s">
                                <ul>
                                    <li>
                                       All-in-One Packages
                                    </li>
                                    <li>
                                        Affordable Prices
                                    </li>
                                </ul>
                                <ul>
                                    <li>
                                        24/7 Customer Support
                                    </li>
                                    <li>
                                        Local Expertise
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Bike Rentals Section Start -->
    <section class="car-rentals-section section-padding fix" id="bikes">
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
                            <img src="assets/img/bike/honda-dio.png" alt="Honda Dio DLX">
                        </div>
                        <div class="car-content">
                            <div class="post-cat">
                                Available
                            </div>
                            <div class="star">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half-stroke"></i>
                            </div>
                            <h4><a href="">Honda Dio DLX</a></h4>
                            <!-- <h6>Starting at ₹699*</h6> -->
                            <a href="https://wa.me/918660989586?text=Hi%2C%20I%20want%20to%20book%20the%20Honda%20Dio%20DLX%20for%20rent.%20Is%20it%20available%3F" target="_blank" class="theme-btn bg-color w-100 text-center">book now <i
                                    class="fa-solid fa-arrow-right ps-1"></i></a>
                        </div>
                    </div>
                        
                    </div>
                    <div class="swiper-slide">
                        <div class="car-rentals-items">
                            <div class="car-image">
                                <img src="assets/img/bike/road-bike.png" alt="Road Bike">
                            </div>
                            <div class="car-content">
                                <div class="post-cat">
                                    Comming Soon
                                </div>
                                <!-- <div class="star">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <span>8 Reviews</span>
                                </div> -->
                                <h4><a href="">Speed Demon Road Bike</a></h4>
                                <!-- <h6>₹1800 <span>/ Day</span></h6> -->
                                <!-- <a href="" class="theme-btn bg-color w-100 text-center">book now <i
                                        class="fa-solid fa-arrow-right ps-1"></i></a> -->
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="car-rentals-items">
                            <div class="car-image">
                                <img src="assets/img/bike/mountain-bike.png" alt="Mountain Bike">
                            </div>
                            <div class="car-content">
                                <div class="post-cat">
                                    Comming Soon
                                </div>
                                <!-- <div class="star">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star-half-stroke"></i>
                                    <span>5 Reviews</span>
                                </div> -->
                                <h4><a href="">Mountain Explorer</a></h4>
                                <!-- <h6>₹1500 <span>/ Day</span></h6> -->
                                <!-- <a href="" class="theme-btn bg-color w-100 text-center">book now <i
                                        class="fa-solid fa-arrow-right ps-1"></i></a> -->
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="car-rentals-items">
                            <div class="car-image">
                                <img src="assets/img/bike/electric-bike.png" alt="Electric Bike">
                            </div>
                            <div class="car-content">
                                <div class="post-cat">
                                    Comming Soon
                                </div>
                                <!-- <div class="star">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <span>12 Reviews</span>
                                </div> -->
                                <h4><a href="">Electric Bolt</a></h4>
                                <!-- <h6>₹2500 <span>/ Day</span></h6> -->
                                <!-- <a href="" class="theme-btn bg-color w-100 text-center">book now <i
                                        class="fa-solid fa-arrow-right ps-1"></i></a> -->
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
                            <img src="assets/img/bike/premium-bike.png" alt="Premium Bike">
                            <div class="color-shape">
                                <img src="assets/img/car/secondary-shape-color.png" alt="shape-img">
                            </div>
                            <div class="booking-content">
                                <p>Call for booking</p>
                                <h3><a href="tel:+918660989586">+91 86609 89586</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="service-car-content">
                            <h2 class="wow fadeInUp" data-wow-delay=".3s">
                                Looking for a Premium <br>
                                Bike Rental?
                            </h2>
                            <a href="#bikes" class="theme-btn wow fadeInUp" data-wow-delay=".7s">Discover More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Funfact Section Start -->
    <section class="funfact-section section-padding bg-cover"
        style="background-image: url('assets/img/bike/bike-bg.png');">
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

    <section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <img src="assets/img/sub-icon.png" alt="icon-img" class="">
            <p class="text-uppercase text-muted fw-bold">Explore Our Services</p>
            <h2 class="fw-bold">
                More Than Just Motorbike Rentals
            </h2>
        </div>
        <div class="row g-4 justify-content-center">
            <div class="col-lg-3 col-md-6">
                <div class="card h-100 text-center shadow-sm">
                    <img src="assets/img/services/1.png" class="card-img-top" alt="Motorbike Rental">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title"><a href="" class="text-decoration-none text-dark">Motorbike Rental</a></h5>
                        <p class="card-text">Our primary service, offering a wide range of bikes for your adventure.</p>
                        <a href="https://wa.me/918660989586?text=I'm%20interested%20in%20renting%20a%20motorbike." class="btn btn-primary mt-auto" target="_blank">Know More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card h-100 text-center shadow-sm">
                    <img src="assets/img/services/2.png" class="card-img-top" alt="Self-Drive Car Rental">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Self-Drive Cars</h5>
                        <p class="card-text">Explore Honnavar and its surroundings with the comfort of a car.</p>
                        <a href="https://wa.me/918660989586?text=I'm%20inquiring%20about%20self-drive%20car%20availability." class="btn btn-primary mt-auto" target="_blank">Know More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card h-100 text-center shadow-sm">
                    <img src="assets/img/services/3.png" class="card-img-top" alt="Homestay Booking">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Homestay Booking</h5>
                        <p class="card-text">Find the perfect place to stay and experience local hospitality.</p>
                        <a href="https://wa.me/918660989586?text=I'd%20like%20to%20know%20more%20about%20homestay%20bookings." class="btn btn-primary mt-auto" target="_blank">Know More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card h-100 text-center shadow-sm">
                    <img src="assets/img/services/4.png" class="card-img-top" alt="Boating Booking">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Boating Trips</h5>
                        <p class="card-text">Experience the serene backwaters and coastal beauty of Honnavar.</p>
                        <a href="https://wa.me/918660989586?text=Please%20provide%20details%20about%20boating%20trip%20bookings." class="btn btn-primary mt-auto" target="_blank">Know More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



    <!-- Popular Bike Section Start -->
    <!-- <section class="popular-car-section fix section-padding">
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
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="popular-card-items">
                        <div class="content">
                            <h4><a href="">Mountain Bikes</a></h4>
                            <p>Available for Rent</p>
                        </div>
                        <div class="car-image">
                            <img src="assets/img/bike/mountain-bike.png" alt="img">
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                    <div class="popular-card-items">
                        <div class="content">
                            <h4><a href="">Road Bikes</a></h4>
                            <p>Available for Rent</p>
                        </div>
                        <div class="car-image">
                            <img src="assets/img/bike/road-bike.png" alt="img">
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                    <div class="popular-card-items">
                        <div class="content">
                            <h4><a href="">Cruiser Bikes</a></h4>
                            <p>Available for Rent</p>
                        </div>
                        <div class="car-image">
                            <img src="assets/img/bike/city-cruiser.png" alt="img">
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                    <div class="popular-card-items">
                        <div class="content">
                            <h4><a href="">Electric Bikes</a></h4>
                            <p>Available for Rent</p>
                        </div>
                        <div class="car-image">
                            <img src="assets/img/bike/electric-bike.png" alt="img">
                        </div>
                    </div>
                </div>
               
            </div>
            <div class="popular-car-text wow fadeInUp" data-wow-delay=".4s">
                <h6>Bike rental services specifically for our customers.</h6>
                <a href="https://wa.me/{$whatsapp_number}?text=" class="theme-btn">Find a Bike</a>
            </div>
        </div>
    </section> -->

    <!-- Testimonial Section Start -->
    <section class="testimonial-section fix section-padding">
        <div class="testimonial-bg-shape">
            <img src="assets/img/testimonial/testimonial-bg.jpg" alt="shape-img">
        </div>
        <div class="container">
            <div class="section-title-area">
                <div class="section-title">
                    <img src="assets/img/sub-icon.png" alt="icon-img" class="wow fadeInUp">
                    <span class="wow fadeInUp" data-wow-delay=".2s">Our Testimonials</span>
                    <h2 class="wow fadeInUp" data-wow-delay=".4s">
                        What They’re Talking <br>
                        About Whizwheels
                    </h2>
                </div>
                <p class="wow fadeInUp" data-wow-delay=".5s">
                    Real stories from our satisfied riders who trust us for their journey.
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
                                        Rented a bike from Whizwheels in Honnavar for a ride up the coast to Gokarna. The motorcycle was in perfect condition, and the team gave us some great tips for the route. Highly recommend! espacially in honnavar 
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
                                    style="background-image: url('https://placehold.co/100x100/EFEFEF/333333?text=SB');"></div>
                                <div class="content">
                                    <h5>
                                        Sanjay Bhat
                                    </h5>
                                    <span>Rider</span>
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
                                        Booking my favorite bike on Whizwheels was so simple. Picked it up from their Honnavar location for a day trip to Murudeshwar. The bike was ready on time, and the process was seamless. No hidden fees, just pure riding pleasure.
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
                                    style="background-image: url('https://placehold.co/100x100/E1E1E1/333333?text=KN');"></div>
                                <div class="content">
                                    <h5>
                                        Keshav Naik
                                    </h5>
                                    <span>Rider</span>
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
                                        Top-notch service! I took one of their bikes on a longer ride to Jog Falls. The motorcycle was reliable and well-maintained, handled the winding roads perfectly. Whizwheels is my go-to for any bike rental in the Honnavar area.
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
                                     style="background-image: url('https://placehold.co/100x100/F5F5F5/333333?text=NB');"></div>
                                <div class="content">
                                    <h5>
                                        Narayan Bhat    
                                    </h5>
                                    <span>Rider</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- Gallery Section Start -->
    <!-- <div class="gallery-section fix">
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
    </div> -->

   <!-- News Section Start -->
<section class="news-section section-padding fix" id="blog">
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
                        <img src="https://placehold.co/600x400/b9fbc0/333333?text=Jog+Falls" alt="Jog Falls on a bike">
                        <div class="post-date">
                            <h6>
                                02 <br>
                                Sep
                            </h6>
                        </div>
                    </div>
                    <div class="news-content">
                        <div class="post-client">
                            <img src="https://placehold.co/50x50/e0e0e0/333333?text=RH" alt="author" style="border-radius: 50%;">
                        </div>
                        <div class="news-cont">
                            <span>by Rohan Hegde</span>
                            <h3><a>A Thrilling Bike Ride from Honnavar to Jog Falls</a></h3>
                            <p>Experience the Western Ghats like never before. Grab a bike from Whizwheels and conquer the scenic route to India's famous waterfalls.</p>
                        </div>
                        <ul>
                            <!-- <li>
                                <i class="fa-solid fa-comments"></i>
                                4 Comments
                            </li> -->
                            <!-- <li>
                                <a href="jog-falls.php">
                                    <i class="fa-solid fa-arrow-right-long"></i>
                                    More
                                </a>
                            </li> -->
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                <div class="news-card-items">
                    <div class="news-image">
                        <img src="https://placehold.co/600x400/90dbf4/333333?text=Gokarna+Coast" alt="Coastal ride to Gokarna">
                        <div class="post-date">
                            <h6>
                                28 <br>
                                Aug
                            </h6>
                        </div>
                    </div>
                    <div class="news-content">
                        <div class="post-client">
                            <img src="https://placehold.co/50x50/e0e0e0/333333?text=PK" alt="author" style="border-radius: 50%;">
                        </div>
                        <div class="news-cont">
                            <span>by Priya Kamath</span>
                            <h3><a>Coastal Karnataka on Two Wheels: Honnavar to Gokarna</a></h3>
                            <p>Feel the sea breeze on a ride to Murudeshwar and Gokarna's serene beaches. Your perfect coastal adventure starts with a Whizwheels rental.</p>
                        </div>
                        <ul>
                            <!-- <li>
                                <i class="fa-solid fa-comments"></i>
                                7 Comments
                            </li> -->
                            <!-- <li>
                                <a href="news-details.php">
                                    <i class="fa-solid fa-arrow-right-long"></i>
                                    More
                                </a>
                            </li> -->
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                <div class="news-card-items">
                    <div class="news-image">
                        <img src="https://placehold.co/600x400/f1c0e8/333333?text=Apsarakonda+Falls" alt="Apsarakonda Falls">
                        <div class="post-date">
                            <h6>
                                25 <br>
                                Aug
                            </h6>
                        </div>
                    </div>
                    <div class="news-content">
                        <div class="post-client">
                           <img src="https://placehold.co/50x50/e0e0e0/333333?text=AP" alt="author" style="border-radius: 50%;">
                        </div>
                        <div class="news-cont">
                            <span>by Anand Pai</span>
                            <h3><a>Hidden Gems: Apsarakonda Falls & Kasarkod Beach</a></h3>
                            <p>Discover Honnavar's local secrets. A short, pleasant ride on a Whizwheels bike is all it takes to find these magical spots.</p>
                        </div>
                        <ul>
                            <!-- <li>
                                <i class="fa-solid fa-comments"></i>
                                5 Comments
                            </li> -->
                            <!-- <li>
                                <a href="news-details.php">
                                    <i class="fa-solid fa-arrow-right-long"></i>
                                    More
                                </a>
                            </li> -->
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
                        <!-- <div class="rental-app-button">
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
                        </div> -->
                    </div>
                </div>
                <div class="col-lg-5 wow fadeInUp" data-wow-delay=".4s">
                    <div class="mobile-remons-image">
                        <img src="assets/img/mobile-whizwheels.png" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contact-section-1 fix section-padding pb-0" id="contact">
    <div class="container">
        <div class="contact-wrapper-area">
            <div class="row g-4">
                <div class="col-lg-9">
                    <div class="contact-content">
                        <div class="section-title">
                            <img src="assets/img/sub-icon.png" alt="icon-img" class="wow fadeInUp">
                            <span class="wow fadeInUp" data-wow-delay=".2s">contact us</span>
                            <h2 class="wow fadeInUp" data-wow-delay=".4s">
                                Drop us a Line
                            </h2>
                        </div>
                        <form action="assets/inc/process-contact.php" id="contact-form" method="POST"
                            class="contact-form-items mt-5 mt-md-0">
                            <div class="row g-4">
                                <div class="col-lg-6">
                                    <div class="form-clt">
                                        <input type="text" name="name" id="name" placeholder="Your Name" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-clt">
                                        <input type="text" name="email" id="email2" placeholder="Your Email" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-clt">
                                        <input type="text" name="subject" id="subject" placeholder="Subject" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-clt">
                                        <input type="text" name="phone" id="phone" placeholder="Phone Number" required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-clt">
                                        <textarea name="message" id="message" placeholder="Write a Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <button type="submit" class="theme-btn">
                                        Send a Message
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="contact-right-items">
                        <div class="contact-img">
                            <img src="https://placehold.co/400x300/cddafd/333333?text=Contact+Us" alt="img">
                        </div>
                        <div class="icon-items">
                            <div class="icon">
                                <img src="assets/img/question.png" alt="img">
                            </div>
                            <div class="content">
                                <p>Have a Question?</p>
                                <h6><a href="tel:+918660989586">+91 86609 89586</a></h6>
                            </div>
                        </div>
                        <div class="icon-items">
                            <div class="icon">
                                <img src="assets/img/email.png" alt="img">
                            </div>
                            <div class="content">
                                <p>Write Email</p>
                                <h6><a href="mailto:contact@whizwheels.in" class="link">contact@whizwheels.in</a></h6>
                            </div>
                        </div>
                        <div class="icon-items">
                            <div class="icon">
                                <img src="assets/img/location.png" alt="img">
                            </div>
                            <div class="content">
                                <p>Visit Office</p>
                                <h6>
                                    Honnavara, Karnataka, India
                                </h6>
                            </div>
                        </div>
                        <!-- <div class="social-icon d-flex align-items-center">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                            <a href="#"><i class="fa-brands fa-youtube"></i></a>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--<< Map Section Start >>-->
<div class="map-section">
    <div class="map-items">
        <div class="googpemap">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4994.327209427085!2d74.4456906760988!3d14.27793748617109!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bbc3af103db7413%3A0x7afc84df7ea0274b!2s7CHX%2B58C%2C%20Honnavar%2C%20Karnataka!5e1!3m2!1sen!2sin!4v1757082863027!5m2!1sen!2sin" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
                            <img src="assets/img/logo/whizwheels-white-logo.png" alt="logo-img">
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

    <!-- Validation Error Popup -->
    <div id="validationPopup" class="booking-popup">
        <div class="popup-content">
            <span class="close-popup">&times;</span>
            <h3 style="color: #c0392b;">Booking Error</h3>
            <p id="validationMessage">Please correct the errors before submitting.</p>
        </div>
    </div>

    <?php include './partials/script.php' ?>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Initialize Datepickers
            const pickupDatepicker = $('#datepicker');
            const dropoffDatepicker = $('#datepicker2');

            // Form Elements for Validation
            const bookNowBtn = document.querySelector('.pickup-btn');
            const pickupLocationSelect = document.getElementById('pickup_location');
            const pickupDateInput = document.getElementById('pickup_date');
            const dropoffDateInput = document.getElementById('dropoff_date');
            const bikeTypeSelect = document.getElementById('bike_type');
            const formFields = [pickupLocationSelect, pickupDateInput, dropoffDateInput, bikeTypeSelect];

            function checkFormValidity() {
                const isFormValid = formFields.every(field => field.value && field.value.trim() !== "");
                bookNowBtn.disabled = !isFormValid;
            }
            
            // Attach listeners to check validity on change
            $(pickupLocationSelect).on('change', checkFormValidity);
            $(bikeTypeSelect).on('change', checkFormValidity);

            pickupDatepicker.datepicker({
                startDate: '0d', // Disable past dates
                autoclose: true
            }).on('changeDate', function(e) {
                if (e.date) {
                    var pickupDate = new Date(e.date);
                    
                    var nextDay = new Date(pickupDate);
                    nextDay.setDate(pickupDate.getDate() + 1);
                    dropoffDatepicker.datepicker('setStartDate', nextDay);

                    var currentDropDate = dropoffDatepicker.datepicker('getDate');
                    if (!currentDropDate || currentDropDate <= pickupDate) {
                        dropoffDatepicker.datepicker('setDate', nextDay);
                    }
                }
                checkFormValidity();
            });

            dropoffDatepicker.datepicker({
                startDate: '1d', 
                autoclose: true
            }).on('changeDate', checkFormValidity);

            // Initial check to set the button state
            checkFormValidity();

            // Form submission logic
            const bookingForm = document.getElementById('whatsappBookingForm');
            const successPopup = document.getElementById('bookingPopup');
            const validationPopup = document.getElementById('validationPopup');
            const validationMessage = document.getElementById('validationMessage');
            const closePopups = document.querySelectorAll('.close-popup');

            bookingForm.addEventListener('submit', function (event) {
                event.preventDefault();

                // Re-validate before submission as a safeguard
                if (bookNowBtn.disabled) {
                    validationMessage.textContent = 'Please fill out all the required fields before booking.';
                    validationPopup.style.display = 'block';
                    return;
                }

                const pickupLocation = document.getElementById('pickup_location').value;
                const pickupDate = pickupDatepicker.datepicker('getDate');
                const dropoffDate = dropoffDatepicker.datepicker('getDate');
                const bikeType = document.getElementById('bike_type').value;

                // --- Validation ---
                if (!pickupLocation || !pickupDate || !dropoffDate || !bikeType) {
                    validationMessage.textContent = 'Please fill out all the required fields before booking.';
                    validationPopup.style.display = 'block';
                    return;
                }

                if (dropoffDate <= pickupDate) {
                    validationMessage.textContent = 'The dropoff date must be after the pickup date.';
                    validationPopup.style.display = 'block';
                    return;
                }

                // If validation passes, proceed with form submission
                const formData = new FormData(bookingForm);

                fetch('assets/inc/process-booking.php', {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success && data.whatsapp_url) {
                        window.open(data.whatsapp_url, '_blank');
                        successPopup.style.display = 'block';
                        bookingForm.reset();
                        if (typeof($) !== 'undefined' && $.fn.niceSelect) {
                            $('select.category').niceSelect('update');
                        }
                        // Reset datepicker values
                        pickupDatepicker.datepicker('setDate', null);
                        dropoffDatepicker.datepicker('setDate', null);
                        dropoffDatepicker.datepicker('setStartDate', '0d');

                    } else {
                        validationMessage.textContent = data.message || 'An unknown error occurred.';
                        validationPopup.style.display = 'block';
                    }
                })
                .catch(error => {
                    console.error('Fetch Error:', error);
                    validationMessage.textContent = 'A network error occurred. Please try again.';
                    validationPopup.style.display = 'block';
                });
            });

            // Close popup functionality
            closePopups.forEach(btn => {
                btn.addEventListener('click', function () {
                    successPopup.style.display = 'none';
                    validationPopup.style.display = 'none';
                });
            });

            window.addEventListener('click', function (event) {
                if (event.target == successPopup || event.target == validationPopup) {
                    successPopup.style.display = 'none';
                    validationPopup.style.display = 'none';
                }
            });
        });
    </script>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const contactForm = document.getElementById('contact-form');
        const messageContainer = document.getElementById('form-message-container');
        
        if (contactForm) {
            contactForm.addEventListener('submit', function(event) {
                event.preventDefault(); // Stop the default browser submission

                const formData = new FormData(contactForm);
                const submitButton = contactForm.querySelector('button[type="submit"]');

                // Clear previous messages
                messageContainer.innerHTML = '';

                // Disable button and show loading text to prevent multiple submissions
                submitButton.disabled = true;
                submitButton.textContent = 'Sending...';

                // Send the form data to the PHP script
                fetch('assets/inc/process-contact.php', {
                    method: 'POST',
                    body: formData
                })
                .then(response => {
                    if (!response.ok) {
                        // Handle server errors (like 500, 404 etc.)
                        throw new Error(`Server error: ${response.statusText}`);
                    }
                    return response.json();
                })
                .then(data => {
                    // Create a message element
                    const messageDiv = document.createElement('div');
                    messageDiv.textContent = data.message;

                    if (data.success) {
                        // On success, add success class, reset the form
                        messageDiv.className = 'form-message success';
                        contactForm.reset(); 
                    } else {
                        // On failure, add error class
                        messageDiv.className = 'form-message error';
                    }
                    // Display the message
                    messageContainer.appendChild(messageDiv);
                })
                .catch(error => {
                    // Handle network errors or other fetch-related issues
                    console.error('Submission Error:', error);
                    messageContainer.innerHTML = `<div class="form-message error">An unexpected error occurred. Please try again later.</div>`;
                })
                .finally(() => {
                    // Re-enable the button and restore its text, regardless of outcome
                    submitButton.disabled = false;
                    submitButton.textContent = 'Send a Message';
                });
            });
        }
    });
    </script>

    <style>
        /* Basic styling for the popups */
        .booking-popup {
            display: none; 
            position: fixed; 
            z-index: 9999; 
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto; 
            background-color: rgba(0,0,0,0.6); 
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

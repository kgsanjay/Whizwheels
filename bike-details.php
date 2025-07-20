<?php
$headTitle = 'Bike Details';
$img = 'assets/img/bg-header-banner.jpg';
$Title = 'Bikes';
$Title2 = 'Bike Details';
$SubTitle = 'Single Bike';
?>

<?php include './partials/layouts/layoutsTop.php' ?>


<!-- Bike Details Section Start -->
<section class="car-details fix section-padding">
    <div class="container">
        <div class="car-details-wrapper">
            <div class="row g-5">
                <div class="col-lg-8">
                    <div class="car-details-items">
                        <div class="car-image">
                            <img src="https://placehold.co/800x600/9bf6ff/333333?text=Himalayan+Explorer" alt="img">
                        </div>
                        <div class="car-content">
                            <div class="star">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half-stroke"></i>
                                <span>5 Reviews</span>
                            </div>
                            <h3>Himalayan Explorer</h3>
                            <h6>₹1500 <span>/ Day</span></h6>
                            <p class="mt-4 mb-4">
                                Experience the thrill of adventure and freedom. We help our riders explore new trails and create lasting memories. This bike is perfect for both rugged mountain paths and scenic city routes around Mysuru.
                            </p>
                            <div class="icon-details-area">
                                <h4>Key Features</h4>
                                <div class="icon-details-main-items">
                                    <div class="icon-items">
                                        <div class="icon">
                                            <i class="fa-solid fa-bicycle"></i>
                                        </div>
                                        <div class="content">
                                            <h6>Bike Type:</h6>
                                            <p>Mountain</p>
                                        </div>
                                    </div>
                                    <div class="icon-items">
                                        <div class="icon">
                                            <i class="fa-solid fa-ruler-combined"></i>
                                        </div>
                                        <div class="content">
                                            <h6>Frame Size:</h6>
                                            <p>Medium (18")</p>
                                        </div>
                                    </div>
                                    <div class="icon-items">
                                        <div class="icon">
                                            <i class="fa-solid fa-cog"></i>
                                        </div>
                                        <div class="content">
                                            <h6>Gears:</h6>
                                            <p>21 Speed</p>
                                        </div>
                                    </div>
                                    <div class="icon-items">
                                        <div class="icon">
                                            <i class="fa-solid fa-weight-hanging"></i>
                                        </div>
                                        <div class="content">
                                            <h6>Weight:</h6>
                                            <p>12 kg</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="icon-details-main-items">
                                    <div class="icon-items">
                                        <div class="icon">
                                            <i class="fa-solid fa-circle-dot"></i>
                                        </div>
                                        <div class="content">
                                            <h6>Wheel Size:</h6>
                                            <p>29 inches</p>
                                        </div>
                                    </div>
                                    <div class="icon-items">
                                        <div class="icon">
                                            <i class="fa-solid fa-bolt"></i>
                                        </div>
                                        <div class="content">
                                            <h6>Brakes:</h6>
                                            <p>Disc Brakes</p>
                                        </div>
                                    </div>
                                    <div class="icon-items">
                                        <div class="icon">
                                            <i class="fa-solid fa-person-biking"></i>
                                        </div>
                                        <div class="content">
                                            <h6>Suspension:</h6>
                                            <p>Front</p>
                                        </div>
                                    </div>
                                    <div class="icon-items">
                                        <div class="icon">
                                            <i class="fa-solid fa-palette"></i>
                                        </div>
                                        <div class="content">
                                            <h6>Color:</h6>
                                            <p>Blue</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="car-video mt-5">
                                <img src="https://placehold.co/800x450/caffbf/333333?text=Bike+in+Action!" alt="img">
                                <div class="video-box">
                                    <a href="https://www.youtube.com/watch?v=Cn4G2lZ_g2I"
                                        class="video-btn ripple video-popup">
                                        <i class="fa-solid fa-play"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="car-booking-items">
                        <div class="booking-header">
                            <h3>Request for Booking</h3>
                            <p>Send your requirement to us. We will check email and contact you soon.</p>
                        </div>
                        <form action="#" id="contact-form" method="POST" class="contact-form-items">
                            <div class="row g-4">
                                <div class="col-lg-6">
                                    <div class="form-clt">
                                        <label class="label-text">Full Name</label>
                                        <input type="text" name="name" id="name" placeholder="Full Name">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-clt">
                                        <label class="label-text">Email</label>
                                        <input type="email" name="email" id="email" placeholder="your-email@example.com">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-clt">
                                        <label class="label-text">Phone Number</label>
                                        <input type="text" name="phone" id="phone" placeholder="+91 98765 43210">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-clt">
                                        <label class="label-text">Address</label>
                                        <input type="text" name="address" id="address" placeholder="Delivery Address">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-clt">
                                        <label class="label-text">Pick-up Location</label>
                                        <div class="category-oneadjust">
                                            <select name="cate" class="category">
                                                <option value="1">Select Location</option>
                                                <option value="2">Mysore Palace</option>
                                                <option value="3">Brindavan Gardens</option>
                                                <option value="4">KRS Backwaters</option>
                                                <option value="5">Other Location</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-clt">
                                        <label class="label-text">Pick-up Date</label>
                                        <div id="datepicker3" class="input-group date" data-date-format="dd-mm-yyyy">
                                            <input class="form-control" type="text" placeholder="Check in" readonly>
                                            <span class="input-group-addon"> <i class="fa-solid fa-calendar-days"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-clt">
                                        <label class="label-text">Drop-off Date</label>
                                        <div id="datepicker4" class="input-group date" data-date-format="dd-mm-yyyy">
                                            <input class="form-control" type="text" placeholder="Check out" readonly>
                                            <span class="input-group-addon"> <i class="fa-solid fa-calendar-days"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="input-save-items-area">
                                        <div class="input-save-items">
                                            <div class="input-save d-flex align-items-center mb-3">
                                                <input type="checkbox" class="form-check-input" name="save-for-next" id="saveForNext1">
                                                <label for="saveForNext1">Helmet</label>
                                            </div>
                                            <div class="input-save d-flex align-items-center">
                                                <input type="checkbox" class="form-check-input" name="save-for-next" id="saveForNext2">
                                                <label for="saveForNext2">Bike Lock</label>
                                            </div>
                                        </div>
                                        <div class="input-save-items">
                                            <div class="input-save d-flex align-items-center mb-3">
                                                <label>₹100 / Day</label>
                                            </div>
                                            <div class="input-save d-flex align-items-center">
                                                <label>₹50 / Day</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <button class="theme-btn" type="submit">
                                        Send Request
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="comment-reviews">
                        <h3>2 Reviews</h3>
                        <div class="car-single-comment d-flex gap-4 pb-5">
                            <div class="image">
                                <img src="assets/img/car/comment01.png" alt="image">
                            </div>
                            <div class="content">
                                <div class="head d-flex flex-wrap gap-3 align-items-center justify-content-between">
                                    <div class="con">
                                        <h4>Arjun Sharma</h4>
                                    </div>
                                    <div class="star">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                </div>
                                <p class="mt-4">
                                    Mast bike hai! It handled the Chamundi Hills trails perfectly. Booking process was super easy and the staff were very helpful. Will definitely rent from Whizwheels again!
                                </p>
                            </div>
                        </div>
                        <div class="car-single-comment d-flex gap-4 pt-5 border-none">
                            <div class="image">
                                <img src="assets/img/car/comment02.png" alt="image">
                            </div>
                            <div class="content">
                                <div class="head d-flex flex-wrap gap-3 align-items-center justify-content-between">
                                    <div class="con">
                                        <h4>Priya Patel</h4>
                                    </div>
                                    <div class="star">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star-half-stroke"></i>
                                    </div>
                                </div>
                                <p class="mt-4">
                                    The electric bike was a game-changer for exploring Mysuru. Smooth ride and the battery lasted all day. Highly recommended for a city tour.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="car-list-sidebar">
                        <h4 class="title">Booking Form</h4>
                        <form action="#" id="contact-form2" method="POST" class="contact-form-items">
                            <div class="row g-4">
                                <div class="col-lg-12">
                                    <div class="form-clt">
                                        <label class="label-text">Pick-up Location</label>
                                        <div class="category-oneadjust">
                                            <select name="cate" class="category">
                                                <option value="1">Select Location</option>
                                                <option value="2">Mysore Palace</option>
                                                <option value="3">Brindavan Gardens</option>
                                                <option value="4">KRS Backwaters</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-clt">
                                        <label class="label-text">Pick-up Date</label>
                                        <div id="datepicker" class="input-group date" data-date-format="dd-mm-yyyy">
                                            <input class="form-control" type="text" placeholder="Check in" readonly>
                                            <span class="input-group-addon"> <i class="fa-solid fa-calendar-days"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-clt">
                                        <label class="label-text">Drop-off Date</label>
                                        <div id="datepicker2" class="input-group date" data-date-format="dd-mm-yyyy">
                                            <input class="form-control" type="text" placeholder="Check out" readonly>
                                            <span class="input-group-addon"> <i class="fa-solid fa-calendar-days"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-clt">
                                        <label class="label-text">Quantity</label>
                                        <div class="category-oneadjust">
                                            <select name="cate" class="category">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-clt">
                                        <label class="label-text">Add-ons</label>
                                        <div class="input-save-items-area">
                                            <div class="input-save-items">
                                                <div class="input-save d-flex align-items-center mb-3">
                                                    <input type="checkbox" class="form-check-input" name="save-for-next" id="saveForNext3">
                                                    <label for="saveForNext3">Helmet</label>
                                                </div>
                                                <div class="input-save d-flex align-items-center">
                                                    <input type="checkbox" class="form-check-input" name="save-for-next" id="saveForNext4">
                                                    <label for="saveForNext4">Bike Lock</label>
                                                </div>
                                            </div>
                                            <div class="input-save-items">
                                                <div class="input-save d-flex align-items-center mb-3">
                                                    <label>₹100 / Day</label>
                                                </div>
                                                <div class="input-save d-flex align-items-center">
                                                    <label>₹50 / Day</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-clt">
                                        <button type="submit" class="theme-btn">Book Now</button>
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

<!-- Similar Bikes Section Start -->
<section class="car-rentals-section-2 section-padding fix pt-0">
    <div class="container">
        <div class="section-title text-center">
            <img src="assets/img/sub-icon.png" alt="icon-img" class="wow fadeInUp">
            <span class="wow fadeInUp" data-wow-delay=".2s">Checkout our other bikes</span>
            <h2 class="wow fadeInUp" data-wow-delay=".4s">
                Similar Bikes Available
            </h2>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
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
                        <a href="bike-details.php" class="theme-btn bg-color w-100 text-center">book now <i
                                class="fa-solid fa-arrow-right ps-1"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                <div class="car-rentals-items">
                    <div class="car-image">
                        <img src="https://placehold.co/600x400/9bf6ff/333333?text=Royal+Cruiser" alt="img">
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
                        <h4><a href="bike-details.php">Royal Cruiser</a></h4>
                        <h6>₹1200 <span>/ Day</span></h6>
                        <a href="bike-details.php" class="theme-btn bg-color w-100 text-center">book now <i
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
                        <a href="bike-details.php" class="theme-btn bg-color w-100 text-center">book now <i
                                class="fa-solid fa-arrow-right ps-1"></i></a>
                    </div>
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

<?php include './partials/layouts/layoutsBottom.php' ?>

<?php
$headTitle = 'Our Bikes';
$img = 'assets/img/bg-header-banner.jpg';
$Title = 'Home';
$Title2 = 'Bikes';
$SubTitle = 'Bike List';
?>

<?php include './partials/layouts/layoutsTop.php' ?>

<!-- Bike List Section Start -->
<section class="car-list-section section-padding fix">
    <div class="container">
        <div class="car-list-wrapper">
            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="car-list-sidebar">
                        <h4 class="title">Search Bike</h4>
                        <form action="#" id="contact-form" method="POST" class="contact-form-items">
                            <div class="row g-4">
                                <div class="col-lg-12">
                                    <div class="form-clt">
                                        <label class="label-text">Bike Type</label>
                                        <div class="category-oneadjust">
                                            <select name="cate" class="category">
                                                <option value="1">All Bikes</option>
                                                <option value="2">Mountain Bike</option>
                                                <option value="3">Road Bike</option>
                                                <option value="4">Cruiser</option>
                                                <option value="5">Electric Bike</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-clt">
                                        <label class="label-text">Pick-up Location</label>
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
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-clt">
                                        <label class="label-text">Dropoff Location</label>
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
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-clt">
                                        <label class="label-text">Pick-up Date</label>
                                        <div id="datepicker" class="input-group date" data-date-format="dd-mm-yyyy">
                                            <input class="form-control" type="text" placeholder="Check in" readonly>
                                            <span class="input-group-addon"> <i
                                                    class="fa-solid fa-calendar-days"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-clt">
                                        <label class="label-text">Drop-off Date</label>
                                        <div id="datepicker2" class="input-group date" data-date-format="dd-mm-yyyy">
                                            <input class="form-control" type="text" placeholder="Check out" readonly>
                                            <span class="input-group-addon"> <i
                                                    class="fa-solid fa-calendar-days"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-clt">
                                        <button type="submit" class="theme-btn">Search Now</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="woocommerce-notices-wrapper">
                        <div class="product-showing">
                            <p>Showing 1–6 of 12 Results</p>
                        </div>
                        <div class="woocommerce-right d-flex align-items-center">
                            <div class="icon-items">
                                <a href="bike-grid.php"><i class="fas fa-th"></i></a>
                                <a href="bike-list.php"><i class="fa-solid fa-list"></i></a>
                            </div>
                            <div class="form-clt">
                                <div class="nice-select" tabindex="0">
                                    <span class="current">
                                        Sort by Popular
                                    </span>
                                    <ul class="list">
                                        <li data-value="1" class="option selected focus">
                                            Default sorting
                                        </li>
                                        <li data-value="1" class="option">
                                            Sort by popularity
                                        </li>
                                        <li data-value="1" class="option">
                                            Sort by average rating
                                        </li>
                                        <li data-value="1" class="option">
                                            Sort by latest
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row g-4">
                        <div class="col-lg-12">
                            <div class="car-list-items style-2">
                                <div class="car-image bg-cover"
                                    style="background-image: url('https://placehold.co/600x400/9bf6ff/333333?text=Himalayan+Explorer');">
                                    <div class="post-cat">
                                        2024 Model
                                    </div>
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
                                    <h6 class="price">₹1500 <span>/ Day</span></h6>
                                    <h3><a href="bike-details.php">Himalayan Explorer</a></h3>
                                    <p>
                                        Perfect for tackling the rugged trails of Chamundi Hills or a leisurely ride around KRS backwaters. Built for adventure.
                                    </p>
                                    <ul class="icon-items">
                                        <li><i class="fa-solid fa-bicycle"></i> Mountain</li>
                                        <li><i class="fa-solid fa-cog"></i> 21 Gears</li>
                                        <li><i class="fa-solid fa-bolt"></i> Disc Brakes</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="car-list-items style-2">
                                <div class="car-image bg-cover"
                                    style="background-image: url('https://placehold.co/600x400/caffbf/333333?text=City+Sprinter');">
                                    <div class="post-cat">
                                        2024 Model
                                    </div>
                                </div>
                                <div class="car-content">
                                    <div class="star">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <span>8 Reviews</span>
                                    </div>
                                    <h6 class="price">₹1800 <span>/ Day</span></h6>
                                    <h3><a href="bike-details.php">City Sprinter Road Bike</a></h3>
                                    <p>
                                        Ideal for fast-paced rides through the city streets of Mysuru. Lightweight and built for speed and efficiency.
                                    </p>
                                    <ul class="icon-items">
                                        <li><i class="fa-solid fa-road"></i> Road</li>
                                        <li><i class="fa-solid fa-cog"></i> 18 Gears</li>
                                        <li><i class="fa-solid fa-bolt"></i> Caliper Brakes</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="car-list-items style-2">
                                <div class="car-image bg-cover"
                                    style="background-image: url('https://placehold.co/600x400/a0c4ff/333333?text=Volt-Ryder');">
                                    <div class="post-cat">
                                        2024 Model
                                    </div>
                                </div>
                                <div class="car-content">
                                    <div class="star">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <span>12 Reviews</span>
                                    </div>
                                    <h6 class="price">₹2500 <span>/ Day</span></h6>
                                    <h3><a href="bike-details.php">Volt-Ryder Electric</a></h3>
                                    <p>
                                       Explore farther with ease. Our electric bike gives you the boost you need to see all the sights without breaking a sweat.
                                    </p>
                                    <ul class="icon-items">
                                        <li><i class="fa-solid fa-bolt-lightning"></i> Electric</li>
                                        <li><i class="fa-solid fa-battery-full"></i> 80km Range</li>
                                        <li><i class="fa-solid fa-gauge-high"></i> 25km/h Top Speed</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="car-list-items style-2">
                                <div class="car-image bg-cover"
                                    style="background-image: url('https://placehold.co/600x400/ffadad/333333?text=Urban+Commuter');">
                                    <div class="post-cat">
                                        2023 Model
                                    </div>
                                </div>
                                <div class="car-content">
                                    <div class="star">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star-half-stroke"></i>
                                        <span>7 Reviews</span>
                                    </div>
                                    <h6 class="price">₹900 <span>/ Day</span></h6>
                                    <h3><a href="bike-details.php">Urban Commuter</a></h3>
                                    <p>
                                        A comfortable and reliable choice for your daily travel needs within the city. Practical and easy to handle.
                                    </p>
                                    <ul class="icon-items">
                                        <li><i class="fa-solid fa-city"></i> Hybrid</li>
                                        <li><i class="fa-solid fa-cog"></i> 7 Gears</li>
                                        <li><i class="fa-solid fa-cart-shopping"></i> Carrier Rack</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
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

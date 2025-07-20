<?php
$headTitle = 'Blog Details';
$img = 'assets/img/bg-header-banner.jpg';
$Title = 'Home';
$Title2 = 'Blog';
$SubTitle = 'Blog Details';
?>

<?php include './partials/layouts/layoutsTop.php' ?>



<!-- News Details Section Start -->
<section class="news-details-section fix section-padding">
    <div class="container">
        <div class="news-details-wrapper">
            <div class="row g-5">
                <div class="col-lg-8">
                    <div class="news-details-items">
                        <div class="news-image">
                            <img src="https://placehold.co/800x500/a2d2ff/333333?text=Apsarakonda+Trail" alt="news-img">
                        </div>
                        <div class="news-details-content">
                            <ul class="list-admin">
                                <li>
                                    <i class="fa-solid fa-circle-user"></i>
                                    by Admin
                                </li>
                                <li>
                                    /
                                </li>
                                <li>
                                    <i class="fa-solid fa-comments"></i>
                                    2 Comments
                                </li>
                            </ul>
                            <h3>Exploring the Serene Trails to Apsarakonda Falls</h3>
                            <p class="mt-3">
                                Discovering the hidden gems of Honnavara on two wheels is an experience like no other. One of the most rewarding journeys you can undertake is the ride to the magnificent Apsarakonda Falls. The trail offers a perfect blend of moderate challenge and breathtaking scenery, making it a must-do for any cycling enthusiast visiting the region.
                            </p>
                            <p class="mt-4">
                                The route takes you through lush green paddy fields and quaint local villages, giving you a glimpse into the serene coastal life of Karnataka. As you get closer to the falls, the path becomes more adventurous with gentle climbs and descents. We recommend our 'Himalayan Explorer' mountain bike for this trail, as its sturdy frame and excellent suspension make for a comfortable and safe ride.
                            </p>
                            <p class="mt-4">
                                Upon reaching Apsarakonda, you are greeted by the spectacular sight of the waterfall cascading down into a natural pool. It's the perfect spot to take a refreshing break, dip your feet in the cool water, and soak in the tranquility of nature before heading back. Remember to pack some water and snacks for the journey!
                            </p>
                        </div>
                    </div>
                    <div class="tag-share-wrap mt-4 mb-4">
                        <div class="tagcloud">
                            <span>Tags</span>
                            <a href="news-details.php">Biking</a>
                            <a href="news-details.php">Honnavara</a>
                        </div>
                        <div class="social-share d-flex align-items-center">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                            <a href="#"><i class="fa-brands fa-youtube"></i></a>
                        </div>
                    </div>
                    <div class="row g-4">
                        <div class="col-lg-6">
                            <div class="news-rental-servce-items">
                                <h4>
                                    Looking for the best bike rental service?
                                </h4>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="news-rental-servce-items style-2">
                                <h4>
                                    Your adventure on two wheels starts here!
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="comment-reviews">
                        <h3>2 Comments</h3>
                        <div class="single-comment d-flex gap-4 pb-5">
                            <div class="image">
                                <img src="assets/img/car/comment01.png" alt="image">
                            </div>
                            <div class="content">
                                <div class="head d-flex flex-wrap gap-3 align-items-center justify-content-between">
                                    <div class="con">
                                        <h4>Arjun Sharma</h4>
                                    </div>
                                    <a href="news-details.php" class="reply">Reply</a>
                                </div>
                                <p class="mt-4">
                                    Thanks for this guide! I rented a bike from Whizwheels last weekend and did this trail. It was absolutely amazing. The bike was in perfect condition.
                                </p>
                            </div>
                        </div>
                        <div class="single-comment d-flex gap-4 pt-5 pb-5">
                            <div class="image">
                                <img src="assets/img/car/comment02.png" alt="image">
                            </div>
                            <div class="content">
                                <div class="head d-flex flex-wrap gap-3 align-items-center justify-content-between">
                                    <div class="con">
                                        <h4>Priya Patel</h4>
                                    </div>
                                    <a href="news-details.php" class="reply">Reply</a>
                                </div>
                                <p class="mt-4">
                                    I was looking for something to do in Honnavara and this looks perfect. Will be booking a bike soon!
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="comment-form-wrap pt-5">
                        <h3>Leave a comments</h3>
                        <form action="#" id="contact-form" method="POST">
                            <div class="row g-4">
                                <div class="col-lg-6">
                                    <div class="form-clt">
                                        <input type="text" name="name" id="name" placeholder="Your Name">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-clt">
                                        <input type="text" name="email" id="email2" placeholder="Your Email">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-clt">
                                        <textarea name="message" id="message" placeholder="Write a Comment"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <button type="submit" class="theme-btn">
                                        Submit Comment
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="main-sidebar">
                        <div class="search-widget">
                            <form action="#">
                                <input type="text" placeholder="Search">
                                <button type="submit"><i class="fa-regular fa-magnifying-glass"></i></button>
                            </form>
                        </div>
                        <div class="single-sidebar-widget">
                            <div class="wid-title">
                                <h3>Recent Post</h3>
                            </div>
                            <div class="recent-post-area">
                                <div class="recent-items">
                                    <div class="recent-thumb">
                                        <img src="https://placehold.co/100x100/ffadad/333333?text=Bike+Safety" alt="img">
                                    </div>
                                    <div class="recent-content">
                                        <ul>
                                            <li>
                                                <i class="fa-solid fa-comments"></i>
                                                5 Comments
                                            </li>
                                        </ul>
                                        <h6>
                                            <a href="news-details.php">
                                                Essential Safety Tips for Coastal Riding
                                            </a>
                                        </h6>
                                    </div>
                                </div>
                                <div class="recent-items">
                                    <div class="recent-thumb">
                                        <img src="https://placehold.co/100x100/ffd6a5/333333?text=Bike+Choice" alt="img">
                                    </div>
                                    <div class="recent-content">
                                        <ul>
                                            <li>
                                                <i class="fa-solid fa-comments"></i>
                                                3 Comments
                                            </li>
                                        </ul>
                                        <h6>
                                            <a href="news-details.php">
                                                Which Bike is Right for You?
                                            </a>
                                        </h6>
                                    </div>
                                </div>
                                <div class="recent-items">
                                    <div class="recent-thumb">
                                        <img src="https://placehold.co/100x100/caffbf/333333?text=Murudeshwar" alt="img">
                                    </div>
                                    <div class="recent-content">
                                        <ul>
                                            <li>
                                                <i class="fa-solid fa-comments"></i>
                                                8 Comments
                                            </li>
                                        </ul>
                                        <h6>
                                            <a href="news-details.php">
                                                A Day Trip to Murudeshwar by Bike
                                            </a>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-sidebar-widget">
                            <div class="wid-title">
                                <h3>Categories</h3>
                            </div>
                            <div class="news-widget-categories">
                                <ul>
                                    <li><a href="news-details.php">Bike Trails <i
                                                class="fa-solid fa-arrow-right-long"></i></a></li>
                                    <li><a href="news-details.php">Travel Tips <i
                                                class="fa-solid fa-arrow-right-long"></i></a></li>
                                    <li class="active"><a href="news-details.php">Honnavara <i
                                                class="fa-solid fa-arrow-right-long"></i></a></li>
                                    <li><a href="news-details.php">Gear <i
                                                class="fa-solid fa-arrow-right-long"></i></a></li>
                                    <li><a href="news-details.php">Electric Bikes <i
                                                class="fa-solid fa-arrow-right-long"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="single-sidebar-widget">
                            <div class="wid-title">
                                <h3>Tags</h3>
                            </div>
                            <div class="news-widget-categories">
                                <div class="tagcloud">
                                    <a href="news-standard.php">Adventure</a>
                                    <a href="news-details.php">Beach</a>
                                    <a href="news-details.php">Coastal Ride</a>
                                    <a href="news-details.php">Nature</a>
                                    <a href="news-details.php">Explore</a>
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

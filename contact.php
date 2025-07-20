<?php
$headTitle = 'Contact Us';
$img = 'assets/img/bg-header-banner.jpg';
$Title = 'Home';
$Title2 = 'Contact';
$SubTitle = 'Contact Us';
?>

<?php include './partials/layouts/layoutsTop.php' ?>

<!-- Contact Section Start -->
<section class="contact-section-1 fix section-padding pb-0">
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
                        <form action="assets/inc/sendmail.php" id="contact-form" method="POST"
                            class="contact-form-items mt-5 mt-md-0">
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
                                <div class="col-lg-6">
                                    <div class="form-clt">
                                        <input type="text" name="subject" id="subject" placeholder="Subject">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-clt">
                                        <input type="text" name="phone" id="phone" placeholder="Phone Number">
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
                                <h6><a href="tel:+919876543210">+91 98765 43210</a></h6>
                            </div>
                        </div>
                        <div class="icon-items">
                            <div class="icon">
                                <img src="assets/img/email.png" alt="img">
                            </div>
                            <div class="content">
                                <p>Write Email</p>
                                <h6><a href="mailto:contact@whizwheels.bike" class="link">contact@whizwheels.bike</a></h6>
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
    </div>
</section>

<!--<< Map Section Start >>-->
<div class="map-section">
    <div class="map-items">
        <div class="googpemap">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62367.25183353807!2d76.60933272167968!3d12.310539000000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3baf70381d572ef9%3A0x2b89ece8c0f8396d!2sMysuru%2C%20Karnataka!5e0!3m2!1sen!2sin!4v1678886523521!5m2!1sen!2sin"
                style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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

<?php include './partials/layouts/layoutsBottom.php' ?>

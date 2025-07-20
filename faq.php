<?php
$headTitle = 'FAQs';
$img = 'assets/img/bg-header-banner.jpg';
$Title = 'Home';
$Title2 = 'Faqs';
$SubTitle = 'Faqs';
?>

<?php include './partials/layouts/layoutsTop.php' ?>


<!--<< Faq Section Start >>-->
<section class="faq-section-2 fix section-padding">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-4">
                <div class="faq-sidebar">
                    <div class="search-widget">
                        <form action="#">
                            <input type="text" placeholder="Search FAQs">
                            <button type="submit"><i class="fa-regular fa-magnifying-glass"></i></button>
                        </form>
                    </div>
                    <h3>
                        Still have Questions? <br>
                        Call Now!
                    </h3>
                    <div class="icon-items">
                        <div class="icon">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div class="content">
                            <p>Call Anytime</p>
                            <h6><a href="tel:+919876543210">+91 98765 43210</a></h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
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
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq1" aria-expanded="false" aria-controls="faq1">
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
                            <div class="accordion-item wow mb-4 fadeInUp" data-wow-delay=".7s">
                                <h5 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq3" aria-expanded="false" aria-controls="faq3">
                                        Is there a security deposit for renting a bike?
                                    </button>
                                </h5>
                                <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        Yes, a refundable security deposit is required at the time of pickup. The amount varies depending on the bike model. The deposit will be returned to you in full after the bike is returned in its original condition.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item mb-4 wow fadeInUp" data-wow-delay=".3s">
                                <h5 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq4" aria-expanded="false" aria-controls="faq4">
                                        What should I do in case of a breakdown?
                                    </button>
                                </h5>
                                <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        In the unlikely event of a breakdown, please contact our support number immediately. We provide 24/7 roadside assistance within Mysuru city limits and will arrange for a mechanic or a replacement bike as soon as possible.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item wow mb-4 fadeInUp" data-wow-delay=".7s">
                                <h5 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq6" aria-expanded="false" aria-controls="faq6">
                                        Can I take the rental bike outside of Mysuru?
                                    </button>
                                </h5>
                                <div id="faq6" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        Yes, you can take the bike for outstation trips, but you must inform us at the time of booking. There might be different rental charges and a limit on the number of kilometers for outstation travel.
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

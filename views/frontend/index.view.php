<?php
require 'views/frontend/layouts/head.view.php'; ?>

<?php require 'views/frontend/layouts/navbar.view.php'; ?>

    <section id="banner">
        <div class="banner-container">
            <div class="banner home-v1">
                <ul>
                    <?php foreach ($sliders as $slider): ?>
                        <li class="slider-1" data-transition="fade" data-slotamount="7" data-thumb="img/slider/1.jpg"
                            data-title="WE ARE AVAILABLE">

                            <img src="/storage/<?php echo $slider['image'] ?>" data-bgrepeat="no-repeat"
                                 data-bgfit="cover"
                                 data-bgposition="center center" alt="<?php echo $slider['title'] ?>">

                            <div class="caption sfl sfb tp-resizeme caption-bold-heading text-center" data-x="0"
                                 data-y="480" data-speed="700" data-start="1700" data-easing="easeOutBack">
                                <h1><?php echo $slider['title'] ?></h1>
                            </div>

                            <div class="caption sfr sfb tp-resizeme p-tag text-center" data-x="0" data-y="570"
                                 data-speed="700" data-start="2000" data-easing="easeOutBack">
                                <p><?php echo $slider['description'] ?></p>
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ul>

            </div>
        </div>
    </section>


    <section class="call-to-action-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="dtc icon-box">
                        <i class="icon icon-Phone2"></i>
                    </div>
                    <div class="dtc text-one">
                        <h3>Get Free Legal Consultatnt: <span class="number">(02)0000 0000</span></h3>
                    </div>
                    <div class="dtc text-two">
                        <h4>7 days a Week From : 8.00 am to 2.30 pm</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="welcome-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="welcome-attorney">
                        <div class="section-title">
                            <h1><span>Welcome to our attorney</span></h1>
                        </div>
                        <div class="welcome-text">
                            <p>Lorem ipsum dolor sit amet, cons ectetur elit. Vestibulum nec odios Suspe ndisse cursus
                                mal suada faci lisis. Lorem ipsum dolor sit ametion consectetur elit. Vesti bulum nec
                                odio ipsum. </p>
                        </div>
                        <div class="fix civil-titigation">
                            <div class="fix civil-img-holder alignleft">
                                <img src="assets/img/civil.jpg" alt="">
                            </div>
                            <div class="fix civil-text">
                                <h4>civil litigation</h4>
                                <p>Lorem ipsum dolor sit amet, cons ectetur elit. Vesti bulum nec odios Suspe ndisse
                                    cursus.</p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="our-law">
                        <img src="assets/img/family-law.jpg" alt="">
                        <h4>family Law</h4>
                        <p>Lorem ipsum dolor sit amet, cons ect etur elit. Vestibulum nec odios Suspe ndisse cursus mal
                            suada faci lisis.</p>

                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="our-law">
                        <img src="assets/img/busisness-law.jpg" alt="">
                        <h4>business law</h4>
                        <p>Lorem ipsum dolor sit amet, cons ect etur elit. Vestibulum nec odios Suspe ndisse cursus mal
                            suada faci lisis.</p>
                    </div>
                </div>
            </div>
    </section>

    <section id="featured-services-area">
        <div class="container">
            <div class="featured-services">
                <div class="section-title text-center">
                    <span>Our Practice Areas</span>
                    <h2><span>Our featured services</span></h2>
                </div>
                <div class="row">
                    <div class="top-featured">
                        <?php foreach ($services as $service): ?>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="single-featured">
                                    <div class="single-featured-icon alignleft">
                                        <i class="flaticon-justice4"></i>
                                    </div>
                                    <div class="single-featured-text">
                                        <h5><?php echo $service['title'] ?></h5>
                                        <p><?php echo $service['description'] ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>

                    </div>
                </div>

            </div>
        </div>
    </section>


    <section id="case-evaluation-area" class="anim-5-all">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-7 col-sm-6 col-xs-12">
                    <form action="../../Core/frontend/Contact.php" method="POST" enctype="multipart/form-data">
                        <div class="case-evaluation-form">
                            <div class="case-evaluation-form-title">
                                <h1>Free Case Evaluation</h1>
                            </div>
                            <div class="row">
                               <?php if(! isAuth()):?>
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Name" name="name" required>
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" placeholder="E-mail" name="email" required>
                                </div>
                                <?php endif;?>

                                <div class="col-lg-12">
                                    <input type="text" placeholder="Phone" name="phone" required>
                                </div>
                                <div class="col-lg-12">
                                    <textarea placeholder="Message" name="message" required></textarea>
                                </div>
                                <div class="col-lg-12">
                                    <input type="file" class="form-control" placeholder="PDF" name="file">
                                </div>
                            </div>
                            <button type="submit">submit now</button>

                        </div>
                    </form>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                    <div class="case-evaluation-image clearfix">
                        <img src="assets/img/case-evaluation-image.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="our-attorneys-area" class="anim-5-all home">
        <div class="container">
            <div class="row">
                <div class="our-attorneys">
                    <div class="section-title text-center">
                        <span>Our Dedicated Team</span>
                        <h2><span>Our Attorneys</span></h2>
                    </div>
                    <?php foreach ($attorneys as $attorney): ?>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="single-attorney">
                                <div class="attorney-image-holder">
                                    <img src="/storage/<?php echo $attorney['image'] ?> "
                                         alt="<?php echo $attorney['name'] ?>">
                                    <div class="attorney-overlay">
                                        <div class="social-links">
                                            <a href="<?php echo $attorney['facebook'] ?>"><i
                                                        class="fa fa-facebook mysocial_style"></i></a>
                                            <a href="<?php echo $attorney['twitter'] ?>"><i
                                                        class="fa fa-twitter mysocial_style"></i></a>
                                            <a href="<?php echo $attorney['linkedin'] ?>"><i
                                                        class="fa fa-linkedin mysocial_style"></i></a>
                                        </div>
                                        <div class="attorney-ninus-icon">
                                            <img src="assets/img/attorney-ninus-icon.png" alt="">
                                        </div>
                                    </div>
                                    <div class="attorney-plus-icon">
                                        <img src="assets/img/attorney-plus-icon-golden.png" alt="">
                                    </div>
                                </div>
                                <div class="attorney-name text-center">
                                    <h5><?php echo $attorney['name'] ?></h5>
                                    <p><?php echo $attorney['title'] ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

        </div>
    </section>


    <section id="about-trust-area" class="anim-5-all">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="about-trust-image">
                        <img src="assets/img/about-trust-img.jpg" alt="">
                        <div class="trust-image-over">
                            <img src="assets/img/trust-image-over.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div
                        class="col-lg-7 col-lg-offset-1 col-md-7 col-md-offset-1 col-sm-7 col-sm-offset-1 col-xs-11 col-xs-offset-1">
                    <div class="about-trust-text">
                        <div class="section-title">
                            <span>Our Histry</span>
                            <h1><span>all about trust</span></h1>
                        </div>
                        <p>Lorem ipsum dolor sit amet, cons ectetur elit. Vestibulum nec odios Suspe ndisse cursus mal
                            suada faci lisis. Lorem ipsum dolor sit ametion consectetur elit. nec odios Suspe ndisse
                            cursus mal suada faci lisis. Lorem ipsum dolor sit ametion consectetur elit. Vesti bulum nec
                            odio ipsum . </p>

                        <div class="fix about-trust-box">
                            <div class="fix trust-box-text alignleft">
                                <p>All people are equal before the law. A good<br/> attorney is what makes a
                                    difference.</p>
                            </div>
                            <div class="fix download-button">
                                <a href="javascript:void(0);">Download Brochure</a>
                            </div>
                        </div>
                        <div class="we-are-practice">
                            <div class="fix we-are-practice-text">
                                <h3>We are practice from 1989 in Attorney</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="testimonial-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-12">
                    <div class="testimonial-list">
                        <div id="testimonial-carousel" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner" role="listbox">
                                <?php foreach ($testimonials as $index => $testimonial): ?>
                                    <div class="item <?php if ($index == 0) echo "active" ?>">
                                        <div class="single-testimonial-item text-center">
                                            <div class="testimonial-image-holder">
                                                <img src="/storage/<?php echo $testimonial['image'] ?>" alt="">
                                            </div>
                                            <p>“<?php echo $testimonial['review'] ?>”</p>

                                            <div class="testimonial-author">
                                                <h4>- <?php echo $testimonial['name'] ?></h4>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>


                                <a class="left testimonial-control" href="#testimonial-carousel" role="button"
                                   data-slide="prev"><i class="fa fa-long-arrow-left testimonial-ctl-button"></i></a>
                                <a class="right testimonial-control" href="#testimonial-carousel" role="button"
                                   data-slide="next"><i class="fa fa-long-arrow-right testimonial-ctl-button"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="clients">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <img src="assets/img/clients/client-1.png" alt="">
                        </div>
                        <div class="item">
                            <img src="assets/img/clients/client-2.png" alt="">
                        </div>
                        <div class="item">
                            <img src="assets/img/clients/client-3.png" alt="">
                        </div>
                        <div class="item">
                            <img src="assets/img/clients/client-4.png" alt="">
                        </div>
                        <div class="item">
                            <img src="assets/img/clients/client-5.png" alt="">
                        </div>
                        <div class="item">
                            <img src="assets/img/clients/client-2.png" alt="">
                        </div>
                        <div class="item">
                            <img src="assets/img/clients/client-3.png" alt="">
                        </div>
                        <div class="item">
                            <img src="assets/img/clients/client-4.png" alt="">
                        </div>
                        <div class="item">
                            <img src="assets/img/clients/client-5.png" alt="">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>


<?php require 'controller/footer.php'; ?>


<?php require 'views/frontend/layouts/scripts.view.php'; ?>


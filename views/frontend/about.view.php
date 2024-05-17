<?php require 'views/frontend/layouts/head.view.php'; ?>

<?php require 'views/frontend/layouts/navbar.view.php'; ?>


    <section class="breadcrumb-area">
        <div class="breadcrumb-text-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="breadcrumb-text text-center">
                            <h1>about us</h1>
                            <ul class="breadcrumbs">
                                <li><a href="/">Home</a><i class="fa fa-angle-right"></i></li>
                                <li><a href="javascript:void(0);">About us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="mission-vision-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="mission-vision-left-img">
                        <img src="assets/img/vision-left.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="mission-vision-text">
                        <div class="section-title">
                            <span>Working Since 1989</span>
                            <h2><span>Our Mission and vision</span></h2>
                        </div>
                        <p>Lorem ipsum dolor sit amet, cons ectetur elit. Vestibulum nec odios Suspe ndisse cursus mal
                            suada faci lisis. Lorem ipsum dolor sit ametion consectetur elit. Vesti bulum nec odio
                            ipsum. <br/><br/>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,
                            consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et
                            dolore magnam aliquam quaerat voluptatem. </p>

                        <div class="mission-vision-signature">
                            <img src="assets/img/mission-vision-signature.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="mission-vision-right-img">
                        <img src="assets/img/mission-vision-right.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="featured-services-area-2" class="anim-5-all">
        <div class="container">
            <div class="row">
                <div class="featured-services">
                    <div class="section-title text-center">
                        <span>Our Practice Areas</span>
                        <h2><span>Our featured services</span></h2>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="single-featured-item text-center">
                            <div class="featured-icon">
                                <i class="fa fa-home"></i>
                            </div>
                            <div class="featured-text">
                                <h4>family law service </h4>
                                <p>Phasellus sit amet tristique ligula. Donec iaculis leo suscipit ultricies Interdum
                                    esuada fames ant Interdum esuada infaucibus.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="single-featured-item text-center">
                            <div class="featured-icon">
                                <i class="fa fa-gavel"></i>
                            </div>
                            <div class="featured-text">
                                <h4>business law service</h4>
                                <p>Phasellus sit amet tristique ligula. Donec iaculis leo suscipit ultricies Interdum
                                    esuada fames ant Interdum esuada infaucibus.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="single-featured-item text-center">
                            <div class="featured-icon">
                                <i class="fa fa-road"></i>
                            </div>
                            <div class="featured-text">
                                <h4>road accident service</h4>
                                <p>Phasellus sit amet tristique ligula. Donec iaculis leo suscipit ultricies Interdum
                                    esuada fames ant Interdum esuada infaucibus.</p>
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
                                <?php foreach($testimonials as $index=>$testimonial): ?>
                                <div class="item <?php if ($index==0): echo "active"; endif?>">
                                    <div class="single-testimonial-item text-center">
                                        <div class="testimonial-image-holder">
                                            <img src="/storage/<?php echo $testimonial['image']?>" alt="">
                                        </div>
                                        <p>“<?php echo $testimonial['review']?>”</p>

                                        <div class="testimonial-author">
                                            <h4>- <?php echo $testimonial['name']?></h4>
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
    <section id="lawer-information-area">
        <div class="container">
            <div class="row">
                <div class="lawyer-info">
                    <!--Start Single lawyer info-->
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="single-lawyer-info">
                            <div class="fix lawyer-count alignleft">
                                <h1 class="timer" data-from="1" data-to="<?php echo $setting['experience'] ?>" data-speed="5000"
                                    data-refresh-interval="50"><?php echo $setting['experience'] ?></h1>
                            </div>
                            <div class="fix lawyer-text">
                                <p>Years of Experiences</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="single-lawyer-info">
                            <div class="fix lawyer-count alignleft">
                                <h1 class="timer" data-from="10" data-to="<?php echo $setting['case_handled'] ?>" data-speed="5000"
                                    data-refresh-interval="50"><?php echo $setting['experience'] ?></h1>
                            </div>
                            <div class="fix lawyer-text">
                                <p>Number of Cases Handled</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="single-lawyer-info">
                            <div class="fix lawyer-count alignleft">
                                <h1 class="timer" data-from="10" data-to="<?php echo $setting['clients'] ?>" data-speed="5000"
                                    data-refresh-interval="50"><?php echo $setting['clients'] ?></h1>
                            </div>
                            <div class="fix lawyer-text">
                                <p>Clients Served</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="single-lawyer-info no-norder">
                            <div class="fix lawyer-count alignleft">
                                <h1 class="timer" data-from="10" data-to="<?php echo $setting['awards'] ?>" data-speed="5000"
                                    data-refresh-interval="50"><?php echo $setting['awards'] ?></h1>
                            </div>
                            <div class="fix lawyer-text">
                                <p>Awards</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


<?php require 'controller/footer.php'; ?>



<?php require 'views/frontend/layouts/scripts.view.php'; ?>
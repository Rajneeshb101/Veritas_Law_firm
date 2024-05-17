<?php require 'views/frontend/layouts/head.view.php'; ?>

<?php require 'views/frontend/layouts/navbar.view.php'; ?>


    <section class="breadcrumb-area">
        <div class="breadcrumb-text-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="breadcrumb-text text-center">
                            <h1>Attorneys</h1>
                            <ul class="breadcrumbs">
                                <li><a href="/">Home</a><i class="fa fa-angle-right"></i></li>
                                <li><a href="javascript:void(0);">Attorneys</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="best-attorney-area" class="anim-5-all">
        <div class="container">
            <div class="row">
                <div class="our-attorneys">
                    <div class="section-title text-center">
                        <span>Our Attorneys</span>
                        <h2><span>We have best attorny</span></h2>
                        <p>Lorem ipsum dolor sit amet, cons ectetur elit. Vestibulum nec odios Suspe ndisse cursus mal
                            suada faci lisis. Lorem ipsum dolor sit ametion consectetur elit. Vesti bulum nec odio
                            ipsum. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur,
                            adipisci velit, sed quia non numquam.</p>
                    </div>
                    <?php foreach ($attorneys as $attorney): ?>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="single-attorney single-best-attorney">
                                <div class="attorney-image-holder">
                                    <img src="/storage/<?php echo $attorney['image'] ?>" alt="">
                                    <div class="attorney-overlay">
                                        <div class="read-full-bio">
                                            <a href="javascript:void(0);">read full bio</a>
                                        </div>
                                        <div class="attorney-ninus-icon">
                                            <img src="assets/img/attorney-ninus-icon.png" alt="">
                                        </div>
                                    </div>
                                    <div class="attorney-plus-icon">
                                        <img src="assets/img/attorney-plus-icon.png" alt="">
                                    </div>
                                </div>
                                <div class="attorney-name text-center">
                                    <h5><?php echo $attorney['name']?></h5>
                                    <p><?php echo $attorney['title']?></p>
                                    <div class="phone-and-mail-number">
                                        <p>Phone: <?php echo $attorney['phone']?></p>
                                        <p>E-mail: <?php echo $attorney['email']?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>

                </div>
            </div>
        </div>
    </section>
<?php require 'controller/footer.php'; ?>


<?php require 'views/frontend/layouts/scripts.view.php'; ?>
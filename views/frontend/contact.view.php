<?php require 'views/frontend/layouts/head.view.php'; ?>

<?php require 'views/frontend/layouts/navbar.view.php'; ?>


<section class="breadcrumb-area">
    <div class="breadcrumb-text-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcrumb-text text-center">
                        <h1>Contact</h1>
                        <ul class="breadcrumbs">
                            <li><a href="/">Home</a><i class="fa fa-angle-right"></i></li>
                            <li><a href="javascript:void(0);">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section id="contact-area" class="anim-5-all">
    <div class="container">
        <div class="row">
            <div class="contact">
                <div class="section-title text-center">
                    <span>We Are Available</span>
                    <h2><span>Get in touch</span></h2>
                    <p>Lorem ipsum dolor sit amet, cons ectetur elit. Vestibulum nec odios Suspe ndisse cursus mal
                        suada faci lisis. Lorem ipsum dolor sit ametion consectetur elit. Vesti bulum nec odio
                        ipsum. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur,
                        adipisci velit, sed quia non numquam.</p>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                    <div class="contact-form">
                        <form action="../../Core/frontend/Contact.php" method="POST" enctype="multipart/form-data"
                              class="thm-contact-form">
                           <?php if (!isAuth()): ?>
                            <input name="firstName" type="text" placeholder="First Name" required>
                            <input name="lastName" type="text" placeholder="Last Name" required>
                            <input name="email" type="text" placeholder="Email Address" required>
                            <?php endif; ?>
                            <input name="phone" type="text" placeholder="Phone No." required>
                            <textarea name="message" placeholder="Message" required></textarea>
                            <input type="file" class="form-control" placeholder="PDF" name="file">
                            <button type="submit">Submit Now <i class="fa fa-arrow-right"></i></button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="contact-right text-center">
                        <div class="contact-right-img">
                            <img src="assets/img/contact-right-img.png" alt="">
                        </div>
                        <div class="contact-right-text">
                            <h3>Michale John</h3>
                            <h5>(Legal Agent)</h5>
                            <p>Phone : 1800 0000 0000</p>
                            <p>Email : info@veritaslegalsolutions.com</p>
                        </div>
                        <div class="contact-right-social-link">
                            <a href="javascript:void(0);"><i class="fa fa-facebook mysocial_style"></i></a>
                            <a href="javascript:void(0);"><i class="fa fa-twitter mysocial_style"></i></a>
                            <a href="javascript:void(0);"><i class="fa fa-google-plus mysocial_style"></i></a>
                            <a href="javascript:void(0);"><i class="fa fa-linkedin mysocial_style"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section id="map-area">
    <div class="google-map" id="contact-google-map" data-map-lat="-37.812802" data-map-lng="144.956981"
         data-icon-path="img/map-marker.png" data-map-title="Envato HQ" data-map-zoom="12"></div>
</section>


<?php require 'controller/footer.php'; ?>


<?php require 'views/frontend/layouts/scripts.view.php'; ?>

<!Doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Allshop Baju Kebaya</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico in the root directory -->
    <link href="<?php echo base_url('assets/user/images/favicon.ico') ?>" rel="shortcut icon" type="image/x-icon">
    <link href="<?php echo base_url('assets/user/apple-touch-icon.png') ?>" rel="apple-touch-icon">


    <!-- All css files are included here. -->
    <!-- Bootstrap fremwork main css -->
    <link href="<?php echo base_url('assets/user/css/bootstrap.min.css') ?>" rel="stylesheet">
    <!-- Owl Carousel min css -->
    <link href="<?php echo base_url('assets/user/css/owl.carousel.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/user/css/owl.theme.default.min.css') ?>" rel="stylesheet">
    <!-- This core.css file contents all plugings css file. -->
    <link href="<?php echo base_url('assets/user/css/core.css') ?>" rel="stylesheet">
    <!-- Theme shortcodes/elements style -->
    <link href="<?php echo base_url('assets/user/css/shortcode/shortcodes.css') ?>" rel="stylesheet">
    <!-- Theme main style -->
    <link href="<?php echo base_url('assets/user/style.css') ?>" rel="stylesheet">
    <!-- Responsive css -->
    <link href="<?php echo base_url('assets/user/css/responsive.css') ?>" rel="stylesheet">
    <!-- User style -->
    <link href="<?php echo base_url('assets/user/css/custom.css') ?>" rel="stylesheet">


    <!-- Modernizr JS -->
    <script type='text/javascript' src="<?php echo base_url('assest/js/vendor/modernizr-3.5.0.min.js') ?>"></script>
</head>

<body>
    <section class="courses">
        <?php $this->load->view('front_end/beranda'); ?>
    </section>
    <!-- Start Contact Area -->
    <section class="htc__contact__area ptb--100 bg__white">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12 col-xs-12">
                    <div class="map-contacts--2">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d987.467279559156!2d115.10022512915027!3d-8.114806471958056!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd19098b82b4b2d%3A0xbc386bb6e4e2ab18!2sGg.%20Jalak%20Putih%2C%20Banyuning%2C%20Kec.%20Buleleng%2C%20Kabupaten%20Buleleng%2C%20Bali%2081112!5e0!3m2!1sid!2sid!4v1586804980388!5m2!1sid!2sid" width="650" height="500" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12 col-xs-12">
                    <h2 class="title__line--6">CONTACT US</h2>
                    <div class="address">
                        <div class="address__icon">
                            <i class="icon-location-pin icons"></i>
                        </div>
                        <div class="address__details">
                            <h2 class="ct__title">address</h2>
                            <p>Jalan Gempol Gang Jalak Putih no.14</p>
                        </div>
                    </div>
                    <div class="address">
                        <div class="address__icon">
                            <i class="icon-envelope icons"></i>
                        </div>
                        <div class="address__details">
                            <h2 class="ct__title">openning hour</h2>
                            <p>allshopkebaya03@gmail.com</p>
                        </div>
                    </div>

                    <div class="address">
                        <div class="address__icon">
                            <i class="icon-phone icons"></i>
                        </div>
                        <div class="address__details">
                            <h2 class="ct__title">Phone Number</h2>
                            <p>081338206885</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="contact-form-wrap mt--60">
                    <div class="col-xs-12">
                        <div class="contact-title">
                            <h2 class="title__line--6">SEND A MAIL</h2>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <form id="contact-form" action="#" method="post">
                            <div class="single-contact-form">
                                <div class="contact-box name">
                                    <input type="text" name="name" placeholder="Your Name*">
                                    <input type="email" name="email" placeholder="Mail*">
                                </div>
                            </div>
                            <div class="single-contact-form">
                                <div class="contact-box subject">
                                    <input type="text" name="subject" placeholder="Subject*">
                                </div>
                            </div>
                            <div class="single-contact-form">
                                <div class="contact-box message">
                                    <textarea name="message" placeholder="Your Message"></textarea>
                                </div>
                            </div>
                            <div class="contact-btn">
                                <button type="submit" class="fv-btn">Send MESSAGE</button>
                            </div>
                        </form>
                        <div class="form-output">
                            <p class="form-messege"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Area -->
    <!-- End Banner Area -->
    <section class="courses">
        <?php $this->load->view('front_end/footer'); ?>
    </section>

    <!-- Placed js at the end of the document so the pages load faster -->

    <!-- jquery latest version -->
    <script type='text/javascript' src="<?php echo base_url('assets/user/js/vendor/jquery-3.2.1.min.js') ?>"></script>
    <!-- Bootstrap framework js -->
    <script type='text/javascript' src="<?php echo base_url('assets/user/js/bootstrap.min.js') ?>"></script>
    <!-- All js plugins included in this file. -->
    <script type='text/javascript' src="<?php echo base_url('assets/user/js/plugins.js') ?>"></script>
    <script type='text/javascript' src="<?php echo base_url('assets/user/js/slick.min.js') ?>"></script>
    <script type='text/javascript' src="<?php echo base_url('assets/user/js/owl.carousel.min.js') ?>"></script>
    <!-- Waypoints.min.js. -->
    <script type='text/javascript' src="<?php echo base_url('assets/user/js/waypoints.min.js') ?>"></script>
    <!-- Main js file that contents all jQuery plugins activation. -->
    <script type='text/javascript' src="<?php echo base_url('assets/user/js/main.js') ?>"></script>

</body>

</html>
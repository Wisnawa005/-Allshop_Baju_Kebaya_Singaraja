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
    <section class="courses">
        <?php $this->load->view('front_end/caraosel'); ?>
    </section>
    <section class="courses">
        <?php $this->load->view('front_end/new_arrivals'); ?>
    </section>
    <section class="courses">
        <?php $this->load->view('front_end/best_seller'); ?>
    </section>
    <section class="courses">
        <?php $this->load->view('front_end/blog'); ?>
    </section>
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
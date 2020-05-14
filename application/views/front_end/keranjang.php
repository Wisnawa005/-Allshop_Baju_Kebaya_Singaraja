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

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo site_url('User'); ?>">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">CART</li>
        </ol>
    </nav>
    <!-- cart-main-area start -->
    <div class="cart-main-area ptb--100 bg__white">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <form action="#">
                        <div class="table-content table-responsive">
                            <table>
                                <tr>
                                    <th class="product-thumbnail">produk</th>
                                    <th class="product-name">nama produk</th>
                                    <th class="product-price">harga</th>
                                    <th class="product-quantity">jumlah</th>
                                    <th class="product-subtotal">Total</th>
                                    <th class="product-remove">hapus</th>
                                </tr>
                                <?php foreach ($this->cart->contents() as $items) : ?>
                                    <tr>
                                        <td class="product-thumbnail">gambar</td>
                                        <td class="product-name">
                                            <h3><?php echo $items['name'] ?></h3>
                                        </td>
                                        <td class="product-price"><span class="amount">Rp. <?php echo number_format($items['price'], 0, ',', '.')  ?></span></td>
                                        <td class="product-quantity"><?php echo $items['qty'] ?></td>
                                        <td class="product-subtotal">Rp. <?php echo number_format($items['subtotal'], 0, ',', '.')  ?></td>
                                        <td class="product-remove"><a href="<?php echo base_url('User/hapus_belanja') ?>"><i class="icon-trash icons"></i></a></td>
                                    </tr>
                                <?php endforeach; ?>
                            </table>

                        </div>

                        <div class="row">
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="ht__coupon__code">
                                    <span>masukan kode promo</span>
                                    <div class="coupon__box">
                                        <input type="text" placeholder="">
                                        <div class="ht__cp__btn">
                                            <a href="#">enter</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12 smt-40 xmt-40">
                                <div class="htc__cart__total">
                                    <h6>cart total</h6>
                                    <div class="cart__desk__list">
                                        <ul class="cart__desc">
                                            <li>Belanja</li>
                                            <li>Ongkir</li>
                                        </ul>
                                        <ul class="cart__price">
                                            <li>Rp. <?php echo number_format($this->cart->total(),) ?></li>
                                            <li>Rp. 0</li>
                                        </ul>
                                    </div>
                                    <div class="cart__total">
                                        <span>total belanja</span>
                                        <span>Rp. <?php echo number_format($this->cart->total(),) ?></span>
                                    </div>
                                    <ul class="payment__btn">
                                        <li class="active"><a href="<?php echo base_url('User/pembayaran') ?>">checkout</a></li>
                                        <li><a href="<?php echo base_url('User') ?>">continue shopping</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- cart-main-area end -->

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
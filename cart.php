<?php
include('myclass/myclass.php');
$p = new Ecom();
session_start();
$categories = $p->getcategorys();

$SlSanpham = 0;
$Total = 0;
if(isset($_SESSION['cart'])){
	foreach($_SESSION['cart'] as $name){
		$SlSanpham ++;
		$Total = $Total + ($name['gia']*$name['qty']);
	}
}
if($SlSanpham==0){
	echo'<script language="javascript">
			alert("Giỏ hàng của bạn đang trống");
			history.back();
	</script>';	
}
?>
<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="meta description">

    <!-- Site title -->
    <title>Galio - Shop Thương Mại Điện Tử</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon" />
    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font-Awesome CSS -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <!-- helper class css -->
    <link href="assets/css/helper.min.css" rel="stylesheet">
    <!-- Plugins CSS -->
    <link href="assets/css/plugins.css" rel="stylesheet">
    <!-- Main Style CSS -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/skin-default.css" rel="stylesheet" id="galio-skin">
</head>

<body>

    <!-- color switcher start -->
    <div class="color-switcher">
        <div class="color-switcher-inner">
            <div class="switcher-icon">
                <i class="fa fa-cog fa-spin"></i>
            </div>

            <div class="switcher-panel-item">
                <h3>Color Schemes</h3>
                <ul class="nav flex-wrap colors">
                    <li class="default active" data-color="default" data-toggle="tooltip" data-placement="top" title="Red"></li>
                    <li class="green" data-color="green" data-toggle="tooltip" data-placement="top" title="Green"></li>
                    <li class="soft-green" data-color="soft-green" data-toggle="tooltip" data-placement="top" title="Soft-Green"></li>
                    <li class="sky-blue" data-color="sky-blue" data-toggle="tooltip" data-placement="top" title="Sky-Blue"></li>
                    <li class="orange" data-color="orange" data-toggle="tooltip" data-placement="top" title="Orange"></li>
                    <li class="violet" data-color="violet" data-toggle="tooltip" data-placement="top" title="Violet"></li>
                </ul>
            </div>

            <div class="switcher-panel-item">
                <h3>Layout Style</h3>
                <ul class="nav layout-changer">
                    <li><button class="btn-layout-changer active" data-layout="wide">Wide</button></li>
                    <li><button class="btn-layout-changer" data-layout="boxed">Boxed</button></li>
                </ul>
            </div>

            <div class="switcher-panel-item bg">
                <h3>Background Pattern</h3>
                <ul class="nav flex-wrap bgbody-style bg-pattern">
                    <li><img src="assets/img/bg-panel/bg-pettern/1.png" alt="Pettern"></li>
                    <li><img src="assets/img/bg-panel/bg-pettern/2.png" alt="Pettern"></li>
                    <li><img src="assets/img/bg-panel/bg-pettern/3.png" alt="Pettern"></li>
                    <li><img src="assets/img/bg-panel/bg-pettern/4.png" alt="Pettern"></li>
                    <li><img src="assets/img/bg-panel/bg-pettern/5.png" alt="Pettern"></li>
                    <li><img src="assets/img/bg-panel/bg-pettern/6.png" alt="Pettern"></li>
                </ul>
            </div>

            <div class="switcher-panel-item bg">
                <h3>Background Image</h3>
                <ul class="nav flex-wrap bgbody-style bg-img">
                    <li><img src="assets/img/bg-panel/bg-img/01.jpg" alt="Images"></li>
                    <li><img src="assets/img/bg-panel/bg-img/02.jpg" alt="Images"></li>
                    <li><img src="assets/img/bg-panel/bg-img/03.jpg" alt="Images"></li>
                    <li><img src="assets/img/bg-panel/bg-img/04.jpg" alt="Images"></li>
                    <li><img src="assets/img/bg-panel/bg-img/05.jpg" alt="Images"></li>
                    <li><img src="assets/img/bg-panel/bg-img/06.jpg" alt="Images"></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- color switcher end -->

    <div class="wrapper">

        <!-- header area start -->
        <header>

            <!-- header top start -->
            <div class="header-top-area bg-gray text-center text-md-left">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-5">
                            <div class="header-call-action">
                                <a href="#">
                                    <i class="fa fa-envelope"></i>
                                    info@website.com
                                </a>
                                <a href="#">
                                    <i class="fa fa-phone"></i>
                                    0123456789
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-7">
                            <div class="header-top-right float-md-right float-none">
                                <nav>
                                    <ul>
                                        <li>
                                            <div class="dropdown header-top-dropdown">
                                                <a class="dropdown-toggle" id="myaccount" data-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    Tài Khoản
                                                    <i class="fa fa-angle-down"></i>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="myaccount">
                                                    <a class="dropdown-item" href="my-account.php">Tài Khoản</a>
                                                    <a class="dropdown-item" href="login-register.php"> Đăng Nhập</a>
                                                    <a class="dropdown-item" href="login-register.php">Đăng Ký</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="#">Sản phẩm yêu thích</a>
                                        </li>
                                        <li>
                                            <a href="cart.php">Giỏ hàng của tôi</a>
                                        </li>
                                        <li>
                                            <a href="#">thanh toán</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- header top end -->

            <!-- header middle start -->
            <div class="header-middle-area pt-20 pb-20">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3">
                            <div class="brand-logo">
                                <a href="index.php">
                                    <img src="assets/img/logo/logo.png" alt="brand logo">
                                </a>
                            </div>
                        </div> <!-- end logo area -->
                        <div class="col-lg-9">
                            <div class="header-middle-right">
                                <div class="header-middle-shipping mb-20">
                                    <div class="single-block-shipping">
                                        <div class="shipping-icon">
                                            <i class="fa fa-clock-o"></i>
                                        </div>
                                        <div class="shipping-content">
                                            <h5>Giờ làm việc</h5>
                                            <span>Thứ 2-7 8.00-22.00</span>
                                        </div>
                                    </div> <!-- end single shipping -->
                                    <div class="single-block-shipping">
                                        <div class="shipping-icon">
                                            <i class="fa fa-truck"></i>
                                        </div>
                                        <div class="shipping-content">
                                            <h5>Miễn Phí Giao Hàng</h5>
                                            <span>Đơn hàng trên 500VNĐ</span>
                                        </div>
                                    </div> <!-- end single shipping -->
                                    <div class="single-block-shipping">
                                        <div class="shipping-icon">
                                            <i class="fa fa-money"></i>
                                        </div>
                                        <div class="shipping-content">
                                            <h5>Hoàn tiền 100%</h5>
                                            <span>Trong vòng 30 ngày </span>
                                        </div>
                                    </div> <!-- end single shipping -->
                                </div>
                                <div class="header-middle-block">
                                    <div class="header-middle-searchbox">
                                        <input type="text" placeholder="Search...">
                                        <button class="search-btn"><i class="fa fa-search"></i></button>
                                    </div>
                                    <div class="header-mini-cart">
                                        <div class="mini-cart-btn">
                                            <i class="fa fa-shopping-cart"></i>
                                            <span class="cart-notification">2</span>
                                        </div>
                                        <div class="cart-total-price">
                                            <span>Tổng tiền</span>
                                            500.000VNĐ
                                        </div>
                                        <ul class="cart-list">
                                            <li>
                                                <div class="cart-img">
                                                    <a href="product-details.html"><img src="assets/img/cart/cart-1.jpg"
                                                            alt=""></a>
                                                </div>
                                                <div class="cart-info">
                                                    <h4><a href="product-details.html">Sản Phẩm mẫu</a></h4>
                                                    <span>2.000.000VNĐ</span>
                                                </div>
                                                <div class="del-icon">
                                                    <i class="fa fa-times"></i>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="cart-img">
                                                    <a href="product-details.html"><img src="assets/img/cart/cart-2.jpg"
                                                            alt=""></a>
                                                </div>
                                                <div class="cart-info">
                                                    <h4><a href="product-details.html">Sản Phẩm Ảo</a></h4>
                                                    <span>1.000.000VNĐ</span>
                                                </div>
                                                <div class="del-icon">
                                                    <i class="fa fa-times"></i>
                                                </div>
                                            </li>
                                            <li class="mini-cart-price">
                                                <span class="subtotal">Tổng Phụ : </span>
                                                <span class="subtotal-price">4.000.000VNĐ</span>
                                            </li>
                                            <li class="checkout-btn">
                                                <a href="#">Thủ tục thanh toán</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- header middle end -->

            <!-- main menu area start -->
            <div class="main-header-wrapper bdr-bottom1">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="main-header-inner">
                                <div class="category-toggle-wrap">
                                    <div class="category-toggle">
                                        Loại
                                        <div class="cat-icon">
                                            <i class="fa fa-angle-down"></i>
                                        </div>
                                    </div>
                                    <nav class="category-menu hm-1">
                                        <ul>
                                        <?php foreach($categories as $category){  ?>
                                            <li><a href="categories.php?category_id=<?php echo $category['ID'] ?>"><i class="fa fa-desktop"></i>
                                                   <?php echo $category['CategoryName'] ?></a></li>
                                        <?php } ?>

                                                </ul><!-- Mega Category Menu End -->
                                        
                                    </nav>
                                </div>
                                <div class="main-menu">
                                    <nav id="mobile-menu">
                                        <ul>
                                            <li class="active"><a href="index.php"><i class="fa fa-home"></i>Trang Chủ<i class="fa fa-angle-down"></i></a>
                                                
                                            </li>
                                            <li class="static"><a href="#">Trang<i class="fa fa-angle-down"></i></a>
                                               
                                            </li>
                                            <li><a href="#">shop <i class="fa fa-angle-down"></i></a>
                                                
                                            </li>
                                            <li><a href="#">Blog <i class="fa fa-angle-down"></i></a>
                                                
                                            </li>
                                            <li><a href="contact-us.php">Liên hệ chúng tôi</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 d-block d-lg-none">
                            <div class="mobile-menu"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- main menu area end -->

        </header>
        <!-- header area end -->

        <!-- breadcrumb area start -->
        <div class="breadcrumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-wrap">
                            <nav aria-label="breadcrumb">
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Trang Chủ</a></li>
                                    <li class="breadcrumb-item"><a href="shop-grid-left-sidebar.html">shop</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">cart</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb area end -->

        <!-- cart main wrapper start -->
        <div class="cart-main-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Cart Table Area -->
                        <div class="cart-table table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th class="pro-thumbnail"></th>
                                    <th class="pro-title">Tên sản phẩm</th>
                                    <th class="pro-price">Giá</th>
                                    <th class="pro-quantity">Số lượng</th>
                                    <th class="pro-subtotal">Tổng</th>
                                    <th class="pro-remove"></th>
                                </tr>
                                </thead>
                                <tbody>
                                    <?php if(isset($_SESSION['cart'])){ ?>
                                    <?php foreach($_SESSION['cart'] as $key=> $name){ ?>
                                        <tr>
                                            <td class="pro-thumbnail"><a href="#"><img class="img-fluid" src="assets/img/product/<?php echo $name['img'] ?>"
                                                                                        alt="Product"/></a></td>
                                            <td class="pro-title"><a href="#"><?php echo $name['ProductName'] ?></a></td>
                                            <td class="pro-price"><span><?php echo number_format($name['gia']) ?></span></td>
                                            <td class="pro-quantity">
                                                <div class="pro-qty"><input type="text" value="<?php echo $name['qty'] ?>"></div>
                                            </td>
                                            <td class="pro-subtotal"><span><?php echo number_format($name['gia'] * $name['qty']) ?>đ</span></td>
                                            <td class="pro-remove"><a href="remove.php?id=<?php echo $key ?>"><i class="fa fa-trash-o"></i></a></td>
                                        </tr>
                                    <?php } ?>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
        
                        <!-- Cart Update Option -->
                        <div class="cart-update-option d-block d-md-flex justify-content-between">
                            <div class="apply-coupon-wrapper">
                                <form action="#" method="post" class=" d-block d-md-flex">
                                    <input type="text" placeholder="Enter Your Coupon Code" required />
                                    <button class="sqr-btn">Apply Coupon</button>
                                </form>
                            </div>
                            <div class="cart-update mt-sm-16">
                                <a href="#" class="sqr-btn">Update Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
        
                <div class="row">
                    <div class="col-lg-5 ml-auto">
                        <!-- Cart Calculation Area -->
                        <div class="cart-calculator-wrapper">
                            <div class="cart-calculate-items">
                                <h3>Cart Totals</h3>
                                <div class="table-responsive">
                                    <table class="table">
                                        <tr>
                                            <td>Sub Total</td>
                                            <td>$230</td>
                                        </tr>
                                        <tr>
                                            <td>Shipping</td>
                                            <td>$70</td>
                                        </tr>
                                        <tr class="total">
                                            <td>Total</td>
                                            <td class="total-amount">$300</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <a href="checkout.html" class="sqr-btn d-block">Proceed To Checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- cart main wrapper end -->

        <!-- brand area start -->
        <div class="brand-area pt-28 pb-30">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title mb-30">
                            <div class="title-icon">
                                <i class="fa fa-crop"></i>
                            </div>
                            <h3>Các hãng Sản Xuất</h3>
                        </div> <!-- section title end -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="brand-active slick-padding slick-arrow-style">
                            <div class="brand-item text-center">
                                <a href="#"><img src="assets/img/brand/6409339255_ca00e76dee_z (1).jpg  " alt=""></a>
                            </div>
                            <div class="brand-item text-center">
                                <a href="#"><img src="assets/img/brand/th.jpg" alt=""></a>
                            </div>
                            <div class="brand-item text-center">
                                <a href="#"><img src="assets/img/brand/br3.png" alt=""></a>
                            </div>
                            <div class="brand-item text-center">
                                <a href="#"><img src="assets/img/brand/th (1).jpg" alt=""></a>
                            </div>
                            <div class="brand-item text-center">
                                <a href="#"><img src="assets/img/brand/1513882457293.jpg" alt=""></a>
                            </div>
                            <div class="brand-item text-center">
                                <a href="#"><img src="assets/img/brand/th (3).jpg" alt=""></a>
                            </div>
                            <div class="brand-item text-center">
                                <a href="#"><img src="assets/img/brand/br4.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- brand area end -->

        <!-- footer area start -->
        <div class="footer-top bg-black pt-14 pb-14">
                <div class="container">
                    <div class="footer-top-wrapper">
                        <div class="newsletter__wrap">
                            <div class="newsletter__title">
                                <div class="newsletter__icon">
                                    <i class="fa fa-envelope"></i>
                                </div>
                                <div class="newsletter__content">
                                    <h3>Đăng Ký Nhận Bản Tin</h3>
                                    <p>Sẽ Nhận Thư điện tử tại đây</p>
                                </div>
                            </div>
                            <div class="newsletter__box">
                                <form id="mc-form">
                                    <input type="email" id="mc-email" autocomplete="off" placeholder="Email">
                                    <button id="mc-submit">Đăng Ký!</button>
                                </form>
                            </div>
                            <!-- mailchimp-alerts Start -->
                            <div class="mailchimp-alerts">
                                <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                                <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                                <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                            </div>
                            <!-- mailchimp-alerts end -->
                        </div>
                        <div class="social-icons">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fa fa-instagram"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Google-plus"><i class="fa fa-google-plus"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Youtube"><i class="fa fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- footer top end -->

            <!-- footer main start -->
            <div class="footer-widget-area pt-40 pb-38 pb-sm-10">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="footer-widget mb-sm-30">
                                <div class="widget-title mb-10 mb-sm-6">
                                    <h4>Liên Hệ</h4>
                                </div>
                                <div class="widget-body">
                                    <ul class="location">
                                        <li><i class="fa fa-envelope"></i>support@galio.com</li>
                                        <li><i class="fa fa-phone"></i>(800) 0123 456 789</li>
                                        <li><i class="fa fa-map-marker"></i>Address: 12- Nguyễn Văn Bảo
                                            Phường3 Quận gò Vấp . TPHCM</li>
                                    </ul>
                                    <a class="map-btn" href="contact-us.html">Mở Trong google map</a>
                                </div>
                            </div> <!-- single widget end -->
                        </div> <!-- single widget column end -->
                        <div class="col-md-3 col-sm-6">
                            <div class="footer-widget mb-sm-30">
                                <div class="widget-title mb-10 mb-sm-6">
                                    <h4>my account</h4>
                                </div>
                                <div class="widget-body">
                                    <ul>
                                        <li><a href="#">Tài Khoản Của Tôi</a></li>
                                        <li><a href="#">Giỏ Hàng Của Tôi</a></li>
                                        <li><a href="#">Thanh Toán</a></li>
                                        <li><a href="#">Sản Phẩm Yêu Thích</a></li>
                                        <li><a href="#">Đăng Nhập</a></li>
                                    </ul>
                                </div>
                            </div> <!-- single widget end -->
                        </div> <!-- single widget column end -->
                        <div class="col-md-3 col-sm-6">
                            <div class="footer-widget mb-sm-30">
                                <div class="widget-title mb-10 mb-sm-6">
                                    <h4>mã Ngắn</h4>
                                </div>
                                <div class="widget-body">
                                    <ul>
                                        <li><a href="#">bộ sưu tập</a></li>
                                        <li><a href="#">accordion</a></li>
                                        <li><a href="#">Băng Chuyền</a></li>
                                        <li><a href="#">Bản Đồ</a></li>
                                        <li><a href="#">Chuyển Hướng</a></li>
                                    </ul>
                                </div>
                            </div> <!-- single widget end -->
                        </div> <!-- single widget column end -->
                        <div class="col-md-3 col-sm-6">
                            <div class="footer-widget mb-sm-30">
                                <div class="widget-title mb-10 mb-sm-6">
                                    <h4> Sản Phẩm   </h4>
                                </div>
                                <div class="widget-body">
                                    <ul>
                                        <li><a href="#">Máy tính</a></li>
                                        <li><a href="#">camera</a></li>
                                        <li><a href="#">Điện Thoại</a></li>
                                        <li><a href="#">Đồng Hồ</a></li>
                                        <li><a href="#">Máy Tính Bảng</a></li>
                                    </ul>
                                </div>
                            </div> <!-- single widget end -->
                        </div> <!-- single widget column end -->
                    </div>
                </div>
            </div>
            <!-- footer main end -->

            <!-- footer bootom start -->
            <div class="footer-bottom-area bg-gray pt-20 pb-20">
                <div class="container">
                    <div class="footer-bottom-wrap">
                        <div class="copyright-text">
                            <p><a target="_blank" href="https://www.templateshub.net">Templates Hub</a></p>
                        </div>
                        <div class="payment-method-img">
                            <img src="assets/img/payment.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <!-- footer bootom end -->

        </footer>
        <!-- footer area end -->

    </div>


    <!-- Quick view modal start -->
    <div class="modal" id="quick_view">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <!-- product details inner end -->
                    <div class="product-details-inner">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="product-large-slider slick-arrow-style_2 mb-20">
                                    <div class="pro-large-img">
                                        <img src="assets/img/product/product-details-img1.jpg" alt="" />
                                    </div>
                                    <div class="pro-large-img">
                                        <img src="assets/img/product/product-details-img2.jpg" alt="" />
                                    </div>
                                    <div class="pro-large-img">
                                        <img src="assets/img/product/product-details-img3.jpg" alt="" />
                                    </div>
                                    <div class="pro-large-img">
                                        <img src="assets/img/product/product-details-img4.jpg" alt="" />
                                    </div>
                                    <div class="pro-large-img">
                                        <img src="assets/img/product/product-details-img5.jpg" alt="" />
                                    </div>
                                </div>
                                <div class="pro-nav slick-padding2 slick-arrow-style_2">
                                    <div class="pro-nav-thumb"><img src="assets/img/product/product-details-img1.jpg"
                                            alt="" /></div>
                                    <div class="pro-nav-thumb"><img src="assets/img/product/product-details-img2.jpg"
                                            alt="" /></div>
                                    <div class="pro-nav-thumb"><img src="assets/img/product/product-details-img3.jpg"
                                            alt="" /></div>
                                    <div class="pro-nav-thumb"><img src="assets/img/product/product-details-img4.jpg"
                                            alt="" /></div>
                                    <div class="pro-nav-thumb"><img src="assets/img/product/product-details-img5.jpg"
                                            alt="" /></div>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="product-details-des mt-md-34 mt-sm-34">
                                    <h3><a href="product-details.html">external product 12</a></h3>
                                    <div class="ratings">
                                        <span class="good"><i class="fa fa-star"></i></span>
                                        <span class="good"><i class="fa fa-star"></i></span>
                                        <span class="good"><i class="fa fa-star"></i></span>
                                        <span class="good"><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                        <div class="pro-review">
                                            <span>1 review(s)</span>
                                        </div>
                                    </div>
                                    <div class="availability mt-10">
                                        <h5>Availability:</h5>
                                        <span>1 in stock</span>
                                    </div>
                                    <div class="pricebox">
                                        <span class="regular-price">$160.00</span>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                        tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.<br>
                                        Phasellus id nisi quis justo tempus mollis sed et dui. In hac habitasse platea
                                        dictumst. Suspendisse ultrices mauris diam. Nullam sed aliquet elit. Mauris
                                        consequat nisi ut mauris efficitur lacinia.</p>
                                    <div class="quantity-cart-box d-flex align-items-center mt-20">
                                        <div class="quantity">
                                            <div class="pro-qty"><input type="text" value="1"></div>
                                        </div>
                                        <div class="action_link">
                                            <a class="buy-btn" href="#">add to cart<i class="fa fa-shopping-cart"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- product details inner end -->
                </div>
            </div>
        </div>
    </div>
    <!-- Quick view modal end -->

    <!-- Scroll to top start -->
    <div class="scroll-top not-visible">
        <i class="fa fa-angle-up"></i>
    </div>
    <!-- Scroll to Top End -->



    <!--All jQuery, Third Party Plugins & Activation (main.js) Files-->
    <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <!-- Jquery Min Js -->
    <script src="assets/js/vendor/jquery-3.3.1.min.js"></script>
    <!-- Popper Min Js -->
    <script src="assets/js/vendor/popper.min.js"></script>
    <!-- Bootstrap Min Js -->
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <!-- Plugins Js-->
    <script src="assets/js/plugins.js"></script>
    <!-- Ajax Mail Js -->
    <script src="assets/js/ajax-mail.js"></script>
    <!-- Active Js -->
    <script src="assets/js/main.js"></script>
    <!-- Switcher JS [Please Remove this when Choose your Final Projct] -->
    <script src="assets/js/switcher.js"></script>
</body>



</html>
<!DOCTYPE html>
<html lang="en">
<head>
 
<!-- WhatsHelp.io widget -->
<script type="text/javascript">
(function () {
var options = {
whatsapp: "081317000151", // WhatsApp number
line: "//line.me/ti/p/WX3ZWt8OBY", // Line QR code URL
sms: "081317000151", // Sms phone number
call: "081317000151", // Call phone number
call_to_action: "Kami Siap Melayani", // Call to action
button_color: "#59B210", // Color of button
position: "left", // Position may be 'right' or 'left'
order: "line,whatsapp", // Order of buttons
};
var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
})();
</script>
<!-- /WhatsHelp.io widget -->



  <!--Start of Zopim Live Chat Script-->
<!-- <script type="text/javascript">
window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
$.src="//v2.zopim.com/?5kx2HBLyw8P4aDbrS3AgCryMGG1hrZFk";z.t=+new Date;$.
type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
</script> -->
<!--End of Zopim Live Chat Script-->



<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-120226536-1"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());

gtag('config', 'UA-120226536-1');
</script>



<!-- Meta -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta name="description" content="">
<meta name="author" content="">
<meta name="keywords" content="MediaCenter, Template, eCommerce">
<meta name="robots" content="all">
<title>BentHerbs | Pusat Penjualan Herbal</title>

<!-- Bootstrap Core CSS -->
<link rel="stylesheet" href="<?php echo base_url() ?>/assets/boxshop/assets/css/bootstrap.min.css">

<link href="<?php echo base_url() ?>/assets/images/BentHerbs - ico.png" rel="shortcut icon" type="image/x-icon" />
    
<!-- Customizable CSS -->
<link rel="stylesheet" href="<?php echo base_url() ?>/assets/boxshop/assets/css/main.css">
<link rel="stylesheet" href="<?php echo base_url() ?>/assets/boxshop/assets/css/blue.css">
<link rel="stylesheet" href="<?php echo base_url() ?>/assets/boxshop/assets/css/owl.carousel.css">
<link rel="stylesheet" href="<?php echo base_url() ?>/assets/boxshop/assets/css/owl.transitions.css">
<link rel="stylesheet" href="<?php echo base_url() ?>/assets/boxshop/assets/css/animate.min.css">
<link rel="stylesheet" href="<?php echo base_url() ?>/assets/boxshop/assets/css/rateit.css">
<link rel="stylesheet" href="<?php echo base_url() ?>/assets/boxshop/assets/css/bootstrap-select.min.css">

<!-- Icons/Glyphs -->
<link rel="stylesheet" href="<?php echo base_url() ?>/assets/boxshop/assets/css/font-awesome.css">
<link rel="stylesheet" href="<?php echo base_url() ?>/assets/boxshop/assets/css/simple-line-icons.css">
<link rel="stylesheet" href="<?php echo base_url() ?>/assets/boxshop/assets/css/simple-line-icons.css">

<!-- Fonts -->
<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,800' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
</head>
<body class="cnt-home">

  <header class="header-style-1">

    <!-- ============================================== TOP MENU ============================================== -->
  <div class="top-bar animate-dropdown">
    <div class="container">

     <div style="margin-top: 5px" class="col-xs-12 col-sm-6 no-padding social">
        <ul class="link">
          <li class="ig pull-left"><a target="_blank" rel="nofollow" href="http://instagram.com/bent_herbs" title="Instagram"></a></li>
         <!--  <li class="tw pull-left"><a target="_blank" rel="nofollow" href="#" title="Twitter"></a></li>
          <li class="googleplus pull-left"><a target="_blank" rel="nofollow" href="#" title="GooglePlus"></a></li>
          <li class="fb pull-left"><a target="_blank" rel="nofollow" href="#" title="Facebook"></a></li> 
          <li class="youtube pull-left"><a target="_blank" rel="nofollow" href="#" title="Youtube"></a></li> -->
        </ul>
      </div>

      <div class="header-top-inner">
        <div class="cnt-account">
          <ul class="list-unstyled"> 
            <li><a href="<?php echo site_url('cart/show_cart') ?>"><i class="icon fa fa-shopping-cart"></i>My Cart</a></li>

             <?php if($this->session->userdata('is_login') == 1){ ?> 
                  <li> <a href="<?php echo site_url('order/history') ?>"><i class="icon fa fa-history"></i> List Pesanan</a> </li>
                  <li> <a href="<?php echo site_url('member/customers_profile') ?>"><i class="icon fa fa-user"></i> Profil Saya</a> 
                  </li>
                  <li> <a href="<?php echo site_url('member/logout_cust') ?>"><i class="icon fa fa-sign-out"></i> Keluar</a> </li>
                  <?php } else { ?>
                  <li> <a href="<?php echo site_url('member/login_customers') ?>"><i class="icon fa fa-lock"></i> Masuk</a> </li>
                  <li> <a href="<?php echo site_url('member/login_customers') ?>"><i class="icon fa fa-user"></i> Daftar</a> </li>
                  <?php } ?>


          </ul>
        </div>
         
        <!-- /.cnt-cart -->
        <div class="clearfix"></div>
      </div>
      <!-- /.header-top-inner --> 
    </div>
    <!-- /.container --> 
  </div>


    <div class="main-header">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-4 logo-holder"> 
            <div class="logo"><a href="<?php echo base_url(); ?>"> <img style="width:270px; max-width:270px" src="<?php echo $this->shop->get_logo(); ?>" alt="logo"></a></div>
          </div>

           <div class="col-xs-12 col-sm-12 col-md-5 top-search-holder"> 
          <!-- /.contact-row --> 
          <!-- ============================================================= SEARCH AREA ============================================================= -->
          <div class="search-area">
            <form name="formsearch" action="<?php echo site_url('pages/search') ?>">
              <div class="control-group">
                <ul class="categories-filter animate-dropdown">
                  <li class="dropdown"> 
                  <a class="dropdown-toggle-off"  data-toggle="dropdown-off" href="#"> <!-- <b class="caret"></b> --></a>
                    <ul class="dropdown-menu" role="menu" > 
                    </ul>
                  </li>
                </ul>
                <input class="search-field" name="keyword" placeholder="Cari disini..." />
                <a class="search-button" href="#" onclick="formsearch.submit();return false;" ></a> </div>
            </form>
          </div>
          <!-- /.search-area --> 
          <!-- ============================================================= SEARCH AREA : END ============================================================= --> </div>

        <!--   <div class="col-xs-12 col-sm-12 col-md-3 top-search-holder"> 
            <div class="search-area">
              <form>
                <input class="search-field" placeholder="Cari ..." style="margin-left: 15px;" />
                <a class="search-button" href="#" ></a>
              </form>
            </div>
          </div> -->
          <div class="col-xs-12 col-sm-12 col-md-3 animate-dropdown top-cart-row">
            <div class="dropdown dropdown-cart"> 
              <a href="<?php echo site_url('cart/show_cart') ?>" class="dropdown-toggle lnk-cart">
                <div class="items-cart-inner">
                  <div class="basket"></div>
                  
                  <?php
                    $cCount = 0;
                    $cTotalPrice = 0; 
                  ?>
                  <?php if(isset($_SESSION['cart'])){ ?>
                    <?php //print_r($_SESSION['cart']); ?>
                    <?php //unset($_SESSION['cart']); ?>
                    <?php
                      foreach ($_SESSION['cart'] as $cart) {
                        $cCount = $cCount + $cart['qty'];
                        $cTotalPrice =$cTotalPrice + ($cart['price']*$cart['qty']);
                      }
                    ?>
                  <?php } ?>
                  <div class="basket-item-count" id="idCount" <?php if(!isset($_SESSION['cart'])){ echo 'style="display:none;"'; }?> >
                    <span class="count" id="cCount">
                      <?=$cCount;?>
                    </span>
                  </div>
                  <div class="total-price-basket" id="idTotalPrice" <?php if(!isset($_SESSION['cart'])){ echo 'style="display:none;"'; }?>> 
                    <span class="lbl"></span>
                    <span class="total-price"> 
                      <span class="sign">Rp.</span>
                      <span class="value" id="cTotalPrice"><?=number_format($cTotalPrice,"0",",","."); //number_format($cTotalPrice,"0",",",".");?></span>
                    </span>
                  </div>
                  

                </div>
              </a>
              <!-- <ul class="dropdown-menu">
                <li>
                  <div class="cart-item product-summary">
                    <div class="row">
                      <div class="col-xs-4">
                        <div class="image"> <a href="detail.html"><img src="<?php //echo base_url() ?>/assets/boxshop/assets/images/cart.jpg" alt=""></a> </div>
                      </div>
                      <div class="col-xs-7">
                        <h3 class="name"><a href="index.php?page-detail">Simple Product</a></h3>
                        <div class="price">$600.00</div>
                      </div>
                      <div class="col-xs-1 action"> <a href="#"><i class="fa fa-trash"></i></a> </div>
                    </div>
                  </div>
                  <div class="clearfix"></div>
                  <hr>
                  <div class="clearfix cart-total">
                    <div class="pull-right"> <span class="text">Sub Total :</span><span class='price'>$600.00</span> </div>
                    <div class="clearfix"></div>
                    <a href="checkout.html" class="btn btn-upper btn-primary btn-block m-t-20">Checkout</a>
                  </div>
                </li>
              </ul> -->
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="header-nav animate-dropdown">
      <div class="container">
        <div class="yamm navbar navbar-default" role="navigation">
          <div class="navbar-header">
            <button data-target="#mc-horizontal-menu-collapse" data-toggle="collapse" class="navbar-toggle collapsed" type="button"> 
              <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
            </button>
          </div>
          <div class="nav-bg-class">
            <div class="navbar-collapse collapse" id="mc-horizontal-menu-collapse">
              <div class="nav-outer">
                <ul class="nav navbar-nav">
                  <li class="<?php echo $menu=='home'?'active':''; ?> dropdown"> <a href="<?php echo site_url() ?>">Home</a> </li>
                  <li class="<?php echo $menu=='produk'?'active':''; ?> dropdown"> <a href="<?php echo site_url('categories/v2/all') ?>">Produk</a> </li>
                  <li class="<?php echo $menu=='blog'?'active':''; ?> dropdown"> <a href="<?php echo site_url('blog') ?>">Story</a> </li>
                  <li class="<?php echo $menu=='tentang'?'active':''; ?> dropdown"> <a href="<?php echo site_url('pages/tentang_kami') ?>">Tentang Kami</a> </li>
                  <li class="<?php echo $menu=='kontak'?'active':''; ?> dropdown"> <a href="<?php echo site_url('pages/kontak_kami') ?>">Kontak Kami</a> </li>
                  <li class="<?php echo $menu=='cek_order'?'active':''; ?> dropdown"> <a href="<?php echo site_url('pages/cek_order') ?>">Cek Order</a> </li>
                  <li class="<?php echo $menu=='konfirmasi_pembayaran'?'active':''; ?> dropdown"> <a href="<?php echo site_url('pages/konfirmasi_pembayaran') ?>">Konfirmasi Pembayaran</a> </li>
                  
                <!--   <?php if($this->session->userdata('is_login') == 1){ ?>
                  <li class="dropdown  navbar-right special-menu"> <a href="<?php echo site_url('member/logout_cust') ?>"><i class="icon fa fa-sign-out"></i> Keluar</a> </li>
                  <li class="dropdown  navbar-right special-menu"> <a href="<?php echo site_url('order/history') ?>"><i class="icon fa fa-history"></i> List Order</a> </li>
                  <li class="dropdown  navbar-right special-menu"> <a href="<?php echo site_url('member/customers_profile') ?>"><i class="icon fa fa-user"></i> Akun Saya</a> </li>
                  <?php } else { ?>
                  <li class="dropdown  navbar-right special-menu"> <a href="<?php echo site_url('member/login_customers') ?>"><i class="icon fa fa-lock"></i> Masuk</a> </li>
                  <li class="dropdown  navbar-right special-menu"> <a href="<?php echo site_url('member/login_customers') ?>"><i class="icon fa fa-user"></i> Daftar</a> </li>
                  <?php } ?>
                 -->
                </ul>
                <div class="clearfix"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
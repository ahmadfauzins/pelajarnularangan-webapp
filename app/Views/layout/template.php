<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, viewport-fit=cover, shrink-to-fit=no">
    <meta name="description" content="Suha - Multipurpose Ecommerce Mobile HTML Template">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="theme-color" content="#100DD1">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    
    <!-- Title-->
    <title>PELAJAR NU LARANGAN BREBES</title>
    <!-- Favicon-->
    <link rel="icon" href="<?= base_url();?>/assets/img/icons/icon-72x72.png">
    <!-- Apple Touch Icon-->
    <link rel="apple-touch-icon" href="<?= base_url();?>/assets/img/icons/icon-96x96.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?= base_url();?>/assets/img/icons/icon-152x152.png">
    <link rel="apple-touch-icon" sizes="167x167" href="<?= base_url();?>/assets/img/icons/icon-167x167.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url();?>/assets/img/icons/icon-180x180.png">
    <!-- Stylesheet-->
    <link rel="stylesheet" href="<?= base_url();?>/assets/style.css">
    <!-- Web App Manifest-->
    <link rel="manifest" href="<?= base_url();?>/assets/manifest.json">
    

  </head>
  <body>

        <!-- <div class="preloader" id="preloader">
          <div class="spinner-grow text-secondary" role="status">
            <div class="sr-only">Loading...</div>
          </div>
        </div> -->

        <!-- Header Area-->
        <div class="header-area" id="headerArea">
      <div class="container h-100 d-flex align-items-center justify-content-between">
        <!-- Logo Wrapper-->
        <div class="logo-wrapper"><a href="home.html"><img src="<?= base_url();?>/assets/img/core-img/logo-small.png" alt=""></a></div>
        <!-- Search Form-->
        <div class="top-search-form">
          <form action="#" method="">
            <input class="form-control" type="search" placeholder="Enter your keyword">
            <button type="submit"><i class="fa fa-search"></i></button>
          </form>
        </div>




 <!-- Navbar Toggler-->
 <div class="suha-navbar-toggler d-flex flex-wrap" id="suhaNavbarToggler"><span></span><span></span><span></span></div>
      </div>
    </div>
    <!-- Sidenav Black Overlay-->
    <div class="sidenav-black-overlay"></div>
    <!-- Side Nav Wrapper-->
    <div class="suha-sidenav-wrapper" id="sidenavWrapper">
      <!-- Sidenav Profile-->
      <div class="sidenav-profile">
        <div class="user-profile"><img src="<?= base_url();?>/assets/img/bg-img/9.jpg" alt=""></div>
        <div class="user-info">
          <h6 class="user-name mb-0">Suha Jannat</h6>
          <p class="available-balance">Balance <span>$<span class="counter">523.98</span></span></p>
        </div>
      </div>
      <!-- Sidenav Nav-->
      <ul class="sidenav-nav pl-0">
        <li><a href="profile.html"><i class="lni lni-user"></i>My Profile</a></li>
        <li><a href="notifications.html"><i class="lni lni-alarm lni-tada-effect"></i>Notifications<span class="ml-3 badge badge-warning">3</span></a></li>
        <li class="suha-dropdown-menu"><a href="#"><i class="lni lni-cart"></i>Shop Pages</a>
          <ul>
            <li><a href="shop-grid.html">- Shop Grid</a></li>
            <li><a href="shop-list.html">- Shop List</a></li>
            <li><a href="single-product.html">- Product Details</a></li>
            <li><a href="featured-products.html">- Featured Products</a></li>
            <li><a href="flash-sale.html">- Flash Sale</a></li>
          </ul>
        </li>
        <li><a href="pages.html"><i class="lni lni-empty-file"></i>All Pages</a></li>
        <li class="suha-dropdown-menu"><a href="wishlist-grid.html"><i class="lni lni-heart"></i>My Wishlist</a>
          <ul>
            <li><a href="wishlist-grid.html">- Wishlist Grid</a></li>
            <li><a href="wishlist-list.html">- Wishlist List</a></li>
          </ul>
        </li>
        <li><a href="settings.html"><i class="lni lni-cog"></i>Settings</a></li>
        <li><a href="intro.html"><i class="lni lni-power-switch"></i>Sign Out</a></li>
      </ul>
      <!-- Go Back Button-->
      <div class="go-home-btn" id="goHomeBtn"><i class="lni lni-arrow-left"></i></div>
    </div>
    <!-- PWA Install Alert-->
    <div class="toast pwa-install-alert shadow" id="pwaInstallToast" role="alert" aria-live="assertive" aria-atomic="true" data-delay="8000" data-autohide="true">
      <div class="toast-body">
        <button class="ml-3 close" type="button" data-dismiss="toast" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <div class="content d-flex align-items-center mb-2"><img src="<?= base_url();?>/assets/img/icons/icon-72x72.png" alt="">
          <h6 class="mb-0 text-white">Add to Home Screen</h6>
        </div><span class="mb-0 d-block text-white">Add Suha on your mobile home screen. Click the<strong class="mx-1">"Add to Home Screen"</strong>button & enjoy it like a regular app.</span>
      </div>
    </div>






    <?= $this->renderSection('content') ?>








<!-- Footer Nav-->
<div class="footer-nav-area" id="footerNav">
  <div class="container h-100 px-0">
    <div class="suha-footer-nav h-100">
      <ul class="h-100 d-flex align-items-center justify-content-between pl-0">
        <li class="active"><a href="home.html"><i class="lni lni-home"></i>Home</a></li>
        <li><a href="message.html"><i class="lni lni-life-ring"></i>Support</a></li>
        <li><a href="cart.html"><i class="lni lni-shopping-basket"></i>Cart</a></li>
        <li><a href="pages.html"><i class="lni lni-heart"></i>Pages</a></li>
        <li><a href="settings.html"><i class="lni lni-cog"></i>Settings</a></li>
      </ul>
    </div>
  </div>
</div>


<!-- All JavaScript Files-->
<script src="<?= base_url();?>/assets/js/jquery.min.js"></script>
<script src="<?= base_url();?>/assets/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url();?>/assets/js/waypoints.min.js"></script>
<script src="<?= base_url();?>/assets/js/jquery.easing.min.js"></script>
<script src="<?= base_url();?>/assets/js/owl.carousel.min.js"></script>
<script src="<?= base_url();?>/assets/js/jquery.counterup.min.js"></script>
<script src="<?= base_url();?>/assets/js/jquery.countdown.min.js"></script>
<script src="<?= base_url();?>/assets/js/default/jquery.passwordstrength.js"></script>
<script src="<?= base_url();?>/assets/js/wow.min.js"></script>
<script src="<?= base_url();?>/assets/js/jarallax.min.js"></script>
<script src="<?= base_url();?>/assets/js/jarallax-video.min.js"></script>
<script src="<?= base_url();?>/assets/js/default/dark-mode-switch.js"></script>
<script src="<?= base_url();?>/assets/js/default/no-internet.js"></script>
<script src="<?= base_url();?>/assets/js/default/active.js"></script>
<script src="<?= base_url();?>/assets/js/pwa.js"></script>
</body>
</html>
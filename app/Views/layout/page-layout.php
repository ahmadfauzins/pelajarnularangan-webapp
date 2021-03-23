<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- Title-->
    <title>PELAJAR NU LARANGAN </title>
    <!-- Favicon-->
    <link rel="icon" href="<?= base_url();?>/assets/img/core-img/favicon.ico">


    <!--FRAME Stylesheet-->
    <link rel="stylesheet" href="<?= base_url();?>/assets/style.css">

    <!-- KONTEN CSS Libraries-->
 
    <link rel="stylesheet" href="<?= base_url();?>/content/style.css">  
    <link rel="stylesheet" href="<?= base_url();?>/content/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url();?>/content/css/animate.css">
    <link rel="stylesheet" href="<?= base_url();?>/content/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url();?>/content/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url();?>/content/css/bootstrap-icons.css">
    <link rel="stylesheet" href="<?= base_url();?>/content/css/magnific-popup.css">
    <link rel="stylesheet" href="<?= base_url();?>/content/css/ion.rangeSlider.min.css">
    <link rel="stylesheet" href="<?= base_url();?>/content/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url();?>/content/css/apexcharts.css">
  </head>
  <body>

    <!-- Preloader-->
    <div class="preloader" id="preloader">
      <div class="spinner-grow text-secondary" role="status">
        <div class="sr-only">Loading...</div>
      </div>
    </div>

    <!-- Header Area-->
    <div class="header-area" id="headerArea">
      <div class="container h-100 d-flex align-items-center justify-content-between">
        <!-- Navbar Toggler-->
        <div class="navbar--toggler" id="newstenNavbarToggler"><span></span><span></span><span></span><span></span></div>
        <!-- Logo-->
        <div class="logo-wrapper"><a href="home.html"><img src="<?= base_url();?>/assets/img/core-img/logoo.png" alt=""></a></div>
        <!-- Search Form-->
        <div class="search-form"><a href="search.html"><i class="fa fa-search"></i></a></div>
      </div>
    </div>


    <!-- Sidenav Black Overlay-->
    <div class="sidenav-black-overlay"></div>

    <!-- Side Nav Wrapper-->
    <div class="sidenav-wrapper" id="sidenavWrapper">
      <!-- Time - Weather-->
      <div class="time-date-weather-wrapper text-center py-5" style="background-image: url('<?= base_url();?>/assets/img/bg-img/1.jpg')">
        <div class="weather-update mb-4">
          <l class="icon lni lni-cloudy-sun"></l>
          <h4 class="mb-1">92°F</h4>
          <h6 class="mb-0">Dhaka</h6>
          <p class="mb-0">Mostly sunny</p>
        </div>
        <div class="time-date">
          <div id="dashboardDate"></div>
          <div class="running-time d-flex justify-content-center">
            <div id="hours"></div><span>:</span>
            <div id="min"></div><span>:</span>
            <div id="sec"></div>
          </div>
        </div>
      </div>
      <!-- Sidenav Nav-->
      <ul class="sidenav-nav">
        <li><a href="live.html"><i class="lni lni-play"></i>Live<span class="red-circle ml-2 flashing-effect"></span></a></li>
        <li><a href="profile.html"><i class="lni lni-user"></i>My Profile</a></li>
        <li><a href="pages.html"><i class="lni lni-files"></i>All Pages<span class="ml-2 badge badge-danger">HOT</span></a></li>
        <li><a href="catagory.html"><i class="lni lni-grid-alt"></i>All Category                <span class="ml-2 badge badge-warning">14+</span></a></li>
        <li><a href="settings.html"><i class="lni lni-cog"></i>Settings</a></li>
        <li><a href="login.html"><i class="lni lni-power-switch"></i>Log In</a></li>
      </ul>
      <!-- Go Back Button-->
      <div class="go-home-btn" id="goHomeBtn"><i class="lni lni-arrow-left"></i></div>
    </div>

     <!-- Slide  Wrapper-->
    <div class="news-today-wrapper">
        <div class="container">
      
      <!-- Hero Slides-->
          <div class="owl-carousel-one owl-carousel">
            <!-- Single Hero Slide-->
            <div class="single-hero-slide bg-overlay" style="background-image: url('<?= base_url();?>/content/img/bg-img/31.jpg')">
              <div class="slide-content h-100 d-flex align-items-center text-center">
                <div class="container">
                  <h4 class="text-white mb-1" data-animation="fadeInUp" data-delay="100ms" data-wow-duration="500ms">Build with Bootstrap 5</h4>
                  <p class="text-white mb-4" data-animation="fadeInUp" data-delay="400ms" data-wow-duration="500ms">Build fast, responsive sites with Bootstrap.</p><a class="btn btn-creative btn-warning" href="#" data-animation="fadeInUp" data-delay="800ms" data-wow-duration="500ms">Buy Now</a>
                </div>
              </div>
            </div>
            <!-- Single Hero Slide-->
            <div class="single-hero-slide bg-overlay" style="background-image: url('<?= base_url();?>/content/img/bg-img/32.jpg')">
              <div class="slide-content h-100 d-flex align-items-center text-center">
                <div class="container">
                  <h4 class="text-white mb-1" data-animation="fadeInUp" data-delay="100ms" data-wow-duration="1000ms">PWA ready</h4>
                  <p class="text-white mb-4" data-animation="fadeInUp" data-delay="400ms" data-wow-duration="1000ms">Make your website feel more like a native app.</p><a class="btn btn-creative btn-warning" href="#" data-animation="fadeInUp" data-delay="800ms" data-wow-duration="500ms">Buy Now</a>
                </div>
              </div>
            </div>
            <!-- Single Hero Slide-->
            <div class="single-hero-slide bg-overlay" style="background-image: url('<?= base_url();?>/content/img/bg-img/33.jpg')">
              <div class="slide-content h-100 d-flex align-items-center text-center">
                <div class="container">
                  <h4 class="text-white mb-1" data-animation="fadeInUp" data-delay="100ms" data-wow-duration="1000ms">Unique elements &amp; pages</h4>
                  <p class="text-white mb-4" data-animation="fadeInUp" data-delay="400ms" data-wow-duration="1000ms">Create your website in minutes, not weeks.</p><a class="btn btn-creative btn-warning" href="#" data-animation="fadeInUp" data-delay="800ms" data-wow-duration="500ms">Buy Now</a>
                </div>
              </div>
            </div>
            <!-- Single Hero Slide-->
            <div class="single-hero-slide bg-overlay" style="background-image: url('<?= base_url();?>/content/img/bg-img/1.jpg')">
              <div class="slide-content h-100 d-flex align-items-center text-center">
                <div class="container">
                  <h4 class="text-white mb-1" data-animation="fadeInUp" data-delay="100ms" data-wow-duration="1000ms">Dark &amp; rtl ready</h4>
                  <p class="text-white mb-4" data-animation="fadeInUp" data-delay="400ms" data-wow-duration="1000ms">You can use Dark or RTL mode of your choice.</p><a class="btn btn-creative btn-warning" href="#" data-animation="fadeInUp" data-delay="800ms" data-wow-duration="500ms">Buy Now</a>
                </div>
              </div>
            </div>
        </div>
      </div>
   
      <!-- Welcome Toast-->
      <!-- <div class="toast toast-autohide custom-toast-1 toast-danger home-page-toast" role="alert" aria-live="assertive" aria-atomic="true" data-bs-delay="10000" data-bs-autohide="true">
        <div class="toast-body">
          <svg class="bi bi-bookmark-check text-white" width="30" height="30" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z"></path>
            <path fill-rule="evenodd" d="M10.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"></path>
          </svg>
          <div class="toast-text ms-3 me-2">
            <p class="mb-1 text-white">Welcome to Affan template!</p><small class="d-block">Click the "Add to Home Screen" button &amp; enjoy it like an app.</small>
          </div>
          <button class="btn btn-close btn-close-white position-relative p-1 ms-auto" type="button" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
      </div> -->


      <div class="py-4">
        <div class="container direction-rtl">
          <div class="row g-3">
            <div class="col-3">
              <div class="feature-card text-center">
                <div class="card shadow mx-auto"><img src="<?= base_url();?>/content/img/demo-img/bootstrap.png" alt=""></div>
                <p class="mb-0">Bootstrap 5</p>
              </div>
            </div>
            <div class="col-3">
              <div class="feature-card mx-auto text-center">
                <div class="card shadow mx-auto"><img src="<?= base_url();?>/content/img/demo-img/pwa.png" alt=""></div>
                <p class="mb-0">PWA ready</p>
              </div>
            </div>
            <div class="col-3">
              <div class="feature-card mx-auto text-center">
                <div class="card shadow mx-auto"><img src="<?= base_url();?>/content/img/demo-img/sass.png" alt=""></div>
                <p class="mb-0">Sass </p>
              </div>
            </div>
            <div class="col-3">
              <div class="feature-card mx-auto text-center">
                <div class="card shadow mx-auto"><img src="<?= base_url();?>/content/img/demo-img/pug.png" alt=""></div>
                <p class="mb-0">Pug</p>
              </div>
            </div>
            <div class="col-3">
              <div class="feature-card mx-auto text-center">
                <div class="card shadow mx-auto"><img src="<?= base_url();?>/content/img/demo-img/npm.png" alt=""></div>
                <p class="mb-0">npm</p>
              </div>
            </div>
            <div class="col-3">
              <div class="feature-card mx-auto text-center">
                <div class="card shadow mx-auto"><img src="<?= base_url();?>/content/img/demo-img/gulp.png" alt=""></div>
                <p class="mb-0">gulp.js</p>
              </div>
            </div>
            <div class="col-3">
              <div class="feature-card mx-auto text-center">
                <div class="card shadow mx-auto"><i class="bi bi-box-arrow-left text-primary"></i></div>
                <p class="mb-0">RTL ready</p>
              </div>
            </div>
            <div class="col-3">
              <div class="feature-card mx-auto text-center">
                <div class="card shadow mx-auto"><i class="bi bi-moon text-dark"></i></div>
                <p class="mb-0">Dark mode</p>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

    <!-- Trending News Wrapper-->
      <div class="container">
          <div class="d-flex align-items-center justify-content-between mb-3">
            <h5 class="mb-0 pl-1 newsten-title">Trending</h5><a class="btn btn-primary btn-sm" href="trending.html">View All</a>
          </div>
        </div>
        <div class="container">
          <!-- Single Trending Post-->
          <div class="single-trending-post d-flex">
            <div class="post-thumbnail"><img src="<?= base_url();?>/assets/img/bg-img/11.jpg" alt=""></div>
            <div class="post-content"><a class="post-title" href="single.html">Swimming is a good exercise for the body</a>
              <div class="post-meta d-flex align-items-center"><a href="catagory.html">Sports</a><a href="#">02 Jun 20</a></div>
            </div>
          </div>
          <!-- Single Trending Post-->
          <div class="single-trending-post d-flex">
            <div class="post-thumbnail">
              <div class="video-icon"><i class="lni lni-play"></i></div><img src="<?= base_url();?>/assets/img/bg-img/16.jpg" alt="">
            </div>
            <div class="post-content"><a class="post-title" href="single.html">The drone is banned in BD without permission</a>
              <div class="post-meta d-flex align-items-center"><a href="catagory.html">Tech</a><a href="#">03 Jun 20</a></div>
            </div>
          </div>
          <!-- Single Trending Post-->
          <div class="single-trending-post d-flex">
            <div class="post-thumbnail"><img src="<?= base_url();?>/assets/img/bg-img/17.jpg" alt=""></div>
            <div class="post-content"><a class="post-title" href="single.html">Some tips for taking care of the body this summer</a>
              <div class="post-meta d-flex align-items-center"><a href="catagory.html">Fashion</a><a href="#">04 Jun 20</a></div>
            </div>
          </div>
          
        </div>
    


    <!-- Footer Nav-->
    <div class="footer-nav-area" id="footerNav">
      <div class="newsten-footer-nav h-100">
        <ul class="h-100 d-flex align-items-center justify-content-between">
          <li class="active"><a href="home.html"><i class="lni lni-home"></i></a></li>
          <li><a href="catagory.html"><i class="lni lni-grid-alt"></i></a></li>
          <li><a href="trending.html"><i class="lni lni-bolt-alt"></i></a></li>
          <li><a href="pages.html"><i class="lni lni-heart"></i></a></li>
          <li><a href="bookmark.html"><i class="lni lni-bookmark"></i></a></li>
        </ul>
      </div>
    </div>


 <!-- All JavaScript Files-->
    <script src="<?= base_url();?>/assets/js/jquery.min.js"></script>
    <script src="<?= base_url();?>/assets/js/popper.min.js"></script>
    <script src="<?= base_url();?>/assets/js/bootstrap.min.js"></script>
    <script src="<?= base_url();?>/assets/js/waypoints.min.js"></script>
    <script src="<?= base_url();?>/assets/js/jquery.easing.min.js"></script>
    <script src="<?= base_url();?>/assets/js/owl.carousel.min.js"></script>
    <script src="<?= base_url();?>/assets/js/jquery.animatedheadline.min.js"></script>
    <script src="<?= base_url();?>/assets/js/jquery.counterup.min.js"></script>
    <script src="<?= base_url();?>/assets/js/wow.min.js"></script>
    <script src="<?= base_url();?>/assets/js/default/date-clock.js"></script>
    <script src="<?= base_url();?>/assets/js/default/dark-mode-switch.js"></script>
    <script src="<?= base_url();?>/assets/js/default/active.js"></script>


<!-- All JavaScript Files-->
    <script src="<?= base_url();?>/content/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url();?>/content/js/jquery.min.js"></script>
    <script src="<?= base_url();?>/content/js/default/internet-status.js"></script>
    <script src="<?= base_url();?>/content/js/waypoints.min.js"></script>
    <script src="<?= base_url();?>/content/js/jquery.easing.min.js"></script>
    <script src="<?= base_url();?>/content/js/wow.min.js"></script>
    <script src="<?= base_url();?>/content/js/owl.carousel.min.js"></script>
    <script src="<?= base_url();?>/content/js/jquery.counterup.min.js"></script>
    <script src="<?= base_url();?>/content/js/jquery.countdown.min.js"></script>
    <script src="<?= base_url();?>/content/js/imagesloaded.pkgd.min.js"></script>
    <script src="<?= base_url();?>/content/js/isotope.pkgd.min.js"></script>
    <script src="<?= base_url();?>/content/js/jquery.magnific-popup.min.js"></script>
    <script src="<?= base_url();?>/content/js/default/dark-mode-switch.js"></script>
    <script src="<?= base_url();?>/content/s/ion.rangeSlider.min.js"></script>
    <script src="<?= base_url();?>/content/js/jquery.dataTables.min.js"></script>
    <script src="<?= base_url();?>/content/js/default/active.js"></script>
    <script src="<?= base_url();?>/content/js/default/clipboard.js"></script>
    <!-- PWA-->
    <script src="<?= base_url();?>/content/js/pwa.js"></script>
  </body>

</html>
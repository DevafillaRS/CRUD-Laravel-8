<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>@yield('title')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="fonts/elegant-font/style.css">
    <link href="https://fonts.googleapis.com/css?family=Cormorant:300,300i,400,400i,500,500i,600,600i,700,700i&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets2/fonts/font-awesome/css/font-awesome.min.css">

    <link rel="stylesheet" href="/assets2/styles/bootstrap.css" />
    <link rel="stylesheet" href="/assets2/styles/main.css" />
  </head>
  <body>

    <div id="js-preloader" class="js-preloader">
      <div class="cp-preloader cp-preloader_type1">
        <span class="cp-preloader__letter" data-preloader="W">W</span>
        <span class="cp-preloader__letter" data-preloader="E">E</span>
        <span class="cp-preloader__letter" data-preloader="B">B</span>
        <span class="cp-preloader__letter" data-preloader="D">D</span>
        <span class="cp-preloader__letter" data-preloader="E">E</span>
        <span class="cp-preloader__letter" data-preloader="V">V</span>
      </div>
    </div>

    <!-- Mobile Menu -->
    <div class="mobile-nav-wrapper">
      <div class="mobile-menu-inner">
        <ul class="mobile-menu">
          <li class="has-sub"><a href="#">Home <i class="sub-icon fa fa-angle-down"></i></a></li>
          <li><a href="pages-about-me-v1.html">About</a></li>
          <li><a href="pages-about-me-v1.html">Posts</a></li>
          <li><a href="pages-contact-me-v2.html">Contact Us</a></li>
        </ul>
      </div>
    </div>
    <div class="mobile-menu-overlay"></div>

    <section class="above-header">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 align-self-center">
            <ul class="social-icons">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              <li><a href="#"><i class="fa fa-behance"></i></a></li>
            </ul>
          </div>
          <div class="col-lg-4 align-self-center">
            <div class="logo">
              <a href="index.html"><h3>Web<span style="color: #79a472">Dev</span></h3></a>
            </div>
          </div>
          <div class="col-lg-4 align-self-center">
            <ul class="search-item">
              <li class="menu-item menu-search">
                <a href="#search" id="menu-search-btn">
                  <i class="icon_search"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <!-- Header -->
    <header class="site-header fixed-header">
      <div class="container expanded">
        <div class="header-wrap">
          <div class="header-logo">
            <a href="index.html"><img src="images/logo.png" alt=""></a>
          </div>
          <div class="header-nav">
              <ul class="main-menu">
                <li class="menu-item-has-children active"><a href="#">Home</a>
                  <ul class="sub-menu">
                    <li><a href="index.html">Standard Posts</a></li>
                    <li><a href="home-recent.html">Recent Posts</a></li>
                    <li><a href="home-masonry.html">Masonry Posts</a></li>
                    <li><a href="home-list.html">List Posts</a></li>
                    <li><a href="home-full-width.html">Full Width Posts</a></li>
                    <li><a href="home-without-sidebar.html">Without Sidebar</a></li>
                  </ul>
                </li>
                <li class="menu-item-has-children"><a href="#">Sliders</a>
                  <ul class="sub-menu">
                    <li><a href="slider-boxed.html">Boxed Slider</a></li>
                    <li><a href="slider-full-width.html">Full Width Slider</a></li>
                    <li><a href="slider-medium.html">Two Big Posts</a></li>
                    <li><a href="slider-small.html">Three Big Posts</a></li>
                    <li><a href="slider-infinity.html">Infinity Scroll</a></li>
                  </ul>
                </li>
                <li><a href="pages-about-me-v1.html">About</a></li>
                <li class="menu-item-has-children"><a href="#">Pages</a>
                  <ul class="sub-menu">
                    <li><a href="pages-left-sidebar.html">Left Sidebar</a></li>
                    <li><a href="pages-right-sidebar.html">Right Sidebar</a></li>
                    <li><a href="pages-without-sidebar.html">Without Sidebar</a></li>
                    <li><a href="pages-about-me-v1.html">About Version 1</a></li>
                    <li><a href="pages-about-me-v2.html">About Version 2</a></li>
                    <li><a href="pages-contact-me-v1.html">Contact Version 1</a></li>
                    <li><a href="pages-contact-me-v2.html">Contact Version 2</a></li>
                    <li><a href="pages-error-404.html">Error Page 404</a></li>
                    <li><a href="pages-coming-soon.html">Coming Soon Page</a></li>
                  </ul>
                </li>
                <li class="menu-item-has-children"><a href="#">Posts</a>
                  <ul class="sub-menu">
                    <li><a href="single-standard-post.html">Standard Post</a></li>
                    <li><a href="single-audio-post.html">Audio Post</a></li>
                    <li><a href="single-video-post.html">Video Post</a></li>
                    <li><a href="single-gallery-post.html">Gallery Post</a></li>
                    <li><a href="single-quote-post.html">Quote Post</a></li>
                    <li><a href="single-post-left-sidebar.html">Left Sidebar Post</a></li>
                    <li><a href="single-post-right-sidebar.html">Right Sidebar Post</a></li>
                    <li><a href="single-post-without-sidebar.html">Without Sidebar Post</a></li>
                  </ul>
                </li>
                <li><a href="pages-contact-me-v2.html">Contact</a></li>
              </ul>    
          </div>
          <div class="header-widgets">
            <ul class="right-menu">
              <li class="menu-item menu-mobile-nav">
                <a href="#" class="menu-bar" id="menu-show-mobile-nav">
                  <span class="hamburger"></span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </header>
    <!-- /Header -->

    <!-- change class -->
    <div class="change-class"></div>

    <div id="search">
      <button type="button" class="close">??</button>
        <form>
            <input type="search" value="" placeholder="Search..." />
            <button type="submit" class="primary-button"><i class="icon_search"></i></button>
        </form>
    </div>

    @yield('content')
    
    <div class="instagram-footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="instagram-account">
              <div class="widget-content">
                <div class="widget-header">
                  <h4><a href="#">@shareenBlog</a></h4>
                </div>
                <div class="row">
                  <div class="col-lg-3">
                    <div class="instagram-item">
                      <img src="images/instagram-footer-01.jpg" alt="">
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="instagram-item">
                      <img src="images/instagram-footer-02.jpg" alt="">
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="instagram-item">
                      <img src="images/instagram-footer-03.jpg" alt="">
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="instagram-item">
                      <img src="images/instagram-footer-04.jpg" alt="">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <ul class="footer-social-icons">
              <li><a href="#"><i class="fa fa-facebook"></i> Facebook</a></li>
              <li><a href="#"><i class="fa fa-twitter"></i> Twitter</a></li>
              <li><a href="#"><i class="fa fa-behance"></i> Behance</a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i> Linkedin</a></li>
              <li><a href="#"><i class="fa fa-dribbble"></i> Dribbble</a></li>
            </ul>
          </div>
          <div class="col-lg-12">
            <div class="copyright-text">
              <p>all rights reserved. <a href="#">robert imeri</a> 2020.</p>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <a href="#" class="go-top"><i class="fa fa-angle-up"></i></a>

    <!-- Scripts -->
    <script src="/assets2/scripts/vendors/jquery-3.4.1.min.js"></script>
    <script src="/assets2/scripts/vendors/jquery.hoverIntent.min.js"></script>
    <script src="/assets2/scripts/vendors/perfect-scrollbar.min.js"></script>
    <script src="/assets2/scripts/vendors/jquery.easing.min.js"></script>
    <script src="/assets2/scripts/vendors/wow.min.js"></script>
    <script src="/assets2/scripts/vendors/parallax.min.js"></script>
    <script src="/assets2/scripts/vendors/isotope.min.js"></script>
    <script src="/assets2/scripts/vendors/imagesloaded.pkgd.min.js"></script>
    <script src="/assets2/scripts/vendors/packery-mode.pkgd.min.js"></script>
    <script src="/assets2/scripts/vendors/owl-carousel.min.js"></script>
    <script src="/assets2/scripts/vendors/jquery.appear.js"></script>
    <script src="/assets2/scripts/vendors/jquery.countTo.js"></script>
    <script src="/assets2/scripts/main.js"></script>


  </body>

</html>

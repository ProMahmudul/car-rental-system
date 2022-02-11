<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
     <meta http-equiv="x-ua-compatible" content="ie=edge">
     <title><?= $this->renderSection("pageTitle") ?> | Car Rental System</title>
     <link rel="shortcut icon" href="<?= base_url('front/images/logo/favourite_icon.png') ?>">
     <link rel="stylesheet" type="text/css" href="<?= base_url('front/css/bootstrap.min.css') ?>">
     <link rel="stylesheet" type="text/css" href="<?= base_url('front/css/fontawesome.css') ?>">
     <link rel="stylesheet" type="text/css" href="<?= base_url('front/css/aos.css') ?>">
     <link rel="stylesheet" type="text/css" href="<?= base_url('front/css/animate.css') ?>">
     <link rel="stylesheet" type="text/css" href="<?= base_url('front/css/slick.css') ?>">
     <link rel="stylesheet" type="text/css" href="<?= base_url('front/css/slick-theme.css') ?>">
     <link rel="stylesheet" type="text/css" href="<?= base_url('front/css/magnific-popup.css') ?>">
     <link rel="stylesheet" type="text/css" href="<?= base_url('front/css/nice-select.css') ?>">
     <link rel="stylesheet" type="text/css" href="<?= base_url('front/css/jquery-ui.css') ?>">
     <link rel="stylesheet" type="text/css" href="<?= base_url('front/css/style.css') ?>">
</head>

<body>
     <div id="thetop"></div>
     <div class="backtotop"><a href="#" class="scroll"><i class="far fa-arrow-up"></i></a></div>
     <div class="preloader">
          <div class="animation_preloader">
               <div class="spinner"></div>
               <p class="text-center">Loading</p>
          </div>
          <div class="loader">
               <div class="row vh-100">
                    <div class="col-3 loader_section section-left">
                         <div class="bg"></div>
                    </div>
                    <div class="col-3 loader_section section-left">
                         <div class="bg"></div>
                    </div>
                    <div class="col-3 loader_section section-right">
                         <div class="bg"></div>
                    </div>
                    <div class="col-3 loader_section section-right">
                         <div class="bg"></div>
                    </div>
               </div>
          </div>
     </div>
     <?= $this->include("front/include/header") ?>
     <main class="mt-0">
          <div class="sidebar-menu-wrapper">
               <div class="mobile_sidebar_menu"><button type="button" class="close_btn"><i class="fal fa-times"></i></button>
                    <div class="about_content mb_60">
                         <div class="brand_logo mb_15"><a href="index.html"><img src="<?= base_url('front') ?>/images/logo/logo_01_1x.png"  alt="logo_not_found"></a></div>
                    </div>
                    <div class="menu_list mb_60 clearfix">
                         <h3 class="title_text text-white">Menu List</h3>
                         <ul class="ul_li_block clearfix">
                              <li><a href="gallery.html">Our Cars</a></li>
                              <li><a href="review.html">Reviews</a></li>
                              <li><a href="about.html">About</a></li>
                         </ul>
                    </div>
               </div>
               <div class="overlay"></div>
          </div>
          <?= $this->renderSection("content") ?>
     </main>
     <?= $this->include("front/include/footer") ?>
     <script src="<?= base_url('front/js/jquery-3.5.1.min.js') ?>"></script>
     <script src="<?= base_url('front/js/popper.min.js') ?>"></script>
     <script src="<?= base_url('front/js/bootstrap.min.js') ?>"></script>
     <script src="<?= base_url('front/js/aos.js') ?>"></script>
     <script src="<?= base_url('front/js/parallaxie.js') ?>"></script>
     <script src="<?= base_url('front/js/slick.min.js') ?>"></script>
     <script src="<?= base_url('front/js/magnific-popup.min.js') ?>"></script>
     <script src="<?= base_url('front/js/nice-select.min.js') ?>"></script>
     <script src="<?= base_url('front/js/isotope.pkgd.js') ?>"></script>
     <script src="<?= base_url('front/js/imagesloaded.pkgd.min.js') ?>"></script>
     <script src="<?= base_url('front/js/masonry.pkgd.min.js') ?>"></script>
     <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDk2HrmqE4sWSei0XdKGbOMOHN3Mm2Bf-M&amp;ver=2.1.6"></script>
     <script src="<?= base_url('front/js/gmaps.min.js') ?>"></script>
     <script src="<?= base_url('front/js/jquery-ui.js') ?>"></script>
     <script src="<?= base_url('front/js/waypoint.js') ?>"></script>
     <script src="<?= base_url('front/js/counterup.min.js') ?>"></script>
     <script src="<?= base_url('front/js/validate.js') ?>"></script>
     <script src="<?= base_url('front/js/mCustomScrollbar.js') ?>"></script>
     <script src="<?= base_url('front/js/custom.js') ?>"></script>
     <script async src="https://www.googletagmanager.com/gtag/js?id=G-M3VBLFRFMN"></script>
     <script>
          function gtag() {
               dataLayer.push(arguments)
          }
          window.dataLayer = window.dataLayer || [], gtag("js", new Date), gtag("config", "G-M3VBLFRFMN");
     </script>
</body>

</html>
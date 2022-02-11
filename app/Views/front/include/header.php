     <header class="header_section secondary_header sticky text-white clearfix">
          <div class="header_top clearfix">
               <div class="container">
                    <div class="row align-items-center">
                         <div class="col-lg-7">
                              <ul class="header_contact_info ul_li clearfix">
                                   <li><i class="fal fa-envelope"></i> <a href="" class="__cf_email__">contact@app.com</a>
                                   </li>
                                   <li><i class="fal fa-phone"></i> +1-202-555-0156</li>
                              </ul>
                         </div>
                         <div class="col-lg-5">
                              <ul class="primary_social_links ul_li_right clearfix">
                                   <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
                                   <li><a href="#!"><i class="fab fa-instagram"></i></a></li>
                                   <li><a href="#!"><i class="fab fa-twitter"></i></a></li>
                                   <li><a href="#!"><i class="fab fa-youtube"></i></a></li>
                              </ul>
                         </div>
                    </div>
               </div>
          </div>
          <div class="header_bottom clearfix">
               <div class="container">
                    <div class="row align-items-center">
                         <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                              <div class="brand_logo">
                                   <a href="<?= base_url() ?>">
                                        <img src="<?= base_url('front') ?>/images/logo/logo_01_1x.png" alt="logo_not_found">
                                        <img src="<?= base_url('front') ?>/images/logo/logo_02_1x.png" alt="logo_not_found">
                                   </a>
                              </div>
                         </div>
                         <div class="col-lg-3 col-md-6 col-sm-6 col-6 order-last">
                              <ul class="header_action_btns ul_li_right clearfix">
                                   <li><button type="button" class="search_btn" data-toggle="collapse" data-target="#collapse_search_body" aria-expanded="false" aria-controls="collapse_search_body"><i class="fal fa-search"></i></button>
                                   </li>
                                   <li class="dropdown"><button type="button" class="user_btn" id="user_dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fal fa-user"></i></button>
                                   <?php if(session()->get('isLoggedIn')): ?>
                                        <div class="user_dropdown rotors_dropdown dropdown-menu clearfix" aria-labelledby="user_dropdown">
                                             <div class="profile_info clearfix"><a href="#!" class="user_thumbnail"><img src="<?= base_url() ?><?= session()->get('profile_image') ?>" alt="thumbnail_not_found"></a>
                                                  <div class="user_content">
                                                       <h4 class="user_name"><a href="#!"><?= session()->get('name') ?></a></h4><span class="user_title"></span>
                                                  </div>
                                             </div>
                                             <ul class="ul_li_block clearfix">
                                                  <li><a href="<?= base_url('my-account') ?>"><i class="fal fa-user-circle"></i>Profile</a></li>
                                                  <li><a href="<?= site_url('logout') ?>"><i class="fal fa-sign-out"></i> Logout</a></li>
                                             </ul>
                                        </div>
                                   <?php else: ?>
                                        <div class="user_dropdown rotors_dropdown dropdown-menu clearfix" aria-labelledby="user_dropdown">
                                             <ul class="ul_li_block clearfix">
                                                  <li><a href="<?= base_url('login') ?>"><i class="fal fa-lock"></i>Login</a></li>
                                                  <li><a href="<?= base_url('register') ?>"><i class="fal fa-user-circle"></i>Register</a></li>
                                             </ul>
                                        </div>
                                   <?php endif; ?>
                                   </li>
                                   <li><button type="button" class="mobile_sidebar_btn"><i class="fal fa-align-right"></i></button></li>
                              </ul>
                         </div>
                         <div class="col-lg-6 col-md-12">
                              <nav class="main_menu clearfix">
                                   <ul class="ul_li_center clearfix">
                                        <li class="active"><a href="<?= base_url() ?>">Home</a></li>
                                        <li><a href="<?=base_url()?>/our-cars">Our Cars</a></li>
                                   </ul>
                              </nav>
                         </div>
                    </div>
               </div>
          </div>
          <div id="collapse_search_body" class="collapse_search_body collapse">
               <div class="search_body">
                    <div class="container">
                         <form action="#">
                              <div class="form_item"><input type="search" name="search" placeholder="Type here...">
                                   <button type="submit"><i class="fal fa-search"></i></button>
                              </div>
                         </form>
                    </div>
               </div>
          </div>
     </header>
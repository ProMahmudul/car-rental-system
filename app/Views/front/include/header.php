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
                                        <div class="user_dropdown rotors_dropdown dropdown-menu clearfix" aria-labelledby="user_dropdown">
                                             <div class="profile_info clearfix"><a href="#!" class="user_thumbnail"><img src="<?= base_url('front') ?>/images/meta/img_01.png" alt="thumbnail_not_found"></a>
                                                  <div class="user_content">
                                                       <h4 class="user_name"><a href="#!">Rakibul Hassan</a></h4><span class="user_title">Seller</span>
                                                  </div>
                                             </div>
                                             <ul class="ul_li_block clearfix">
                                                  <li><a href="#!"><i class="fal fa-user-circle"></i> Profile</a></li>
                                                  <li><a href="#!"><i class="fal fa-user-cog"></i> Settings</a></li>
                                                  <li><a href="#!"><i class="fal fa-sign-out"></i> Logout</a></li>
                                             </ul>
                                        </div>
                                   </li>
                                   <li><button type="button" class="mobile_sidebar_btn"><i class="fal fa-align-right"></i></button></li>
                              </ul>
                         </div>
                         <div class="col-lg-6 col-md-12">
                              <nav class="main_menu clearfix">
                                   <ul class="ul_li_center clearfix">
                                        <li class="active has_child"><a href="#!">Home</a>
                                             <ul class="submenu">
                                                  <li><a href="index_1.html">Home Page V.1</a></li>
                                                  <li><a href="index_2.html">Home Page V.2</a></li>
                                             </ul>
                                        </li>
                                        <li><a href="gallery.html">Our Cars</a></li>
                                        <li><a href="review.html">Reviews</a></li>
                                        <li><a href="about.html">About</a></li>
                                        <li class="has_child"><a href="#!">Pages</a>
                                             <ul class="submenu">
                                                  <li><a href="service.html">Our Service</a></li>
                                                  <li><a href="gallery.html">Car Gallery</a></li>
                                                  <li><a href="account.html">My Account</a></li>
                                                  <li><a href="reservation.html">Reservation</a></li>
                                                  <li class="has_child"><a href="#!">Blogs</a>
                                                       <ul class="submenu">
                                                            <li><a href="blog.html">Blog</a></li>
                                                            <li><a href="blog_details.html">Blog Details</a></li>
                                                       </ul>
                                                  </li>
                                                  <li class="has_child"><a href="#!">Our Cars</a>
                                                       <ul class="submenu">
                                                            <li><a href="car.html">Cars</a></li>
                                                            <li><a href="car_details.html">Car Details</a></li>
                                                       </ul>
                                                  </li>
                                                  <li><a href="cart.html">Shopping Cart</a></li>
                                                  <li><a href="faq.html">F.A.Q.</a></li>
                                                  <li><a href="login.html">Login</a></li>
                                             </ul>
                                        </li>
                                        <li class="has_child"><a href="#!">Contact Us</a>
                                             <ul class="submenu">
                                                  <li><a href="contact.html">Contact Default</a></li>
                                                  <li><a href="contact_wordwide.html">Contact Wordwide</a></li>
                                             </ul>
                                        </li>
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
<?= $this->extend("front/layouts/app") ?>

<?= $this->section("pageTitle") ?>
<?= $car['title'] ?>
<?= $this->endSection() ?>

<?= $this->section("content") ?>
<section class="breadcrumb_section text-center clearfix">
     <div class="page_title_area has_overlay d-flex align-items-center clearfix" data-bg-image="assets/images/breadcrumb/bg_02.jpg">
          <div class="overlay"></div>
          <div class="container" data-aos="fade-up" data-aos-delay="100">
               <h1 class="page_title text-white mb-0">Choose Your Car Options</h1>
          </div>
     </div>
     <div class="breadcrumb_nav clearfix" data-bg-color="#F2F2F2">
          <div class="container">
               <ul class="ul_li clearfix">
                    <li><a href="<?= base_url() ?>">Home</a></li>
                    <li><a href="<?= base_url('our-cars') ?>">Our Cars</a></li>
                    <li><?= $car['title'] ?></li>
               </ul>
          </div>
     </div>
</section>
<div class="details_section sec_ptb_100 pb-0 clearfix">
     <div class="container">
          <div class="row justify-content-lg-between justify-content-md-center justify-content-sm-center">
               <div class="col-md-12 col-sm-10 col-xs-12">
                    <div class="car_choose_carousel mb_30 clearfix">
                         <div class="thumbnail_carousel" data-aos="fade-up" data-aos-delay="100">
                              <div class="item">
                                   <div class="item_head">
                                        <h4 class="item_title mb-0"><?= $car['title'] ?></h4>
                                   </div><img src="<?= base_url() ?><?= $car['image'] ?>" alt="image_not_found">
                                   <ul class="btns_group ul_li_center clearfix">
                                        <li><span class="custom_btn btn_width bg_default_blue">Tk.<?= $car['price_per_day'] ?>/Day</span></li>
                                   </ul>
                              </div>
                         </div>
                    </div>

                    <div class="car_choose_content mt-4">
                         <p class="mb_15 clearfix" data-aos="fade-up" data-aos-delay="100">
                              <?= $car['description'] ?>
                         </p>
                         <hr data-aos="fade-up" data-aos-delay="300">
                         <div class="rent_details_info mb_30">
                              <h4 class="list_title" data-aos="fade-up" data-aos-delay="100">Rent Details:</h4>
                              <div class="row">
                                   <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <ul class="info_list ul_li_block mb_15 clearfix" data-aos="fade-up" data-aos-delay="200">
                                             <li><i class="fas fa-id-card"></i> Payment Guarantee</li>
                                             <li><i class="fas fa-business-time"></i> Protect Your Rental</li>
                                             <li><i class="fas fa-business-time"></i> Receipt by Email</li>
                                        </ul>
                                   </div>
                                   <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <ul class="info_list ul_li_block mb_15 clearfix" data-aos="fade-up" data-aos-delay="300">
                                             <li><i class="fas fa-user-friends"></i> Car Sharing</li>
                                             <li><i class="fas fa-language"></i> Multilanguage Support</li>
                                             <li><i class="fas fa-money-bill"></i> Payment Options</li>
                                        </ul>
                                   </div>
                              </div>
                         </div>
                    </div>

                    <hr data-aos="fade-up" data-aos-delay="400">

                    <div class="reservation_form mb_15 mb-4 clearfix" data-aos="fade-up" data-aos-delay="100">
                         <form action="<?= base_url('reservation') ?>" method="post">
                              <?php if (isset($validation)) : ?>
                                   <div class="col-12">
                                        <div class="alert alert-danger" role="alert">
                                             <?= $validation->listErrors() ?>
                                        </div>
                                   </div>
                              <?php endif; ?>
                              <?php if (session()->get("success")) : ?>
                                   <div class="alert alert-success">
                                        <?= session()->get("success") ?>
                                   </div>
                              <?php
                              endif;
                              if (session()->get("error")) :
                              ?>
                                   <div class="alert alert-danger">
                                        <?= session()->get("error") ?>
                                   </div>
                              <?php
                              endif;
                              ?>
                              <div class="row">
                                   <input type="hidden" name="user_id" value="<?= session()->get('id') ?>">
                                   <input type="hidden" name="car_id" value="<?= $car['id'] ?>">
                                   <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form_item" data-aos="fade-up" data-aos-delay="100">
                                             <h4 class="input_title">Pick Up Location</h4>
                                             <div class="position-relative"><input id="location_two" type="text" name="from_area" placeholder="86 Albert Road, London, N51 4VK" required> <label for="location_two" class="input_icon"><i class="fas fa-map-marker-alt"></i></label></div>
                                        </div>
                                   </div>
                                   <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form_item" data-aos="fade-up" data-aos-delay="200">
                                             <h4 class="input_title">Pick Up Date</h4>
                                             <input type="date" name="from_date" required>
                                        </div>
                                   </div>
                                   <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form_item" data-aos="fade-up" data-aos-delay="400">
                                             <h4 class="input_title">Drop Off Location</h4>
                                             <div class="position-relative"><input id="location_three" type="text" name="to_area" placeholder="86 Albert Road, London, N51 4VK" required> <label for="location_three" class="input_icon"><i class="fas fa-map-marker-alt"></i></label></div>
                                        </div>
                                   </div>
                                   <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form_item" data-aos="fade-up" data-aos-delay="500">
                                             <h4 class="input_title">Drop Off Date</h4>
                                             <input type="date" name="to_date" required>
                                        </div>
                                   </div>
                              </div>
                              <div class="reservation_customer_details">
                                   <h4 class="input_title" data-aos="fade-up" data-aos-delay="100">Additional Information:</h4>
                                   <div class="form_item" data-aos="fade-up" data-aos-delay="800">
                                        <textarea name="message" placeholder="Your message (Optional)"></textarea>
                                   </div>
                                   <div data-aos="fade-up" data-aos-delay="100"><a class="terms_condition" href="#!"><i class="fas fa-info-circle mr-1"></i> You must be at least 21 years old to rent this car. Collision Damage Waiver (CDW)</a></div>
                                   <?php if (session()->get('isLoggedIn')) : ?>
                                        <div class="row align-items-center justify-content-lg-between mt-3">
                                             <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12" data-aos="fade-up" data-aos-delay="300">
                                                  <button type="submit" class="custom_btn bg_default_red text-uppercase">Reservation Now <img src="<?= base_url('front') ?>/images/icons/icon_01.png" alt="icon_not_found"></button>
                                             </div>
                                        </div>
                                   <?php else : ?>
                                        <div class="alert alert-danger">
                                             <strong>Please!!</strong> <a href="<?= base_url('login') ?>">Login</a> for reservation.
                                        </div>
                                   <?php endif; ?>
                              </div>
                         </form>
                    </div>
               </div>
          </div>
     </div>
</div>
<?= $this->endSection() ?>
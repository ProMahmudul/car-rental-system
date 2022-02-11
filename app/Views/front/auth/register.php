<?= $this->extend("front/layouts/app") ?>

<?= $this->section("pageTitle") ?>
Register
<?= $this->endSection() ?>

<?= $this->section("content") ?>
<section class="breadcrumb_section text-center clearfix">
     <div class="page_title_area has_overlay d-flex align-items-center clearfix" data-bg-image="<?= base_url('front') ?>/images/breadcrumb/bg_09.jpg">
          <div class="overlay"></div>
          <div class="container" data-aos="fade-up" data-aos-delay="100">
               <h1 class="page_title text-white mb-0">Register</h1>
          </div>
     </div>
     <div class="breadcrumb_nav clearfix" data-bg-color="#F2F2F2">
          <div class="container">
               <ul class="ul_li clearfix">
                    <li><a href="<?= base_url() ?>">Home</a></li>
                    <li>Register</li>
               </ul>
          </div>
     </div>
</section>
<section class="register_section sec_ptb_100 clearfix">
     <div class="container">
          <div class="register_card mb-0" data-bg-color="##F2F2F2" data-aos="fade-up" data-aos-delay="100">
               <div class="section_title mb_30 text-center">
                    <h2 class="title_text mb-0" data-aos="fade-up" data-aos-delay="300"><span>Register</span>
                    </h2>
               </div>
               <form action="#">
                    <div class="row justify-content-lg-between">
                         <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" data-aos="fade-up" data-aos-delay="500">
                              <div class="form_item"><input type="text" name="name" placeholder="Your Name*">
                              </div>
                              <div class="form_item"><input type="email" name="email" placeholder="Your Email*"></div>
                              <div class="form_item"><input type="password" name="password" placeholder="Password*"></div>
                              <div class="form_item"><input type="password" name="confirmpass" placeholder="Confirm Password*"></div>
                              <div class="form_item"><input type="tel" name="Phone" placeholder="Phone Number*"></div>
                         </div>
                         <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" data-aos="fade-up" data-aos-delay="700">
                              <div class="form_item">
                                   <h4 class="input_icon">Select Car Type</h4><select>
                                        <option data-display="Choose Payment Details">Select Your Option
                                        </option>
                                        <option value="1">Some option</option>
                                        <option value="2">Another option</option>
                                        <option value="3" disabled="disabled">A disabled option</option>
                                        <option value="4">Potato</option>
                                   </select>
                              </div>
                              <div class="form_item"><input type="text" name="country" placeholder="Country*">
                              </div>
                              <div class="form_item"><input type="text" name="address" placeholder="Billing Address*"></div>
                              <p>Your personal data will be used in mapping with the vehicles you added to the
                                   website, to manage access to your account, and for other purposes described
                                   in our</p><button type="submit" class="custom_btn bg_default_red text-uppercase mb-0">Login <img src="assets/images/icons/icon_01.png" alt="icon_not_found"></button>
                         </div>
                    </div>
               </form>
          </div>
     </div>
</section>
<?= $this->endSection() ?>
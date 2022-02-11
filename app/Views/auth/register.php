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
               <form action="<?= site_url('register') ?>" method="post" enctype="multipart/form-data">
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
                    <div class="row justify-content-lg-between">
                         <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" data-aos="fade-up" data-aos-delay="500">
                              <div class="form_item">
                                   <input type="text" name="name" value="<?= old('name') ?>" placeholder="Your Name*" required>
                              </div>
                              <div class="form_item">
                                   <input type="email" name="email" placeholder="Your Email*" required>
                              </div>
                              <div class="form_item">
                                   <input type="tel" name="phone_no" placeholder="Phone Number*" required>
                              </div>
                              <div class="form_item">
                                   <input type="file" name="profile_image" class="form-control" id="profile_image">
                              </div>
                         </div>
                         <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" data-aos="fade-up" data-aos-delay="700">
                              <div class="form_item">
                                   <input type="password" name="password" placeholder="Password*">
                              </div>
                              <div class="form_item">
                                   <input type="password" name="password_confirm" placeholder="Confirm Password*">
                              </div>
                              <button type="submit" class="custom_btn bg_default_red text-uppercase mb-0">Register <img src="<?= base_url('front') ?>/images/icons/icon_01.png" alt="icon_not_found"></button>
                         </div>
                    </div>
               </form>
          </div>
     </div>
</section>
<?= $this->endSection() ?>
<?= $this->extend("front/layouts/app") ?>

<?= $this->section("pageTitle") ?>
Login
<?= $this->endSection() ?>
<?= $this->section("content") ?>
<section class="breadcrumb_section text-center clearfix">
     <div class="page_title_area has_overlay d-flex align-items-center clearfix" data-bg-image="<?= base_url('front') ?>/images/breadcrumb/bg_09.jpg">
          <div class="overlay"></div>
          <div class="container" data-aos="fade-up" data-aos-delay="100">
               <h1 class="page_title text-white mb-0">Login</h1>
          </div>
     </div>
     <div class="breadcrumb_nav clearfix" data-bg-color="#F2F2F2">
          <div class="container">
               <ul class="ul_li clearfix">
                    <li><a href="<?= base_url() ?>">Home</a></li>
                    <li>Login</li>
               </ul>
          </div>
     </div>
</section>

<section class="register_section sec_ptb_100 clearfix">
     <div class="container">
          <div class="register_card mb_60" data-bg-color="##F2F2F2" data-aos="fade-up" data-aos-delay="100">
               <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                         <div class="reg_image" data-aos="fade-up" data-aos-delay="300"><img src="<?= base_url('front') ?>/images/about/img_03.jpg" alt="image_not_found"></div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                         <div class="reg_form" data-aos="fade-up" data-aos-delay="500">
                              <div class="card card-outline card-primary">
                                   <div class="card-header text-center">
                                        <div class="section_title mb_30 text-center">
                                             <h2 class="title_text mb-0" data-aos="fade-up" data-aos-delay="300"><span>Login</span>
                                             </h2>
                                        </div>
                                   </div>
                                   <div class="card-body">
                                        <p class="login-box-msg">Sign in to start your session</p>
                                        <?php if (isset($validation)) : ?>
                                             <div class="col-12">
                                                  <div class="alert alert-danger" role="alert">
                                                       <?= $validation->listErrors() ?>
                                                  </div>
                                             </div>
                                        <?php endif; ?>
                                        <form action="<?= base_url('login') ?>" method="post">
                                             <div class="input-group mb-3">
                                                  <input type="email" class="form-control" name="email" id="email" value="<?= old('email'); ?>" placeholder="Email">
                                                  <div class="input-group-append">
                                                       <div class="input-group-text">
                                                            <span class="fas fa-envelope"></span>
                                                       </div>
                                                  </div>
                                             </div>
                                             <div class="input-group mb-3">
                                                  <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                                                  <div class="input-group-append">
                                                       <div class="input-group-text">
                                                            <span class="fas fa-lock"></span>
                                                       </div>
                                                  </div>
                                             </div>
                                             <div class="row">
                                                  <div class="col-8">
                                                       <div class="icheck-primary">
                                                            <input type="checkbox" id="remember">
                                                            <label for="remember">
                                                                 Remember Me
                                                            </label>
                                                       </div>
                                                  </div>
                                                  <!-- /.col -->
                                                  <div class="col">
                                                       <button type="submit" class="custom_btn bg_default_red text-uppercase mb-0">Sign In</button>
                                                  </div>
                                                  <!-- /.col -->
                                             </div>
                                        </form>

                                        <p class="mb-0">
                                             <a href="<?= base_url('register') ?>" class="text-center">Register a new membership</a>
                                        </p>
                                   </div>
                                   <!-- /.card-body -->
                              </div>

                         </div>
                    </div>
               </div>
          </div>
     </div>
</section>
<?= $this->endSection() ?>
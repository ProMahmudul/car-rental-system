<?= $this->extend("front/layouts/app") ?>

<?= $this->section("pageTitle") ?>
My Account
<?= $this->endSection() ?>

<?= $this->section("content") ?>
<section class="breadcrumb_section text-center clearfix">
     <div class="page_title_area has_overlay d-flex align-items-center clearfix" data-bg-image="assets/images/breadcrumb/bg_10.jpg">
          <div class="overlay"></div>
          <div class="container" data-aos="fade-up" data-aos-delay="100">
               <h1 class="page_title text-white mb-0">My Account</h1>
          </div>
     </div>
     <div class="breadcrumb_nav clearfix" data-bg-color="#F2F2F2">
          <div class="container">
               <ul class="ul_li clearfix">
                    <li><a href="index.html">Home</a></li>
                    <li>Account</li>
               </ul>
          </div>
     </div>
</section>
<section class="account_section sec_ptb_100 clearfix">
     <div class="container">
          <div class="row justify-content-lg-between justify-content-md-center justify-content-sm-center">
               <div class="col-lg-4 col-md-8 col-sm-10 col-xs-12">
                    <div class="account_tabs_menu clearfix" data-bg-color="#F2F2F2" data-aos="fade-up" data-aos-delay="100">
                         <h3 class="list_title mb_15">Account Details:</h3>
                         <ul class="ul_li_block nav" role="tablist">
                              <li><a class="active" data-toggle="tab" href="#admin_tab"><i class="fas fa-user"></i><?= session()->get('name') ?></a></li>
                              <li><a href="<?= base_url('logout') ?>"><i class="fas fa-sign-out-alt"></i> Log Out <img class="arrow" src="<?= base_url('front') ?>/images/icons/icon_02.png" alt="icon_not_found"></a></li>
                              <li><a data-toggle="tab" href="#history_tab"><i class="fas fa-file-alt"></i>
                                        Booking History</a></li>
                         </ul>
                    </div>
               </div>
               <div class="col-lg-8 col-md-8 col-sm-10 col-xs-12">
                    <div class="account_tab_content tab-content">
                         <div id="admin_tab" class="tab-pane active">
                              <div class="account_info_list" data-aos="fade-up" data-aos-delay="100">
                                   <h3 class="list_title mb_30">Account:</h3>
                                   <ul class="ul_li_block clearfix">
                                        <li><span>Name:</span> <?= session()->get('name') ?></li>
                                        <li><span>E-mail:</span> <a href="emailto:<?= session()->get('email') ?>" class="__cf_email__"><?= session()->get('email') ?></a>
                                        </li>
                                        <li><span>Phone Number:</span><?= session()->get('phone_no') ?></li>
                                   </ul><a class="text_btn text-uppercase" href="#!"><span>Change Account
                                             Information</span> <img src="<?= base_url('front') ?>/images/icons/icon_02.png" alt="icon_not_found"></a>
                              </div>
                         </div>
                         <div id="history_tab" class="tab-pane fade">
                              <div class="account_info_list" data-aos="fade-up" data-aos-delay="100">
                                   <h3 class="list_title mb_30">Booking History:</h3>
                                   <ul class="ul_li_block clearfix">
                                        <li>
                                             <span>Upcoming Reservations:</span>
                                             <table class="table table-bordered">
                                                  <thead>
                                                       <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">Booking No.</th>
                                                            <th scope="col">Car</th>
                                                            <th scope="col">Status</th>
                                                       </tr>
                                                  </thead>
                                                  <tbody>
                                                       <?php if ($pendingBookings) : ?>
                                                            <?php foreach ($pendingBookings as $key => $booking) : ?>
                                                                 <tr>
                                                                      <th scope="row"><?= ++$key ?></th>
                                                                      <td><?= $booking->booking_no ?></td>
                                                                      <td><?= $booking->title ?></td>
                                                                      <td><?= $booking->status ?></td>
                                                                 </tr>
                                                            <?php endforeach; ?>
                                                       <?php endif; ?>
                                                  </tbody>
                                             </table>
                                        </li>
                                        <li>
                                             <span>Past Rentals:</span>
                                             <table class="table table-bordered">
                                                  <thead>
                                                       <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">Booking No.</th>
                                                            <th scope="col">Car</th>
                                                            <th scope="col">Status</th>
                                                       </tr>
                                                  </thead>
                                                  <tbody>
                                                       <?php if ($acceptBookings) : ?>
                                                            <?php foreach ($acceptBookings as $key => $booking) : ?>
                                                                 <tr>
                                                                      <th scope="row"><?= ++$key ?></th>
                                                                      <td><?= $booking->booking_no ?></td>
                                                                      <td><?= $booking->title ?></td>
                                                                      <td><?= $booking->status ?></td>
                                                                 </tr>
                                                            <?php endforeach; ?>
                                                       <?php endif; ?>
                                                  </tbody>
                                             </table>
                                        </li>

                                   </ul><a class="text_btn text-uppercase" href="<?= base_url('our-cars') ?>"><span>Book A Car</span>
                                        <img src="<?= base_url('front') ?>/images/icons/icon_02.png" alt="icon_not_found"></a>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </div>
</section>
<?= $this->endSection() ?>
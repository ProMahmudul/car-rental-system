<?= $this->extend("front/layouts/app") ?>

<?= $this->section("pageTitle") ?>
Our Cars
<?= $this->endSection() ?>

<?= $this->section("content") ?>
<section class="breadcrumb_section text-center clearfix">
     <div class="page_title_area has_overlay d-flex align-items-center clearfix" data-bg-image="<?= base_url() ?>/front/images/breadcrumb/bg_13.jpg">
          <div class="overlay"></div>
          <div class="container" data-aos="fade-up" data-aos-delay="100">
               <h1 class="page_title text-white mb-0">Gallery</h1>
          </div>
     </div>
     <div class="breadcrumb_nav clearfix" data-bg-color="#F2F2F2">
          <div class="container">
               <ul class="ul_li clearfix">
                    <li><a href="<?= base_url() ?>">Home</a></li>
                    <li>Pages</li>
                    <li>Our Cars</li>
               </ul>
          </div>
     </div>
</section>
<section class="gallery_section sec_ptb_100 clearfix">
     <div class="container">
          <div class="row justify-content-center">
               <div class="col-lg-6 col-md-8 col-sm-10 col-xs-12">
                    <div class="section_title mb_60 text-center" data-aos="fade-up" data-aos-delay="100">
                         <h2 class="title_text mb_15"><span>Our Featured Cars</span></h2>
                         <p class="mb-0">Mauris cursus quis lorem sed cursus. Aenean aliquam pellentesque
                              magna, ut dictum ex pellentesque</p>
                    </div>
               </div>
          </div>
          <div class="feature_vehicle_filter mb-0 element-grid clearfix">
               <?php if ($cars) : ?>
                    <?php foreach ($cars as $car) : ?>
                         <div class="element-item sedan" data-category="sedan">
                              <div class="feature_vehicle_item" data-aos="fade-up" data-aos-delay="100">
                                   <h3 class="item_title mb-0"><a href="<?= base_url('car-details/'.$car['id']) ?>"><?= $car['title'] ?></a>
                                   </h3>
                                   <div class="item_image position-relative"><a class="image_wrap" href="<?= base_url('car-details/'.$car['id']) ?>"><img src="<?= base_url() ?><?= $car['image'] ?>" alt="<?= $car['title'] ?>">
                                        </a><span class="item_price bg_default_blue">Tk.<?= $car['price_per_day'] ?>/Day</span></div>
                              </div>
                         </div>
                    <?php endforeach; ?>
               <?php endif; ?>
          </div>
          <div class="pagination_wrap clearfix">
               <div class="row align-items-center justify-content-lg-between">
                    <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                         <?php if ($pager) : ?>
                              <?php $pagi_path = 'admin/user'; ?>
                              <?php $pager->setPath($pagi_path); ?>
                              <?= $pager->links() ?>
                         <?php endif ?>
                    </div>
               </div>
          </div>
     </div>
</section>
<?= $this->endSection() ?>
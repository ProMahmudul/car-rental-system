<?= $this->extend("back/layouts/app") ?>

<?= $this->section("pageTitle") ?>
Create Car
<?= $this->endSection() ?>

<?= $this->section("pageHeaderTitle") ?>
Car
<?= $this->endSection() ?>

<?= $this->section("pageBreadcrumb") ?>
Create Car
<?= $this->endSection() ?>

<?= $this->section("content") ?>

<div class="content">
     <div class="container-fluid">
          <div class="row">
               <div class="col-12 card card-primary">

                    <!-- form start -->
                    <form action="<?= base_url('admin/car') ?>" method="post" enctype="multipart/form-data">
                         <div class="card-body">
                              <?php if (session()->get("success") || session()->get("error")) : ?>
                                   <div class="col-12">
                                        <div class="alert <?php session()->get("success") ? 'alert-success' : 'alert-danger' ?> " role="alert">
                                             <?= session()->get("success") ?? session()->get("error") ?>
                                        </div>
                                   </div>
                              <?php endif; ?>
                              <?php if (isset($validation)) : ?>
                                   <div class="col-12">
                                        <div class="alert alert-danger" role="alert">
                                             <?= $validation->listErrors() ?>
                                        </div>
                                   </div>
                              <?php endif; ?>
                              <?php
                              if (session()->get("success")) {
                              ?>
                                   <h3><?= session()->get("success") ?></h3>
                              <?php
                              }
                              if (session()->get("error")) {
                              ?>
                                   <h3><?= session()->get("error") ?></h3>
                              <?php
                              }
                              ?>
                              <div class="row">
                                   <div class="col-sm-6">
                                        <div class="form-group">
                                             <label for="title">Title</label>
                                             <input type="text" name="title" class="form-control" id="title" value="<?= old('title') ?>" placeholder="Enter title" required>
                                        </div>
                                   </div>
                                   <div class="col-sm-6">
                                        <div class="form-group">
                                             <label for="brand">Brand</label>
                                             <input type="text" name="brand" class="form-control" id="brand" placeholder="Enter brand" required>
                                        </div>
                                   </div>
                              </div>
                              <div class="row">
                                   <div class="col-sm-6">
                                        <div class="form-group">
                                             <label for="price_per_day">Price Per Day</label>
                                             <input type="text" name="price_per_day" class="form-control" id="price_per_day" placeholder="Enter price" required>
                                        </div>
                                   </div>
                                   <div class="col-sm-6">
                                        <div class="form-group">
                                             <label for="image">Profile Image</label>
                                             <div class="input-group">
                                                  <div class="custom-file">
                                                       <input type="file" name="image" class="form-control" id="image" required>
                                                  </div>

                                             </div>
                                        </div>
                                   </div>
                              </div>
                              <div class="row">
                                   <div class="col">
                                        <div class="form-group">
                                             <label for="description">Description</label>
                                             <textarea name="description" class="form-control" id="description" cols="30" rows="3" placeholder="Enter description" required></textarea>
                                        </div>
                                   </div>
                              </div>
                              <div class="form-group mt-4">
                                   <button type="submit" class="btn btn-primary">Submit</button>
                              </div>
                         </div>
                         <!-- /.card-body -->

                    </form>
               </div>
          </div>
          <!-- /.row -->
     </div><!-- /.container-fluid -->
</div>

<?= $this->endSection() ?>
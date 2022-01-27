<?= $this->extend("back/layouts/app") ?>

<?= $this->section("pageTitle") ?>
Create User
<?= $this->endSection() ?>

<?= $this->section("pageHeaderTitle") ?>
User
<?= $this->endSection() ?>

<?= $this->section("pageBreadcrumb") ?>
Create User
<?= $this->endSection() ?>

<?= $this->section("content") ?>

<div class="content">
     <div class="container-fluid">
          <div class="row">
               <div class="col-12 card card-primary">

                    <!-- form start -->
                    <form action="<?= site_url('admin/user') ?>" method="post" enctype="multipart/form-data">
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
                                             <label for="name">Email address</label>
                                             <input type="text" name="name" class="form-control" id="name" value="<?= old('name') ?>" placeholder="Enter name">
                                        </div>
                                   </div>
                                   <div class="col-sm-6">
                                        <div class="form-group">
                                             <label for="email">Email address</label>
                                             <input type="email" name="email" class="form-control" id="email" placeholder="Enter email">
                                        </div>
                                   </div>
                              </div>
                              <div class="row">
                                   <div class="col-sm-6">
                                        <div class="form-group">
                                             <label for="phone_no">Phone</label>
                                             <input type="text" name="phone_no" class="form-control" id="phone_no" placeholder="Enter phone no">
                                        </div>
                                   </div>
                                   <div class="col-sm-6">
                                        <div class="form-group">
                                             <label>Role</label>
                                             <select class="form-control" name="role">
                                                  <option value="">Select</option>
                                                  <option value="admin">Admin</option>
                                                  <option value="customer">Customer</option>
                                             </select>
                                        </div>
                                   </div>
                              </div>
                              <div class="row">
                                   <div class="col-sm-6">
                                        <div class="form-group">
                                             <label for="password">Password</label>
                                             <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                                        </div>
                                   </div>
                                   <div class="col-sm-6">
                                        <div class="form-group">
                                             <label for="password_confirm">Confirm Password</label>
                                             <input type="password" name="password_confirm" class="form-control" id="password_confirm" placeholder="Password Confirmation">
                                        </div>
                                   </div>
                              </div>
                              <div class="form-group">
                                   <label for="profile_image">Profile Image</label>
                                   <div class="input-group">
                                        <div class="custom-file">
                                             <input type="file" name="profile_image" class="form-control" id="profile_image">
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
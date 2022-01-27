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
               <div class="col-12 card">
                    <table class="table table-bordered">
                         <thead>
                              <tr>
                                   <th style="width: 10px">Id</th>
                                   <th>Image</th>
                                   <th>Name</th>
                                   <th>Email</th>
                                   <th>Phone</th>
                                   <th>Role</th>
                                   <th>Actions</th>
                              </tr>
                         </thead>
                         <tbody>
                              <?php if (!empty($users) && is_array($users)) : ?>
                                   <?php foreach ($users as $key => $user) : ?>
                                        <tr>
                                             <td><?= ++$key ?></td>
                                             <td><img width="50" src="<?= base_url() . $user['profile_image'] ?>" alt=""></td>
                                             <td><?= $user['name'] ?></td>
                                             <td><?= $user['email'] ?></td>
                                             <td><?= $user['phone_no'] ?></td>
                                             <td><?= $user['role'] ?></td>
                                             <td>
                                                  <a class="btn btn-primary btn-sm" href="#">
                                                       <i class="fas fa-eye">
                                                       </i>
                                                  </a>
                                                  <a class="btn btn-info btn-sm" href="#">
                                                       <i class="fas fa-pencil-alt">
                                                       </i>
                                                  </a>
                                                  <a class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete?');" href="<?php echo base_url("user/delete/" . $user['id']); ?>">
                                                       <i class="fas fa-trash">
                                                       </i>
                                                  </a>
                                             </td>
                                        </tr>
                                   <?php endforeach; ?>
                              <?php else : ?>
                                   <h3>No Users</h3>
                                   <p>Unable to find any users for you.</p>
                              <?php endif ?>
                         </tbody>
                    </table>
                    <!-- Pagination -->
                    <div class="d-flex justify-content-center">
                         <?php if ($pager) : ?>
                              <?php $pagi_path = 'admin/user'; ?>
                              <?php $pager->setPath($pagi_path); ?>
                              <?= $pager->links() ?>
                         <?php endif ?>
                    </div>
               </div>
          </div>
          <!-- /.row -->
     </div><!-- /.container-fluid -->
</div>

<?= $this->endSection() ?>
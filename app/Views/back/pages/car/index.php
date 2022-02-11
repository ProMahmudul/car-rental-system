<?= $this->extend("back/layouts/app") ?>

<?= $this->section("pageTitle") ?>
Cars
<?= $this->endSection() ?>

<?= $this->section("pageHeaderTitle") ?>
Cars
<?= $this->endSection() ?>

<?= $this->section("pageBreadcrumb") ?>
Manage Car
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
                                   <th>Title</th>
                                   <th>Brand</th>
                                   <th>Price Per Day</th>
                                   <th>Description</th>
                                   <th>Actions</th>
                              </tr>
                         </thead>
                         <tbody>
                              <?php if (!empty($cars) && is_array($cars)) : ?>
                                   <?php foreach ($cars as $key => $car) : ?>
                                        <tr>
                                             <td><?= ++$key ?></td>
                                             <td><img width="50" src="<?= base_url() . $car['image'] ?>" alt=""></td>
                                             <td><?= $car['title'] ?></td>
                                             <td><?= $car['brand'] ?></td>
                                             <td>Tk.<?= $car['price_per_day'] ?></td>
                                             <td><?= substr($car['description'],0, 100) . "..." ?></td>
                                             <td>
                                                  <a class="btn btn-primary btn-sm" href="#">
                                                       <i class="fas fa-eye">
                                                       </i>
                                                  </a>
                                                  <a class="btn btn-info btn-sm" href="#">
                                                       <i class="fas fa-pencil-alt">
                                                       </i>
                                                  </a>
                                                  <a class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete?');" href="<?php echo base_url("car/delete/" . $car['id']); ?>">
                                                       <i class="fas fa-trash">
                                                       </i>
                                                  </a>
                                             </td>
                                        </tr>
                                   <?php endforeach; ?>
                              <?php else : ?>
                                   <h3>No Cars</h3>
                                   <p>Unable to find any cars for you.</p>
                              <?php endif ?>
                         </tbody>
                    </table>
                    <!-- Pagination -->
                    <div class="d-flex justify-content-center">
                         <?php if ($pager) : ?>
                              <?php $pagi_path = 'admin/car'; ?>
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
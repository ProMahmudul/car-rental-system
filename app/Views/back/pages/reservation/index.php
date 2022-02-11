<?= $this->extend("back/layouts/app") ?>

<?= $this->section("pageTitle") ?>
Reservations
<?= $this->endSection() ?>

<?= $this->section("pageHeaderTitle") ?>
Reservations
<?= $this->endSection() ?>

<?= $this->section("pageBreadcrumb") ?>
Manage Reservations
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
                                   <th>Booking No</th>
                                   <th>Car</th>
                                   <th>Customer</th>
                                   <th>Pick Date</th>
                                   <th>Drop Date</th>
                                   <th>Pick Location</th>
                                   <th>Drop Location</th>
                                   <th>Status</th>
                                   <th>Actions</th>
                              </tr>
                         </thead>
                         <tbody>
                              <?php if (!empty($bookings)) : ?>
                                   <?php foreach ($bookings as $key => $booking) : ?>
                                        <tr>
                                             <td><?= ++$key ?></td>
                                             <td><?= $booking->booking_no ?></td>
                                             <td><?= $booking->title ?></td>
                                             <td><?= $booking->name." - ".$booking->phone_no ?></td>
                                             <td><?= $booking->from_date ?></td>
                                             <td><?= $booking->to_date ?></td>
                                             <td><?= $booking->from_area ?></td>
                                             <td><?= $booking->to_area ?></td>
                                             <td><?= $booking->status ?></td>
                                             <td>
                                                  <a class="btn btn-primary btn-sm" href="<?= base_url('admin/reservations/status/'. $booking->id) ?>">
                                                       <i class="fas fa-eye">
                                                       </i>
                                                  </a>
                                             </td>
                                        </tr>
                                   <?php endforeach; ?>
                              <?php else : ?>
                                   <h3>No Reservations or Bookings</h3>
                                   <p>Unable to find any bookings for you.</p>
                              <?php endif ?>
                         </tbody>
                    </table>

               </div>
          </div>
          <!-- /.row -->
     </div><!-- /.container-fluid -->
</div>

<?= $this->endSection() ?>
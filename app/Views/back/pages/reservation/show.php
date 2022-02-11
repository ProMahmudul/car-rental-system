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
                         <tbody>
                              <form action="<?= base_url('admin/reservations/status') ?>" method="post">
                                   <?php foreach ($bookings as $key => $booking) : ?>
                                        <tr>
                                             <th>Booking No</th>
                                             <td><?= $booking->booking_no ?></td>
                                        </tr>
                                        <tr>
                                             <th>Car</th>
                                             <td><?= $booking->title ?></td>
                                        </tr>
                                        <tr>
                                             <th>Customer</th>
                                             <td><?= $booking->name . " - " . $booking->phone_no ?></td>
                                        </tr>
                                        <tr>
                                             <th>Pick Date</th>
                                             <td><?= $booking->from_date ?></td>
                                        </tr>
                                        <tr>
                                             <th>Drop Date</th>
                                             <td><?= $booking->to_date ?></td>
                                        </tr>
                                        <tr>
                                             <th>Pick Location</th>
                                             <td><?= $booking->from_area ?></td>
                                        </tr>
                                        <tr>
                                             <th>Drop Location</th>
                                             <td><?= $booking->to_area ?></td>
                                        </tr>
                                        <tr>
                                             <th>Status</th>
                                             <td>
                                                  <select name="status" id="status" class="form-control" required>
                                                       <option value="pending" <?= $booking->status == "pending" ? "selected" : "" ?>>Pending</option>
                                                       <option value="accept" <?= $booking->status == "accept" ? "selected" : "" ?>>Accept</option>
                                                       <option value="reject" <?= $booking->status == "reject" ? "selected" : "" ?>>Reject</option>
                                                  </select>
                                             </td>
                                        </tr>
                                        <tr>
                                             <td colspan="2">
                                                  <input type="submit" class="btn btn-primary">
                                             </td>
                                        </tr>
                                   <?php endforeach; ?>
                              </form>
                         </tbody>
                    </table>

               </div>
          </div>
          <!-- /.row -->
     </div><!-- /.container-fluid -->
</div>

<?= $this->endSection() ?>
<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title><?= $this->renderSection("pageTitle") ?> | Car Rental System</title>

     <!-- Google Font: Source Sans Pro -->
     <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
     <!-- Font Awesome Icons -->
     <link rel="stylesheet" href="<?= base_url('back/plugins/fontawesome-free/css/all.min.css') ?>">
     <!-- Theme style -->
     <link rel="stylesheet" href="<?= base_url('back/css/adminlte.min.css') ?>">
     <!-- Custom styles -->
     <?= $this->renderSection("styles"); ?>
</head>

<body class="hold-transition sidebar-mini">
     <div class="wrapper">

          <!-- Main Header -->
          <?= $this->include("back/include/header") ?>
          <!-- /.Main Header -->

          <!-- Content Wrapper. Contains page content -->
          <div class="content-wrapper">
               <!-- Content Header (Page header) -->
               <div class="content-header">
                    <div class="container-fluid">
                         <div class="row mb-2">
                              <div class="col-sm-6">
                                   <h1 class="m-0"><?= $this->renderSection("pageHeaderTitle"); ?></h1>
                              </div><!-- /.col -->
                              <div class="col-sm-6">
                                   <ol class="breadcrumb float-sm-right">
                                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                        <li class="breadcrumb-item active"><?= $this->renderSection("pageBreadcrumb"); ?></li>
                                   </ol>
                              </div><!-- /.col -->
                         </div><!-- /.row -->
                    </div><!-- /.container-fluid -->
               </div>
               <!-- /.content-header -->

               <!-- Main content -->
               <?= $this->renderSection("content") ?>
               <!-- /.content -->
          </div>
          <!-- /.content-wrapper -->

          <!-- Main Footer -->
          <?= $this->include("back/include/footer") ?>
     </div>
     <!-- ./wrapper -->

     <!-- REQUIRED SCRIPTS -->

     <!-- jQuery -->
     <script src="<?= base_url('back/plugins/jquery/jquery.min.js') ?>"></script>
     <!-- Bootstrap 4 -->
     <script src="<?= base_url('back/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
     <!-- AdminLTE App -->
     <script src="<?= base_url('back/js/adminlte.min.js') ?>"></script>
     <!-- Custom Scripts -->
     <?= $this->renderSection("scripts"); ?>
</body>

</html>
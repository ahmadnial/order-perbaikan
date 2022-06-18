<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Form Order Perbaikan Digital</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="dashboard/plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="dashboard/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="dashboard/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="dashboard/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dashboard/dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">Contact</a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <li class="nav-item">
          <a class="nav-link" data-widget="navbar-search" href="#" role="button">
            <i class="fas fa-search"></i>
          </a>
          <div class="navbar-search-block">
            <form class="form-inline">
              <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                  <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                  <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="" class="brand-link">
        <img src="" alt="" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Form Order Digital</span>
      </a>


      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="dashboard/dist/img/women.jpg" class="img-circle elevation-2" alt="">
          </div>
          <div class="info">
            <a href="#" class="d-block">Hello!</a>
          </div>
        </div>

        <!-- SidebarSearch Form -->
        <!-- <div class="form-inline">
          <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
              </button>
            </div>
          </div>
        </div> -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <li class="nav-item">
                <a href="index.php" class="nav-link">
                  <i class="nav-icon fas fa-clipboard-list"></i>
                  <p>
                    Form Pelaporan
                    <span class="right badge badge-danger"></span>
                  </p>
                </a>
              </li>
            </ul>
            <li class="nav-item">
              <a href="rekap-pelaporan.php" class="nav-link">
                <i class="nav-icon fas fa-list-alt"></i>
                <p>
                  Respon Pelaporan
                  <span class="right badge badge-danger"></span>
                </p>
              </a>
            </li>
          </ul>

        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Respon Pelaporan</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Soon</a></li>
                <li class="breadcrumb-item active">Soon</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">

              <!-- /.card-header -->
              <div class="card">
                <div class="card-header bg-primary">
                  <h3 class="card-title">Rekap Pelaporan Respon Unit</h3>
                </div>
                <!-- /.card-header -->

                <div class="card-body">
                  <form action="" method="post">
                    <!-- <div class="form-gruop mb-3">
                      <div class="form-inline">
                        <input type="date" class="form-control  mr-1" name="start" value="" />
                        <a>s/d</a>
                        <input type="date" class="form-control ml-1" name="end" value="" />
                        <button type="submit" name="cari" class="btn btn-primary ml-3">Search</button>
                      </div>
                    </div> -->
                    <div class="form-gruop mb-3 col-5">
                      <label for="" class="form-label">Pilih Layanan/Unit/Instalasi</label>
                      <div class="form-inline">
                        <select class="custom-select" name="lokasi" required>
                          <option selected>--Choose--</option>
                          <option value="IGD">IGD</option>
                          <option value="Radiologi">Radiologi</option>
                          <option value="Laboratorium">Laboratorium</option>
                          <option value="RJ Penyakit Dalam">RJ Penyakit Dalam</option>
                          <option value="RJ Syaraf">RJ Syaraf</option>
                          <option value="RJ Bedah">RJ Bedah</option>
                          <option value="RJ Anak">RJ Anak</option>
                          <option value="RJ Poli Umum">RJ Poli Umum</option>
                          <option value="RJ Obsgyn">RJ Obsgyn</option>
                          <option value="Rekam Medis">Rekam Medis</option>

                        </select>
                        <button type="submit" name="cari" class="btn btn-primary ml-3">Search</button>
                      </div>
                    </div>
                  </form>
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>No</th>
                        <!-- <th>kode laporan</th> -->
                        <th>Tanggal</th>
                        <th>Kendala/Bug Report/Error</th>
                        <th>Modul / Menu</th>
                        <th>Layanan / Lokasi Unit / Ins.</th>
                        <th>Note</th>
                        <th>Status/Respon</th>
                        <!-- <th>Input Status</th> -->

                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      include "conn.php";

                      if (isset($_POST['cari'])) {
                        $layanan = $_POST['lokasi'];

                        $sql = " SELECT * FROM xxx where layanan='$layanan' ";
                        $no = 1;
                        $query = sqlsrv_query($conn, $sql) or die(sqlsrv_errors());;
                        while ($data = sqlsrv_fetch_array($query)) {
                      ?>
                          <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $data['tanggal']; ?></td>
                            <td><?php echo $data['kendala']; ?></td>
                            <td><?php echo $data['modul']; ?></td>
                            <td><?php echo $data['layanan']; ?></td>
                            <td><?php echo $data['note']; ?></td>
                            <td><?php echo $data['status']; ?></td>
                            <!-- <td>
                              <button type="button" class="btn-sm btn-info" data-toggle="modal" data-target="#myModal1<?php echo $data['id']; ?>">Input Status</button>
                            </td> -->
                          </tr>
                        <?php } ?>
                      <?php } ?>
                      <?php include 'inputstatus.php'; ?>
                      </tfoot>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <div class="float-right d-none d-sm-block">
        <b></b>
      </div>
      <strong>Copyright &copy; 2022 <a href="">IT-RSNR</a>.</strong> All rights reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="dashboard/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="dashboard/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- DataTables  & Plugins -->
  <script src="dashboard/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="dashboard/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="dashboard/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="dashboard/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="dashboard/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="dashboard/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <script src="dashboard/plugins/jszip/jszip.min.js"></script>
  <script src="dashboard/plugins/pdfmake/pdfmake.min.js"></script>
  <script src="dashboard/plugins/pdfmake/vfs_fonts.js"></script>
  <script src="dashboard/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="dashboard/plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="dashboard/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dashboard/dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="../../dist/js/demo.js"></script>
  <!-- Page specific script -->
  <script>
    $(function() {
      $("#example1").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        // "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>
</body>

</html>
<?php
    include_once 'db_connection.php';
    $admissionRequestListQuery = "SELECT * FROM admission_requests";
    // var_dump($admissionRequestListQuery);
    $result = mysqli_query($connection, $admissionRequestListQuery);
    $rowNumber = mysqli_num_rows($result);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SET2020 | Admission Requests</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../theme/backend/AdminLTE/plugins/fontawesome-free/css/all.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="../theme/backend/AdminLTE/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../theme/backend/AdminLTE/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="../theme/backend/AdminLTE/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../theme/backend/AdminLTE/dist/css/adminlte.min.css">

</head>
<body class="hold-transition sidebar-mini layout-fixed">

<div class="wrapper">

    <!-- Preloader -->
    <?php require_once("../backend/layout/partials/preloader.php") ?>
    <!-- /.Preloader -->

    <!-- Navbar -->
    <?php require_once("../backend/layout/navbar.php") ?>
    <!-- /.navbar -->

    <!-- Sidebar -->
    <?php require_once("../backend/layout/sidebar.php") ?>
    <!-- /.Sidebar -->

    <!-- Content Wrapper. Contains Page Contents -->
    <div class="content-wrapper">

        <!-- Content Header (Page Header) -->
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0">Admission Requests</h1>
              </div><!-- /.col -->
            </div><!-- /.row -->
          </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <!-- Container Fluid -->
            <div class="container-fluid">
                <!-- Main row -->
                <div class="row">
                    <section class="col-sm-12">
                        <div class="card">
                          <div class="card-header">
                            <h3 class="card-title">Admission Requests</h3>
                          </div>
                          <!-- /.card-header -->
                          <div class="card-body">

                            <table id="admission" class="table table-bordered table-striped">
                              <thead>
                                <tr>
                                <th>Name</th>
                                <th>Mobile</th>
                                <th>Email</th>
                                <th>Education</th>
                                <th>District</th>
                                <th>Trade Name</th>
                                <th>Apply Date</th>
                                <th class="text-center">Actions</th>
                              </tr>
                              </thead>
                              <tbody>

                                  <?php
                                  // if ($rowNumber > 0) {
                                   ?>

                              <tr>
                                <td><a href="#">Shahlal Hossain</a></td>
                                <td>01731479874</td>
                                <td>shahlal@gmail.com</td>
                                <td>Masters</td>
                                <td>Rajshahi</td>
                                <td>Software Development</td>
                                <td>2021-10-05</td>
                                <td class="text-center">
                                    <button type="button" class="btn btn-sm btn-success">Confirm</button>
                                    <button type="button" class="btn btn-sm btn-danger">Discard</button>
                                </td>
                              </tr>
                              </tbody>

                              <tfoot>
                              <tr>
                                  <th>Name</th>
                                  <th>Mobile</th>
                                  <th>Email</th>
                                  <th>Education</th>
                                  <th>District</th>
                                  <th>Trade Name</th>
                                  <th>Apply Date</th>
                                  <th class="text-center">Actions</th>
                              </tr>
                              </tfoot>

                            </table>
                          </div>
                          <!-- /.card-body -->
                        </div>
                    </section>
                </div>
                <!-- /.Main row) -->
            </div>
            <!-- /.Container-fluid -->
        </section>
        <!-- /.Main content -->
    </div>
    <!-- /.Content Wrapper -->

    <!-- Footer -->
    <?php require_once("../backend/layout/footer.php") ?>
    <!-- /.Footer -->
</div>
<!-- ./wrapper -->

<!-- JS Libraries -->
<?php // require_once("../backend/layout/partials/js.php") ?>
<!-- /. JS Libraries -->

<!-- jQuery -->
<script src="../theme/backend/AdminLTE/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../theme/backend/AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- DataTables  & Plugins -->
<script src="../theme/backend/AdminLTE/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../theme/backend/AdminLTE/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../theme/backend/AdminLTE/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../theme/backend/AdminLTE/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../theme/backend/AdminLTE/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../theme/backend/AdminLTE/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../theme/backend/AdminLTE/plugins/jszip/jszip.min.js"></script>
<script src="../theme/backend/AdminLTE/plugins/pdfmake/pdfmake.min.js"></script>
<script src="../theme/backend/AdminLTE/plugins/pdfmake/vfs_fonts.js"></script>
<script src="../theme/backend/AdminLTE/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../theme/backend/AdminLTE/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../theme/backend/AdminLTE/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="../theme/backend/AdminLTE/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../theme/backend/AdminLTE/dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#admission").DataTable({
      "responsive": true,
      "lengthChange": true,
      "autoWidth": false,
      "buttons": ["csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#admission_wrapper .col-md-6:eq(0)');
  });
</script>

</body>
</html>

<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url('assets/images/favicon.png')?>">
    <title>Dashboard</title>
    <link href="<?php echo base_url('assets/css/home-custom.css')?>" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url('assets/libs/flot/css/float-chart.css')?>" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url('assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('dist/css/style.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/home-custom.css')?>" rel="stylesheet">
</head>

<body>

<!--       <div class="card"> -->
        <div class="container-fluid" style="background-color: #fff">
          <br>
            <div class="row">
              <div class="col-md-4"><h3>List Piutang</h3></div>
              <div class="col-md-4 ml-auto text-right"><a class="btn btn-info col-md-3 btn-sm" href="<?php echo base_url('transaksi/create')?>" role="button">Tambah</a></div>
            </div>&nbsp;
            <div class="table-responsive">
                <table id="zero_config" class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">NIK</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Barang</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Angsuran 1</th>
                    <th scope="col">Angsuran 2</th>
                    <th scope="col">Angsuran 3</th>
                    <!-- <th scope="col">Keterangan</th> -->
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no = 1; ?>
                  <?php foreach ($transaksi as $key) { ?>

                  <tr>
                    <th scope="row"><?php echo $no; $no = $no+1;?></th>
                    <td><?php echo $key['nik'];?></td>
                    <td><?php echo $key['nama'];?></td>
                    <td><?php $newDate = date("d-m-Y", strtotime($key['tanggal']));
                    echo $newDate;?></td>
                    <td><?php echo $key['barang'];?></td>
                    <td><?php echo "Rp" . number_format($key['harga'],2,',','.');?></td>
                    <td><?php if($key['angsuran_1'] == NULL) {echo "Belum";}
                    else if($key['angsuran_1'] == 0) {echo "Lunas";} else echo "Rp" . number_format($key['angsuran_1'],2,',','.'); ?></td>
                    <td><?php if($key['angsuran_2'] == NULL) {echo "Belum";}
                    else if($key['angsuran_2'] == 0) {echo "Lunas";} else echo "Rp" . number_format($key['angsuran_2'],2,',','.'); ?></td>
                    <td><?php if($key['angsuran_3'] == NULL) {echo "Belum";}
                    else if($key['angsuran_3'] == 0) {echo "Lunas";} else echo "Rp" . number_format($key['angsuran_3'],2,',','.'); ?></td>
                    <!-- <td><?php echo $key['keterangan'];?></td> -->
                    <td>
                      <a class="btn btn-success" data-toggle="tooltip" data-placement="top" title="Ubah Status Angsuran" href="<?php echo base_url('transaksi/changestatus/'.$key['no_transaksi']); ?>" role="button"><i class="fas fa-check"></i></a>
                      <a class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Edit" href="<?php echo base_url('transaksi/edit/'.$key['no_transaksi']); ?>" role="button"><i class="fas fa-pencil-alt"></i></a>
                      <a class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Hapus" href="<?php echo base_url('transaksi/delete/'.$key['no_transaksi']); ?>" role="button"><i class="fas fa-trash-alt"></i></a>
                    </td>
                  </tr>
              <?php } ?>
                </tbody>
        </table>
      </div>    
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <br><br><br><br><br><br><br><br><br>
            <footer class="footer text-center">
                <div class="col-md-4 ml-auto text-right"><a class="btn btn-danger col-md-3 btn-sm" href="<?php echo base_url('dashboard/logout')?>" role="button">Keluar</a></div>
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="<?php echo base_url('assets/libs/jquery/dist/jquery.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap-rating-input.min.js')?>"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo base_url('assets/libs/popper.js/dist/umd/popper.min.js')?>"></script>
    <script src="<?php echo base_url('assets/libs/bootstrap/dist/js/bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js')?>"></script>
    <script src="<?php echo base_url('assets/extra-libs/sparkline/sparkline.js')?>"></script>
    <!--Wave Effects -->
    <script src="<?php echo base_url('dist/js/waves.js')?>"></script>
    <!--Menu sidebar -->
    <script src="<?php echo base_url('dist/js/sidebarmenu.js')?>"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo base_url('dist/js/custom.min.js')?>"></script>
    <!-- Charts js Files -->
    <script src="<?php echo base_url('assets/libs/flot/excanvas.js')?>"></script>
    <script src="<?php echo base_url('assets/libs/flot/jquery.flot.js')?>"></script>
    <script src="<?php echo base_url('assets/libs/flot/jquery.flot.pie.js')?>"></script>
    <script src="<?php echo base_url('assets/libs/flot/jquery.flot.time.js')?>"></script>
    <script src="<?php echo base_url('assets/libs/flot/jquery.flot.stack.js')?>"></script>
    <script src="<?php echo base_url('assets/libs/flot/jquery.flot.crosshair.js')?>"></script>
    <script src="<?php echo base_url('assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js')?>"></script>
    <script src="<?php echo base_url('dist/js/pages/chart/chart-page-init.js')?>"></script>
    <script src="<?php echo base_url('assets/extra-libs/multicheck/datatable-checkbox-init.js')?>"></script>
    <script src="<?php echo base_url('assets/extra-libs/multicheck/jquery.multicheck.js')?>"></script>
    <script src="<?php echo base_url('assets/extra-libs/DataTables/datatables.min.js')?>"></script>
    <script>
        /****************************************
         *       Basic Table                   *
         ****************************************/
        $('#zero_config').DataTable();
    </script>

</body>

</html>
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
    <title>Ubah Status Angsuran</title>
    
    <!-- Custom CSS -->
    <link href="<?php echo base_url('assets/libs/flot/css/float-chart.css')?>" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url('assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('dist/css/style.min.css')?>" rel="stylesheet">
</head>

<body style="background-color: #FFFFFF">
  <div class="row">
    <div class="col-md-12">
        <div class="card">
          <br>
          <div class="col-md-12" style="text-align: center; margin-left: 4%"><h3>Tambah Transaksi</h3></div>
            <?php echo form_open(base_url('transaksi/changestatus/'.$transaksi[0]['no_transaksi']), 'class="form-horizontal"' ); ?>
                <div class="card-body">
                    <div class="form-group row">
                        <label for="angsuran" class="col-sm-4 text-right control-label col-form-label">Angsuran</label>
                        <div class="col-sm-5">
                            <input type="radio" id="angsuran1" name="angsuran" value="1">
                            <label for="male">Angsuran 1</label><br>
                            <input type="radio" id="angsuran2" name="angsuran" value="2">
                            <label for="female">Angsuran 2</label><br>
                            <input type="radio" id="angsuran3" name="angsuran" value="3">
                            <label for="other">Angsuran 3</label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="sisa" class="col-sm-4 text-right control-label col-form-label">Sisa</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="sisa" name="sisa">
                        </div>
                    </div>
                    
                </div>
                <div class="border-top">
                    <div class="card-body" style="margin-left: 47%">
                        <button type="submit" value="masuk" name="submit" class="btn btn-primary">Tambah</button>
                        <a class="btn btn-secondary" href="<?php echo base_url('dashboard')?>" role="button">Batal</a>
                    </div>
                </div>
            <?php echo form_close(); ?> 
        </div>
    </div>
  </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="<?php echo base_url('assets/libs/jquery/dist/jquery.min.js')?>"></script>
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

</body>

</html>
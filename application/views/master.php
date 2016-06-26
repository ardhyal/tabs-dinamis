<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Tabs Dinamis CodeIgniter</title>

        <!-- Bootstrap -->
        <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
        <link href="<?php echo base_url('assets/css/dataTables.bootstrap.css'); ?>" rel="stylesheet">
        <link href="<?php echo base_url('assets/css/AdminLTE.min.css'); ?>" rel="stylesheet">


        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <!-- AWAL CONTENT  -- hapus dari sini kebawah (sampai AKHIR CONTENT) -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">Header</div>
                <div class="col-md-3">testing</div>
                <div class="col-md-9">
                    <h3 class="pagetesing-header">Master Data</h3>
                    <div class="col-md-12 form-group">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Nomer</th>
                                    <th>Menu</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($menu as $q): ?>
                                <tr>
                                    <td><?php echo $q->id ?></td>
                                    <td><?php echo $q->menu ?></td>
                                    <td><a href="<?php echo site_url('tabs/detail/'.$q->id); ?>">
                                            <button type="button" class="btn btn-default btn-xs"> view detail </button></a>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Nomer</th>
                                    <th>Menu</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
        <!-- AKHIR CONTENT - dari sini kebawah jgn dihapus -->
        <script src="<?php echo base_url('assets/js/jquery.dataTables.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/js/dataTables.bootstrap.min.js') ?>"></script>
        <script>
        $(function () {
          $("#example1").DataTable();
          $("#example2").DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false
            });
          });
        </script>
    </body>
</html>

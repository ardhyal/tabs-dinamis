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
                    <h3 class="pagetesing-header">Custom Tabs</h3>
                    <div class="col-md-12 form-group">
                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal"> Add Data </button>
                        <div class="modal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog">
                                <?php foreach ($nomer as $q){} $no = $q->nomer; $no++;?>
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <h4 class="modal-title">Default Modal</h4>
                                    </div>
                                    <?php echo form_open('tabs/add_data'); ?> 
                                    <div class="modal-content">
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="inputno">Input Nomer</label>
                                            <input type="text" class="form-control" id="inputno" name="no" value="<?php echo $no; ?>" placeholder="Enter Nomer">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputmenu">Input Menu</label>
                                            <input type="text" class="form-control" id="inputmenu" name="menu" placeholder="Enter menu">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputdata">Input Data</label>
                                            <input type="text" class="form-control" id="inputdata" name="data" placeholder="Enter data">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-info">Save changes</button>
                                    </div>
                                    <?php echo form_close(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 form-group">
                        <div class="nav-tabs-custom" id="tabs">
                            <ul class="nav nav-tabs">
                                <?php foreach ($menu as $q) {} $code = $menu[0]->id_data; ?>
                                <?php
                                foreach ($menu as $q):
                                    $tab_status = ($q->id_data == $code) ? 'active' : '';
                                    echo '<li class="' . $tab_status . '">'
                                    . '<a href="#tabs' . $q->id_data . '" data-toggle="tab">Tabs '. $q->nomer . '</a></li>';
                                endforeach;
                                ?>
                            </ul>
                            <div class="tab-content">
                                <?php
                                foreach ($menu as $q):
                                    $panel_status = ($q->id == $code) ? 'active' : '';
                                    echo '<div class="tab-pane ' . $panel_status . '" id="tabs' . $q->id_data . '">
                                          <p>' . $q->content . '
                                          </div>';
                                endforeach;
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 form-group">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Nomer</th>
                                    <th>Kategori</th>
                                    <th>Sub Kategori</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($sub_menu as $q): ?>
                                <tr>
                                    <td><?php echo $q->id ?></td>
                                    <td><?php echo $q->kategori ?></td>
                                    <td><?php echo $q->sub_kategori ?></td>
                                </tr>
                                    <?php endforeach; ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Nomer</th>
                                    <th>Kategori</th>
                                    <th>Sub Kategori</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <div class="col-md-12 form-group">
                        <button type="button" class="btn btn-default" id="id">test</button>
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
        <script>
            $(function(){
                $("#tabs").tabs();
                $('"#tabs"').click('tabsselect', function(event, ui){
                    alert($("#tabs").tabs('option','active'));
                });
                });
        </script>
        
    </body>
</html>

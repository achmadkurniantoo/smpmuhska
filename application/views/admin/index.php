<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin SMP MUH 10 SKA</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url()?>assets/css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?php echo base_url()?>assets/css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url()?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<?php include 'navbar.php';  ?>
<body>

    <div id="wrapper">

        <!-- Navigation -->
        

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Dashboard <small>SMP Muhammadiyah 10 Surakarta</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Dashboard
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="alert alert-info alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <i class="fa fa-info-circle"></i>  <strong>Like SB Admin?</strong> Try out <a href="http://startbootstrap.com/template-overviews/sb-admin-2" class="alert-link">SB Admin 2</a> for additional features!
                        </div>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-comments fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?=$kontakbaca ?></div>
                                        <div>Pesan Belum Dibaca!</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">Total Kontak masuk : <?=$kontak->num_rows()  ?></span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    
                    
                    
                <!-- /.row -->
<!-- ---------------------------------------------------------------------------------------------------- -->

                <div class="row">
                    <div class="col-lg-12">
                        <h2>Kontak Masuk</h2>
                            <div class="alert alert-success" role="alert" align="center">
                               <?=$this->session->flashdata('message')?>
                            </div>

                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>NO</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>No Tlp</th>
                                        <th>Tgl Kirim</th>
                                        <th>Baca</th>
                                        <th>Tayang</th>
                                        <th>Setting</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $no = 1; foreach ($kontak->result() as $key) { ?>
                                    <tr>
                                        <td><?=$no?></td>
                                        <td><?=$key->nama?></td>
                                        <td><?=$key->email?></td>
                                        <td><?=$key->no_tlp?></td>
                                        <td><?=$key->tgl_kirim?></td>
                                        <td><?=$key->status_baca?></td>
                                        <td><?=$key->status_tayang?></td>
                                            <td>
                                                <?php $tayang; if($key->status_tayang == 'show'){$tayang = 'Sembunyikan';}else{$tayang = 'Tayangkan';} ?>
                                                <?=anchor('admin/dashboard/kontak_hapus/'.$key->id,'Hapus',['class'=>'btn btn-danger', 'role'=>'button','onclick'=>'return confirm(\'Apa anda yakin mau menghapusnya!!!!\')'])?>
                                                <?=anchor('admin/dashboard/kontak_edit/'.$key->id         , $tayang ,['class'=>'btn btn-warning', 'role'=>'button'])?>
                                                <?=anchor('admin/dashboard/kontak_baca/'.$key->id,'Baca',['class'=>'btn btn-success', 'role'=>'button'])?>
                                            </td>
                                    </tr>
                                <?php $no++; } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

<!-- ---------------------------------------------------------------------------------------------------- -->

                
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="<?php echo base_url()?>assets/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="<?php echo base_url()?>assets/js/plugins/morris/raphael.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/plugins/morris/morris.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/plugins/morris/morris-data.js"></script>

</body>

</html>

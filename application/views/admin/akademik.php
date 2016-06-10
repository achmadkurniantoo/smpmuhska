<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo base_url() ;?>assets/img/icon1.png" type="image/gif"  >
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

       

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Dashboard <small>Statistics Overview</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Dashboard
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                
                <!-- /.row -->
<!-- ---------------------------------------------------------------------------------------------------- -->
                <div class="row">
                    <div class="col-lg-12">
                        <div align="center"><?=anchor('admin/dashboard/Akademik_baru/', 'Buat Akademik Artikel Baru' ,['class'=>'btn btn-warning', 'role'=>'button'])?></div>
                        <h3>Table Kategori</h3>
                            <div class="alert alert-success" role="alert" align="center">
                               <?=$this->session->flashdata('message')?>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>NO</th>
                                        <th>Kategori</th>
                                        <th>Setting</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $no = 1; foreach ($allkategoriakademik->result() as $key) { ?>
                                    <tr>
                                        <td><?=$no?></td>
                                        <td><?=$key->kategori?></td>                                   
                                            <td>
                                                <?=anchor('admin/dashboard/akademik_edit_kategori/'. $key->id_kategori,'Edit',['class'=>'btn btn-success', 'role'=>'button'])?>
                                               <?=anchor('admin/dashboard/akademik_delete_kategori/'.$key->kategori.'/' .$key->id_kategori,'Hapus',['class'=>'btn btn-danger', 'role'=>'button','onclick'=>'return confirm(\'Apa anda yakin mau menghapusnya!!!!\')'])?>
                                            </td>
                                    </tr>
                                <?php $no++; } ?>
                                </tbody>
                            </table>
                            </div>
                        </div>


                        <div class="col-lg-6">
                            <h4>Buat Kategori Baru</h4>
                            <hr>
                            <div id="body">
                              <?php if(validation_errors() || isset($error)) : ?>
                                    <div class="alert alert-danger"  align="center">
                                    <?=validation_errors()?>
                                    <?=(isset($error)?$error:'')?>
                            </div>
                            <?php endif; ?>
                            <?=form_open_multipart('admin/dashboard/akademik/')?>
                                <div class="form-group">
                                  <label for="namakategori">Nama Kategori</label>
                                  <input type="text" class="form-control" name="namakategori" value="">
                                </div>
                                <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                        </form>
                    </div>

<!-- ---------------------------------------------------------- -->

<?php foreach ($allkategoriakademik->result() as $key2) { ?>


                <div class="row">
                    <div class="col-lg-12">
                        
                        <h2>Table <?=$key2->kategori?></h2>
                            <div class="alert alert-success" role="alert" align="center">
                               <?=$this->session->flashdata('message')?>
                            </div>

                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>NO</th>
                                        <th>Judul</th>
                                        <th>Tgl Buat</th>
                                        <th>Status</th>
                                        <th>Setting</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $no = 1; foreach ($allakademik->result() as $key3) { 
                                    if ($key3->kategori == $key2->kategori) { ?>
                             
                                    <tr>
                                        <td><?=$no?></td>
                                        <td><?=$key3->judul?></td>
                                        <td><?=$key3->tgl_posting?></td>
                                        <td><?=$key3->status?></td>
                                   
                                            <td>
                                                <?php $tayang; if($key3->status == 'show'){$tayang = 'Sembunyikan';}else{$tayang = 'Tayangkan';} ?>
                                                <?=anchor('admin/dashboard/akademik_delete/'.$key3->id_akademik,'Hapus',['class'=>'btn btn-danger', 'role'=>'button','onclick'=>'return confirm(\'Apa anda yakin mau menghapusnya!!!!\')'])?>
                                                <?=anchor('admin/dashboard/akademik_status/'.$key3->id_akademik         , $tayang ,['class'=>'btn btn-warning', 'role'=>'button'])?>
                                                <?=anchor('admin/dashboard/akademik_edit/'.$key3->id_akademik,'Edit',['class'=>'btn btn-success', 'role'=>'button'])?>
                                            </td>
                                    </tr>
                                <?php } $no++; } ?>
                                </tbody>
                            </table>
                            <hr>
<?php } ?>
            <!-- ..................................................................... -->
                    </div></div>


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
    
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
            
            <script>tinymce.init({
              selector: 'textareas',
              height: 500,
              plugins: [
                'advlist autolink lists link image charmap print preview anchor',
                'searchreplace visualblocks code fullscreen',
                'insertdatetime media table contextmenu paste code'
              ],
              toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
              content_css: [
                '//fast.fonts.net/cssapi/e6dc9b99-64fe-4292-ad98-6974f93cd2a2.css',
                '//www.tinymce.com/css/codepen.min.css'
              ]
            });</script>


</body>

</html>

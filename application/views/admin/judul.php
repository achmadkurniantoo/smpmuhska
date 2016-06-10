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
                            Setting <small>Edit Nama Sekolah</small>
                        </h1>
                    </div>
                </div>


                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            <center> 
                                    <h2><?=$hasil['title'] ?></h2>
                                    <div class="img-responsive" align="center">
                
                                    </div>
                                    <small><h2><?=$hasil['city']?></h2></small>
                                    
                                    <i><small><h4> " <?=$hasil['tahun_pelajaran']?> " </h4></small></i>


                            </center>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Edit nama sekolah
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- --------------------------------------------- -->

                <div id="container">

                       <div id="body">
                          <?php if(validation_errors() || isset($error)) : ?>
                          <div class="alert alert-danger"  align="center">
                                <?=validation_errors()?>
                                <?=(isset($error)?$error:'')?>
                                
                        </div>
                        <?php endif; ?>
                        <?=form_open_multipart('admin/dashboard/judul_update')?>
                        <div align="center">
                            <?=$this->session->flashdata('message')?>
                        </div>

                        <div class="form-group">
                              <label for="title">JUDUL</label>
                              <input type="text" class="form-control" name="title" value="<?=$hasil['title']?>">
                        </div>

                        <div class="form-group">
                              <label for="city">KOTA</label>
                              <input type="text" class="form-control" name="city" value="<?=$hasil['city']?>">
                        </div>

                        <div class="form-group">
                              <label for="tahun_pelajaran">Tahun Pelajaran</label>
                              <input type="text" class="form-control" name="tahun_pelajaran" value="<?=$hasil['tahun_pelajaran']?>">
                        </div> 

                            <button type="submit" class="btn btn-primary">Update</button>
                            <?=anchor('admin/dashboard/judul','Cancel',['class'=>'btn btn-warning'])?>

                          </form>
                       </div>
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

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
                            Gallery <small>Edit Gambar</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> gallery
                            </li>
                        </ol>
                    </div>
                </div>

<!--========================================================================================================== -->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
if($this->input->post()){
   $caption       = set_value('caption');
   $description    = set_value('description');
} else {
   $caption       = $image->title;
   $description    = $image->description;
}?>
    <div id="container">
   

   <div id="body">
      <?php if(validation_errors() || isset($error)) : ?>
         <div class="alert alert-danger" role="alert" align="center">
            <?=validation_errors()?>
            <?=(isset($error)?$error:'')?>
         </div>
      <?php endif; ?>
      <?=form_open_multipart('admin/dashboard/gallery_edit/'.$image->id_images)?>

        <div class="form-group">
          <label for="userfile">Image File</label>
          <div class="row" style="margin-bottom:5px"><div class="col-xs-12 col-sm-6 col-md-3"><?=img(['src'=>$image->file,'width'=>'100%'])?></div></div>
        </div>

        <div class="form-group">
          <label for="caption">Caption</label>
          <input type="text" class="form-control" name="caption" value="<?=$caption?>">
        </div>

        <div class="form-group">
          <label for="description">Description</label>
          <textarea class="form-control" name="description"><?=$description?></textarea>
        </div>

        <div class="form-group">
        <label>Tampilkan / sembunyikan gambar</label>
        <div>
          <div class="radio-inline"> <input type="radio" name="radioOption" id="show" value="show" checked> Tampilkan</div>
          <div class="radio-inline"> <input type="radio" name="radioOption" id="hidden" value="hidden"> Sembunyikan </div>
        </div>
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
        <?=anchor('admin/dashboard/gallery','Cancel',['class'=>'btn btn-warning'])?>

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

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

                <div class="row">
                    <div class="col-lg-12">
                        <div class="alert alert-info alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <i class="fa fa-info-circle"></i>  <strong>Like SB Admin?</strong> Try out <a href="http://startbootstrap.com/template-overviews/sb-admin-2" class="alert-link">SB Admin 2</a> for additional features!
                        </div>
                    </div>
                </div>
                <!-- /.row -->
<!-- ---------------------------------------------------------------------------------------------------- -->

          <div class="col-lg-12">
                <?php if(validation_errors() || isset($error)) : ?>
                 <div class="alert alert-danger" role="alert" align="center">
                    <?=validation_errors()?>
                    <?=(isset($error)?$error:'')?>
                 </div>
                <?php endif; ?>

                <?=form_open_multipart('admin/dashboard/akademik_edit/'.$akademikbyid->id_akademik)?>

                <div class=" alert alert-success" >

                  <div class="form-group">
                        <label for="title">JUDUL BERITA / ARTIKEL</label>
                        <input type="text" class="form-control" name="title" value="<?=$akademikbyid->judul?>"> 
                  </div>

                  <hr>


                  
                <div class="form-group" >
                            
                </div>
                </div>
                <div class="alert alert-success">

                    <textarea  name="isi"> <?=$akademikbyid->isi?></textarea>

                    <br>
                    <div class="form-group">
                        <label>Simpan / Langsung Publikasikan</label>
                        <div>
                          <div class="radio-inline"> <input type="radio" name="radioOption" id="hiden" value="hidden" checked> Simpan</div>
                          <div class="radio-inline"> <input type="radio" name="radioOption" id="show" value="show"> Publikasikan </div>
                        </div>
                    </div>

                    <div class="alert"  align="right">

                                    <div align="center">
                                        <?=$this->session->flashdata('message')?>
                                    </div>
                 <button type="submit" class="btn btn-primary">Save</button>
                 </div>
                 </form>
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
    
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
            
            <script>tinymce.init({
              selector: 'textarea',
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

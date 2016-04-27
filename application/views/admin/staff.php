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
<style>
.col-md-3:nth-child(4n+1) { clear: left; }
</style>
</head>
<?php include 'navbar.php'; ?>
<body>

    <div id="wrapper">


        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Guru dan Staff
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Guru dan Staff
                            </li>
                        </ol>
                    </div>
                </div>

<!--========================================================================================================== -->
                <div id="container">
                   
                   <div id="body">
                   
                      <?php if($staff->num_rows() > 0) : ?>
                         
                         <?php if($this->session->flashdata('message')) : ?>
                            <div class="alert alert-success" role="alert" align="center">
                               <?=$this->session->flashdata('message')?>
                            </div>
                         <?php endif; ?>

                         <div align="center"><?=anchor('admin/dashboard/staff_upload','Upload staff baru!!',['class'=>'btn btn-primary'])?></div>
                         <hr />   
                         <div class="row">
                         
                            <?php foreach($staff->result() as $foto) : ?>
                                
                            <div class="col-md-3">
                               <div class="thumbnail">
                                  <?=img(['src' => $foto->foto,'width'=>'200', 'height'=>'300'])?>

                                  <div class="caption">
                                     <h5><?=$foto->nama?></h5>
                                     <h6><?=$foto->jabatan?></h6>
                                    
                                     <p>
                                        <?=anchor('admin/dashboard/staff_edit/'.$foto->id_guru,'Edit',['class'=>'btn btn-warning', 'role'=>'button'])?>
                                        <?=anchor('admin/dashboard/staff_hapus/'.$foto->id_guru,'Delete',['class'=>'btn btn-danger', 'role'=>'button','onclick'=>'return confirm(\'Are you sure?\')'])?>
                                     </p>
                                     </div>
                                  </div>
                               </div>
                            
                            <?php endforeach; ?>


                         </div>
                      <?php else : ?>
                         <div align="center">We don't have any image yet, go ahead and <?=anchor('admin/dashboard/staff_upload','add a new one')?>.</div>
                      <?php endif; ?>
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

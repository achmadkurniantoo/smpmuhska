<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo base_url() ;?>assets/img/icon1.png" type="image/gif" >
    <title>Staff Pengajar</title>

    <link href="<?php echo base_url()?>assets/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url()?>assets/css/custom.css" rel="stylesheet">

    <!-- Custom Fonts -->
     <link href="<?php echo base_url()?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
     <link href='https://fonts.googleapis.com/css?family=Josefin+Slab' rel='stylesheet' type='text/css'>
     <link href='https://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
     <!-- <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css"> -->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<?php
include ("navbar.php");

?>

    <!-- Page Header -->

    <header class="intro-header" >
        <div class="container-staff">

            <div class="row">

                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">

        
        <br>
       
                    <div class="page-heading">

                        <big>Staff Pengajar dan Tata Usaha</big>
                        <hr class="small">
                        <span class="subheading">Biodata singkat staff pengajar dan tata usaha <?=$title." ".$city?></span>

                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->

<?php $num = 1;
foreach ($staff->result() as $foto) {
   
   if ($num % 2 != 1) {?>
     <div class="container-staff-main-gray">
        <div class="row">
          <div class="col-sm-4">
            <?=img(['src' => $foto->foto,'width'=>'200', 'height'=>'300'])?>
          </div>
          <div class="col-sm-8">
            <h2>Nama Lengkap</h2>
            </br></br>
            <h5><strong>Nama &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;</strong>&nbsp; <?php echo $foto->nama ?></h5>
            <h5><strong>Jabatan &nbsp; : &nbsp;</strong>&nbsp; <?php echo $foto->jabatan ?></h5>
          </div>
        </div>
      </div>
   <?php }
   else{ ?>
      <div class="container-staff-main">
        <div class="row">
          <div class="col-sm-4">
            <?=img(['src' => $foto->foto,'width'=>'200', 'height'=>'300'])?>
         </div>
         <div class="col-sm-8">
            <h2>Nama Lengkap</h2>
            </br></br>
            <h5><strong>Nama &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;</strong>&nbsp; <?php echo $foto->nama ?></h5>
            <h5><strong>Jabatan &nbsp; : &nbsp;</strong>&nbsp; <?php echo $foto->jabatan ?></h5>
          </div>
       </div>
      </div>
      <?php } $num++;
   }?>
   
    <!-- Footer -->
    <?php
    include ("footer.php");
    ?>

    <!-- jQuery -->
    <script src="<?php echo base_url()?>assets/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url()?>assets/js/clean-blog.min.js"></script>

</body>

</html>

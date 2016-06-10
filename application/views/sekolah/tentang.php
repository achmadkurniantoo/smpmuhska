<!DOCTYPE html>
<html lang="en">

<head>

    

    <title>Tentang</title>

    <!-- Bootstrap Core CSS -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo base_url() ;?>assets/img/icon1.png" type="image/gif" >
    <title>Tentang</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url()?>assets/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url()?>assets/css/custom.css" rel="stylesheet">

    <!-- Custom Fonts -->
     <link href="<?php echo base_url()?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
     <link href='https://fonts.googleapis.com/css?family=Josefin+Slab' rel='stylesheet' type='text/css'>
     <link href='https://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
     <!-- <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css"> -->


    

    
</head>

<body>


    <!-- Navigation -->
<?php
include ("navbar.php");

?>


    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('img/bg.jpg')">
        <div class="container-about">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="page-heading">
                        <big>Tentang Sekolah</big>
                        <hr class="small">
                        <span class="subheading">Mengenal adalah selangkah lebih dekat menuju mencintai.</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            <!--Untuk Sejarah -->
             <h2> Sejarah <?php echo $title." ".$city?></h2>
             <?php
                foreach ($konten->result() as $baris)
         {  ?>
                <p><big><?php echo $baris->konten;?></big></p> <?php }
         ?>
            <!-- Untuk Visi dan Misi -->
                <h2> Visi dan Misi <?php echo $title." ".$city?></h2>
                <h3>Visi</h3>

                             <?php
                foreach ($vismis->result() as $row)
         {  ?>
                                    <p><big><?php echo $row->visi;?></big></p> <?php }
         ?>
                                    <h3>Misi</h3>
                                   <?php foreach ($vismis->result() as $row)
         {  ?>

                                    <p><big><?php echo $row->misi;?></big></p>

                                    <?php }
         ?>

            </div>
        </div>
    </div>

    <hr>

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

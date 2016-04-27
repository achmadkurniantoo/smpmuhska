<!DOCTYPE html>
<html lang="en">

<head>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Gallery</title>

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
<style>
.col-md-3:nth-child(4n+1) { clear: left; }
</style>

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
                        <big>Gallery <?php echo $title." ".$city?></big>
                        <hr class="small">
                        <span class="subheading">Kumpulan foto kegiatan <?php echo $title." ".$city?></span>
                    </div>
                </div>
            </div>
        </div>
    </header>

  <div id="container">

   <div id="body">
      <?php if($images->num_rows() > 0) : ?>
         
        
         <hr />   
         <div class="row">
            <?php foreach($images->result() as $img) : ?>
            <div class="col-xs-6 col-md-3">
               <div class="thumbnail">
                  <?=img(['src'=>$img->file, 'width'=>'300', 'height'=>'150'])?>
                  <div class="caption">
                     <h3><?=$img->title?></h3>
                     <h6><?=$img->date?></h6>
                     <p><?=substr($img->description, 0,100)?>...</p>
                  </div>
               </div>
            </div>
            <?php endforeach; ?>
         </div>
      
      <?php endif; ?>
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

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo base_url() ;?>assets/img/icon1.png" type="image/gif" >
    <title>Berita Sekolah</title>

    <link href="<?php echo base_url()?>assets/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url()?>assets/css/custom.css" rel="stylesheet">

    <!-- Custom Fonts -->
     <link href="<?php echo base_url()?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
     <link href='https://fonts.googleapis.com/css?family=Josefin+Slab' rel='stylesheet' type='text/css'>
     <link href='https://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
     <!-- <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css"> -->
     <link media="screen" href="https://fontlibrary.org/face/droid-arabic-kufi" type="text/css"/ type="text/css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style >
        .tere {
            width: 65%;
            position: relative;
            overflow: hidden;
            font-size: 12px;
            padding-bottom: 15px;
            margin-bottom: 15px;
            margin-left: 200px;
            margin-right: 100px;
            height: auto;
            border-bottom: 1px dashed #DDD;


        }

        .tere .pad {
            overflow: hidden;

        }

        .tere .teredt {
            font-size: 11px;
            font-weight: bold;
            margin-top: 8px;
            line-height: normal;
            color: #999;
            text-transform: uppercase;

}

        .tere .exp {
            padding: 5px 0;
            line-height: 19px;
            font-size: 13px;
            color: #848484;


        }
        }

        .tere .limiter {
            overflow: hidden;
            width: 35%;
            float: left;
            max-height: 138px;
            margin-right: 10px;
            margin-top: 30px;
            background: #F6F6F6;

        }

        .tere img{
            width: 300px;
            height: 200px;
            border-radius: 8px;

        }

        .tere .thumbnails{
            border: 1px solid #ddd;
            position: relative;
            overflow: hidden;
            float: left;
            margin-right: 15px;
            padding: 5px;
            margin-top: 10px;
            border-radius: 8px;

        }

        .tere a{
            color: #353232;
        }

        #boxid {

            overflow: hidden;
            padding-top: 5px;
            padding-right: 295px;
            padding-left: 295px;
            padding-bottom: 35px;

        }

        .containerAbu{
          background-color: #AFC6C6;
        }

        h6{
          font-size: 16px;
        }
    </style>

</head>

<body>

<!-- Navbar -->

<?php
include ("navbar.php");

?>

<!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('img/bg.jpg')">
        <div class="container-news">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="page-heading">
                        <big><?=urldecode($thiskategori)?></big>
                        <hr class="small">
                        <span class="subheading">Segala perkembangan berita mengenai <?=$title. " ".$city ?></span>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <!-- Post Content -->

<?php if (strtoupper($thiskategori) == 'TAUSIAH') {
    $num = 1;
    foreach ($results as $key) {
        if ($num % 2) { ?>
          <div class="containerAbu">
            <div class="row">
                <div class="container">
                    <div class="col-sm-2"> </div>
                    <div class="col-sm-10">
                            <h6><?php $hsl = (String) $key->isi;  echo html_entity_decode($hsl);?> </h6>
                    </div>
                </div>
            </div>
          </div>

        <?php }else{ ?>

            <div class="row">
                <div class="container">
                  <div class="col-sm-2"></div>
                    <div class="col-sm-10">
                        <h6><?php $hsl = (String) $key->isi;  echo html_entity_decode($hsl);?> </h6>
                    </div>

                </div>
            </div>
        <?php } $num++; } } else{ ?>

<div class="container">


        <!-- Project Three -->
        <hr>
         <?php foreach ($results as $key) { ?>

        <div class="row">
            <div class="col-md-7">
                    <?php
                        $str = html_entity_decode($key->isi);
                        preg_match('/(<img[^>]+>)/i', $str, $matches);
                    ?>
                <a href="<?php echo base_url().'sekolah/baca/'.$key->kategori. "/".$key->id_akademik ?>">
                    <?php if ($matches != NULL) { ?>
                         <img class="img-responsive" <?php echo $matches[0];?>
                     <?php }?>
                </a>
            </div>
            <div class="col-md-5">
                <h3><?=$key->judul?></h3>
                <h4>POSTED ON <?=$key->tgl_posting?>  / <a href="<?php echo base_url().'sekolah/artikel/'. $key->kategori; ?>" rel="category tag"> <?=$key->kategori?></a></h4>
                <?php $aa = strip_tags(html_entity_decode($key->isi));?>
                <div class="exp"><?=substr($aa, 0,400)?>...</div>
                 <div align="right"><?=anchor('sekolah/baca/'.$key->kategori. "/".$key->id_akademik ,'Baca Selengkapnya..',['class'=>'btn btn-success'])?></div>
            </div>
        </div>
         <hr>
        <?php } }?>
        <!-- /.row -->

    <!-- ccc -->
     <!-- Pagination -->
        <div class="row text-center">
            <div class="col-lg-12">
                <ul class="pagination">
                    <?php foreach ($links as $link) {
                        echo "<li >". $link."</li>";
                    } ?>
                </ul>
            </div>
        </div>
        <!-- /.row -->
</div>
    <!-- Post Content -->
    <hr>

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

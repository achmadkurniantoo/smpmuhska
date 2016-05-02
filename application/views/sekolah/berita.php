<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

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
     <link href="http://fonts.googleapis.com/earlyaccess/droidarabicnaskh.css" rel="stylesheet" type="text/css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">

        .headpost {
            overflow: hidden;
            position: relative;
            padding-bottom: 10px;
            margin-bottom: 15px;
            border-bottom: 4px solid #DDD;
            
        }

        .headpost a{
            color: #353232;
        }
        .headpost a:hover{
            color: green;
        }

        .headpost .bottomtitle {
            line-height: normal;
            text-transform: uppercase;
            margin-top: 2px;
            margin-bottom: 5px;
            font-weight: bold;
            color: #999;
            font-size: 11px;
            

        }

        .artikels{ 
            color: black;
        }

        .artikels a {
            color: black;

        }
        .artikels a:hover{
            color: green;
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
                        <big><?=$thiskategori?></big>
                        <hr class="small">
                        <span class="subheading">Segala perkembangan berita mengenai <?=$title. " ".$city ?></span>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <!-- Post Content -->
    <article>
        <div class="container-news-main">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">

                
                <?php foreach ($artikel->result() as $key ) { ?>
                    
                    <div class="headpost">
                        <h1> <?=$key->judul?> </h1>
                        <div class="bottomtitle">
                            POSTED ON <?=$key->tgl_posting?> KATEGORI <a href="<?php echo base_url().'sekolah/artikel/'. $key->kategori; ?>" rel="category tag"> <?=$key->kategori?></a>
                        </div>
                    </div>
                    
                   <div class="artikels">
                    <?php $hsl = (String) $key->isi;  echo html_entity_decode($hsl);?> 
                   </div>
                    
                <?php } ?>

                </div>
            </div>
        </div>
    </article>



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

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

        .tere .a {
            color :black;

        }

        #boxid {
            
            overflow: hidden;
            

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
<?php if (strtoupper($thiskategori) == 'TAUSIAH') { 
    $num = 1;
    foreach ($results as $key) { 
        if ($num % 2) { ?>

            <div class="container-news-main-gray">
                <?php $hsl = (String) $key->isi;  echo html_entity_decode($hsl);?>  
            </div>
        <?php }else{ ?>
            <div class="container-news-main-white">
                <?php $hsl = (String) $key->isi;  echo html_entity_decode($hsl);?>  
            </div>

<?php } $num++; } } else{ ?>

    <div id="boxid " >
    <?php foreach ($results as $key) { ?>
            <div class="tere">
                <div class="pad">
                    <?php 
                        $str = html_entity_decode($key->isi);
                        preg_match('/(<img[^>]+>)/i', $str, $matches);
                    ?>
                    <a href="<?php echo base_url().'sekolah/baca/'.$key->kategori. "/".$key->id_akademik ?>">
                        
                            <?php if ($matches != NULL) { ?>
                                <div class="limiter thumbnail">
                                <?php echo $matches[0];?>
                                
                            <?php }?>
                        </div>
                        <h2> <?=$key->judul?> </h2>
                    </a>
                    <div class="teredt"> 
                        POSTED ON <?=$key->tgl_posting?>  / <a href="<?php echo base_url().'sekolah/artikel/'. $key->kategori; ?>" rel="category tag"> <?=$key->kategori?></a>
                    </div>
                    <?php $aa = strip_tags(html_entity_decode($key->isi));?>
                    <div class="exp"><?=substr($aa, 0,400)?>...</div>
                     <div align="right"><?=anchor('sekolah/baca/'.$key->kategori. "/".$key->id_akademik ,'Read more!!',['class'=>'btn btn-primary'])?></div>
                </div>
            </div>
    <?php } }?>
    </div>

    <!-- ccc -->
    <div class="alert alert-warning" align="center">
        <!-- Show pagination links -->
        <ul class="pagination">
        <?php foreach ($links as $link) {
        echo "<li >". $link."</li>";
        } ?>
        </ul>
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

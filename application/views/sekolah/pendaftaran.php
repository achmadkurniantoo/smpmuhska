<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo base_url() ;?>assets/img/icon1.png" type="image/gif" >
    <title>Pendaftaran</title>

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
    <style type="text/css">
    .containerGray{
      background-color: #AFC6C6;
    }
    </style>

</head>

<body>

<!-- Navbar -->

<?php
include ("navbar.php");

?>

<!-- Page Header -->

    <header class="intro-header">
        <div class="container-news">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="page-heading">
                        <big>Pendaftaran Peserta Didik Baru</big>
                        <hr class="small">
                        <span class="subheading">Informasi, Persyaratan dan Ketentuan mengenai Pendaftaran Peserta Didik Baru di <?=$title?>.</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

<!-- Isi Konten -->
<div class="containerGray">
<div class="row">

<div class="container">
  <div class="col-sm-8">
</div>
<div class="col-sm-4">
  <h1> Syarat Pendaftaran </h1>
  <?php foreach($daftar->result() as $kdaftar){ ?>
    <h5><big><?php echo $kdaftar->daftar?></big></h5>
  <?php } ?>
</div>
</div>
</div>
</div>


<div class="row">
<div class="container">
  <div class="col-sm-2">
  </div>
  <div class="col-sm-6">
  <h1> Program Pendidikan </h1>
  <?php foreach($program->result() as $kprogram){ ?>
    <h5><big><?php echo $kprogram->program?></big></h5>
<?php } ?>
<div class="col-sm-4">
</div>
</div>
</div>
</div>

<div class="containerGray">
<div class="row">

<div class="container">
<div class="col-sm-8">
</div>
<div class="col-sm-4">
  <h1> Target Kompetensi </h1>
  <?php foreach($target->result() as $ktarget){ ?>
    <h5><big><?php echo $ktarget->target?></big></h5>
<?php } ?>
</div>
</div>
</div>
</div>


<div class="row">
<div class="container">
  <div class="col-sm-2">
  </div>
<div class="col-sm-10">
  <h1> MENERIMA PESERTA DIDIK BARU TAHUN PELAJARAN <?=$tahun_pelajaran;?> </h1>
  <h3>Silahkan untuk Mendaftar Klik <u>Isi Formulir dibawah</u></h3>
  <?=anchor('sekolah/ppdb','Isi Formulir',['class'=>'btn btn-success'])?></br></br>
 <div class="alert alert-danger" role="alert" align="center">
    <h4>CATATAN : "Semua berkas dimasukkan stopmap <u>WARNA HIJAU</u> untuk <u>Perempuan</u> dan <u>WARNA MERAH</u> untuk <u>Laki-laki</u></br> dan diberi <u>Identitas</u>"</h4>
  </div>
</div>
</div>
</div>




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

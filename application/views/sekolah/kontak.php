<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo base_url() ;?>assets/img/icon1.png" type="image/gif" >
    <title>Kontak</title>

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
    <header class="intro-header">
        <div class="container-contact">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="page-heading">
                        <big>Hubungi Kami</big>
                        <hr class="small">
                        <span class="subheading">Tanyakan segala sesuatu tentang <?php echo $title ." ". $city; ?>. </br> Insya allah akan kami jawab setiap pertanyaan yang ditujukan kepada kami, dan jawaban akan kami sediakan secepatnya. Terima Kasih.</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container-maincontent-contact">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <p></p>

                <?php if(validation_errors() || isset($error)) : ?>
                     <div class="alert alert-danger" role="alert" align="center">
                        <?=validation_errors()?>
                        <?=(isset($error)?$error:'')?>
                     </div>
                  <?php endif; ?>

                <?=form_open_multipart('sekolah/kontak_kirim')?>
                        <div align="center">
                            <?=$this->session->flashdata('message')?>
                        </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Nama</label>
                            <input type="text" name="name" class="form-control" placeholder="Masukkan Nama Lengkap Disini." id="name" required data-validation-required-message="Please enter your name.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Masukkan Alamat Email disini." id="email" required data-validation-required-message="Tolong lengkapi alamat email dalam formulir.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Nomor Telepon</label>
                            <input type="tel" name="tlp" class="form-control" placeholder="Masukkan Nomor Telepon Disini" id="phone" required data-validation-required-message="Tolong lengkapi nomor telepon dalam formulir.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Isi Pesan</label>
                            <textarea rows="5" name="pesan" class="form-control" placeholder="Masukkan Pesan Disini" id="message" required data-validation-required-message="Tolong lengkapi pesan dalam formulir."></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <br>
                    <div id="success"></div>
                    <div class="row">
                        <div class="form-group col-xs-12">
                            <button type="submit" class="btn btn-default">Kirim</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

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

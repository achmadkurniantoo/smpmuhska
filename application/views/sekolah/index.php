<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?=$title?></title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url()?>assets/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url()?>assets/css/custom.css" rel="stylesheet">

    <!-- Custom Fonts -->
     <link href="<?php echo base_url()?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
     <link href="https://fonts.googleapis.com/css?family=Josefin+Slab' rel='stylesheet' type='text/css">
     <link href="https://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css">
     <!-- <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css"> -->



</head>

<body>

<!-- Navbar -->

<?php
include ("navbar.php");

?>

<!-- Jumbotron -->
<div class="bg"></div>
<div class="jumbotron">
    
  <center><big><?=$title?></big><small></br><?=$city?></small><center>
</div>


<!-- Akreditasi -->

<div class="container-akre">

      <center><big>Terakreditasi <small>"A"</small></big><br></center>
      <hr class="big" style="width:84%; align:center; color:#489046;">

      <h1>NIS : 200370 &nbsp; | NPSN : 20328066 &nbsp; | NSS : 204036101101 &nbsp; | NDS : C35052017 </h1> <br><br>
      <center><p><a class="btn btn-success btn-lg" href="<?php echo base_url() ?>sekolah/tentang" role="button">Pelajari Selengkapnya</a></p></center>
</div>

<!-- Services -->
    <section id="services" >
        <div class="container-motto">
            <div class="row text-center">
                <div class="col-lg-10 col-lg-offset-1">
                  <div class="motto-header">
                    <h2>Sekolahku : Resik & Rapi</h2>
                  </div>
                    <hr class="small">
                    <div class="row">
                      <div class="col-md-1">&nbsp;</div>
                        <div class="col-md-2">
                            <div class="motto-item">
                              <h1> R </h1>
                                <h4>
                                    <strong>Ramah</strong>
                                </h4>
                                <hr class="separator-motto">
                                <p>Hormat dan Sopan Dalam Memberi Pelayanan Kepada Siapapun</p>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="motto-item">
                              <h1> E </h1>
                                <h4>
                                    <strong>Energik</strong>
                                </h4>
                                <hr class="separator-motto">
                                <p>Siap Bekerja Keras, Cerdas, Kualitas, Tangkas dan Ikhlas</p>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="motto-item">
                              <h1> S </h1>
                                <h4>
                                    <strong>Santun</strong>
                                </h4>
                                <hr class="separator-motto">
                                <p>Bersikap Santun Dalam Menjalin Komunikasi Dengan Semua Pihak</p>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="motto-item">
                              <h1> I </h1>
                                <h4>
                                    <strong>Inovatif</strong>
                                </h4>
                                <hr class="separator-motto">
                                <p>Senantiasa Melakukan Perbaikan Secara Berkelanjutan</p>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="motto-item">
                              <h1> K </h1>
                                <h4>
                                    <strong>Kredibel</strong>
                                </h4>
                                <hr class="separator-motto">
                                <p>Menjadi Mitra Terpercaya Dalam mewujudkan Pendidikan Bermutu</p>
                            </div>
                        </div>
                        <div class="col-md-1">&nbsp;</div>

                        <div class="motto-item">
                        <div class="col-md-12"><h2> & </h2></div>
                        </div>
                        <div class="col-md-3">
                            <div class="motto-item">
                              <h1> R </h1>
                                <h4>
                                    <strong>Rajin</strong>
                                </h4>
                                <hr class="separator-motto">
                                <p>Tekun, Tertib dan Disiplin Dalam Melaksanakan Tugas dan Kewajiban</p>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="motto-item">
                              <h1> A </h1>
                                <h4>
                                    <strong>Amanah</strong>
                                </h4>
                                <hr class="separator-motto">
                                <p>Jujur, Tanggung Jawab dan Dapat Dipercaya</p>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="motto-item">
                              <h1> P </h1>
                                <h4>
                                    <strong>Produktif</strong>
                                </h4>
                                <hr class="separator-motto">
                                <p>Unggul Dalam Prestasi dan Santun Berakhlak Islami</p>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="motto-item">
                              <h1> I </h1>
                                <h4>
                                    <strong>Ikhlas</strong>
                                </h4>
                                <hr class="separator-motto">
                                <p>Melaksanakan Kewajiban Dengan Tulus dan Senang Hati</p>
                            </div>
                        </div>

                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.col-lg-10 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

<!-- Google Map API -->

<section id="contact" class="map">
  <!-- <div class="overlay" onClick="style.pointerEvents='none'"></div> -->
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.2025886042684!2d110.77875741433398!3d-7.5528754766691435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a14426ab6d703%3A0xa5ff8dd8ffc4e2b7!2sSMP+Muhammadiyah+10!5e0!3m2!1sen!2sid!4v1458927976331" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
        <br />
        <small>
            <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.1516300514486!2d110.76663081433398!3d-7.558440876733713!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a15d549589f8f%3A0x6786fc41534ba967!2sUniversitas+Muhammadiyah+Surakarta!5e0!3m2!1sen!2sid!4v1455436284291" width="400" height="300" frameborder="0" scrolling="no" style="border:0" allowfullscreen></a>
        </small>
        </iframe>
    </section>

    <?php
    include ("footer.php");
    ?>


    <!-- jQuery -->
    <script src="<?php echo base_url()?>assets/js/jquery.js"></script>
    <script src="<?php echo base_url()?>assets/js/parallax.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url()?>assets/js/clean-blog.min.js"></script>


</body>

</html>

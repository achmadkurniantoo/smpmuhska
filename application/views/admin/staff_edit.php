<!DOCTYPE html>
<html lang="en">

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo base_url() ;?>assets/img/icon1.png" type="image/gif" >
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

</head>
<?php include 'navbar.php';  ?>
<body>

    <div id="wrapper">

        

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Daftar <small>Staff</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> guru
                            </li>
                        </ol>
                    </div>
                </div>

<!--========================================================================================================== -->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
if($this->input->post()){
   $nama       = set_value('nama');
   $jabatan    = set_value('jabatan');
   $NIP        = set_value('nip');
   $status    = set_value('Status');
    $NUPTK     = set_value('nuptk');
  $tempat_lahir = set_value('tempatLahir');
  $tanggal_lahir       = set_value('tanggalLahir');
  $gol        = set_value('Gol');
  $ijazah_terakhir_tahun       = set_value('ijazahTerakhirTahun');
  $mulai_bekerja        = set_value('mulaiBekerja');
  $nomer_telepon        = set_value('nomerTelepon');
  $keterangan        = set_value('Keterangan');
} else {
   $nama       = $image->nama;
   $jabatan    = $image->jabatan;
   $NIP        = $image->NIP;
   $status     = $image->status;
   $NUPTK      = $image->NUPTK;
   $tempat_lahir = $image->tempat_lahir;
   $tanggal_lahir = $image->tanggal_lahir;
   $gol = $image->gol;
   $ijazah_terakhir_tahun = $image->ijazah_terakhir_tahun;
   $mulai_bekerja = $image->mulai_bekerja;
   $nomer_telepon = $image->nomer_telepon;
   $keterangan = $image->keterangan;
}?>
    <div id="container">
   

   <div id="body">
      <?php if(validation_errors() || isset($error)) : ?>
         <div class="alert alert-danger" role="alert" align="center">
            <?=validation_errors()?>
            <?=(isset($error)?$error:'')?>
         </div>
      <?php endif; ?>
      <?=form_open_multipart('admin/dashboard/staff_edit/'.$image->id_guru)?>

        <div class="form-group">
          <label for="userfile">Data Staff/Guru</label>
          <div class="row" style="margin-bottom:5px"><div class="col-xs-12 col-sm-6 col-md-3"><?=img(['src'=>$image->foto,'width'=>'100%'])?></div></div>
        </div>

        <div class="form-group">
          <label for="nama">Nama</label>
          <input type="text" class="form-control" name="nama" value="<?=$nama?>">
        </div>

        <div class="form-group">
          <label for="jabatan">Jabatan</label>
          <input type="text" class="form-control" name="jabatan" value="<?=$jabatan?>">
        </div>

        <div class="form-group">
          <label for="nuptk">NUPTK</label>
          <input type="text" class="form-control" name="nuptk" value="<?=$NUPTK?>">
        </div>

        <div class="form-group">
          <label for="nip">NIP</label>
          <input type="text" class="form-control" name="nip" value="<?=$NIP?>">
        </div>

        <div class="form-group">
          <label for="tempatLahir">Tempat Lahir</label>
          <input type="text" class="form-control" name="tempatLahir" value="<?=$tempat_lahir?>">
        </div>

        <div class="form-group">
          <label for="tanggalLahir">Tanggal Lahir</label>
          <input type="text" class="form-control" name="tanggalLahir" value="<?=$tanggal_lahir?>">
        </div>

        <div class="form-group">
          <label for="golongan">Golongan</label>
          <input type="text" class="form-control" name="Gol" value="<?=$gol?>">
        </div>

        <div class="form-group">
          <label for="status">Status</label>
          <input type="text" class="form-control" name="Status" value="<?=$status?>">
        </div>

        <div class="form-group">
          <label for="Ijazah">Ijazah Terakhir dan Tahun</label>
          <input type="text" class="form-control" name="ijazahTerakhirTahun" value="<?=$ijazah_terakhir_tahun?>">
        </div>

        <div class="form-group">
          <label for="bekerja">Mulai Bekerja</label>
          <input type="text" class="form-control" name="mulaiBekerja" value="<?=$mulai_bekerja?>">
        </div>

        <div class="form-group">
          <label for="nomerTelepon">Nomer Telepon</label>
          <input type="text" class="form-control" name="nomerTelepon" value="<?=$nomer_telepon?>">
        </div>

        <div class="form-group">
          <label for="keterangan">Keterangan</label>
          <input type="text" class="form-control" name="Keterangan" value="<?=$keterangan?>">
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
        <?=anchor('admin/dashboard/staff','Cancel',['class'=>'btn btn-warning'])?>

      </form>
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

</body>

</html>

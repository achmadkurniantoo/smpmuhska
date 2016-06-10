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
                            Upload <small>Data Staff/Guru</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Staff/Guru
                            </li>
                        </ol>
                    </div>
                </div>
<!--========================================================================================================== -->
<div id="container">
<button class="btn btn-danger"><?php echo $this->session->flashdata('message');?></button>
   <h1>Menambahkan Guru/Staff</h1>


   <div id="body">
      <?php if(validation_errors() || isset($error)) : ?>
         <div class="alert alert-danger" role="alert" align="center">
            <?=validation_errors()?>
            <?=(isset($error)?$error:'')?>
         </div>
      <?php endif; ?>
      <?=form_open_multipart('admin/dashboard/staff_upload')?>

        <div class="form-group">
          <label for="userfile">Foto Staff/Guru</label>
          <input type="file" class="form-control" name="userfile">
        </div>

        <div class="form-group">
          <label for="nama">Nama</label>
          <input type="text" class="form-control" name="nama" placeholder="Nama">
        </div>

        <div class="form-group">
          <label for="jabatan">Jabatan</label>
          <input type="text" class="form-control" name="jabatan" placeholder="Jabatan">
        </div>

        <div class="form-group">
          <label for="nuptk">NUPTK</label>
          <input type="text" class="form-control" name="nuptk" placeholder="NUPTK">
        </div>

        <div class="form-group">
          <label for="nip">NIP</label>
          <input type="text" class="form-control" name="nip" placeholder="NIP">
        </div>

        <div class="form-group">
          <label for="tempatLahir">Tempat Lahir</label>
          <input type="text" class="form-control" name="tempatLahir" placeholder="Tempat Lahir">
        </div>

        <div class="form-group">
          <label for="tanggalLahir">Tanggal Lahir</label>
          <input type="text" class="form-control" name="tanggalLahir" placeholder="Tanggal Lahir tgl/bln/th">
        </div>

        <div class="form-group">
          <label for="golongan">Golongan</label>
          <input type="text" class="form-control" name="Gol" placeholder="Golongan">
        </div>

        <div class="form-group">
          <label for="status">Status</label>
          <input type="text" class="form-control" name="Status" placeholder="Status">
        </div>

        <div class="form-group">
          <label for="Ijazah">Ijazah Terakhir dan Tahun</label>
          <input type="text" class="form-control" name="ijazahTerakhirTahun" placeholder="Ijazah Terakhir dan Tahun (ex: S-1.2009)">
        </div>

        <div class="form-group">
          <label for="bekerja">Mulai Bekerja</label>
          <input type="text" class="form-control" name="mulaiBekerja" placeholder="Mulai bekerja">
        </div>

        <div class="form-group">
          <label for="nomerTelepon">Nomer Telepon</label>
          <input type="text" class="form-control" name="nomerTelepon" placeholder="Nomer Telepon">
        </div>

        <div class="form-group">
          <label for="keterangan">Keterangan</label>
          <input type="text" class="form-control" name="Keterangan" placeholder="Keterangan">
        </div>

        <button type="submit" class="btn btn-primary">Upload</button>
        <?=anchor('admin/dashboard/staff','Cancel',['class'=>'btn btn-warning'])?>

      </form>
   </div>

   
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

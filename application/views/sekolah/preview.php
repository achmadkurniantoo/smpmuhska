<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo base_url() ;?>assets/img/icon1.png" type="image/gif" >
    <title>Pendaftaran</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url()?>assets/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url()?>assets/css/ppdb.css" rel="stylesheet">

    <!-- Custom Fonts -->
     <link href="<?php echo base_url()?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
     <!-- <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css"> -->


<style type="text/css">
  #rules{
    color: red;
  }
</style>
</head>

<body>

<!-- Navbar -->


<!-- Header -->
    <div class="container">
    <div class="alert alert-success" role="alert" align="center" >
    <h2>Data Anda Sudah Tersimpan<br>
    Terima Kasih, telah Mendaftar di SMP Kami..</h2>
    
    <center>
      <div class="alert alert-warning" role="alert" align="center" width="150">
      <?php foreach ($murid as $siswa) : ?>
      <table>
        <tr>
          <td><b>Identitas Siswa :</b></td>
        </tr>

        <tr>
          <td>Nama Lengkap</td>
          <td>:</td>
          <td><?=$siswa->nama_lengkap?></td>
        </tr>

        <tr>
          <td>Tempat & Tanggal Lahir</td>
          <td>:</td>
          <td><?=$siswa->ttgl?></td>
        </tr>

        <tr>
          <td>Jenis Kelamin</td>
          <td>:</td>
          <td><?=$siswa->jenis_kelamin?></td>
        </tr>


        <tr>
          <td>Agama</td>
          <td>:</td>
          <td><?=$siswa->agama?></td>
        </tr>


        <tr>
          <td>Anak Ke</td>
          <td>:</td>
          <td><?=$siswa->anak?></td>
        </tr>


        <tr>
          <td>Status Dalam Keluarga</td>
          <td>:</td>
          <td><?=$siswa->status?></td>
        </tr>


        <tr>
          <td>Alamat Murid</td>
          <td>:</td>
          <td><?=$siswa->alamat?></td>
        </tr>

        

        <tr>
          <td>No. Induk Siswa Nasional (NISN)</td>
          <td>:</td>
          <td><?=$siswa->nisn?></td>
          
        </tr>

        

        <tr>
          <td><b>Sekolah Asal :</b></td>
        </tr>

        <tr>
          <td>Nama Sekolah</td>
          <td>:</td>
          <td><?=$siswa->nama_sekolah?></td>
        </tr>

        <tr>
          <td>Alamat Sekolah</td>
          <td>:</td>
          <td><?=$siswa->alamat_sekolah?></td>
        </tr>

        <tr>
          <td>No. Surat Tanda Lulus (STL)</td>
          <td>:</td>
          <td><?=$siswa->stl?></td>
        </tr>

        

        <tr>
          <td><b>Identitas Orang Tua/Wali :</b></td>
        </tr>

        <tr>
          <td><b>A.Nama Ayah</b></td>
          <td>:</td>
          <td><?=$siswa->nama_ayah?></td>
        </tr>

        <tr>
          <td>No. Telp</td>
          <td>:</td>
          <td><?=$siswa->hp_ayah?></td>
        </tr>

        <tr>
          <td>Agama</td>
          <td>:</td>
          <td><?=$siswa->agama_ayah?></td>
        </tr>

        <tr>
          <td>Pendidikan</td>
          <td>:</td>
          <td><?=$siswa->pendidikan_ayah?></td>
        </tr>

        <tr>
          <td> Pekerjaan</td>
          <td>:</td>
          <td><?=$siswa->pekerjaan_ayah?></td>
        </tr>

        

        <tr>
          <td><b>B. Nama Ibu</b></td>
          <td>:</td>
          <td><?=$siswa->nama_ibu?></td>
        </tr>

        <tr>
          <td> No. Telp</td>
          <td>:</td>
          <td><?=$siswa->hp_ibu?></td>
        </tr>

        <tr>
          <td>Agama</td>
          <td>:</td>
          <td><?=$siswa->agama_ibu?></td>
        </tr>

        <tr>
          <td>Pendidikan</td>
          <td>:</td>
          <td><?=$siswa->pendidikan_ibu?></td>
        </tr>

        <tr>
          <td>Pekerjaan</td>
          <td>:</td>
          <td><?=$siswa->pekerjaan_ibu?></td>
        </tr>

        

        <tr>
          <td><b>C. Nama Wali</b></td>
          <td>:</td>
          <td><?=$siswa->nama_wali?></td>
        </tr>

        <tr>
          <td> No. Telp</td>
          <td>:</td>
          <td><?=$siswa->hp_wali?></td>
        </tr>

        <tr>
          <td>Agama</td>
          <td>:</td>
          <td><?=$siswa->agama_wali?></td>
        </tr>

        <tr>
          <td>Pendidikan</td>
          <td>:</td>
          <td><?=$siswa->pendidikan_wali?></td>
        </tr>

        <tr>
          <td>Pekerjaan</td>
          <td>:</td>
          <td><?=$siswa->pekerjaan_wali?></td>
        </tr>

        <tr>
          <td>Penghasilan Orang Tua / Wali</td>
          <td>:</td>
          <td><?=$siswa->penghasilan?></td>
        </tr>

      </table>
</div>
      <div class="alert alert-danger" role="alert" align="center" >
    <h4>CATATAN : "Semua berkas dimasukkan stopmap <u>WARNA HIJAU</u> untuk <u>Perempuan</u> dan <u>WARNA MERAH</u> untuk <u>Laki-laki</u></br> dan diberi <u>Identitas</u> Dan Silahkan Cetak diatas dengan tekan tombol <u>"Cetak Formulir"</u> dibawah</h4>
  </div>
  <?=anchor('sekolah/cetak_form','Cetak Formulir',['class'=>'btn btn-warning btn-lg','role'=>'button', 'onclick'=>'return(validate();)'])?>
  <?=anchor('sekolah/index','Selesai',['class'=>'btn btn-success btn-lg'])?>

      </div>
    </center>
      
    </div>

    
  <?php endforeach; ?>

    <!-- jQuery -->
    <script src="<?php echo base_url()?>assets/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url()?>assets/js/clean-blog.min.js"></script>
<script type="text/javascript">
 function validate()
{
     var r=confirm("Untuk Print klik Ok?? Dan jika sudah selesai silahkan klik tombol SELESAI ")
     
    if (r==true)

      return true;
      
    else
      return false;
}
</script>
   
</body>

</html>

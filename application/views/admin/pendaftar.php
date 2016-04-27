<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

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
    <style type="text/css">
    th{
        text-align: center;
    }
    </style>

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
                            Pendaftar<small><?=" ".$hasil['title']." ".$hasil['city']?></small>
                        </h1>
                    </div>
                </div>
                <center> 
                            
                            <h2>Rekapan Calon Siswa<br><?=$hasil['title']." ".$hasil['city']?></h2>
                    </div>

       <div class="table-responsive">                    
      <table class="table table-bordered">
<tr class="success">
    <th>No Pendaftaran</th>
    <th>Nama Lengkap</th>
    <th>Alamat</th>
    <th>NISN</th>
    <th>No STL</th>
    <th>Nama Ayah</th>
    <th>Nama Ibu</th>
    <th>Option</th>
</tr>

                             <?php
                $kode = "OL";              
                foreach ($calon_siswa->result() as $siswa)  
         {  ?>
                                    <tr class="warning">
                                    <td><?=$kode.$siswa->no_pendaftaran?></td>
                                    <td><?=$siswa->nama_lengkap?></td>
                                    <td><?=$siswa->alamat?></td>
                                    <td><?=$siswa->nisn?></td>
                                    <td><?=$siswa->stl?></td>
                                    <td><?=$siswa->nama_ayah?></td>
                                    <td><?=$siswa->nama_ibu?></td>
                                    <td><?=anchor('admin/dashboard/cetak_siswa/'.$siswa->no_pendaftaran,'pdf','pdf')?></td>
                                    </tr> <?php }  
         ?> 
                                    

                            </center>

            </table>
            </div>
           <?=anchor('admin/dashboard/cetak','Cetak Rekapan',['class'=>'btn btn-warning'])?>
           <?=anchor('admin/dashboard/reset','Reset',['class'=>'btn btn-danger','role'=>'button','onclick'=>'return confirm(\'Apa anda yakin mau mereset semua adat ini?\')'])?>
            
                

                         
                       
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

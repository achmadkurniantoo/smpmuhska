    <!-- Navigation -->

<nav class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url() ?>sekolah/index"><?=$title." ".$city?></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="<?php echo base_url() ?>sekolah/index">Beranda</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url() ?>sekolah/tentang">Tentang</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url() ?>sekolah/kontak">Kontak</a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Al-Islam<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                       <!--   <li><a href="<?php echo base_url() ?>sekolah/artikel/berita">Berita Sekolah</a></li>
                          <li role="separator" class="divider"></li>
                          <li><a href="<?php echo base_url() ?>sekolah/tausiah">Tausiah</a></li>
                          <li role="separator" class="divider"></li>
                        -->
                          <?php foreach ($kategoris->result() as $kate) { ?>
                              <li><a href="<?php echo base_url() ?>sekolah/artikel/<?=$kate->kategori?>"> <?=$kate->kategori?></a></li>
                              <li role="separator" class="divider"></li>
                          <?php }?>
                
                        </ul>
                      </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Akademik<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                          <li><a href="<?php echo base_url() ?>sekolah/staff">Staff Pengajar</a></li>
                          <li role="separator" class="divider"></li>
                          <li><a href="<?php echo base_url() ?>sekolah/gallery">Gallery</a></li>
                          <li role="separator" class="divider"></li>
                          <li><a href="<?php echo base_url() ?>sekolah/pendaftaran">Pendaftaran Online</a></li>
                        </ul>
                      </li>

            </div>
            <!-- /.navbar-collapse -->

        <!-- /.container -->
    </nav>

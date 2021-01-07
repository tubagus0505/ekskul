<section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="<?php echo $foto; ?>" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p><?php echo $nama; ?></p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>

          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header" style='color:#fff; text-transform:uppercase; border-bottom:2px solid #00c0ef'>MENU <?php echo $level; ?></li>
            <li><a href="index.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
            
            <li class="treeview">
              <a href="#"><i class="fa fa-th"></i> <span>Data Master</span><i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="index.php?view=identitas"><i class="fa fa-circle-o"></i> Data Identitas Sekolah</a></li>
                <li><a href="index.php?view=jurusan"><i class="fa fa-circle-o"></i> Data Jurusan</a></li>
                <li><a href="index.php?view=kelas"><i class="fa fa-circle-o"></i> Data Kelas</a></li>
                <li><a href="index.php?view=ekstrakurikuler"><i class="fa fa-circle-o"></i> Data Ekstrakurikuler</a></li>

              </ul>
            </li>
            <li class="treeview">
              <a href="#"><i class="fa fa-user"></i> <span>Data Pengguna</span><i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="index.php?view=siswa"><i class="fa fa-circle-o"></i> Data Siswa</a></li>
                <li><a href="index.php?view=pembina"><i class="fa fa-circle-o"></i> Data Pembina</a></li>
                <li><a href="index.php?view=admin"><i class="fa fa-circle-o"></i> Data Administrator</a></li>
              </ul>
            </li>
                  <li class="treeview">
              <a href="#"><i class="fa fa-list"></i> <span>Data Ekstrakurikuler</span><i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="index.php?view=paskibra"><i class="fa fa-circle-o"></i> Paskibra </a></li>
                <li><a href="index.php?view=paduansuara"><i class="fa fa-circle-o"></i> Paduan Suara</a></li>
   
              </ul>
            </li>
            <li class="treeview">
              <a href="#"><i class="fa fa-calendar"></i> <span>Jadwal Perlombaan</span><i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="index.php?view=jadwalperlombaan"><i class="fa fa-circle-o"></i> Paskibra</a></li>
              </ul>
            </li>

            <li class="treeview">
            <li><a href="index.php"><i class="fa fa-image"></i> <span>Galeri Ekstrakurikuler</span></a></li>
            
            
			<!--
            <li class="treeview">
              <a href="#"><i class="fa fa-send"></i> <span>SMS Gateway</span><i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="index.php?view=sms"><i class="fa fa-circle-o"></i> Send SMS</a></li>
                <li><a href="index.php?view=broadcast"><i class="fa fa-circle-o"></i> Broadcast SMS</a></li>
                <li><a href="index.php?view=autoreply"><i class="fa fa-circle-o"></i> Autoreply</a></li>
                <li><a href="index.php?view=smstoweb"><i class="fa fa-circle-o"></i> Inbox SMS2WEB</a></li>
                <li><a href="index.php?view=outboxautoreply"><i class="fa fa-circle-o"></i> Outbox Autoreply</a></li>
              </ul>
            </li>
            -->


            <li class="treeview">
              <a href="#"><i class="fa fa-list"></i> <span>Pendaftaran</span><i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="index.php?view=psbmenu"><i class="fa fa-circle-o"></i> Data Menu</a></li>
                <li><a href="index.php?view=psbhalaman"><i class="fa fa-circle-o"></i> Data Halaman</a></li>
                <li><a href="index.php?view=psbaktivasi"><i class="fa fa-circle-o"></i> Kode Aktivasi</a></li>
                <li><a href="index.php?view=psbsma"><i class="fa fa-circle-o"></i> Data Pendaftar SMA</a></li>
                <li><a href="index.php?view=psbsmk"><i class="fa fa-circle-o"></i> Data Pendaftar SMK</a></li>
                <li><a href="index.php?view=psbsmp"><i class="fa fa-circle-o"></i> Data Pendaftar SMP</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#"><i class="fa fa-calendar"></i> <span>Laporan Nilai Siswa</span><i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="index.php?view=extrakulikuler"><i class="fa fa-circle-o"></i> Data Extrakulikuler</a></li>
                <li><a href="index.php?view=prestasi"><i class="fa fa-circle-o"></i> Data Prestasi</a></li>
                <!--<li><a href="index.php?view=bukuinduk"><i class="fa fa-circle-o"></i> Cetak Buku Induk</a></li>-->
              </ul>
            </li>
            
			<!--
            <li class="treeview">
              <a href="#"><i class="fa fa-send"></i> <span>SMS Gateway</span><i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="index.php?view=sms"><i class="fa fa-circle-o"></i> Send SMS</a></li>
                <li><a href="index.php?view=broadcast"><i class="fa fa-circle-o"></i> Broadcast SMS</a></li>
                <li><a href="index.php?view=autoreply"><i class="fa fa-circle-o"></i> Autoreply</a></li>
                <li><a href="index.php?view=smstoweb"><i class="fa fa-circle-o"></i> Inbox SMS2WEB</a></li>
                <li><a href="index.php?view=outboxautoreply"><i class="fa fa-circle-o"></i> Outbox Autoreply</a></li>
              </ul>
            </li>
            -->
			
        </section>
      
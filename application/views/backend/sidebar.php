  	<!-- Sidebar -->
    <div class="sidebar">
        <div class="sidebar-dropdown"><a href="#">Navigation</a></div>

        <!--- Sidebar navigation -->
        <!-- If the main navigation has sub navigation, then add the class "has_sub" to "li" of main navigation. -->
        <ul id="nav">
          <!-- Main menu with font awesome icon -->
          <li class="open"><a href="<?php echo base_url(); ?>admin"><i class="fa fa-home"></i> Dashboard</a></li>
          <li class="has_sub">
          <a href="#"><i class="fa fa-list-alt"></i> Konten  <span class="pull-right"><i class="fa fa-chevron-right"></i></span></a>
            <ul>
              <li><?php echo anchor('backend/donasi', 'Donasi'); ?></li>
              <li><?php echo anchor('backend/tentang', 'Tentang Kami'); ?></li>
              <li><?php echo anchor('backend/tujuan', 'Tujuan'); ?></li>
              <li><?php echo anchor('backend/post', 'Post'); ?></li>
              <li><?php echo anchor('backend/proyek', 'Proyek Sosial'); ?></li>
              <li><?php echo anchor('backend/anggota', 'Anggota'); ?></li>
              <li><?php echo anchor('backend/galeri', 'Galeri'); ?></li>
              <li><?php echo anchor('backend/laporan', 'Laporan Keuangan'); ?></li>
            </ul>
          </li>  
          <?php if ($level == 'Admin') : ?>
          <li class="has_sub">
              <a href="#"><i class="fa fa-users"></i>Pengguna<span class="pull-right"><i class="fa fa-chevron-right"></i></span></a>
              <ul>
                <li><?php echo anchor('backend/pengguna/tambah', 'Tambah Pengguna'); ?></li>
                <li><?php echo anchor('backend/pengguna', 'Daftar Pengguna'); ?></li>
              </ul>
          </li>
          <?php endif; ?>
        </ul>
    </div>

    <!-- Sidebar ends -->
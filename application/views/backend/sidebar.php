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
              <li><?php echo anchor('admin_f/berita', 'Berita'); ?></li>
              <li><?php echo anchor('admin_f/galeri', 'Galeri'); ?></li>
              <li><?php echo anchor('admin_f/kategori', 'Kategori'); ?></li>
            </ul>
          </li>  
          <li class="has_sub">
            <a href="#"><i class="fa fa-list-alt"></i> Menu  <span class="pull-right"><i class="fa fa-chevron-right"></i></span></a>
            <ul>
                <li><?php echo anchor(base_url().'admin_f/slider', 'Slider'); ?></li>
                <li><?php echo anchor(base_url().'admin_f/profil', 'Profil'); ?></li>
                <li><?php echo anchor(base_url().'admin_f/layanan', 'Layanan'); ?></li>
                <li><?php echo anchor(base_url().'admin_f/pelanggan', 'Pelanggan'); ?></li>
                <li><?php echo anchor(base_url().'admin_f/kantor-cabang', 'Kantor Cabang'); ?></li>
                <li><?php echo anchor(base_url().'admin_f/lowongan', 'Lowongan Pekerjaan'); ?></li>
                <li><?php echo anchor(base_url().'admin_f/kontak', 'Kontak'); ?></li>
                <li><?php echo anchor(base_url().'admin_f/buku-tamu', 'Buku Tamu'); ?></li>
            </ul>
          </li>
          <?php if ($level == 1) : ?>
          <li class="has_sub">
              <a href="#"><i class="fa fa-users"></i>Pengguna<span class="pull-right"><i class="fa fa-chevron-right"></i></span></a>
              <ul>
                <li><?php echo anchor('admin_f/pengguna/tambah', 'Tambah Pengguna'); ?></li>
                <li><?php echo anchor('admin_f/pengguna', 'Daftar Pengguna'); ?></li>
              </ul>
          </li>
          <?php endif; ?>
        </ul>
    </div>

    <!-- Sidebar ends -->
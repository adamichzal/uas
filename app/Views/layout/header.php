<?php use App\Models\Konfigurasi_model;
use App\Models\Menu_model;

$konfigurasi  = new Konfigurasi_model();
$menu         = new Menu_model();
$site         = $konfigurasi->listing();
$menu_berita  = $menu->berita();
$menu_profil  = $menu->profil();
$menu_layanan = $menu->layanan();
?>
<!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <!-- <div class="container d-flex align-items-center justify-content-center justify-content-md-between">
      <div class="align-items-center d-none d-md-flex">
        <i class="fa fa-home"></i> <?= tagline(); ?>
      </div>
      <div class="d-flex align-items-center">
        <i class="bi bi-phone"></i> <?= telepon() ?>
      </div>
    </div> -->
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <a class="logo me-auto"><img src="<?= base_url('assets/upload/image/' . $site['logo']) ?>" alt="<?= $site['namaweb'] ?>"></a>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <h1 class="logo me-auto"><a href="index.html">Medicio</a></h1> -->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto " href="<?= base_url() ?>">Home</a></li>
          <li class="dropdown"><a href="#"><span>Outlet</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <?php foreach ($menu_layanan as $menu_layanan) { ?>
              <li><a href="<?= base_url('berita/layanan/' . $menu_layanan['slug_berita']) ?>"><?= $menu_layanan['judul_berita'] ?></a></li>
              <?php } ?>
            </ul>
          </li>

          <li class="dropdown"><a href="#"><span>Catalogue</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="<?= base_url('galeri') ?>">Catalogue</a></li>
              <li><a href="<?= base_url('video') ?>">Catalogue Review</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="<?= base_url('kontak') ?>">Find Us</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
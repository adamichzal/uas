<?php
use App\Models\Konfigurasi_model;

$session     = \Config\Services::session();
$konfigurasi = new Konfigurasi_model();
$site        = $konfigurasi->listing();
?>
<style type="text/css" media="screen">
  .nav-item a:hover {
    color: yellow !important;
  }
</style>
<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url() ?>" class="brand-link">
      <img src="<?= base_url('assets/upload/image/' . $site['icon']) ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light"><?= $site['namaweb'] ?></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= base_url() ?>/assets/admin/dist/img/user2-160x160.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="<?= base_url('admin/akun') ?>" class="d-block"><?= $session->get('nama') ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Dahboard -->
          <li class="nav-item">
            <a href="<?= base_url('admin/dasbor') ?>" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <!-- Berita -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-newspaper"></i>
              <p>Outlet, Article &amp; Banner
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('admin/berita') ?>" class="nav-link">
                  <i class="fas fa-table nav-icon"></i>
                  <p>All Content</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('admin/berita/tambah') ?>" class="nav-link">
                  <i class="fas fa-plus nav-icon"></i>
                  <p>Add Content</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('admin/kategori') ?>" class="nav-link">
                  <i class="fas fa-tags nav-icon"></i>
                  <p>Category Content</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- Galeri -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-image"></i>
              <p>Catalogue
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('admin/galeri') ?>" class="nav-link">
                  <i class="fas fa-table nav-icon"></i>
                  <p>All Catalogue</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('admin/galeri/tambah') ?>" class="nav-link">
                  <i class="fas fa-plus nav-icon"></i>
                  <p>Add Catalogue</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('admin/kategori_galeri') ?>" class="nav-link">
                  <i class="fas fa-tags nav-icon"></i>
                  <p>Category Catalogue</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- Video -->
          <li class="nav-item">
            <a href="<?= base_url('admin/video') ?>" class="nav-link">
              <i class="nav-icon fab fa-youtube"></i>
              <p>Catalogue Review</p>
            </a>
          </li>
          <!-- pengguna -->
          <li class="nav-item">
            <a href="<?= base_url('admin/user') ?>" class="nav-link">
              <i class="nav-icon fas fa-lock"></i>
              <p>Users</p>
            </a>
          </li>
          <!-- Konfigurasi -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-wrench"></i>
              <p>Config Web
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('admin/konfigurasi') ?>" class="nav-link">
                  <i class="fas fa-tasks nav-icon"></i>
                  <p>Config</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('admin/konfigurasi/logo') ?>" class="nav-link">
                  <i class="fas fa-image nav-icon"></i>
                  <p>Update Logo</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('admin/konfigurasi/icon') ?>" class="nav-link">
                  <i class="fas fa-leaf nav-icon"></i>
                  <p>Update Icon</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- logout -->
          <li class="nav-item">
            <a href="<?= base_url('login/logout') ?>" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>Logout</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><?= $title ?></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('admin/dasbor') ?>">Dashboard</a></li>
              <li class="breadcrumb-item active"><?= $title ?></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
            
              <!-- /.card-header -->
              <div class="card-body" style="min-height: 500px;">


<?php
$validation = \Config\Services::validation();
    $errors = $validation->getErrors();
    if (! empty($errors)) {
        echo '<span class="text-danger">' . $validation->listErrors() . '</span>';
    }
?>

<?php if (session('msg')) : ?>
     <div class="alert alert-info alert-dismissible">
         <?= session('msg') ?>
         <button type="button" class="close" data-dismiss="alert"><span>??</span></button>
     </div>
 <?php endif ?>
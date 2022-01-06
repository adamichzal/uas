<main id="main">
  <!-- ======= Breadcrumbs Section ======= -->
  <section class="breadcrumbs">
  </section><!-- End Breadcrumbs Section -->

 <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2><?= $title ?></h2>

        </div>

        <div class="gallery-slider swiper-container">
          <div class="swiper-wrapper align-items-center">
            <?php foreach ($galeri as $galeri) { ?>
            <div class="swiper-slide">
              <a class="gallery-lightbox" href="<?= base_url('assets/upload/image/' . $galeri['gambar']) ?>">
                <img src="<?= base_url('assets/upload/image/' . $galeri['gambar']) ?>" class="img-fluid" alt="<?= $galeri['judul_galeri'] ?>">
              </a>
            </div>
           <?php } ?>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Gallery Section -->
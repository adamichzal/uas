

<!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container">
      <div class="row mt-5">
        <div class="col-md-12 text-center">
          <h2>Artikel</h2>
          <hr>
        </div>
        <?php foreach ($berita2 as $berita2) { ?>
         <div class="col-md-4">
           <div class="card" style="margin-bottom: 20px;">
            <img src="<?= base_url('assets/upload/image/' . $berita2['gambar']) ?>">
            <div class="card-body">
              <h3><?= $berita2['judul_berita'] ?></h3>
              <p class="card-text">
                <?= $berita2['ringkasan'] ?>
              </p>
              <hr>
              <p>
                <a href="<?= base_url('berita/read/' . $berita2['slug_berita']) ?>" class="btn btn-success" style="background-color:#c4c0c1; border:none">
                  <i class="fa fa-chevron-right"></i>  Read More
                </a>
              </p>
            </div>
          </div>
         </div>
       <?php } ?>
      </div>
    </div>
  </section><!-- End Contact Section -->
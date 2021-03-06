<main id="main">
  <!-- ======= Breadcrumbs Section ======= -->
  <section class="breadcrumbs">
  </section><!-- End Breadcrumbs Section -->

  <!-- ======= Contact Section ======= -->
  <div class="section-title">
          <h2><?= $title ?></h2>

        </div>
  <section id="contact" class="contact">
    <div class="container">
      <div class="row mt-5">
        <?php foreach ($video as $video) { ?>
         <div class="col-md-6">
           <div class="card" style="margin-bottom: 20px;">

            <div class="card-body">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe  class="embed-responsive-item" src="https://www.youtube.com/embed/<?= $video['video'] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="min-height: 300px;"></iframe>
              </div>
              <hr>
              <h3><?= $video['judul'] ?></h3>
              <p class="card-text">
                <?= $video['keterangan'] ?>
              </p>

            </div>
          </div>
         </div>
       <?php } ?>
      </div>
    </div>
  </section><!-- End Contact Section -->
</main><!-- End #main -->
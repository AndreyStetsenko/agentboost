<section class="features section">
  <div class="container">
    <div class="heading-block">
      <span class="title-red"><?= the_sub_field( 'hf-title' ) ?></span>
      <h2 class="title-section"><?= the_sub_field( 'hf-subtitle' ) ?></h2>
    </div>
    <div class="row d-justify-center">
    <?php if ( have_rows( 'hf-items' ) ) : ?>
      <?php while ( have_rows( 'hf-items' ) ) : the_row(); ?>
      <div class="col-xl-3 col-md-6 col-sm-6 mb-40 col-12 d-flex">
        <div class="card card-shadow d-flex">
          <div class="card-body d-flex">
            <div class="custom-block">
              <span class="card-ico">
              <?php if ( get_sub_field( 'icon' ) ) : ?>
                <img src="<?= the_sub_field( 'icon' ) ?>" />
              <?php endif ?>  
              </span>
              <div class="card-info">
                <div class="text mt-20 mb-30">
                  <h4 class="title-section"><?= the_sub_field( 'title' ) ?></h3>
                  <p class="text-section text-section16"><?= the_sub_field( 'caption' ) ?></p>
                </div>
                <?php if ( have_rows( 'button' ) ) : ?>
                  <?php while ( have_rows( 'button' ) ) : the_row(); ?>
                    <a href="<?= the_sub_field( 'link' ) ?>" class="btn btn--md btn--primary-outline">
                      <span><?= the_sub_field( 'title' ) ?></span>
                    </a>
                  <?php endwhile; ?>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php endwhile; ?>
    <?php endif; ?>
    </div>
    <?php if ( have_rows( 'hf-video' ) ) : ?>
      <?php while ( have_rows( 'hf-video' ) ) : the_row(); ?>
      <div class="welcome-video">
        <video defer id="player" playsinline  data-poster="<?= the_sub_field( 'poster' ) ?>">
          <?php if ( get_sub_field( 'video' ) ) : ?>
            <source src="<?= the_sub_field( 'video' ) ?>" type="video/mp4" />
          <?php endif; ?>
        </video>
      </div>
      <?php endwhile; ?>
    <?php endif; ?>
  </div>
</section>
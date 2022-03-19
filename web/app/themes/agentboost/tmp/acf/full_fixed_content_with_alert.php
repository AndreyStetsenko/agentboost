<section class="section-100">
  <div class="container">
    <div class="heading-block">
      <h2 class="title-section">
        <?= the_sub_field( 'ffcwa-title' ) ?>
      </h2>
    </div>
    <div class="row">
      <div class="col-xl-6 mb-4 mb-xl-0 d-flex align-items-center">
        <div class="text-content">
          <p>
          <?= the_sub_field( 'ffcwa-textarea-1' ) ?>
          </p>
        </div>
      </div>
      <div class="col-xl-6">
        <div class="img-wrapper">
          <?php if ( get_sub_field( 'ffcwa-image-1' ) ) : ?>
            <img src="<?php the_sub_field( 'ffcwa-image-1' ); ?>" />
          <?php endif ?>
        </div>
      </div>
    </div>
    <div class="row mt-60">
      <div class="col-xl-6">
        <div class="img-wrapper">
        <?php if ( get_sub_field( 'ffcwa-image-2' ) ) : ?>
          <img src="<?php the_sub_field( 'ffcwa-image-2' ); ?>" />
        <?php endif ?>
        </div>
      </div>
      <div class="col-xl-6 mb-4 mb-xl-0 d-flex align-items-center">
        <div class="text-content">
          <p>
          <?= the_sub_field( 'ffcwa-textarea-2' ) ?>
          </p>
        </div>
      </div>
    </div>
    <div class="row mt-60">
      <div class="col-xl-6">
        <div class="text-content">
          <p>
          <?= the_sub_field( 'ffcwa-textarea-3' ) ?>
          </p>
        </div>
      </div>
      <div class="col-xl-6 mb-4 mb-xl-0">
        <div class="text-content">
          <p>
          <?= the_sub_field( 'ffcwa-textarea-4' ) ?>
          </p>
        </div>
      </div>
    </div>
    <div class="card card-shadow mt-60">
      <div class="card-body text-center">
        <p style="max-width: 800px; margin: 0 auto"><?= the_sub_field( 'ffcwa_footer' ) ?></p>
      </div>
    </div>
  </div>
</section>
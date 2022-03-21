<section class="section-90 bg-grey">
  <div class="container">
    <div class="heading-block">
      <span class="title-red"><?= the_sub_field( 'dlwf-title' ) ?></span>
      <h2 class="title-section"><?= the_sub_field( 'dlwf-subtitle' ) ?></h2>
    </div>
    <div class="row">
      <div class="col-xl-6 mb-4 mb-xl-0 d-flex align-items-center">
        <div class="text-content">
          <p class="text-section text-section21"><?= the_sub_field( 'dlwf-main_content' ) ?></p>
          <p class="info-text fs-16">
            <?= the_sub_field( 'dlwf-mini_content' ) ?>
          </p>
        </div>
      </div>
      <div class="col-xl-6">
        <div class="form">
          <?= the_sub_field( 'dlwf-form' ) ?>
        </div>
      </div>
    </div>
  </div>
</section>
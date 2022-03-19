<section class="promo tools h-auto-1200 bg-white left-vector vector-grey">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-xl-6 col-12">
        <div class="heading-block text-start">
          <span class="title-red"><?= the_sub_field( 'insent-title' ) ?></span>
          <h2 class="title-section mb-30"><?= the_sub_field( 'insent-subtitle' ) ?></h2>
          <p class="text-section text-section16"><?= the_sub_field( 'insent-caption' ) ?></p>
        </div>
      </div>
      <div class="col-xl-6 col-12">
        <div class="card card-shadow">
          <div class="card-body">
            <div class="mb-30">
              <h4 class="title-section"><?= the_sub_field( 'insent-title-mini' ) ?></h4>
            </div>
            <div class="text-content">
            <?php if ( have_rows( 'section_insentives_list' ) ) : ?>
              <?php while ( have_rows( 'section_insentives_list' ) ) : the_row(); ?>
              <div class="list">
                <span class="name__list"><?= the_sub_field( 'title' ) ?></span>
                <ul>
                <?php if ( have_rows( 'list' ) ) : ?>
                  <?php while ( have_rows( 'list' ) ) : the_row(); ?>
                    <li><?= the_sub_field( 'item' ) ?></li>
                  <?php endwhile; ?>
                <?php endif; ?>
                </ul>
              </div>
              <?php endwhile; ?>
            <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="section technologies left-vector bg-dark">
  <div class="container">
    <div class="heading-block">
      <span class="title-red"><?= the_sub_field( 'pp-title' ) ?></span>
      <h2 class="title-section --white"><?= the_sub_field( 'pp-subtitle' ) ?></h2>
    </div>
    <div class="row d-justify-center">
      <?php if ( have_rows( 'pp-items' ) ) : ?>
        <?php while ( have_rows( 'pp-items' ) ) : the_row(); ?>
        <div class="col-xl-3 col-md-6 col-sm-6 col-12 d-flex">
          <div class="card mb-40 card-dark d-flex">
            <div class="card-body d-flex">
              <div class="custom-block">
                <span class="card-ico">
                <?php if ( get_sub_field( 'icon' ) ) : ?>
                  <img src="<?php the_sub_field( 'icon' ); ?>" />
                <?php endif ?>  
                </span>
                <div class="card-info">
                  <div class="text mt-20 mb-30">
                    <h4 class="title-section"><?= the_sub_field( 'title' ) ?></h3>
                    <p class="text-section text-section16"><?= the_sub_field( 'caption' ) ?></p>
                  </div>
                  <?php if ( have_rows( 'button' ) ) : ?>
                    <?php while ( have_rows( 'button' ) ) : the_row(); ?>
                      <a href="<?= the_sub_field( 'link' ) ?>" class="btn btn--md btn--primary">
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
      <?php else : ?>
        <?php // no rows found ?>
      <?php endif; ?>
    </div>
  </div>
</section>
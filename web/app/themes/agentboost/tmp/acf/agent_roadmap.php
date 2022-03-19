<section class="section-60 pb-0">
    <div class="container">
        <h3 class="title-section text-center pb-60">
          <?= the_sub_field( 'agroad-title' ) ?>
        </h3>
        <div class="row">
            <div class="col-lg-8 col-12 mb-60">
                <div class="card card-shadow h-100 d-flex align-items-center">
                    <div class="card-body p-30">
                        <ul class="base-list-counter">
                          <?php if ( have_rows( 'agroad-list' ) ) : ?>
                            <?php while ( have_rows( 'agroad-list' ) ) : the_row(); ?>
                            <li>
                                <span class="stepper"></span>
                                <span class="info"><?= the_sub_field( 'title' ) ?></span>
                            </li>
                            <?php endwhile; ?>
                          <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-12 mb-60">
                <div class="img-wrapper h-100">
                <?php if ( get_sub_field( 'agroad-banner' ) ) : ?>
                  <img src="<?php the_sub_field( 'agroad-banner' ); ?>" />
                <?php endif ?>
                </div>
            </div>
        </div>
    </div>
</section>
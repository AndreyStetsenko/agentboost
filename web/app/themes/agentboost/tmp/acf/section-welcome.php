<section class="welcome bg-grey section image-bg">
  <div class="container">
    <div class="timer-wrpr mb-60">
      <div class="timer">
        <div class="timer__item">
          <span class="timer__count">
            85
          </span>
          <span class="timer__text">Day(s)</span>
        </div>
        <div class="timer__item">
          <span class="timer__count">
            5
          </span>
          <span class="timer__text">Hour(s)</span>
        </div>
        <div class="timer__item">
          <span class="timer__count">
            16
          </span>
          <span class="timer__text">Minute(s)</span>
        </div>
        <div class="timer__item">
          <span class="timer__count">
            34
          </span>
          <span class="timer__text">Second(s)</span>
        </div>
      </div>
    </div>
    <div class="welcome-content mt-60">
      <div class="heading-block">
        <span class="title-red"><?= the_sub_field( 'sw-title' ) ?></span>
        <h2 class="title-section"><?= the_sub_field( 'sw-subtitle' ) ?></h2>
      </div>
      <p class="text-center heading-block text-section21 mw-1060 block-center"><?= the_sub_field( 'sw-caption' ) ?></p>
      <div class="cards mb-20">
        <div class="row d-justify-center">
        <?php if ( have_rows( 'sw-items' ) ) : ?>
          <?php while ( have_rows( 'sw-items' ) ) : the_row(); ?>
          <div class="col-xl-4 col-md-6 col-sm-6 col-12 d-flex">
            <div class="card card-grey card-border mb-40 d-flex">
              <div class="card-body d-flex">
                <div class="custom-block ">
                  <span class="card-ico">
                  <?php $icon = get_sub_field( 'icon' ); ?>
                  <?php if ( $icon ) : ?>
                    <img src="<?php echo esc_url( $icon['url'] ); ?>" alt="<?php echo esc_attr( $icon['alt'] ); ?>" />
                  <?php endif; ?>
                  </span>
                  <div class="card-info">
                    <h4 class="title-section"><?= the_sub_field( 'title' ) ?></h3>
                    <p class="text-section text-section16 block-center mw-1060"><?= the_sub_field( 'caption' ) ?></p>
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
      <div class="section-footer">
        <div class="text">
          <p class="text-center text-section16 block-center mw-620"><?= the_sub_field( 'sw-bottom-caption' ) ?></p>
        </div>
        <div class="buttons-group">
        <?php if ( have_rows( 'sw_button_first' ) ) : ?>
          <?php while ( have_rows( 'sw_button_first' ) ) : the_row(); ?>
          <a href="<?= the_sub_field( 'link' ) ?>" class="btn btn--md btn--primary mr-20">
            <span><?= the_sub_field( 'title' ) ?></span>
          </a>
          <?php endwhile; ?>
        <?php endif; ?>

        <?php if ( have_rows( 'sw_button_second' ) ) : ?>
          <?php while ( have_rows( 'sw_button_second' ) ) : the_row(); ?>
          <a href="<?= the_sub_field( 'link' ) ?>" class="btn btn--md btn--primary-outline">
            <span><?= the_sub_field( 'title' ) ?></span>
          </a>
          <?php endwhile; ?>
        <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
  <div class="image-bg__item grey-image" style="
    bottom: -480px;
    right: -450px;
    width: 904px;
    
    transform: matrix(0.95, -0.35, 0.3, 0.94, 0, 0);
  ">
    <?php if ( get_sub_field( 'sw_shape' ) ) : ?>
      <img style="opacity: 0.05" src="<?php the_sub_field( 'sw_shape' ); ?>" />
    <?php endif ?>
  </div>
  <div class="image-bg__item grey-image" style="
    top: -90px;
    left: -280px;
    width: 920px;
    
    transform: matrix(0.94, -0.31, 0.33, 0.95, 0, 0);
  ">
        
        <?php if ( get_sub_field( 'sw_shape' ) ) : ?>
          <img style="opacity: 0.05" src="<?php the_sub_field( 'sw_shape' ); ?>" />
        <?php endif ?>
  </div>
</section>
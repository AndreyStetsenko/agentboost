<section class="section-100">
  <div class="container">
  <?php if ( have_rows( 'wlci-cont' ) ) : $i = 0; ?>
    <?php while ( have_rows( 'wlci-cont' ) ) : the_row(); $i++; ?>
    <div class="row <?= $i != 1 ? 'mt-60' : '' ?>">
      
      <?php if ( $i % 2 == 0 ) : ?>
        <div class="col-xl-6 mt-4 ">
          <div class="img-wrapper">
          <?php $image = get_sub_field( 'image' ); ?>
          <?php if ( $image ) : ?>
            <img src="<?= esc_url( $image['url'] ) ?>" alt="<?= esc_attr( $image['alt'] ) ?>" />
          <?php endif; ?>
          </div>
        </div>
        <div class="col-xl-6 mt-4  mb-4 mb-xl-0 d-flex align-items-center">
          <div class="text-content">
            <h3><?= the_sub_field( 'title' ) ?></h3>
            <?= the_sub_field( 'content' ) ?>
            <?php if ( have_rows( 'button' ) ) : ?>
              <?php while ( have_rows( 'button' ) ) : the_row(); ?>
                <?php if ( get_sub_field( 'title' ) ) : ?>
                  <a href="<?= the_sub_field( 'link' ) ?>" class="btn btn--md btn--primary">
                    <span><?= the_sub_field( 'title' ) ?></span>
                  </a>
                <?php endif; ?>
              <?php endwhile; ?>
            <?php endif; ?>
          </div>
        </div>
      <?php else : ?>
        <div class="col-xl-6 mb-4 mt-4 mb-xl-0 d-flex align-items-center">
          <div class="text-content">
            <h3><?= the_sub_field( 'title' ) ?></h3>
            <?= the_sub_field( 'content' ) ?>
            
            <?php if ( have_rows( 'button' ) ) : ?>
              <?php while ( have_rows( 'button' ) ) : the_row(); ?>
                <?php if ( get_sub_field( 'title' ) ) : ?>
                  <a href="<?= the_sub_field( 'link' ) ?>" class="btn btn--md btn--primary">
                    <span><?= the_sub_field( 'title' ) ?></span>
                  </a>
                <?php endif; ?>
              <?php endwhile; ?>
            <?php endif; ?>
          </div>
        </div>
        <div class="col-xl-6 mt-4 order-xl-1 order-first">
          <div class="img-wrapper">
          <?php $image = get_sub_field( 'image' ); ?>
          <?php if ( $image ) : ?>
            <img src="<?= esc_url( $image['url'] ) ?>" alt="<?= esc_attr( $image['alt'] ) ?>" />
          <?php endif; ?>
          </div>
        </div>
      <?php endif; ?>

    </div>
    <?php endwhile; ?>
  <?php endif; ?>
  </div>
</section>
<section class="offer left-vector" style="background-image: url(<?php get_sub_field( 'twb-image' ) ? the_sub_field( 'twb-image' ) : '' ?>);">
  <div class="container offer__container">
    <div class="offer__body max-w-100">
      <?php if ( get_sub_field( 'twb-title' ) ) : ?>
        <h1 class="title-section --white mb-15"><?= the_sub_field( 'twb-title' ) ?></h1>
      <?php endif; ?>
      <?php if ( get_sub_field( 'twb-subtitle' ) ) : ?>
        <p class="text-section text-section21 --white"><?= the_sub_field( 'twb-subtitle' ) ?></p>
      <?php endif; ?>
    </div>
  </div>
</section>
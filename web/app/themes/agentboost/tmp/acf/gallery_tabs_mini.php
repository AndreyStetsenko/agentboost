<section class="section-100">
  <div class="container">
    <div class="tabs">
      <ul class="navs justify-content-center">
      <?php if ( have_rows( 'gallery_tabs_mini' ) ) : $i = 0; ?>
        <?php while ( have_rows( 'gallery_tabs_mini' ) ) : the_row(); $i++ ?>
          <li class="navs__item">
            <a href="#tab-<?= $i ?>" class="btn btn--md navs__link navs__link--active"><?= the_sub_field( 'title' ) ?></a>
          </li>
        <?php endwhile; ?>
      <?php endif; ?>
      </ul>
      <div class="tabs-items">
      <?php if ( have_rows( 'gallery_tabs_mini' ) ) : $i = 0; ?>
        <?php while ( have_rows( 'gallery_tabs_mini' ) ) : the_row(); $i++ ?>
        <div class="tabs-item" id="tab-<?= $i ?>">
          <div class="img-wrapper">
          <?php if ( get_sub_field( 'image' ) ) : ?>
            <img src="<?php the_sub_field( 'image' ); ?>" />
          <?php endif ?>
          </div>
        </div>
        <?php endwhile; ?>
      <?php endif; ?>
      </div>
    </div>
  </div>
</section>
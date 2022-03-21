<div class="col-12 col-xl-8">
  <div class="heading-block --inner">
    <h2 class="title-section"><?= the_sub_field( 'carrier_title' ) ?></h2>
  </div>
  <div class="text-content mb-40">
    <?= the_sub_field( 'carrier_caption' ) ?>
  </div>
  <div class="row mb-20">
  <?php if ( have_rows( 'carrier_questions' ) ) : ?>
    <?php while ( have_rows( 'carrier_questions' ) ) : the_row(); ?>
    <div class="col-md-6 mb-20">
      <h3 class="h3 fw-semi mb-20 color-primary">
        <?= the_sub_field( 'title' ) ?>
      </h3>
      <div class="card card-shadow d-flex">
        <div class="card-body d-flex">
          <div class="text-content">
            <ul>
            <?php if ( have_rows( 'list' ) ) : ?>
              <?php while ( have_rows( 'list' ) ) : the_row(); ?>
                <li><?= the_sub_field( 'item' ) ?></li>
              <?php endwhile; ?>
            <?php endif; ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <?php endwhile; ?>
  <?php endif; ?>
  </div>
  <div class="text-content mb-40">
    <?= the_sub_field( 'carrier_content' ) ?>
  </div>
</div>

<div class="col-xl-4">
  <div class="sidebar">
    <div class="sidebar__container">
      <div class="sidebar__header d-xl-none">
        <button type="button" class="sidebar__closer btn btn--round btn--shadow" data-filter>
          <img src="<?= get_bloginfo('template_directory') . '/assets/img/ico-close.svg' ?>">
        </button>
        <button type="button" class="sidebar__opener" data-filter>
          <img style="filter: invert(1)" src="<?= get_bloginfo('template_directory') . '/assets/img/ico-filter.svg' ?>">
        </button>
      </div>
      <div class="sidebar__block mb-40 --danger">
      <?= the_sub_field( 'carrier_form' ) ?>
      </div>
      <div class="sidebar__block --transparet">
        <h3 class="h3 fw-semi lh-title mb-15"><?= the_sub_field( 'carrier_browse_products_title' ) ?></h3>
        <div class="multilevel-accordion">
          <ul class="multilevel-accordion__list">
          <?php if ( have_rows( 'carrier_browse_products_nav' ) ) : ?>
            <?php while ( have_rows( 'carrier_browse_products_nav' ) ) : the_row(); ?>
            <li class="multilevel-accordion__item">
              <a href="<?= the_sub_field( 'link' ) ?>" class="multilevel-accordion__link">
                <?= the_sub_field( 'title' ) ?>

                <?php if ( have_rows( 'submenu' ) ) : ?>
                <img src="<?= get_bloginfo('template_directory') . '/assets/img/ico-arrow-down.svg' ?>">
                <?php endif; ?>
              </a>
              <?php if ( have_rows( 'submenu' ) ) : ?>
              <ul class="multilevel-accordion__sub-menu">
                <?php while ( have_rows( 'submenu' ) ) : the_row(); ?>
                <li class="multilevel-accordion__item">
                  <a href="<?= the_sub_field( 'link' ) ?>" class="multilevel-accordion__link">
                    <?= the_sub_field( 'title' ) ?>
                  </a>
                </li>
                <?php endwhile; ?>
              </ul>
              <?php endif; ?>
            </li>
            <?php endwhile; ?>
          <?php endif; ?>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
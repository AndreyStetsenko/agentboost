<section class="section-90">
  <div class="container">
    <div class="heading-block">
      <span class="title-red"><?= the_sub_field( 'lprog-title' ) ?></span>
      <h2 class="title-section"><?= the_sub_field( 'lprog-subtitle' ) ?></h2>
    </div>
    <div class="row">
    <?php if ( have_rows( 'lprog-items' ) ) : ?>
      <?php while ( have_rows( 'lprog-items' ) ) : the_row(); ?>
      <div class="col-lg-4 mb-4 mb-lg-0">
        <div class="card card-border">
          <div class="card-body">
            <div class="custom-block">
              <div class="card-info align-items-center">
                <h3 class="title-section mb-20"><?= the_sub_field( 'title' ) ?></h3>
                <?php if ( have_rows( 'button' ) ) : ?>
                  <?php while ( have_rows( 'button' ) ) : the_row(); ?>
                    <a href="<?= the_sub_field( 'link' ) ?>" class="btn btn--md btn--primary">
                      <?= the_sub_field( 'title' ) ?>
                    </a>
                  <?php endwhile; ?>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php endwhile; ?>
    <?php endif; ?>
    </div>
  </div>
</section>
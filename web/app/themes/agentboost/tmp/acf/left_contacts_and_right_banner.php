<?php if ( have_rows( 'left_contacts_and_right_banner' ) ) : ?>
  <?php while ( have_rows( 'left_contacts_and_right_banner' ) ) : the_row(); ?>
  <section class="section-90">
    <div class="container">
      <div class="row">
        <div class="col-xl-6 mb-4 mb-xl-0 d-flex align-items-center">
          <div class="text-content">
            <div class="mb-20">
              <span class="title-red"><?= the_sub_field( 'title' ) ?></span>
              <h3><?= the_sub_field( 'subtitle' ) ?></h3>
            </div>
            <div class="mb-20">
              <p><?= the_sub_field( 'caption' ) ?></p>
            </div>
            <div class="mb-20">
              <div class="contacts">
                <div class="contacts-item">
                  <a href="mailto:<?= the_sub_field( 'email' ) ?>" class="fw-semi text-decoration-none">
                    <?= the_sub_field( 'email' ) ?>
                  </a>
                </div>
                <div class="contacts-item"><span class="fw-semi"><?= the_sub_field( 'phone' ) ?></span></div>
              </div>
            </div>
            <?php if ( have_rows( 'button' ) ) : ?>
              <?php while ( have_rows( 'button' ) ) : the_row(); ?>
                <?php if ( get_sub_field( 'title' ) ) : ?>
                  <a href="<?= the_sub_field( 'link' ) ?>" type="button" class="btn btn--md btn--primary">
                    <span><?= the_sub_field( 'title' ) ?></span>
                  </a>
                <?php endif; ?>
              <?php endwhile; ?>
            <?php endif; ?>
          </div>
        </div>
        <div class="col-xl-6">
          <div class="img-wrapper">
            <?php if ( get_sub_field( 'banner' ) ) : ?>
              <img src="<?php the_sub_field( 'banner' ); ?>" />
            <?php endif ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php endwhile; ?>
<?php endif; ?>
<section>
  <div class="base-list-counter white-black">
  <?php if ( have_rows( 'base_list_counter' ) ) : $i = 0; ?>
    <?php while ( have_rows( 'base_list_counter' ) ) : the_row(); $i++; ?>

    <div class="item-section">
        <div class="container">
            <div class="row">
              
            <?php if ( $i % 2 == 0 ) : ?>

              <div class="col-lg-6 col-12 <?= $i == 6 ? 'text-md-right' : '' ?>">
                <?= the_sub_field( 'content' ) ?>

                <?php if ( have_rows( 'button' ) ) : ?>
                  <?php while ( have_rows( 'button' ) ) : the_row(); ?>
                    <?php if ( get_sub_field( 'title' ) != '' ) : ?>
                    <a href="<?= the_sub_field( 'link' ) ?>" class="btn btn--md btn--primary mt-40">
                      <?= the_sub_field( 'title' ) ?>
                    </a>
                    <?php endif; ?>
                  <?php endwhile; ?>
                <?php endif; ?>
              </div>
              <div class="col-lg-6 col-12">
                  <div class="heading-column end-el">
                      <span class="stepper stepper--filled stepper--not-border"></span>
                      <h3 class="title-section mw-490"><?= the_sub_field( 'title' ) ?></h3>
                  </div>
              </div>

            <?php else : ?>

              <div class="col-lg-6 col-12">
                  <div class="heading-column">
                      <span class="stepper stepper--filled stepper--not-border"></span>
                      <h3 class="title-section mw-490"><?= the_sub_field( 'title' ) ?></h3>
                  </div>
              </div>
              <div class="col-lg-6 col-12">
                <?= the_sub_field( 'content' ) ?>

                <?php if ( have_rows( 'button' ) ) : ?>
                  <?php while ( have_rows( 'button' ) ) : the_row(); ?>
                    <?php if ( get_sub_field( 'title' ) != '' ) : ?>
                    <a href="<?= the_sub_field( 'link' ) ?>" class="btn btn--md btn--primary mt-40">
                      <?= the_sub_field( 'title' ) ?>
                    </a>
                    <?php endif; ?>
                  <?php endwhile; ?>
                <?php endif; ?>
              </div>

            <?php endif; ?>
            
            </div>
        </div>
    </div>
    <?php endwhile; ?>
  <?php endif; ?>
  </div>
</section>
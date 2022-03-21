<section>
  <div class="container">
  <?php if ( have_rows( 'mstage-top' ) ) : ?>
    <?php while ( have_rows( 'mstage-top' ) ) : the_row(); ?>
    <div class="section border-bottom-gray pb-40">
      <div class="big-list-block">
        <span class="big-list-block-name"><?= the_sub_field( 'mstage-title' ) ?></span>
          <div class="big-list">
          <?php if ( have_rows( 'mstage-items' ) ) : ?>
            <?php while ( have_rows( 'mstage-items' ) ) : the_row(); ?>
            <div class="column-4">
              <div class="custom-li">
                <span class="number">
                <?php if ( get_sub_field( 'img' ) ) : ?>
                  <img src="<?php the_sub_field( 'img' ); ?>" />
                <?php endif ?>  
                </span>
                <span class="info">
                  <span class="info-heading mw-56"><?= the_sub_field( 'title' ) ?></span>
                  <span class="info-text mw-80"><?= the_sub_field( 'caption' ) ?></span>
                </span>
              </div>
            </div>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
    <?php endwhile; ?>
  <?php endif; ?>

  <?php if ( have_rows( 'mstage-links' ) ) : ?>
    <?php while ( have_rows( 'mstage-links' ) ) : the_row(); ?>
    <div class="section border-bottom-gray">
      <div class="heading-block mw-800 m-auto">
        <h3 class="title-section"><?= the_sub_field( 'title' ) ?></h3>
      </div>
      <?php if ( have_rows( 'links' ) ) : ?>
        <ul class="block-links justify-content-center">
        <?php while ( have_rows( 'links' ) ) : the_row(); ?>
          <li>
            <a href="<?= the_sub_field( 'link' ) ?>" class="btn btn--md btn--shadow link-default">
              <?= the_sub_field( 'title' ) ?>
            </a>
          </li>
        <?php endwhile; ?>
        </ul>
      <?php endif; ?>
    </div>
    <?php endwhile; ?>
  <?php endif; ?>

    <div class="section border-bottom-gray">
    <?php if ( have_rows( 'mstage-table' ) ) : ?>
      <?php while ( have_rows( 'mstage-table' ) ) : the_row(); ?>
      <div class="table hidden-table">
        <div class="ova-table">
          <div class="table-default">
            <?php if ( have_rows( 'head' ) ) : $i = 0; ?>
            <div class="table-header">
              <?php while ( have_rows( 'head' ) ) : the_row(); $i++; ?>
                <div class="column <?= $i == 1 ? '' : 'grey ' ?>center">
                  <span class="info"><?= the_sub_field( 'title' ) ?></span>
                </div>
              <?php endwhile; ?>
            </div>
            <?php endif; ?>
            <?php if ( have_rows( 'body' ) ) : ?>
            <div class="table-body">
              <?php while ( have_rows( 'body' ) ) : the_row(); ?>
              <div class="table-body-item">
                <?php if ( have_rows( 'row' ) ) : $i = 0; ?>
                  <?php while ( have_rows( 'row' ) ) : the_row(); $i++; ?>
                    <?php if ( $i == 1 ) : ?>
                      <div class="column column-dbl grey flex-20">
                        <div class="column p-20 justify-content-space-between">
                          <span class="info"><?= the_sub_field( 'title' ) ?></span>
                          <span class="ico">
                            <img src="<?= get_bloginfo('template_directory') . "/assets/img/ico-info.svg"; ?>">
                          </span>
                        </div>
                      </div>
                    <?php endif; ?>
                  <?php endwhile; ?>
                  <div class="column column-dbl flex-auto">
                    <?php while ( have_rows( 'row' ) ) : the_row(); $i++; ?>
                      <?php if ( $i > 1 ) : ?>
                        <div class="column center"><span class="info"><?= the_sub_field( 'title' ) ?></span></div>
                      <?php endif; ?>
                    <?php endwhile; ?>
                  </div>
                <?php endif; ?>
              </div>
              <?php endwhile; ?>
            </div>
            <?php endif; ?>
          </div>
          <div class="table-footer">
            <a href="#" class="btn color-primary more-show-btn">
              <span class="ico"><img src="<?= get_bloginfo('template_directory') . "/assets/img/show-arrow.png"; ?>"></span>
              <span class="show">Show More</span>
              <span class="less">Show Less</span>
            </a>
          </div>
        </div>
      </div>
        <?php endwhile; ?>
      <?php endif; ?>
      <?php if ( have_rows( 'mstage-register' ) ) : ?>
				<?php while ( have_rows( 'mstage-register' ) ) : the_row(); ?>
        <div class="action-section text-center mt-40">
          <a href="<?= the_sub_field( 'link' ) ?>" class="btn btn--md btn--primary">
            <span><?= the_sub_field( 'title' ) ?></span>
          </a>
        </div>
				<?php endwhile; ?>
			<?php endif; ?>
    </div>

    <div class="section border-bottom-gray">
    <?php if ( have_rows( 'mstage-content' ) ) : $i = 0; ?>
      <?php while ( have_rows( 'mstage-content' ) ) : the_row(); $i++; ?>
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
              <p>
                Once you've submitted a contract request, we receive that information in real time. One of our agent support and onboarding specialists will follow up within 24 hours to confirm your request, and will begin to perform that work on your behalf. If there are any outstanding items or additional information needed, they will advise you and get your appointment and contracting performed as quickly as possible.
              </p>
              <p>
                Some of the documents that you'll need to get started are:
              </p>
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

  </div>
</section>
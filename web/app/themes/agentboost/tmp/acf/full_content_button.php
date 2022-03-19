<?php if ( have_rows( 'full_content_button' ) ) : ?>
  <?php while ( have_rows( 'full_content_button' ) ) : the_row(); ?>
  <section class="trigger mb-50">
    <div class="container">
      <a href="<?= the_sub_field( 'button_link' ) ?>" class="btn btn--md btn--shadow"><?= the_sub_field( 'button_title' ) ?></a>
    </div>
  </section>
  <?php endwhile; ?>
<?php endif; ?>
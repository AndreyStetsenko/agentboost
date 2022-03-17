<?php
/**
 * Template Name: Front page
 */

get_header();
?>

<div class="wrapper">
<?php require get_template_directory() . '/tmp/header.php'; ?>

<main class="main">
<?php if ( have_rows( 'page_elements' ) ): ?>
	<?php while ( have_rows( 'page_elements' ) ) : the_row(); ?>
		<?php if ( get_row_layout() == 'banner' ) : ?>
      
      <?php require get_template_directory() . '/tmp/acf/banner.php'; ?>

    <?php elseif ( get_row_layout() == 'full_content_button' ) : ?>
			
      <?php require get_template_directory() . '/tmp/acf/full-content-button.php'; ?>

		<?php elseif ( get_row_layout() == 'home_features' ) : ?>
			
      <?php require get_template_directory() . '/tmp/acf/home-features.php'; ?>

		<?php elseif ( get_row_layout() == 'section_welcome' ) : ?>
			
      <?php require get_template_directory() . '/tmp/acf/section-welcome.php'; ?>

		<?php elseif ( get_row_layout() == 'products_portfolio' ) : ?>
			
      <?php require get_template_directory() . '/tmp/acf/products-portfolio.php'; ?>

		<?php endif; ?>
  <?php endwhile; ?>
<?php endif; ?>
		
		
		<!-- D:Dublicate -->	
	</main>
	<?php require get_template_directory() . '/tmp/footer.php'; ?>
</div>
	
<?php require get_template_directory() . '/tmp/footer-popup.php'; ?>
<?php
get_footer();

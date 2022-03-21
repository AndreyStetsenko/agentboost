<?php
/**
 * Template Name: Map
 */

get_header();
?>

<div class="wrapper wrapper--pt">
<?php require get_template_directory() . '/tmp/header.php'; ?>

  <main class="main">

    <?php require get_template_directory() . '/acf.php'; ?>

	</main>
</div>
	
<?php require get_template_directory() . '/tmp/footer-popup.php'; ?>
<?php
get_footer();

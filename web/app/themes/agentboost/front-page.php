<?php
/**
 * Template Name: Front page
 */

get_header();
?>

<div class="wrapper">
<?php require get_template_directory() . '/tmp/header.php'; ?>

	<main class="main">

		<?php require get_template_directory() . '/acf.php'; ?>
		
		<!-- D:Dublicate -->	
	</main>
	<?php require get_template_directory() . '/tmp/footer.php'; ?>
</div>
	
<?php require get_template_directory() . '/tmp/footer-popup.php'; ?>
<?php
get_footer();

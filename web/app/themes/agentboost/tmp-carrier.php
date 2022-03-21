<?php
/**
 * Template Name: Carrier
 */

get_header();
?>

<div class="wrapper wrapper--pt">
<?php require get_template_directory() . '/tmp/header.php'; ?>

  <main class="main blog">
		<div class="container">
			<div class="row">

        <?php require get_template_directory() . '/acf.php'; ?>

			</div>
		</div>
	</main>
	<?php require get_template_directory() . '/tmp/footer.php'; ?>
</div>
	
<?php require get_template_directory() . '/tmp/footer-popup.php'; ?>
<?php
get_footer();

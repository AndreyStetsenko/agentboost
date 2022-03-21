<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Agentboost
 */

get_header();
?>

	<div class="wrapper wrapper--pt">
		<?php require get_template_directory() . '/tmp/header.php'; ?>

		<main class="main">

			<div class="container">

			<?php
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content', get_post_type() );

			endwhile; // End of the loop.
			?>

			</div>

		</main>
		<?php require get_template_directory() . '/tmp/footer.php'; ?>
	</div>

<?php
get_footer();

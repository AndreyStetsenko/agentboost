<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Agentboost
 */

get_header();
?>

	<div class="wrapper wrapper--pt">
		<?php require get_template_directory() . '/tmp/header.php'; ?>

		<main class="main">

			<?php if ( have_posts() ) : ?>

				<section class="offer left-vector" style="background-image: url(<?= get_bloginfo('template_directory') . "/assets/img/unsplash_Hb6uWq0i4MI.jpg" ?>);">
					<div class="container offer__container">
						<div class="offer__body max-w-100">
											<h2 class="title-section --white"><?= the_archive_title() ?></h2>
											<h1 class="title-section --white mb-15"><?= the_archive_description() ?></h1>
												</div>
					</div>
				</section>

				<div class="container mt-5 mb-15">
					<div class="row">
						<?php
						/* Start the Loop */
						while ( have_posts() ) :
							the_post();

							/**
							 * Run the loop for the search to output the results.
							 * If you want to overload this in a child theme then include a file
							 * called content-search.php and that will be used instead.
							 */
							get_template_part( 'template-parts/content', 'search' );

						endwhile; ?>
					</div>
				</div>

				<?php
				the_posts_navigation();

				else :

				get_template_part( 'template-parts/content', 'none' );

				endif;
				?>

		</main>
		<?php require get_template_directory() . '/tmp/footer.php'; ?>
	</div>

<?php
get_footer();

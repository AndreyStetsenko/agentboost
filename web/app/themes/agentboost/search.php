<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Agentboost
 */

get_header();
?>

	<div class="wrapper wrapper--pt">
		<?php require get_template_directory() . '/tmp/header.php'; ?>

		<main class="main">

			<?php if ( have_posts() ) : ?>

				<section class="offer left-vector" style="background-image: url(http://agentboost.test/app/uploads/2022/03/unsplash_T8cMZD95YxA.jpg);">
					<div class="container offer__container">
						<div class="offer__body max-w-100">
											<h2 class="title-section --white">Search Results for</h2>
											<h1 class="title-section --white mb-15"><?= get_search_query() ?></h1>
												</div>
					</div>
				</section>

				<div class="container mt-15 mb-15">
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

	<style>
		.posts-navigation {
			display: flex;
			justify-content: center;
			margin-bottom: 50px;
		}

		.nav-previous a,
		.nav-next a {
			background: #ed4842;
			padding: 12px 25px;
			border-radius: 25px;
			color: #fff;
			margin: 0 15px;
		}
	</style>

<?php
get_footer();

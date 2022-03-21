<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Agentboost
 */

$post_id = get_the_ID();
$thumbnail = get_the_post_thumbnail( $post_id, 'thumbnail', array('class' => 'blog-card__image') ); 
$def_thumbnail = get_bloginfo('template_directory') . '/assets/img/default-img.jpeg';

?>

<div class="col-md-4" id="post-<?php the_ID(); ?>">
	<div class="blog-card blog-card--wide-md mb-40">
		<figure class="blog-card__image-wrap">
			<a href="<?= get_permalink() ?>">
				<?= $thumbnail ? $thumbnail : '<img src="' . $def_thumbnail . '" class="blog-card__image">' ?>
			</a>
		</figure>
		<div class="blog-card__body">
			<?php
				$categories = get_the_category( $post_id );
				if( $categories ) {
					echo '<span class="blog-card__label">' . $categories[0]->name . '</span>';
				}
			?>
			<h2 class="blog-card__title"><?php the_title(); ?></h2>
			<ul class="blog-card__list">
				<li class="blog-card__item">
					<span class="blog-card__icon">
						<img style="opacity: 0.4" src="<?= get_template_directory_uri() . "/assets/img/ico-calendar-sm.svg" ?>">
					</span><?= the_time('M d, Y') ?>
				</li>
			</ul>
		</div>
	</div>
</div>


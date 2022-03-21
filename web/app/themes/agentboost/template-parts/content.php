<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Agentboost
 */

?>

<section class="offer border-bottom-gray bg-white left-vector vector-grey">
	<div class="container offer__container">
		<div class="row align-items-center">
			<div class="col-12">
				<div class="heading-block mw-988 pb-0 text-center">
					<h2 class="title-section mb-30"><?php the_title(); ?></h2>
					<p class="text-section text-section16"><?php the_content(); ?></p>
				</div>
			</div>
		</div>
	</div>
</section>
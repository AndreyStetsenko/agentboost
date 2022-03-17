<?php if ( have_rows( 'banner_banner' ) ) : ?>
		<section class="promo">
			<div class="swiper promo-slider">
				<div class="swiper-wrapper">
        <?php while ( have_rows( 'banner_banner' ) ) : the_row(); ?>
					<div class="swiper-slide left-vector" style="background:url('<?= the_sub_field( 'image' ) ?>') no-repeat center top / cover;">
						<div class="container heading-promo-block">
							<div class="slider-content-wrpr">
								<div class="text">
									<h1 class="title-section --white mb-15"><?= the_sub_field( 'title' ) ?></h1>
									<p class="text-section text-section21 --white"><?= the_sub_field( 'caption' ) ?></p>
								</div>
							</div>
							<div class="action">
								<?php if ( have_rows( 'first_button' ) ) : ?>
									<?php while ( have_rows( 'first_button' ) ) : the_row(); ?>
									<a href="<?= the_sub_field( 'link' ) ?>" class="btn btn--md btn--primary">
										<span><?= the_sub_field( 'title' ) ?></span>
									</a>
									<?php endwhile; ?>
								<?php endif; ?>
								<?php if ( have_rows( 'second_button' ) ) : ?>
									<?php while ( have_rows( 'second_button' ) ) : the_row(); ?>
									<a href="<?= the_sub_field( 'link' ) ?>" class="btn btn--md btn--shadow">
										<span><?= the_sub_field( 'title' ) ?></span>
									</a>
									<?php endwhile; ?>
								<?php endif; ?>							
							</div>
						</div>
					</div>	
					<?php endwhile; ?>
        </div>
				<!-- If we need navigation buttons -->
				<div class="control-panel">
					<!-- If we need pagination -->
					<div class="swiper-pagination"></div>
					<div class="swiper-button-prev"></div>
					<div class="swiper-button-next"></div>
				</div>
			</div>
		</section>
		<?php endif; ?>
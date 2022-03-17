
<footer class="footer">
	<div class="footer__top">
		<div class="container-xxl footer__container">
		<?php if ( have_rows( 'footer_head', 'option' ) ) : ?>
			<?php while ( have_rows( 'footer_head', 'option' ) ) : the_row(); ?>
			<div class="footer-start">
				<?php if ( get_sub_field( 'image' ) ) : ?>
					<div class="footer-start__img sm-hiddem">
						<img src="<?= the_sub_field( 'image' ) ?>" />
					</div>
				<?php endif ?>
				<div class="footer-start__content">
					<h2 class="footer-start__title">
						<?= the_sub_field( 'title' ) ?>
					</h2>
					<h3 class="footer-start__subtitle"><?= the_sub_field( 'subtitle' ) ?></h3>
					<p class="footer-start__text"><?= the_sub_field( 'caption' ) ?></p>
					<?php if ( have_rows( 'button' ) ) : ?>
						<?php while ( have_rows( 'button' ) ) : the_row(); ?>
						<a href="<?= the_sub_field( 'link' ) ?>" type="button" class="btn btn--md btn--shadow">
							<span><?= the_sub_field( 'title' ) ?></span>
						</a>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</div>
			<?php endwhile; ?>
		<?php endif; ?>
			<div class="row">
				<div class="col-lg-3 footer-item">
					<nav class="footer-nav height-full">
						<div class="footer-nav__item height-full">
						<?php if ( get_field( 'footer_logo', 'option' ) ) : ?>
							<a href="index.php" class="logo">
								<img src="<?= the_field( 'footer_logo', 'option' ) ?>">
							</a>
						<?php endif ?>

						<?php if ( have_rows( 'footer_partners', 'option' ) ) : ?>
							<div class="footer-partners">
								<div class="footer-partners__wrapper">
								<?php while ( have_rows( 'footer_partners', 'option' ) ) : the_row(); ?>
									<div class="footer-partners__item" style="<?= the_sub_field( 'custom_styles' ) ?>">
										<?php if ( get_sub_field( 'img' ) ) : ?>
											<img src="<?php the_sub_field( 'img' ); ?>" />
										<?php endif ?>
									</div>
								<?php endwhile; ?>
								</div>
							</div>
						<?php endif; ?>
						</div>
					</nav>
				</div>

				<?php if ( have_rows( 'footer_contacts', 'option' ) ) : ?>
				<div class="col-lg-5 footer-item">
					<nav class="footer-nav">
						<div class="row">
						<?php while ( have_rows( 'footer_contacts', 'option' ) ) : the_row(); ?>
							<div class="col-sm-6 mb-4 mb-sm-0">
								<div class="footer-nav__item">
								<?php if ( have_rows( 'items' ) ) : ?>
									<?php while ( have_rows( 'items' ) ) : the_row(); ?>
									<h3 class="footer-title">
										<?= the_sub_field( 'title' ) ?>
									</h3>
									<ul class="footer-nav__list">
										<?php if ( have_rows( 'item' ) ) : ?>
											<?php while ( have_rows( 'item' ) ) : the_row(); ?>
											<li class="footer-nav__item">
												<?php if ( get_sub_field( 'check_link' ) == 1 ) : ?>
													<a href="<?= the_sub_field( 'link' ) ?>"><?= the_sub_field( 'content' ) ?></a>
												<?php else : ?>
													<p><?= the_sub_field( 'content' ) ?></p>
												<?php endif; ?>
											</li>
											<?php endwhile; ?>
										<?php endif; ?>
									</ul>
									<?php endwhile; ?>
								<?php endif; ?>
								</div>
							</div>
						<?php endwhile; ?>
						</div>
					</nav>
				</div>
				<?php endif; ?>

				<div class="col-lg-4 footer-item">
					<nav class="footer-nav height-full p-0">
						<div class="footer-nav__item height-full">
							<div class="footer-social-wrpr">
								<h3 class="footer-social-title">Follow Us:</h3>
								<?php if ( have_rows( 'footer_socials', 'option' ) ) : ?>
								<div class="footer-social flex-grow-1">
									<?php while ( have_rows( 'footer_socials', 'option' ) ) : the_row(); ?>
									<a href="<?= the_sub_field( 'link' ) ?>" class="footer-social__item">
									<?php if ( get_sub_field( 'icon' ) ) : ?>
										<img src="<?php the_sub_field( 'icon' ); ?>" />
									<?php endif ?>
									</a>
									<?php endwhile; ?>
								</div>
								<?php endif; ?>
							</div>
						</div>
					</nav>
				</div>
			</div>
		</div>
	</div>
	<div class="footer__bottom">
		<div class="container-xxl footer__container">
			<div class="footer__bottom-body">
				<div class="footer__bottom-text">
					<p class="footer__bottom-privaci">© Copyright 2021 Agent Boost. All rights reserved.</p>
					<p class="footer__bottom-privaci">
						The information on this website is for agent use only and not intended for use by the general public.
					</p>
				</div>
				<ul class="footer__bottom-list">
					<li>
						<a href="<?= get_privacy_policy_url() ?>">Privacy Policy</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	</div>
</footer>

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
							<a href="index.php" class="logo">
								<img src="<?php echo get_template_directory_uri() . "/assets/img/logo-dark.png" ?>" alt="">
							</a>
							<div class="footer-partners">
								<div class="footer-partners__wrapper">
									<div class="footer-partners__item" style="max-width: 70px;"><img src="<?php echo get_template_directory_uri() . "/assets/img/nahu-logo.png" ?>" alt=""></div>
									<div class="footer-partners__item"><img src="<?php echo get_template_directory_uri() . "/assets/img/BBB-Accredited.png" ?>" alt=""></div>
								</div>
							</div>
						</div>
					</nav>
				</div>
				<div class="col-lg-5 footer-item">
					<nav class="footer-nav">
						<div class="row">
							<div class="col-sm-6 mb-4 mb-sm-0">
								<div class="footer-nav__item">
									<h3 class="footer-title">
										dial to
									</h3>
									<ul class="footer-nav__list">
										<li class="footer-nav__item">
											<a href="tel:+8553781451">855-378-1451</a>
										</li>
									</ul>
									<h3 class="footer-title">
										email
									</h3>
									<ul class="footer-nav__list">
										<li class="footer-nav__item">
											<a href="mailto:info@agent-boost.com">info@agent-boost.com</a>
										</li>
									</ul>
								</div>
							</div>
							<div class="col-sm-5">
								<div class="footer-nav__item">									
									<h3 class="footer-title">
										Location
									</h3>
									<ul class="footer-nav__list">
										<li class="footer-nav__item">
											<p>10421 S Jordan Gateway, South Jordan, UT 84095</p>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</nav>
				</div>
				<div class="col-lg-4 footer-item">
					<nav class="footer-nav height-full p-0">
						<div class="footer-nav__item height-full">
							<div class="footer-social-wrpr">
								<h3 class="footer-social-title">Follow Us:</h3>
								<div class="footer-social flex-grow-1">
									<a href="#" class="footer-social__item">
										<img src="<?php echo get_template_directory_uri() . "/assets/img/twitter.svg" ?>" alt="">
									</a>
									<a href="#" class="footer-social__item">
										<img src="<?php echo get_template_directory_uri() . "/assets/img/instagram.svg" ?>" alt="">
									</a>
									<a href="#" class="footer-social__item">
										<img src="<?php echo get_template_directory_uri() . "/assets/img/linkedin.svg" ?>" alt="">
									</a>
									<a href="#" class="footer-social__item">
										<img src="<?php echo get_template_directory_uri() . "/assets/img/facebook.svg" ?>" alt="">
									</a>
								</div>
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
						<a href="#">Privacy Policy</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	</div>
</footer>
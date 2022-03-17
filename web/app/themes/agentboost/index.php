<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Agentboost
 */

get_header();
?>

<div class="wrapper">
<?php require get_template_directory() . '/tmp/header.php'; ?>
<main class="main">
		<?php if ( have_rows( 'banner' ) ) : ?>
		<section class="promo">
			<div class="swiper promo-slider">
				<div class="swiper-wrapper">

					<?php while ( have_rows( 'banner' ) ) : the_row(); ?>
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
		<section class="trigger mb-50">
			<div class="container">
				<a href="#" class="btn btn--md btn--shadow">Click here for upcoming training</a>
			</div>
		</section>
		<section class="features section">
			<div class="container">
				<div class="heading-block">
					<span class="title-red">Our Features</span>
					<h2 class="title-section">Why choose Agent Boost</h2>
				</div>
				<div class="row d-justify-center">
					<div class="col-xl-3 col-md-6 col-sm-6 mb-40 col-12 d-flex">
						<div class="card card-shadow d-flex">
							<div class="card-body d-flex">
								<div class="custom-block">
									<span class="card-ico"><?php include "assets/img/blank-money-banknote.svg"; ?></span>
									<div class="card-info">
										<div class="text mt-20 mb-30">
											<h4 class="title-section">Training</h3>
											<p class="text-section text-section16">Train with marketing tools</p>
										</div>
										<a href="#" class="btn btn--md btn--primary-outline">
											<span>Learn More</span>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-md-6 col-sm-6 mb-40 col-12 d-flex">
						<div class="card card-shadow d-flex">
							<div class="card-body d-flex">
								<div class="custom-block">
									<span class="card-ico"><?php include "assets/img/laptop-book-read.svg"; ?></span>
									<div class="card-info">
										<div class="text mt-20 mb-30">
											<h4 class="title-section">LMS platform (Ed App)</h3>
											<p class="text-section text-section16">Platform for marketing </p>
										</div>
										<a href="#" class="btn btn--md btn--primary-outline">
											<span>Learn More</span>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-md-6 col-sm-6 mb-40 col-12 d-flex">
						<div class="card d-flex card-shadow">
							<div class="card-body d-flex">
								<div class="custom-block">
									<span class="card-ico"><?php include "assets/img/analytics-ico.svg"; ?></span>
									<div class="card-info">
										<div class="text mt-20 mb-30">
											<h4 class="title-section">Analytics</h3>
											<p class="text-section text-section16">Analytics and statistics</p>
										</div>
										<a href="#" class="btn btn--md btn--primary-outline">
											<span>Learn More</span>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-md-6 col-sm-6 mb-40 col-12 d-flex">
						<div class="card card-shadow d-flex">
							<div class="card-body d-flex">
								<div class="custom-block">
									<span class="card-ico"><?php include "assets/img/browser-ico.svg"; ?></span>
									<div class="card-info">
										<div class="text mt-20 mb-30">
											<h4 class="title-section">CRM</h3>
											<p class="text-section text-section16">Best CRM systems for you</p>
										</div>
										<a href="#" class="btn btn--md btn--primary-outline">
											<span>Learn More</span>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-md-6 col-sm-6 mb-40 col-12 d-flex">
						<div class="card card-shadow d-flex">
							<div class="card-body d-flex">
								<div class="custom-block">
									<span class="card-ico"><?php include "assets/img/synchronize-ico.svg"; ?></span>
									<div class="card-info">
										<div class="text mt-20 mb-30">
											<h4 class="title-section">Sunfire (enrollment tool)</h3>
											<p class="text-section text-section16">Enrollment tool Sunfire</p>
										</div>
										<a href="#" class="btn btn--md btn--primary-outline">
											<span>Learn More</span>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-md-6 col-sm-6 mb-40 col-12 d-flex">
						<div class="card card-shadow d-flex">
							<div class="card-body d-flex">
								<div class="custom-block">
									<span class="card-ico"><?php include "assets/img/headphones-ico.svg"; ?></span>
									<div class="card-info">
										<div class="text mt-20 mb-30">
											<h4 class="title-section">Support</h3>
											<p class="text-section text-section16">If you need help for our tool</p>
										</div>
										<a href="#" class="btn btn--md btn--primary-outline">
											<span>Learn More</span>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-md-6 col-sm-6 mb-40 col-12 d-flex">
						<div class="card card-shadow d-flex">
							<div class="card-body d-flex">
								<div class="custom-block">
									<span class="card-ico"><?php include "assets/img/truck-ico.svg"; ?></span>
									<div class="card-info">
										<div class="text mt-20 mb-30">
											<h4 class="title-section">Shipping and Fullfilment</h3>
											<p class="text-section text-section16">Shipping and fullfilment</p>
										</div>
										<a href="#" class="btn btn--md btn--primary-outline">
											<span>Learn More</span>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-md-6 col-sm-6 mb-40 col-12 d-flex">
						<div class="card card-shadow d-flex">
							<div class="card-body d-flex">
								<div class="custom-block">
									<span class="card-ico"><?php include "assets/img/like-ico.svg"; ?></span>
									<div class="card-info">
										<div class="text mt-20 mb-30">
											<h4 class="title-section">Marketing</h3>
											<p class="text-section text-section16">Marketing info and tools</p>
										</div>
										<a href="#" class="btn btn--md btn--primary-outline">
											<span>Learn More</span>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="welcome-video">
					<video defer id="player" playsinline  data-poster="<?php echo get_template_directory_uri() . "/assets/img/video-poster.jpg" ?>">
						<source src="<?php echo get_template_directory_uri() . "/assets/video/video.mp4" ?>" type="video/mp4" />
					</video>
				</div>
			</div>
		</section>
		<section class="welcome bg-grey section image-bg">
			<div class="container">
				<div class="timer-wrpr mb-60">
					<div class="timer">
						<div class="timer__item">
							<span class="timer__count">
								85
							</span>
							<span class="timer__text">Day(s)</span>
						</div>
						<div class="timer__item">
							<span class="timer__count">
								5
							</span>
							<span class="timer__text">Hour(s)</span>
						</div>
						<div class="timer__item">
							<span class="timer__count">
								16
							</span>
							<span class="timer__text">Minute(s)</span>
						</div>
						<div class="timer__item">
							<span class="timer__count">
								34
							</span>
							<span class="timer__text">Second(s)</span>
						</div>
					</div>
				</div>
				<div class="welcome-content mt-60">
					<div class="heading-block">
						<span class="title-red">Welcome to agent boost</span>
						<h2 class="title-section">We’ve built long standing relationships based on trust</h2>
					</div>
					<p class="text-center heading-block text-section21 mw-1060 block-center">Agent Boost Marketing is a senior market insurance distributor licensed in all 50 states. Our role is to facilitate your business growth. We truly view each one of our contracted agents and agencies as a partnership; and we’re always looking for more good people. Whether you’re high tech, low tech or no tech, we’ve built our firm to accommodate you. Here’s just some of the reasons why we think we’re the right partner:</p>
					<div class="cards mb-20">
						<div class="row d-justify-center">
							<div class="col-xl-4 col-md-6 col-sm-6 col-12 d-flex">
								<div class="card card-grey card-border mb-40 d-flex">
									<div class="card-body d-flex">
										<div class="custom-block ">
											<span class="card-ico"><?php include "assets/img/ico-support.svg"; ?></span>
											<div class="card-info">
												<h4 class="title-section">Support</h3>
												<p class="text-section text-section16 block-center mw-1060">You’ll get a dedicated staff member assigned to you</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-md-6 col-sm-6 col-12 d-flex">
								<div class="card card-grey card-border mb-40 d-flex">
									<div class="card-body d-flex">
										<div class="custom-block ">
											<span class="card-ico"><?php include "assets/img/ico-knowledge.svg"; ?></span>
											<div class="card-info">
												<h4 class="title-section">Knowledge</h3>
												<p class="text-section text-section16">Most of our members are licensed; they truly understand the business</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-md-6 col-sm-6 col-12 d-flex">
								<div class="card card-grey card-border mb-40 d-flex">
									<div class="card-body d-flex">
										<div class="custom-block ">
											<span class="card-ico"><?php include "assets/img/ico-portfolio.svg"; ?></span>
											<div class="card-info">
												<h4 class="title-section">Products</h3>
												<p class="text-section text-section16">We have a large portfolio comprised of the most competitive carriers and products</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-md-6 col-sm-6 col-12 d-flex">
								<div class="card card-grey card-border mb-40 d-flex">
									<div class="card-body d-flex">
										<div class="custom-block ">
											<span class="card-ico"><?php include "assets/img/ico-lead.svg"; ?></span>
											<div class="card-info">
												<h4 class="title-section">Leads</h3>
												<p class="text-section text-section16">Yes we have lead programs available. We want you in front of prospects.</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-md-6 col-sm-6 col-12 d-flex">
								<div class="card card-grey card-border mb-40 d-flex">
									<div class="card-body d-flex">
										<div class="custom-block ">
											<span class="card-ico"><?php include "assets/img/ico-technology.svg"; ?></span>
											<div class="card-info">
												<h4 class="title-section">Technology</h3>
												<p class="text-section text-section16">Our quoting software and online applications make your life so much easier</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-md-6 col-sm-6 col-12 d-flex">
								<div class="card card-grey card-border mb-40 d-flex">
									<div class="card-body d-flex">
										<div class="custom-block ">
											<span class="card-ico"><?php include "assets/img/ico-traine.svg"; ?></span>
											<div class="card-info">
												<h4 class="title-section">Training</h3>
												<p class="text-section text-section16">We have a variety of training programs available</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="section-footer">
						<div class="text">
							<p class="text-center text-section16 block-center mw-620">Contact us today and give us the chance to earn your business. If you’re still not ready, that’s okay. Watch our video and check out what our agents are saying about us.</p>
						</div>
						<div class="buttons-group">
							<a href="#" class="btn btn--md btn--primary mr-20">
								<span>Learn More</span>
							</a>
							<a href="#" class="btn btn--md btn--primary-outline">
								<span>Learn More</span>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="image-bg__item grey-image" style="
				bottom: -480px;
				right: -450px;
				width: 904px;
				
				transform: matrix(0.95, -0.35, 0.3, 0.94, 0, 0);
			">
				<?php include "assets/img/shape.svg" ?>
			</div>
			<div class="image-bg__item grey-image" style="
				top: -90px;
				left: -280px;
				width: 920px;
				
				transform: matrix(0.94, -0.31, 0.33, 0.95, 0, 0);
			">
						
				<?php include "assets/img/shape.svg" ?>	
			</div>
		</section>
		<!-- <section class="section technologies left-vector bg-dark">
			<div class="container">
				<div class="heading-block">
					<span class="title-red">Products portfolio</span>
					<h2 class="title-section --white">Technologies we work in</h2>
				</div>
				<div class="row d-justify-center">
					<div class="col-xl-3 col-md-6 col-sm-6 col-12 d-flex">
						<div class="card mb-40 card-dark d-flex">
							<div class="card-body d-flex">
								<div class="custom-block">
									<span class="card-ico"><?php include "assets/img/ico-portfolio.svg"; ?></span>
									<div class="card-info">
										<div class="text mt-20 mb-30">
											<h4 class="title-section">Poducts Portfolio</h3>
											<p class="text-section text-section16">A list of our products</p>
										</div>
										<a href="#" class="btn btn--md btn--primary">
											<span>Learn More</span>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-md-6 col-sm-6 col-12 d-flex">
						<div class="card mb-40 card-dark d-flex">
							<div class="card-body d-flex">
								<div class="custom-block">
									<span class="card-ico"><?php include "assets/img/ico-contract.svg"; ?></span>
									<div class="card-info">
										<div class="text mt-20 mb-30">
											<h4 class="title-section">Annuties</h3>
											<p class="text-section text-section16">An annuity is a contract between you and a 3rd party (usually an insurance company)...</p>
										</div>
										<a href="#" class="btn btn--md btn--primary">
											<span>Learn More</span>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-md-6 col-sm-6 col-12 d-flex">
						<div class="card mb-40 card-dark d-flex">
							<div class="card-body d-flex">
								<div class="custom-block">
									<span class="card-ico"><?php include "assets/img/ico-critical.svg"; ?></span>
									<div class="card-info">
										<div class="text mt-20 mb-30">
											<h4 class="title-section">Critical Illness</h3>
											<p class="text-section text-section16">If your client develops a critical illness, you want them to able to focus on their health...</p>
										</div>
										<a href="#" class="btn btn--md btn--primary">
											<span>Learn More</span>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-md-6 col-sm-6 col-12 d-flex">
						<div class="card mb-40 card-dark d-flex">
							<div class="card-body d-flex">
								<div class="custom-block">
									<span class="card-ico"><?php include "assets/img/ico-combo.svg"; ?></span>
									<div class="card-info">
										<div class="text mt-20 mb-30">
											<h4 class="title-section">Combo Products</h3>
											<p class="text-section text-section16">One of the things that can discourage people from buying traditional long-term-care...</p>
										</div>
										<a href="#" class="btn btn--md btn--primary">
											<span>Learn More</span>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-md-6 col-sm-6 col-12 d-flex">
						<div class="card mb-40 card-dark d-flex">
							<div class="card-body d-flex">
								<div class="custom-block">
									<span class="card-ico"><?php include "assets/img/ico-final.svg"; ?></span>
									<div class="card-info">
										<div class="text mt-20 mb-30">
											<h4 class="title-section">Final Expense</h3>
											<p class="text-section text-section16">While most people don’t enjoy discussing end-of-life issues, it’s important to plan for these...</p>
										</div>
										<a href="#" class="btn btn--md btn--primary">
											<span>Learn More</span>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-md-6 col-sm-6 col-12 d-flex">
						<div class="card mb-40 card-dark d-flex">
							<div class="card-body d-flex">
								<div class="custom-block">
									<span class="card-ico"><?php include "assets/img/ico-long.svg"; ?></span>
									<div class="card-info">
										<div class="text mt-20 mb-30">
											<h4 class="title-section">Long Term Care</h3>
											<p class="text-section text-section16">Long term care policies cover care generally not covered by Medicare, Medicaid...</p>
										</div>
										<a href="#" class="btn btn--md btn--primary">
											<span>Learn More</span>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-md-6 col-sm-6 col-12 d-flex">
						<div class="card mb-40 card-dark d-flex">
							<div class="card-body d-flex">
								<div class="custom-block">
									<span class="card-ico"><?php include "assets/img/ico-medicare.svg"; ?></span>
									<div class="card-info">
										<div class="text mt-20 mb-30">
											<h4 class="title-section">Medicare</h3>
											<p class="text-section text-section16">If your client develops a critical illness, you want them to able to focus on their health...</p>
										</div>
										<a href="#" class="btn btn--md btn--primary">
											<span>Learn More</span>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-md-6 col-sm-6 col-12 d-flex">
						<div class="card mb-40 card-dark d-flex">
							<div class="card-body d-flex">
								<div class="custom-block">
									<span class="card-ico"><?php include "assets/img/ico-hospital.svg"; ?></span>
									<div class="card-info">
										<div class="text mt-20 mb-30">
											<h4 class="title-section">Hospital Indemnity</h3>
											<p class="text-section text-section16">According to the Kaiser Family Foundation, MA sales grew in virtually every state...</p>
										</div>
										<a href="#" class="btn btn--md btn--primary">
											<span>Learn More</span>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section> -->
		<!-- D:Dublicate -->	
	</main>
	<?php require get_template_directory() . '/tmp/footer.php'; ?>
</div>
	
<?php require get_template_directory() . '/tmp/footer-popup.php'; ?>
<?php
get_footer();

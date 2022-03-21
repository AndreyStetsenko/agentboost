<header class="header <?= !is_front_page() ? 'header--white' : '' ?>" <?= is_front_page() ? 'data-scroll' : '' ?>>
	<div class="container-xxl header__container">
		<div class="header__body">
			<a href="/" class="header__logo">
				<img src="<?php echo get_template_directory_uri() . "/assets/img/logo-dark.png" ?>" alt="logo">
			</a>			
			<div class="header__actions">
				<a href="/search" class="btn btn--sm header-btn"><img src="<?php echo get_template_directory_uri() . "/assets/img/ico-search.svg"  ?>" alt=""></a>
				<a href="/" class="btn btn--sm header-btn sm-hiddem"><img src="<?php echo get_template_directory_uri() . "/assets/img/house-icon.svg"  ?>" alt=""></a>
				<?php if ( have_rows( 'header_link_contacted', 'option' ) ) : ?>
					<?php while ( have_rows( 'header_link_contacted', 'option' ) ) : the_row(); ?>
						<a href="<?= the_sub_field( 'link' ) ?>" class="btn btn--sm header-btn sm-hiddem"><span><?= the_sub_field( 'title' ) ?></span></a>
					<?php endwhile; ?>
				<?php endif; ?>
				
				<?php if ( have_rows( 'header_link_login', 'option' ) ) : ?>
					<?php while ( have_rows( 'header_link_login', 'option' ) ) : the_row(); ?>
						<a href="<?= the_sub_field( 'link' ) ?>" class="btn btn--sm header-btn login sm-hiddem"><span><?= the_sub_field( 'title' ) ?></span></a>
					<?php endwhile; ?>
				<?php endif; ?>

				<?php if ( have_rows( 'header_link_signup', 'option' ) ) : ?>
					<?php while ( have_rows( 'header_link_signup', 'option' ) ) : the_row(); ?>
						<a href="<?= the_sub_field( 'link' ) ?>" class="btn btn--md mw-100 btn--primary sing-up sm-hiddem"><?= the_sub_field( 'title' ) ?></a>
					<?php endwhile; ?>
				<?php endif; ?>
				<button type="button" class="btn btn--round btn--shadow header__burger">
					<img src="<?php echo get_template_directory_uri() . '/assets/img/menu-burger.svg' ?>" alt="">
				</button>
			</div>
		</div>
	</div>
</header>

<nav class="nav-menu">
	<div class="nav-menu__body">
		<div class="nav-menu__head">
			<a href="#" class="btn btn--sm header-btn"><img src="<?php echo get_template_directory_uri() . "/assets/img/ico-search.svg"  ?>" alt=""></a>
			<a href="#" class="btn btn--sm header-btn xs-hidden"><img src="<?php echo get_template_directory_uri() . "/assets/img/house-icon.svg" ?>" alt=""></a>
			<?php if ( have_rows( 'header_link_contacted', 'option' ) ) : ?>
				<?php while ( have_rows( 'header_link_contacted', 'option' ) ) : the_row(); ?>
					<a href="<?= the_sub_field( 'link' ) ?>" class="btn btn--sm header-btn xs-hidden"><span><?= the_sub_field( 'title' ) ?></span></a>
				<?php endwhile; ?>
			<?php endif; ?>
			
			<?php if ( have_rows( 'header_link_login', 'option' ) ) : ?>
				<?php while ( have_rows( 'header_link_login', 'option' ) ) : the_row(); ?>
					<a href="<?= the_sub_field( 'link' ) ?>" class="btn btn--sm header-btn login"><span><?= the_sub_field( 'title' ) ?></span></a>
				<?php endwhile; ?>
			<?php endif; ?>

			<?php if ( have_rows( 'header_link_signup', 'option' ) ) : ?>
				<?php while ( have_rows( 'header_link_signup', 'option' ) ) : the_row(); ?>
					<a href="<?= the_sub_field( 'link' ) ?>" class="btn btn--md mw-100 btn--primary sing-up"><?= the_sub_field( 'title' ) ?></a>
				<?php endwhile; ?>
			<?php endif; ?>
			<button type="button" class="btn btn--round btn--shadow header__burger">
				<img src="<?php echo get_template_directory_uri() . '/assets/img/ico-close.svg' ?>" alt="">
			</button>
		</div>
		<div class="nav-menu__content">
			<ul class="nav-menu__list">

			<?php if ( have_rows( 'header_nav', 'option' ) ) : ?>
				<?php while ( have_rows( 'header_nav', 'option' ) ) : the_row(); ?>

				<li class="nav-menu__list-item has-sub">
					<a href="<?= the_sub_field( 'link' ) ?>" class="nav-menu__list-link">
						<?= the_sub_field( 'title' ) ?>

						<?php if ( have_rows( 'subnav' ) ) : ?>
							<span class="menu-icon">
								<img src="<?php echo get_template_directory_uri() . "/assets/img/ico-arrow-right.svg" ?>" alt="">
							</span>
						<?php endif; ?>
					</a>
					<?php if ( have_rows( 'subnav' ) ) : ?>
						<ul class="nav-menu__list-sub">
						<?php while ( have_rows( 'subnav' ) ) : the_row(); ?>
							<li class="nav-menu__list-item">
								<a href="<?= the_sub_field( 'link' ) ?>" class="nav-menu__list-link"><?= the_sub_field( 'title' ) ?></a>
							</li>
						<?php endwhile; ?>
						</ul>
					<?php endif; ?>					
				</li>

				<?php endwhile; ?>
			<?php endif; ?>
			</ul>
				<div class="ready-start">
					<h2 class="ready-start__title">
					<?php the_field( 'header_title_ready', 'option' ); ?>
					</h2>
					<p class="ready-start__text"><?php the_field( 'header_subtitle_ready', 'option' ); ?></p>
					<?php if ( have_rows( 'header_btn_ready', 'option' ) ) : ?>
						<?php while ( have_rows( 'header_btn_ready', 'option' ) ) : the_row(); ?>
						<a href="<?= the_sub_field( 'link' ) ?>" type="button" class="btn btn--md btn--shadow">
							<span><?= the_sub_field( 'title' ) ?></span>
						</a>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>
		</div>
	</div>
	
	<div class="image-bg__item grey-image" style="
		bottom: -284px;
    	right: -348px;
		width: 757px;		
	">
				
		<img style="opacity: 0.1" src="<?php echo get_template_directory_uri() . "/assets/img/shape.svg" ?>" alt="">	
	</div>
</nav>
<header class="header header--white">
	<div class="container-xxl header__container">
		<div class="header__body">
			<a href="index.php" class="header__logo">
				<img src="img/logo-dark.png" alt="logo">
			</a>
			<div class="header__actions">
				<a href="#" class="btn btn--sm header-btn"><?php include "img/ico-search.svg"  ?></a>
				<a href="#" class="btn btn--sm header-btn sm-hiddem"><?php include "img/house-icon.svg"  ?></a>
				<a href="#" class="btn btn--sm header-btn"><?php include "img/bell-notifications-icon.svg" ?></a>
				<div class="header-user sm-hiddem">
					<div class="header-user__logo">
						<img src="img/header-user-icon.png" alt="">
					</div>
					<button type="button" class="btn btn--md btn--primary">
						<span>My Dashboard</span>
						<span class="btn__icon">
							<?php include 'img/ico-arrow-down.svg' ?>
						</span>
					</button>
				</div>
				<button type="button" class="btn btn--round btn--shadow header__burger">
					<?php include 'img/menu-burger.svg' ?>
				</button>
			</div>
		</div>
	</div>
</header>

<nav class="nav-menu">
	<div class="nav-menu__body">
		<div class="nav-menu__head">
			<a href="#" class="btn btn--sm header-btn xs-hidden"><?php include "img/ico-search.svg"  ?></a>
			<a href="#" class="btn btn--sm header-btn xs-hidden"><?php include "img/house-icon.svg"  ?></a>
			<div class="header-user">
				<div class="header-user__logo">
					<img src="img/header-user-icon.png" alt="">
				</div>
				<button type="button" class="btn btn--md btn--primary">
					<span>My Dashboard</span>
					<span class="btn__icon">
						<?php include 'img/ico-arrow-down.svg' ?>
					</span>
				</button>
			</div>
			<button type="button" class="btn btn--round btn--shadow header__burger">
				<?php include 'img/ico-close.svg' ?>
			</button>
		</div>
		<div class="nav-menu__content">
			<ul class="nav-menu__list">
				<li class="nav-menu__list-item has-sub active">
					<a href="#" class="nav-menu__list-link">
						Agent Support
						<span class="menu-icon">
							<?php include "img/ico-arrow-right.svg" ?>
						</span>
					</a>
					<ul class="nav-menu__list-sub">
						<li class="nav-menu__list-item">
							<a href="#" class="nav-menu__list-link">Request Marketing List</a>
						</li>
						<li class="nav-menu__list-item">
							<a href="#" class="nav-menu__list-link">How to be Ready to Sell</a>
						</li>
					</ul>
				</li>
				<li class="nav-menu__list-item has-sub">
					<a href="#" class="nav-menu__list-link">
						Agent Tools
						<span class="menu-icon">
							<?php include "img/ico-arrow-right.svg" ?>
						</span>
					</a>
					<ul class="nav-menu__list-sub">
						<li class="nav-menu__list-item">
							<a href="#" class="nav-menu__list-link">Agent Tools</a>
						</li>
						<li class="nav-menu__list-item">
							<a href="#" class="nav-menu__list-link">Leads</a>
						</li>
						<li class="nav-menu__list-item">
							<a href="#" class="nav-menu__list-link">Agent Incentives</a>
						</li>
						<li class="nav-menu__list-item">
							<a href="#" class="nav-menu__list-link">Contracting</a>
						</li>
					</ul>
				</li>
				<li class="nav-menu__list-item">
					<a href="#" class="nav-menu__list-link">
						Compliance
					</a>
				</li>
				<li class="nav-menu__list-item">
					<a href="#" class="nav-menu__list-link">
						Blog
					</a>
				</li>
				<li class="nav-menu__list-item">
					<a href="#" class="nav-menu__list-link">
						Event Calendar
					</a>
				</li>
				<li class="nav-menu__list-item">
					<a href="#" class="nav-menu__list-link">
						Live Trainings & Website
					</a>
				</li>
			</ul>
			<div class="ready-start">
				<h2 class="ready-start__title">
					Ready to Start?
				</h2>
				<p class="ready-start__text">Call Now 855-378-1451 and learn more today!</p>
				<button type="button" class="btn btn--md btn--shadow">
					<span>Start Now</span>
				</button>
			</div>
		</div>
	</div>

	<div class="image-bg__item grey-image" style="
		bottom: -284px;
    	right: -348px;
		width: 757px;		
	">

		<?php include "img/shape.svg" ?>
	</div>
</nav>
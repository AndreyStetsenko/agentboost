<?php
/**
 * Template Name: Template Blog
 */

get_header();

function getPosts($numPosts, $offsetPosts, $class) {
  $args     = array(
    'post_type'      => 'post',
    'posts_per_page' => $numPosts,
    'offset'         => $offsetPosts
  );

  $wp_query = new WP_Query( $args );
  
  if ( $wp_query->have_posts() ) :
    while ( $wp_query->have_posts() ) :
      $wp_query->the_post();
      $post_id = get_the_ID(); 
      $thumbnail = get_the_post_thumbnail( $post_id, 'thumbnail', array('class' => 'blog-card__image') ); 
      $def_thumbnail = get_bloginfo('template_directory') . '/assets/img/default-img.jpeg'; ?>

      <div class="<?= $class ?>">
        <div class="blog-card blog-card--wide-md mb-40">
          <figure class="blog-card__image-wrap">
            <a href="<?= get_permalink() ?>">
              <?= $thumbnail ? $thumbnail : '<img src="' . $def_thumbnail . '" class="blog-card__image">' ?>
            </a>
          </figure>
          <div class="blog-card__body">
            <?php
              $categories = get_the_category( $post_id );
              if( $categories[0] ) {
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
              <li class="blog-card__item">
                <span class="blog-card__icon">
                  <img style="opacity: 0.4" src="<?= get_template_directory_uri() . "/assets/img/ico-clock-sm.svg" ?>">
                </span>
                <?= estimated_reading_time() ?>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <?php
    endwhile;
    wp_reset_query();
  endif;
}

?>

<div class="wrapper wrapper--pt">
<?php require get_template_directory() . '/tmp/header.php'; ?>

  <main class="main">
  <div class="container">
			<div class="row">
				<div class="col-12 col-xl-8">
					<div class="row">

          <?php 
          getPosts(1, 0, 'col-12 d-flex');
          getPosts(4, 1, 'col-md-6 d-flex');
          ?>

					</div>
				</div>
				<div class="col-xl-4">
					<div class="sidebar">
						<div class="sidebar__container">
							<div class="sidebar__header d-xl-none">
								<button type="button" class="sidebar__closer btn btn--round btn--shadow" data-filter>
									<?php include 'img/ico-close.svg' ?>
								</button>
								<button type="button" class="sidebar__opener" data-filter>
									<?php include 'img/ico-filter.svg' ?>
								</button>
							</div>
							<div class="sidebar__block mb-40">
								<h3 class="fw-semi lh-title mb-15">Categories</h3>
								<ul class="categories">
                  <?php
                  $all_categories = get_categories('hide_empty=0');
                  $category_link_array = array();
                  
                  foreach( $all_categories as $single_cat ){
                    $category_link_array[] = 
                    '<li class="categories__item">' .
                    '<a href="' . get_category_link($single_cat->term_id) . '" class="categories__link">' .
                    '<span class="categories__text">' . $single_cat->name . '</span>' .
                    '</a>' .
                    '</li>';
                  }
                  echo implode($category_link_array);
                  ?>
								</ul>
							</div>
							<div class="sidebar__block mb-40">
								<h3 class="fw-semi lh-title mb-15">Latest Posts</h3>
								<ul class="latest-list">
                  <?php
                  $args     = array(
                    'post_type'      => 'post',
                    'posts_per_page' => 6,
                  );

                  $wp_query = new WP_Query( $args );
                  
                  if ( $wp_query->have_posts() ) :
                    while ( $wp_query->have_posts() ) :
                      $wp_query->the_post();
                      $post_id = get_the_ID(); 
                      $thumbnail = get_the_post_thumbnail( $post_id ); 
                      $def_thumbnail = get_bloginfo('template_directory') . '/assets/img/default-img.jpeg'; ?>

                      <li class="latest-list__item">
                        <a href="<?= get_permalink() ?>" class="latest">
                          <figure class="latest__image">
                            <?= $thumbnail ? $thumbnail : '<img src="' . $def_thumbnail . '">' ?>
                          </figure>
                          <div class="latest__content">
                            <h2 class="latest__title"><?php the_title(); ?></h2>
                            <ul class="latest__list">
                              <?php
                                $categories = get_the_category( $post_id );
                                if( $categories ) :
                                  foreach( $categories as $category ) :
                                    echo '<li class="latest__data">' . $category->cat_name . '</li>';
                                  endforeach;
                                endif;
                              ?>
                            </ul>
                          </div>
                        </a>
                      </li>

                      <?php
                    endwhile;
                    wp_reset_query();
                  endif;
                  ?>
								</ul>
							</div>
              <?= the_field( 'blog-form' ) ?>
						</div>
					</div>
				</div>
			</div>
      <div class="row">

      </div>
			<div class="row">
        <?php
        getPosts(3, 5, 'col-md-6 col-xl-4 d-flex');
        getPosts(1, 8, 'col-md-6 col-xl-8 d-flex');
        getPosts(2, 9, 'col-md-6 col-xl-4 d-flex');
        getPosts(1, 11, 'col-md-6 col-xl-8 d-flex');
        ?>
			</div>
		</div>
	</main>
	<?php require get_template_directory() . '/tmp/footer.php'; ?>
</div>
	
<?php require get_template_directory() . '/tmp/footer-popup.php'; ?>
<?php
get_footer();

<?php
/**
 * Template Name: Search
 */

get_header();
?>

<div class="wrapper wrapper--pt">
<?php require get_template_directory() . '/tmp/header.php'; ?>

  <main class="main">

    <section class="offer left-vector" style="background-image: url(<?= get_bloginfo('template_directory') . "/assets/img/unsplash_Hb6uWq0i4MI.jpg" ?>);">
      <div class="container offer__container">
        <div class="offer__body max-w-100">
                  <h1 class="title-section --white mb-15">Search</h1>
                    </div>
      </div>
    </section>

    <div class="container">

    <section class="search">
      <?php
      get_search_form();
      ?>
    </section>

    </div>
	</main>
  <?php require get_template_directory() . '/tmp/footer.php'; ?>
</div>
	
<?php require get_template_directory() . '/tmp/footer-popup.php'; ?>
<?php
get_footer();

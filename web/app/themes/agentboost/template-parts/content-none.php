<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Agentboost
 */

?>

<section class="offer left-vector" style="background-image: url(<?= get_bloginfo('template_directory') . "/assets/img/unsplash_Hb6uWq0i4MI.jpg" ?>);">
      <div class="container offer__container">
        <div class="offer__body max-w-100">
                  <h1 class="title-section --white mb-15">Nothing Found</h1>
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
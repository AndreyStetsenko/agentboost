<?php
/**
 * Template Name: Search
 */

get_header();
?>

<div class="wrapper wrapper--pt">
<?php require get_template_directory() . '/tmp/header.php'; ?>

  <main class="main">

    <?php require get_template_directory() . '/acf.php'; ?>

    <div class="container">

    <section class="search">
      <?php
      get_search_form();
      ?>
    </section>

    </div>
	</main>
</div>

<style>
  .search {
    margin-top: 50px;
    display: flex;
    justify-content: center;
  }

  .search .search-form {
    width: 100%;
    max-width: 500px;
    display: flex;
  }

  .search label {
    width: 100%;
  }

  .search .search-field {
    width: 100%;
    padding: 8px;
    border: 1px solid #adadad;
    border-radius: 4px;
    font-size: 18px;
  }

  .search .search-submit {
    padding: 10px 20px;
    margin-left: 5px;
    border-radius: 4px;
    background: #ed4842;
    color: #fff;
    cursor: pointer;
  }
</style>
	
<?php require get_template_directory() . '/tmp/footer-popup.php'; ?>
<?php
get_footer();

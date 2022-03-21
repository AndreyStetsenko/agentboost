<section class="section-md bg-secondary">
    <div class="container">
        <div class="text-content colum-2">
            <?php if ( have_rows( 'dfsmc_title' ) ) : ?>
				<?php while ( have_rows( 'dfsmc_title' ) ) : the_row(); ?>
                    <p><?php the_sub_field( 'item' ); ?></p>
				<?php endwhile; ?>
			<?php endif; ?>
        </div>
    </div>
</section>
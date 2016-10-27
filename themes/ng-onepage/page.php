<?php get_header(); ?>

<?php if( have_posts() ): while( have_posts() ): the_post(); ?>

<article <?php post_class('page-body container'); ?> id="page-body">

	<div class="row">
	
	    <main class="page-content col-md-9 col-md-push-3">
	
			<?php the_content(); ?>
                        	
	    </main>
	
		<?php get_sidebar(); ?>

	</div>

</article>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
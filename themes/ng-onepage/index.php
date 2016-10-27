<?php get_header(); ?>

<article <?php post_class('page-body'); ?> id="page-body">

    <?php if( have_posts() ): while( have_posts() ): the_post(); ?>

    <!-- Archive loops -->

     <?php endwhile; endif; ?>

</article>

<?php get_footer(); ?>

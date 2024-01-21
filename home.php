<?php get_header(); ?>
<div id="main">

    <?php //start the loop	
    if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php if ( in_category( 'events' ) ) : ?>
            <div class="post-content events-post">
        <?php elseif (in_category( 'animals' ) ): ?>
            <div class="post-content animals-post">
        <?php else : ?>
            <div class="post-content">
        <?php endif; ?>
            <h2><?php the_title(); ?></h2>
            <?php the_content(); ?>
            <small><?php the_time('F j, Y'); ?></small>
        </div>
    <?php endwhile; ?>
    <?php endif; ?>

</div><!-- main -->
<?php get_sidebar(); ?>
<?php get_footer(); ?> 
<?php get_header(); ?>
<div id="main">
<?php $items = new WP_Query( array( 'post_type' => 'event' ) );
    while ( $items -> have_posts() ) : $items -> the_post(); ?> 
        <div class="event">            
            <h2 class="event_title"><?php the_title(); ?></h2>
            <p class="event_desc"><?php the_field('description'); ?></p>
        

            <?php $taxonomies =
          the_taxonomies('before=<ul><li>&after=</li></ul>&sep=</li><li>'); ?>
        </div>
    <?php endwhile; ?>
</div><!-- #main -->
<?php get_footer(); ?>

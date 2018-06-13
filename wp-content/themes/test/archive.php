<?php get_header(); ?>
<div class="main">
    <h2>Aрхив</h2>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="archive-item">
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <?php the_post_thumbnail('flats-thumb'); ?>
            <?php the_content(); ?>
        </div>
    <?php endwhile; ?>
    <!-- post navigation -->
<?php else: ?>
  <!-- no posts found -->
<?php endif; ?>
</div>
<?php get_footer(); ?>
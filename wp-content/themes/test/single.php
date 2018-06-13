<?php get_header(); ?>
<div class="main">
    <?php if(have_posts()): ?>
        <?php the_post(); ?>
        <?php the_title(); ?>
        <?php the_content(); ?>
    <?php endif; ?>
</div>
<?php get_footer(); ?>
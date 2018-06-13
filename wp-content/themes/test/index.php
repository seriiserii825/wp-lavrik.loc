<?php get_header(); ?>

<main class="clearfix">

	<?php $flats_posts = new WP_Query(['post_type' => 'flats', 'posts_per_page' => -1]); ?>

	<?php if ( $flats_posts->have_posts() ) : while ( $flats_posts->have_posts() ) : $flats_posts->the_post(); ?>
	  	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	  	<?php the_post_thumbnail('flats-thumb'); ?>
	  	<?php the_content(); ?>
	  <?php endwhile; ?>
	  <!-- post navigation -->
	  <?php else: ?>
	  <!-- no posts found -->
	<?php endif; ?>

	<?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?>
	<section>
		<a href="<?php the_permalink();?>">
			<?php the_post_thumbnail('thumbnail');?>
		</a>
		<h2>
			<?php the_title();?>
		</h2>
		<span>
			<?php the_content(); ?>
		</span>
	</section>
	<?php endwhile; ?>
	<?php else:?>
	<?php endif; ?>

</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>




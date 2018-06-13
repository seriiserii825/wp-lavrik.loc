<?php get_header(); ?>
<div class="main">
    <h2>Запись квартиры</h2>
    <?php if(have_posts()): ?>
        <?php $cities = get_the_terms($post->ID, 'city');?>
        <div>
            <h3>Город:</h3>
            <?php foreach($cities as $city): ?>
                <a href="<?php echo get_term_link($city->term_id); ?>"><?php echo $city->name; ?></a>
            <?php endforeach; ?>
        </div>
        <?php the_post(); ?>
        <?php the_title(); ?>
        <?php the_post_thumbnail('flats-thumb'); ?>
        <?php the_content(); ?>
    <?php endif; ?>
    

    <aside>
        <?php $cities = get_terms('city');?>
        <ul>
            <?php foreach($cities as $city): ?>    
                <li>
                    <a href="<?php echo get_term_link($city->term_id); ?>"><?php echo $city->name; ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
    </aside>
</div>
<?php get_footer(); ?>
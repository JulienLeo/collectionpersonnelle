<?php
/*
    Template Name: Watches - Collection Personnelle
*/
    $description = 'High quality vintage watches provided and carefully selected by Collection Personnelle. Shipping available worldwide with greater protection';
    get_header();
?>

    <?php $loopWatches = new WP_Query(array(
        'post_type' => 'watches', 
        'posts_per_page' => -1, 
        'paged' => $paged)); ?>

    <?php while($loopWatches->have_posts() ) : $loopWatches->the_post(); ?>

        <div class="row watchesDiv">
            <?php if (get_field('status') == 'On Hold') { ?>
                <figure class="watchesOnHold">
                    <a href="<?php the_permalink(); ?>" class="watchLink">
                        <img src="<?php the_field('img_1') ?>" data-src="<?php the_field('img_1') ?>" title="<?php the_field('title'); ?>" alt="<?php the_field('title') ?>" class="watchImg lazy">
                        <div class="textOverHold">ON HOLD</div>
                    </a>
                </figure>
            <?php } elseif (get_field('status') == 'Sold') { ?>
                <figure class="watchesSold">
                    <a href="<?php the_permalink(); ?>" class="watchLink">
                        <img src="<?php the_field('img_1') ?>" data-src="<?php the_field('img_1') ?>" title="<?php the_field('title'); ?>" alt="<?php the_field('title') ?>" class="watchImg lazy">
                        <div class="textOverSold">SOLD</div>
                    </a>
                </figure>
            <?php } else  { ?>
                <figure class="watches">
                    <a href="<?php the_permalink(); ?>" class="watchLink">
                        <img src="<?php the_field('img_1') ?>" data-src="<?php the_field('img_1') ?>" title="<?php the_field('title'); ?>" alt="<?php the_field('title') ?>" class="watchImg lazy">
                    </a>
                </figure>
            <?php } ?>
        </div>
    <?php endwhile; ?>
</div>

<script src="<?php bloginfo('template_directory'); ?>/js/lazyLoad.js"></script>

<?php get_footer(); ?>
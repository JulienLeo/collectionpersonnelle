<?php
/*
    Template Name: Antiques - Collection Personnelle
*/
    $description = 'Quality vintage pieces of art and design provided and selected by Collection Personnelle. Shipping available worldwide with greater protection';
    get_header();
?>
    <a href="/home"><img src="<?php bloginfo('template_directory'); ?>/img/logo/collection_personnelle_round_logo.jpg" alt="Collection Personnelle Round Logo"></a>
    <h1 id="comingSoon">Coming soon...</h1>

    <!--<?php $loopAntiques = new WP_Query(array(
        'post_type' => 'antiques', 
        'posts_per_page' => -1, 
        'paged' => $paged)); ?>
    
    <?php while($loopAntiques->have_posts() ) : $loopAntiques->the_post(); ?>

        <div class="row antiquesDiv">
            <?php if (get_field('status') == 'On Hold') { ?>
                <figure class="antiquesOnHold">
                    <a href="<?php the_permalink(); ?>" class="antiqueLink">
                        <img src="<?php the_field('img_1') ?>" title="<?php the_field('title'); ?>"alt="<?php the_field('title') ?>" class="antiqueImg lazy">
                        <div class="textOverHold">ON HOLD</div>
                    </a>
                </figure>
            <?php } elseif (get_field('status') == 'Sold') { ?>
                <figure class="antiquesSold">
                    <a href="<?php the_permalink(); ?>" class="antiqueLink">
                        <img src="<?php the_field('img_1') ?>" title="<?php the_field('title'); ?>" alt="<?php the_field('title') ?>" class="antiqueImg">
                        <div class="textOverSold">SOLD</div>
                    </a>
                </figure>
            <?php } else  { ?>
                <figure class="antiques">
                    <a href="<?php the_permalink(); ?>" class="antiqueLink">
                        <img src="<?php the_field('img_1') ?>" title="<?php the_field('title'); ?>" alt="<?php the_field('title') ?>" class="antiqueImg">
                    </a>
                </figure>
            <?php } ?>
        </div>
    <?php endwhile; ?>-->
</div>

<script src="<?php bloginfo('template_directory'); ?>/js/lazyLoad.js"></script>

<?php get_footer(); ?>
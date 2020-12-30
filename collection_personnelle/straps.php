<?php
/*
    Template Name: Straps - Collection Personnelle
*/
    $description = 'High quality straps for watches made wtih the finest material provided by Collection Personnelle. Shipping available worldwide with greater protection';
    get_header();
?>

    <a href="/home"><img src="<?php bloginfo('template_directory'); ?>/img/logo/collection_personnelle_round_logo.jpg" alt="Collection Personnelle Round Logo"></a>
    <h1 id="comingSoon">Coming soon...</h1>

    <!--<?php $loopStraps = new WP_Query(array(
        'post_type' => 'straps', 
        'posts_per_page' => -1, 
        'paged' => $paged)); ?>

    <?php while($loopStraps->have_posts() ) : $loopStraps->the_post(); ?>
        <div class="row strapsDiv">
            <figure class="straps">
                <a href="<?php the_permalink(); ?>" class="strapLink">
                    <img src="<?php the_field('img_1') ?>" title="<?php the_field('title'); ?>" alt="<?php the_field('title') ?>" class="strapImg lazy">
                </a>
            </figure>
        </div>
    <?php endwhile; ?>-->
</div>

<script src="<?php bloginfo('template_directory'); ?>/js/lazyLoad.js"></script>

<?php get_footer(); ?>
<?php
/*
    Template Name: Partners - Collection Personnelle
*/
    $description = 'Partners from Collection Personnelle. Here\'s a list of all of our partners and contributors working with us';
    get_header();
?>

    <div class="partnersDiv">
        <h1>PARTNERS</h1>
        <div class="mainPartners">
            <?php $loopPartners = new WP_Query(array(
                'post_type' => 'partners', 
                'posts_per_page' => -1, 
                'paged' => $paged,
                'orderby' => 'date',
                'order' => 'ASC')); ?>

            <?php while($loopPartners->have_posts() ) : $loopPartners->the_post(); ?>
                <p class="partnersPara">
                    <span class="namePartner"><?php the_field('name'); ?></span>
                    <?php if(get_field('occupation')) { ?>
                        (<?php the_field('occupation'); ?>)
                    <?php } ?>
                    <?php if(get_field('website')) { ?>
                        <a href="<?php the_field('website')?>" target="_blank">Visit website</a>   
                    <?php } ?>
                </p>
            <?php endwhile; ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
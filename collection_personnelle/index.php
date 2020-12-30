<?php
/*
    Template Name: Collection Personnelle
*/
    get_header('home');
?>

    <!--- SECTION 1 -->
    <section class="section" id="section1">
        <img src="<?php the_field('banner') ?>" class="bannerHome" id="bannerHome">
        <div class="gradient" id="gradient"></div>
    </section>


    <!--- SECTION 2 -->
    <section class="section" id="section2">

        <?php $loopWatchesHomeOne = new WP_Query(array(
            'post_type' => 'watches',
            'posts_per_page' => 1,
            'paged'          => $paged,
            'order'          => 'DESC')); ?>

        <?php while($loopWatchesHomeOne->have_posts() ) : $loopWatchesHomeOne->the_post(); ?>

            <div class="row watchesHomeDiv">
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
        <?php endwhile; wp_reset_query(); ?>

        <div class="row illustrationPic">
            <figure class="illustrationFigure">
                <a href="/watches">
                    <img src="<?php the_field('illustration') ?>" class="watchImg lazy" alt="Collection Personnelle">
                    <div class="textOverIllustration">COLLECTION</div>
                </a>
            </figure>
        </div>

        <?php $loopWatchesHome = new WP_Query(array(
                'post_type' => 'watches',
                'posts_per_page' => 3, 
                'offset' => 1,
                'paged' => $paged)); ?>

        <?php while($loopWatchesHome->have_posts() ) : $loopWatchesHome->the_post(); ?>

            <div class="row watchesHomeDiv">
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

        <?php endwhile; wp_reset_query(); ?>

        <?= do_shortcode('[instagram-feed]'); ?>
    </section>
</div>

<?php get_footer(); ?>
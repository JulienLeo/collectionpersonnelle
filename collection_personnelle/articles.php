<?php
/*
    Template Name: Articles - Collection Personnelle
*/
    $description = 'Find articles and posts about or written by Clément Mazarian and his contributors on Collection Personnelle and other websites...';
    $image = get_field('img');
    get_header();
?>

    <div class="sectionArticles">
        <h1>ARTICLES</h1>
        
        <?php $loopArticles = new WP_Query(array(
            'post_type' => 'articles', 
            'posts_per_page' => -1,
            'meta_key' => 'date',
            'orderby' => 'meta_value',
            'order' => 'DESC',
            'paged' => $paged)); ?>

        <?php while($loopArticles->have_posts() ) : $loopArticles->the_post(); ?>

        <div class="row articlesDiv">
            <figure class="articles">
                <a href="<?php the_permalink(); ?>" class="articleLink">
                    <img src="<?php the_field('img') ?>" title="<?php the_field('title'); ?>" alt="<?php the_field('title') ?>" class="articleImg lazy">
                    <p class="card_addition_date"><?php the_field('date') ?></p>
                    <p class="card-title"><?php the_field('title') ?></p>
                </a>
            </figure>
        </div>
        <?php endwhile; ?>
    </div>
</div>

<script src="<?php bloginfo('template_directory'); ?>/js/lazyLoad.js"></script>

<?php get_footer(); ?>
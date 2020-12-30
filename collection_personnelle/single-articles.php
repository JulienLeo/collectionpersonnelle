<?php
/*
    Template Name: Single Article - Collection Personnelle
*/
    $description = get_field('description');
    get_header();
?>

    <div class="sectionArticle">
        <img src="<?php the_field('img') ?>" title="<?php the_field('title'); ?>" alt="<?php the_field('title'); ?>" class="articleImg articleImgPage">
        <div class="articleText">
            <p class="card_addition_date"><?php the_field('date'); ?></p>
            <h1 id="articleTitle"><?php the_field('title'); ?></h1>
            <p class="articleContent"><?php the_field('content', false, false); ?></p>
            <p class="articleUrl"><a href="<?php the_field('link'); ?>" target="_blank">Read on <?php the_field('website'); ?></a></p>
        </div>
    </div>
</div>

<?php get_footer(); ?>
<?php
/*
    Template Name: Search - Collection Personnelle
*/
    $noIndex = "noindex";
    $title = 'Search for: \'' . get_search_query() . '\'';
    get_header();
?>

    <div class="searchDiv">    
        <?php if(have_posts()): ?>
            <div class="searchResultsTitle">
                <h1><?php printf( esc_html__( 'SEARCH RESULTS FOR : \'%s\'' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
            </div>

            <?php while(have_posts() ): the_post(); ?>
                <div class="searchResults">
                    <a href="<?php the_permalink(); ?>">

                    <?php if(get_field('img_1')): ?>
                        <p><img src="<?php the_field('img_1') ?>" alt="<?php the_field('title') ?>" class="watchImgSearch"></p>
                    <?php elseif(get_field('img')): ?>
                        <p><img src="<?php the_field('img') ?>" alt="<?php the_field('title') ?>" class="watchImgSearch"></p>
                    <?php endif; ?>

                    <?php if(get_field('title')): ?>
                        <p><h1><?php the_field('title'); ?></h1></p>
                    <?php else: ?>
                        <p><h1><?php the_title(); ?></h1></p>
                    <?php endif; ?>

                    <?php if(get_field('reference')): ?>
                        <p>Ref : <?php the_field('reference'); ?></p>
                    <?php endif; ?>

                    <?php if(get_field('content')): ?>
                        <?php $excerpt = wp_trim_words( get_field('content' ), $num_words = 15, $more = '...' ); ?>
                        <p><?= $excerpt; ?></p>
                    <?php endif ?>

                        <?php if(get_field('status') == 'On Hold') { ?>
                            <p>ON HOLD</p>
                        <?php } elseif(get_field('status') == 'Sold') { ?>
                            <p>SOLD</p>
                        <?php } elseif(get_field('status') == 'Available') { ?>
                            <p>AVAILABLE</p>
                        <?php } ?>

                        <p id="goToPage"><a href="<?php the_permalink(); ?>">Go to page</a></p>
                    </a>
                </div>
            <?php endwhile; ?>
        <?php else: ?>
            <div class="searchResultsTitle">
                <h1><?php printf( esc_html__( 'NO SEARCH RESULTS FOR: \'%s\'' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
            </div>
        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>
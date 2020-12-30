<?php
/*
    Template Name: Portfolio - Collection Personnelle
*/
    $description = "Portfolio. Picture and image gallery made by professional photographers for Collection Personnelle";
    get_header();
?>

    <div class="portfolioDiv">
        <a href="/home"><img src="<?php bloginfo('template_directory'); ?>/img/logo/collection_personnelle_round_logo.jpg" alt="Collection Personnelle Round Logo"></a>
        <h1 id="comingSoon">Coming soon...</h1>
        <!--<div class="sectionPortfolio">
            <?= do_shortcode('[smartslider3 slider=2]'); ?>
        </div>-->
    </div>
</div>

<script src="<?php bloginfo('template_directory'); ?>/js/slider_portfolio.js"></script>

<?php get_footer(); ?>
<?php
/*
    Template Name: 404 - Collection Personnelle
*/
    $noIndex = "noindex";
    $title = 'Page not found - Collection Personnelle';
    header("HTTP/1.0 404 Not Found");
    get_header();
?>

    <div class="errorDiv">
        <a href="/home"><img src="<?php bloginfo('template_directory'); ?>/img/logo/collection_personnelle_round_logo.jpg" alt="Collection Personnelle Round Logo"></a>
        <h1>Error 404 – Page Not Found</h1>
        <p><a href="/home">Back to HomePage</a></p>
    </div>
</div>

<?php get_footer(); ?>
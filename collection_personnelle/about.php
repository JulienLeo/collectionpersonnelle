<?php
/*
    Template Name: About - Collection Personnelle
*/
    $description = 'About. Clément Mazarian, born in 1988, has been a collector of vintage watches since his teenage years, during which he received an Omega Watch from...';
    get_header();
?>

    <div class="aboutDiv">
        <div class="mainAbout">
            <div class="contentAboutDiv col-sm-7">
                <?php the_field('content'); ?>
                <div class="aboutLinks">
                    <p>
                        <a href="https://api.whatsapp.com/send?phone=33617434686&text=Hello%20Collection%20Personnelle," target="_blank"><i class="fab fa-whatsapp"></i></a>
                        <a href="/contact"><i class="far fa-envelope"></i></a>
                        <a href="https://www.instagram.com/collection.personnelle/" target="_blank"><i class="fab fa-instagram"></i></a>
                    </p>
                </div>
            </div>
        </div>
        <?php if(the_field('about_banner')) { ?>
            <div class="aboutBanner">
                <img src="<?php the_field('about_banner'); ?>" class="imgBanner" alt="about_banner">
            </div>
        <?php } ?>
    </div>
</div>

<?php get_footer(); ?>
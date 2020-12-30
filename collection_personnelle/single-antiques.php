<?php
/*
    Template Name: Single Antique - Collection Personnelle
*/
    $description = "Collection Personnelle provides " . get_field('title') .  " which can be purchased on this page. Visit the Collection page for other items.";
    $image = get_field('img_1');
    get_header();
?>

    <div class="row mainAntique">
        <div class="antiqueGallery">
            <div class="mainImg">
                <img src="<?php the_field('img_1'); ?>" title="<?php the_field('title'); ?>" alt="<?php the_field('title'); ?>-1" id="currentImg">
            </div>

            <div class="antiqueImgDiv" id="antiqueImgDiv">
                <img src="<?php the_field('img_1'); ?>" title="<?php the_field('title'); ?>" alt="<?php the_field('title'); ?>-1" class="antiquePageImg" id="1">
                <?php if (get_field('img_2')) : ?>
                    <img src="<?php the_field('img_2'); ?>" title="<?php the_field('title'); ?>" alt="<?php the_field('title'); ?>-2" class="antiquePageImg" id="2">
                <?php endif; ?>
                <?php if (get_field('img_3')) : ?>
                    <img src="<?php the_field('img_3'); ?>" title="<?php the_field('title'); ?>" alt="<?php the_field('title'); ?>-3" class="antiquePageImg" id="3">
                <?php endif; ?>
                <?php if (get_field('img_4')) : ?>
                    <img src="<?php the_field('img_4'); ?>" title="<?php the_field('title'); ?>" alt="<?php the_field('title'); ?>-4" class="antiquePageImg" id="4">
                <?php endif; ?>
                <?php if (get_field('img_5')) : ?>
                    <img src="<?php the_field('img_5'); ?>" title="<?php the_field('title'); ?>" alt="<?php the_field('title'); ?>-5" class="antiquePageImg" id="5">
                <?php endif; ?>
                <?php if (get_field('img_6')) : ?>
                    <img src="<?php the_field('img_6'); ?>" title="<?php the_field('title'); ?>" alt="<?php the_field('title'); ?>-6" class="antiquePageImg" id="6">
                <?php endif; ?>
                <?php if (get_field('img_7')) : ?>
                    <img src="<?php the_field('img_7'); ?>" title="<?php the_field('title'); ?>" alt="<?php the_field('title'); ?>-7" class="antiquePageImg" id="7">
                <?php endif; ?>
            </div>
        </div>

        <div class="antiqueContent">
            <div class="antiqueContentIntro">
                <h1 class="card-title-antique"><?php the_field('title'); ?></h1>
                <?php if(get_field('reference')) { ?>
                    <p class="card-ref-antique">Ref: <?php the_field('reference'); ?></p>
                <?php } ?>
                <p id="introAntiqueText"><?php the_field('content'); ?></p>
            </div>
            
            <div class="price-tel">
                <p id="cardPrice">
                    <?php if (get_field('status') == 'On Hold') { ?>
                        <p class="card-price" id="inquiringHold">ON HOLD - Subscribe to wishlist</p>
                    <?php } elseif (get_field('status') == 'Sold') { ?>
                        <p class="card-price" id="inquiringSold">SOLD - Subscribe to wishlist</p>
                    <?php } else { ?>
                            <span class="card-price" id="inquiring"><?php the_field('price'); ?> € - Inquire</span>
                    <?php } ?>
                </p>
                <p id="cardPhone">
                    <a href="https://api.whatsapp.com/send?phone=33617434686&text=Hello%20Collection%20Personnelle,%20I'm%20interested%20in%20<?= the_field('title')?>," target="_blank" class="card-phone-number">
                        <i class="fab fa-whatsapp"></i> +33(0)617434686
                    </a>
                </p>
            </div>
        </div>
    </div> 

    <?php if (get_field('img_banner')) : ?>
        <section class="antiqueBannerSection">
            <div class="antiqueBanner">
                <img src="<?php the_field('img_banner'); ?>" class="imgBanner" alt="<?php the_field('title'); ?>">
            </div>
        </section>
    <?php endif; ?>
</div>

<div id="gradientForm"></div>

<div id="buyForm">
    <div class="formBuy" id="formBuy">
        <?= do_shortcode('[contact-form-7 id="300" title="Contact form to buy"]') ?>
    </div>
</div>

<script src="<?php bloginfo('template_directory'); ?>/js/swipeImg.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/antiqueImgSelection.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/inquire.js"></script>

<?php get_footer();?>
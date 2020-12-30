<?php
/*
    Template Name: Single Strap - Collection Personnelle
*/
    $description = "Collection Personnelle provides the strap " . get_field('title') .  " which can be purchased on this page. Visit the Collection page for other items.";
    $image = get_field('img_1');
    get_header();
?>

    <div class="row mainStrap">
        <div class="strapGallery">
            <div class="mainImg">
                <img src="<?php the_field('img_1'); ?>" title="<?php the_field('title'); ?>" alt="<?php the_field('img_1'); ?>-1" id="currentImg">
            </div>

            <div class="strapImgDiv" id="strapImgDiv">
                <img src="<?php the_field('img_1'); ?>" title="<?php the_field('title'); ?>" alt="<?php the_field('title'); ?>-1" class="strapPageImg">
                <img src="<?php the_field('img_2'); ?>" title="<?php the_field('title'); ?>" alt="<?php the_field('title'); ?>-2" class="strapPageImg">
                <?php if (get_field('img_3')) : ?>
                    <img src="<?php the_field('img_3'); ?>" title="<?php the_field('title'); ?>" alt="<?php the_field('title'); ?>-3" class="strapPageImg">
                <?php endif; ?>
                <?php if (get_field('img_4')) : ?>
                    <img src="<?php the_field('img_4'); ?>" title="<?php the_field('title'); ?>" alt="<?php the_field('title'); ?>-4" class="strapPageImg">
                <?php endif; ?>
            </div>
        </div>

        <div class="strapContent">
            <div class="strapContentIntro">
                <h1 class="card-title-strap"><?php the_field('title'); ?></h1>
                <p id="introStrapText"><?php the_field('content'); ?></p>
            </div>

            <div class="price-tel">
                <p id="cardPrice">
                    <span class="card-price" id="inquiring"><?php the_field('price'); ?> € - Inquire</span>
                </p>
                <p id="cardPhone">
                    <a href="https://api.whatsapp.com/send?phone=33617434686&text=Hello%20Collection%20Personnelle,%20I'm%20interested%20in%20<?= the_field('title')?>," target="_blank" class="card-phone-number">
                        <i class="fab fa-whatsapp"></i> +33(0)617434686
                    </a>
                </p>
            </div>
        </div>
    </div>
</div>

<div id="gradientForm"></div>

<div id="buyForm">
    <div class="formBuy" id="formBuy">
        <?= do_shortcode('[contact-form-7 id="300" title="Contact form to buy"]') ?>
    </div>
</div>

<script src="<?php bloginfo('template_directory'); ?>/js/swipeImg.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/strapImgSelection.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/inquire.js"></script>

<?php get_footer(); ?>
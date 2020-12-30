<?php
/*
    Template Name: Single Project - Julien Leopold
*/
    $description = "Julien Leopold made the whole website of " . get_field('title') . " for which he used " . get_field('skills');

    get_header();
?>

    <!-- SECTION 1 -->
    <section class="projectFirstSection firstSection" name="section1" id="firstSection">
        <article class="singleProject">
            <div class="titleProject">
                <h1>Le Cartel</h1>
            </div>

            <div class="descriptionProject">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, officia, ab nemo perferendis dignissimos ex, eveniet magnam aliquid eaque eum assumenda distinctio sint accusantium doloribus ipsa? Ea eum consectetur veritatis.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, officia, ab nemo perferendis dignissimos ex, eveniet magnam aliquid eaque eum assumenda distinctio sint accusantium doloribus ipsa? Ea eum consectetur veritatis.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, officia, ab nemo perferendis dignissimos ex, eveniet magnam aliquid eaque eum assumenda distinctio sint accusantium doloribus ipsa? Ea eum consectetur veritatis.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, officia, ab nemo perferendis dignissimos ex, eveniet magnam aliquid eaque eum assumenda distinctio sint accusantium doloribus ipsa? Ea eum consectetur veritatis.</p>
            </div>

            <!--<div class="titleProject">
                <h1><?php the_field('title'); ?></h1>
            </div>

            <div class="descriptionProject">
                <p><?php the_field('skills'); ?></p>
                <p><?php the_field('description'); ?></p>
            </div>-->
        </article>
    </section>

    <!-- SECTION 2 -->
    <section class="projectSecondSection secondSection" name="section2" id="secondSection">
        <article class="singleProjectGallery">
            <div class="mainImg">
                <img src="<?php bloginfo('template_directory'); ?>/public/img/projects/le_cartel/le_cartel_01.png" data-src="<?php bloginfo('template_directory'); ?>/public/img/projects/le_cartel/le_cartel_01.png" title="Le Cartel" alt="Le Cartel" id="currentImg">
            </div>

            <div class="projectImages" id="projectImages">
                <img src="<?php bloginfo('template_directory'); ?>/public/img/projects/le_cartel/le_cartel_01.png" data-src="<?php bloginfo('template_directory'); ?>/public/img/projects/le_cartel/le_cartel_01.png" title="Le Cartel" alt="Le Cartel" class="projectImage" id="img_1">
                <img src="<?php bloginfo('template_directory'); ?>/public/img/projects/le_cartel/le_cartel_01.png" data-src="<?php bloginfo('template_directory'); ?>/public/img/projects/le_cartel/le_cartel_01.png" title="Le Cartel" alt="Le Cartel" class="projectImage" id="img_2">
                <img src="<?php bloginfo('template_directory'); ?>/public/img/projects/le_cartel/le_cartel_01.png" data-src="<?php bloginfo('template_directory'); ?>/public/img/projects/le_cartel/le_cartel_01.png" title="Le Cartel" alt="Le Cartel" class="projectImage" id="img_3">
                <img src="<?php bloginfo('template_directory'); ?>/public/img/projects/le_cartel/le_cartel_01.png" data-src="<?php bloginfo('template_directory'); ?>/public/img/projects/le_cartel/le_cartel_01.png" title="Le Cartel" alt="Le Cartel" class="projectImage" id="img_4">
                <img src="<?php bloginfo('template_directory'); ?>/public/img/projects/le_cartel/le_cartel_01.png" data-src="<?php bloginfo('template_directory'); ?>/public/img/projects/le_cartel/le_cartel_01.png" title="Le Cartel" alt="Le Cartel" class="projectImage" id="img_5">
                <img src="<?php bloginfo('template_directory'); ?>/public/img/projects/le_cartel/le_cartel_01.png" data-src="<?php bloginfo('template_directory'); ?>/public/img/projects/le_cartel/le_cartel_01.png" title="Le Cartel" alt="Le Cartel" class="projectImage" id="img_6">
                <img src="<?php bloginfo('template_directory'); ?>/public/img/projects/le_cartel/le_cartel_01.png" data-src="<?php bloginfo('template_directory'); ?>/public/img/projects/le_cartel/le_cartel_01.png" title="Le Cartel" alt="Le Cartel" class="projectImage" id="img_7">
            </div>-->

            <!--<div class="mainImg">
                <img src="<?php the_field('img_1'); ?>" title="<?php the_field('title'); ?>" alt="<?php the_field('title'); ?>-1" id="currentImg">
            </div>

            <div class="projectImages" id="projectImages">
                <img src="<?php the_field('img_1'); ?>" title="<?php the_field('title'); ?>" alt="<?php the_field('title'); ?>-1" class="projectImage" id="img_1">
                <?php if (get_field('img_2')) : ?>
                    <img src="<?php the_field('img_2'); ?>" title="<?php the_field('title'); ?>" alt="<?php the_field('title'); ?>-2" class="projectImage" id="img_2">
                <?php endif; ?>
                <?php if (get_field('img_3')) : ?>
                    <img src="<?php the_field('img_3'); ?>" title="<?php the_field('title'); ?>" alt="<?php the_field('title'); ?>-3" class="projectImage" id="img_3">
                <?php endif; ?>
                <?php if (get_field('img_4')) : ?>
                    <img src="<?php the_field('img_4'); ?>" title="<?php the_field('title'); ?>" alt="<?php the_field('title'); ?>-4" class="projectImage" id="img_4">
                <?php endif; ?>
                <?php if (get_field('img_5')) : ?>
                    <img src="<?php the_field('img_5'); ?>" title="<?php the_field('title'); ?>" alt="<?php the_field('title'); ?>-5" class="projectImage" id="img_5">
                <?php endif; ?>
                <?php if (get_field('img_6')) : ?>
                    <img src="<?php the_field('img_6'); ?>" title="<?php the_field('title'); ?>" alt="<?php the_field('title'); ?>-6" class="projectImage" id="img_6">
                <?php endif; ?>
                <?php if (get_field('img_7')) : ?>
                    <img src="<?php the_field('img_7'); ?>" title="<?php the_field('title'); ?>" alt="<?php the_field('title'); ?>-7" class="projectImage" id="img_7">
                <?php endif; ?>
            </div>-->
        </article>
    </section>

<?php get_footer(); ?>
<?php
/*
    Template Name: Shipping - Collection Personnelle
*/
    $description = 'Shipping from Collection Personnelle. We ship Worldwide. We work with : UPS / DHL / FEDEX in Express. A tracking number will be given to buyer.';
    get_header();
?>

    <div class="shippingDiv">
        <h1>SHIPPING</h1>
        <div class="mainShipping">
            <div class="contentShippingDiv">
                <?php the_field('content') ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
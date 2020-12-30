<?php
/*
    Template Name: Buy - Collection Personnelle
*/
    $description = 'How to buy from Collection Personnelle. If you are interested in one of our watches, straps or pieces of design please fill the form on its page.';
    get_header();
?>

    <div class="buyDiv">
        <h1>HOW TO BUY</h1>
        <div class="mainBuy">
            <div class="contentBuyDiv">
                <?php the_field('content') ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
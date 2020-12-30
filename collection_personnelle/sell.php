<?php
/*
    Template Name: Sell - Collection Personnelle
*/
    $description = 'How to sell with Collection Personnelle. If you are interested in selling your watch with Collection Personnelle, please complete the form.';
    get_header();
?>

    <div class="introSell">
        <h1>HOW TO SELL</h1>
        <p id="introSellText">If you are interested in selling your watch, please complete the form below. We will contact you at the earliest possibility.</p>
    </div>

    <div class="sellWatchDiv">
        <div class="formSell">
            <?= do_shortcode('[contact-form-7 id="148" title="Contact form to sell"]'); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
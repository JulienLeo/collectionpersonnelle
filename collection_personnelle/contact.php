<?php
/*
    Template Name: Contact - Collection Personnelle
*/
    $noIndex = "noindex";
    get_header();
?>

    <div class="introContact">
        <h1>CONTACT</h1>
        <p id="introContactText">If you have any questions do not hesitate to contact us by completing the form below. We will get in touch with you at the earliest possibility.</p>
    </div>


    <div class="contactDiv">
        <div class="formSell formContact">
            <?= do_shortcode('[contact-form-7 id="297" title="Contact form"]'); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
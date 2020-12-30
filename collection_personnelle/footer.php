            <!-- FOOTER -->
            <footer class="footer" id="footer">
                <div class="col-sm-4 footerContentDivs" id="footerContentDivLeft">
                    <a href="https://www.instagram.com/collection.personnelle/" target="_blank">
                        <p id="logoInstagram"><i class="fab fa-instagram"></i></p>
                        <p id="followUs">FOLLOW US ON INSTAGRAM</p>
                    </a>
                    <p id="logoFacebookLinkedinMail">
                        <a href="https://www.facebook.com/collectionpersonnelle.co/?ref=settings" target="_blank" title="Facebook Collection Personnelle"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://linkedin.com/in/clément-mazarian-8ab727170" target="_blank" title="Linkedin Clément Mazarian"><i class="fab fa-linkedin-in"></i></a>
                        <a href="/contact" title="Send a mail to Collection Personnelle"><i class="far fa-envelope"></i></a>
                        <a href="https://www.watchfid.com/" target="_blank" title="Watchfid"><img src="<?php bloginfo('template_directory'); ?>/img/logo/logo_watchfid.png" alt="Logo Watchfid"></a>
                    </p>
                    <p id="partners">
                        <a href="/partners">Partners</a>
                    </p>
                </div>

                <div class="col-sm-4 footerContentDivs" id="footerContentDivRight">
                    <p>
                        <a href="https://api.whatsapp.com/send?phone=33617434686&text=Hello%20Collection%20Personnelle" target="_blank" class="card-phone-number card-phone-number-footer" title="Contact Collection Personnelle On Whatsapp"><i class="fab fa-whatsapp"></i> +33(0)617434686</a>
                    </p>
                    <div class="terms">
                        <p id="paymentFooter">
                            <a href="/buy">Payment</a>
                        </p>
                        <p id="shippingFooter">
                            <a href="/shipping">Shipping</a>
                        </p>
                        <p id="termsConditions">
                            <a href="/terms">Terms & Conditions</a>
                        </p>
                    </div>
                </div>

                <div class="col-sm-4 footerContentDivs" id="footerContentDivCenter">
                    <a href="#top">
                        <img src="<?php bloginfo('template_directory'); ?>/img/logo/collection_personnelle_logo_footer.png" alt="Logo Collection Personnelle Footer" id="logoFooter">
                        <img src="<?php bloginfo('template_directory'); ?>/img/logo/collection_personnelle_logo_footer_mobile.png" alt="Logo Collection Personnelle Footer" id="logoFooterMobile">
                    </a>
                    <a href="https://www.instagram.com/collection.personnelle/" target="_blank">
                        <p id="logoInstagramTablet"><i class="fab fa-instagram"></i></p>
                    </a>
                    <div id="paraNewsletter">
                        <p class="subscribePara">Subscribe to our Newsletter</p>
                        <?= do_shortcode('[mc4wp_form id="137"]'); ?>
                    </div>
                    <p class="copyright">&copy; 2019 Julien Leo</p>
                </div>
            </footer>
        </div>
        <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/loader.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/searchMobile.js"></script>
        <?php wp_footer(); ?>
    </body>
</html>
<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package SKT Solar Energy
 */
$footer_text = esc_html(get_theme_mod('footer_text'));
$hidefooter = esc_html(get_theme_mod('hide_footer_info', 1)); 
if($hidefooter == ''){?>
<div class="footer-infobox">
    <div class="container-fluid footer pt-3">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-3 ">
                    <h1>NAM KUICHOUA ENERGIE</h1>
                    <div class="mt-1 text-white">
                      <div class="mt-1 text-white">
                         <p>
                             NOTRE COMPAGNIE est un développeur de projets respectueux de l&apos;environnement, axé sur l&apos;apport de technologies,
                             de solutions et de services énergétiques.
                           </p>
                      </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 position-relative">
                    <h2 class="footer-tittle">Liens utiles</h2>
                    <a class="btn btn-link text-white" href="a-propos">A propos</a>
                    <a class="btn btn-link text-white" href="services">Services</a>
                    <a class="btn btn-link text-white" href="produit">Produits</a>
                    <a class="btn btn-link text-white" href="projet">Projets</a>
                    <a class="btn btn-link text-white" href="contact">Contact</a>
                </div>
                <div class="col-lg-3 col-md-6 position-relative">
                    <h2 class="footer-tittle">Réseaux sociaux</h2>
                    <div class="row">
                        <div class="col-12">
                            <a class="socialink text-white" href="#">
                                <span class="socialink-facebook">
                                    nkenergie
                                </span>
                                <i class="fab fa-facebook-square fa-2x"></i>
                            </a>
                        </div>
                        <div class="col-12">
                            <a class="socialink text-white" href="#">
                                <span class="socialink-twitter">
                                    nkenergie
                                </span>
                                <i class="fab fa-twitter fa-2x"></i>
                            </a>
                        </div>
                        <div class="col-12">
                            <a class="socialink text-white" href="#">
                                <span class="socialink-instagram">
                                    nkenergie
                                </span>
                                <i class="fab fa-instagram fa-2x"></i>
                            </a>
                        </div>
                        <div class="col-12">
                            <a class="socialink text-white" href="#">
                                <span class="socialink-youtube">
                                    nkenergie
                                </span>
                                <i class="fab fa-youtube fa-2x"></i>
                            </a>
                        </div>
                        <div class="col-12">
                            <a class="socialink text-white" href="#">
                                <span class="socialink-linkedin">
                                    nkenergie
                                </span>
                                <i class="fab fa-linkedin fa-2x"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <h2 class="footer-tittle">Contact</h2>
                    <div class="mt-1 text-white">
                        Nkolmekok-Myom II, Yaoundé
                    </div>
                    <div class="mt-1 text-white">
                        Tel : +237 682 223 658 / 665 549 639
                    </div>
                    <div class="mt-1 text-white">
                        BP : 3582 Yaoundé
                    </div>
                    <div class="mt-1 text-white">
                        Email : info@nkenergie.com
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php } ?>
<div id="footer">
<div class="copyright-area">
<?php if ( is_active_sidebar( 'fc-1' ) || is_active_sidebar( 'fc-2' ) || is_active_sidebar( 'fc-3' )) : ?>
<div class="footerarea">
    	<div class="container footer ftr-widg">
        	<div class="footer-row">
            <?php if ( is_active_sidebar( 'fc-1' ) ) : ?>
            <div class="cols-3 widget-column-1">
              <?php dynamic_sidebar( 'fc-1' ); ?>
            </div><!--end .widget-column-1-->
    		<?php endif; ?>
			<?php if ( is_active_sidebar( 'fc-2' ) ) : ?>
            <div class="cols-3 widget-column-2">
            <?php dynamic_sidebar( 'fc-2' ); ?>
            </div><!--end .widget-column-2-->
            <?php endif; ?>
			<?php if ( is_active_sidebar( 'fc-3' ) ) : ?>
            <div class="cols-3 widget-column-3">
            <?php dynamic_sidebar( 'fc-3' ); ?>
            </div><!--end .widget-column-3-->
			<?php endif; ?>
            <div class="clear"></div>
            </div>
        </div><!--end .container-->
</div>
<?php endif; ?>         



<div class="container-fluid copyright px-0">
        <div class="d-flex flex-column flex-md-row flex-sm-row justify-content-between">
            <div class="py-4 px-5text-center blog text-md-start">
                <p class="mb-0 px-3">
                    &copy; 2024 <?php bloginfo('name'); ?>, Tout droits réservés.
                </p>
            </div>
            <div class="py-4 px-5 bg-secondaire footer-shape position-relative text-center text-md-end">
                <p class="mb-0 text-primaire">
                    Designed By
                    <a class="fw-bold text-primaire" href="https://euclideservices.com" target="_blank">EUCLIDES</a>
                </p>
            </div>
        </div>
    </div>


</div> <!-- end copyright-area -->
</div>
<?php wp_footer(); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js" async></script>
</body>
</html>
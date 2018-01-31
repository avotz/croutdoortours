<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package croutdoortours
 */

?>

	<footer class="footer">
            <div class="footer-container">
				<nav class="footer-menu">
				<h2 class="footer-menu-title">Menu</h2>
                 <?php
					wp_nav_menu(array(
						'theme_location' => 'footer',
						'menu_id' => 'footer-menu',
						'container' => '',
						'container_class' => 'footer-menu',
						'container_id' => '',
						'menu_class' => 'footer-menu-ul',
					));
					?>
				</nav>
                <div class="footer-social">
                    <h2 class="footer-social-title">Follow Us</h2>
                    <a href="#" class="footer-social-link"><i class="icon-facebook"></i></a>
                    <a href="#" class="footer-social-link"><i class="icon-google-plus"></i></a>
                    <a href="#" class="footer-social-link"><i class="icon-youtube"></i></a>
                </div>
                <div class="footer-contact">
                    <h2 class="footer-social-title">Contact Us</h2>
                    <a href="mailto::info@costaricaoutdoortours.com" class="footer-contact-link">info@costaricaoutdoortours.com</a>
                    
                </div>
                
            </div>
            <div class="footer-copyright">
                 <span class="copy">Copyright © 2018. All Rights Reserved.</span>   
                   
                 <span class="avotz"><a href="http://www.avtoz.com" target="_blank"><i class="icon-avotz"></i></a></span>
                   
                </div>
        </footer>

<?php wp_footer(); ?>

</body>
</html>

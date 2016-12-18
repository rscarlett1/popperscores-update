<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Popperscores
 */
?>

</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">

			<div class="shipping-info">
				<p>Free Shipping On Orders Over $100 Within New Zealand</p>
			</div><!-- .shipping-info -->

			<div id="footer-widget-details">
				<div id="footer-1" class="footer-widget-area">
					<?php if(is_active_sidebar('footer-1')): ?> 
					
					<?php dynamic_sidebar('footer-1'); ?>
					
					<?php endif; ?>
				</div>	

				<div id="footer-2" class="footer-widget-area">
					<?php if(is_active_sidebar('footer-2')): ?> 
					<?php dynamic_sidebar('footer-2'); ?>
					
					<?php endif; ?>
					
					<section id="copyright">
						</br>
						<p>&#169; 2016 Scarlett Website Services</p>
					</section>

				</div>

				<div id="footer-3" class="footer-widget-area">
					<?php if(is_active_sidebar('footer-3')): ?> 
					
					<?php dynamic_sidebar('footer-3'); ?>
					
					<?php endif; ?>

					
				</div>

				<div id="copyright-mobile">
					<p>&#169; 2016 Scarlett Website Services</small></p>
				</div>

				

			</div><!--footer-widget-details -->
		</div><!--site-info -->
			
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

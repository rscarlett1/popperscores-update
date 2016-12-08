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
					<div>
					<?php dynamic_sidebar('footer-1'); ?>
					</div>
					<?php endif; ?>
				</div>	

				<div id="footer-2" class="footer-widget-area">
					<?php if(is_active_sidebar('footer-2')): ?> 
					<div>
					<?php dynamic_sidebar('footer-2'); ?>
					</div>
					<?php endif; ?>
					
					<div id="copyright">
					</br>
					<p>&#169; 2016 Scarlett Website Services</small></p>
					</div>

				</div>

				<div id="footer-3" class="footer-widget-area">
					<?php if(is_active_sidebar('footer-3')): ?> 
					<div>
					<?php dynamic_sidebar('footer-3'); ?>
					</div>
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

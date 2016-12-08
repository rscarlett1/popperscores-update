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


				<div id="footer-1">
					<?php if(is_active_sidebar('footer-1')): ?> 
					<div class="footer-widget-area">
					<?php dynamic_sidebar('footer-1'); ?>
					</div>
					<?php endif; ?>
				</div>	

				<div id="footer-2">
					<?php if(is_active_sidebar('footer-2')): ?> 
					<div class="footer-widget-area">
					<?php dynamic_sidebar('footer-2'); ?>
					</div>
					<?php endif; ?>
				</div>

				<div class="footer-widget-area" id="footer-3">
					<?php if(is_active_sidebar('footer-3')): ?> 
					<div class="footer-widget-area">
					<?php dynamic_sidebar('footer-3'); ?>
					</div>
					<?php endif; ?>
				</div>

				<div>Copy right details</div>
			</div><!--footer-widget-details -->
		</div><!--site-info -->
			
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

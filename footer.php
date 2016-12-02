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
		<div class=site-info>		
			<div class="shipping-info">
				<p>Free Shipping On Orders Over $100 Within New Zealand</p>
			</div><!-- .shipping-info -->

			<div class="site-links">
				<div id="links" class="footer-details">
					<div>Our Website Links</div>
					<a href="#">Blog</a>
					<a href="#">Contact Us</a>
					<a href="#">FAQs</a>
					<a href="#">Returns and Shipping</a>
					<a href="#">Testimonials</a>
					<a href="#">Customer Support</a>
				</div>

				<div class="subscription-details" class="footer-details">
					<div>
						<p>Become a Love Of Horses Member</p>
					</div>

					<div>
						<form>
							<label>First name: </label>
							<input type="text" name="fname"><br>
							<label>Last name:</label>
							<input type="text" name="lname"><br>
							<label id="email-padding">E-mail:</label>
							<input type="email" name="email" autocomplete="off"><br>
							<input type="submit">
						</form>
					</div>
				</div>

				<div id="address-details" class="footer-details">
					<address>
	 					<div>Visit us at:</div>
						<div>35 California Drive</div>
						<div>Totara Park</div>
						<div>Upper Hutt</div>
					</address>
				</div><!-- .footer-details-->

			</div><!-- .site-links -->
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>





			
<?php
/**
 *The custom template for the front page style front page. Kicks in automatically
 *
 * 
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section id="slider">
				<div class="indent">
					
			<?php echo do_shortcode("[huge_it_slider id='1']"); ?>

				</div>
			</section>

			<section id="featured-products">
				<div class="indent">
					<h2>Featured Products</h2>
					<div id="img-movement">

						<div class="placeholder">
							<img src="http://localhost/wordpress/wp-content/uploads/2016/12/holsteiner-stute-2400px.png" alt="">
						</div>

						<div class="placeholder">
							<img src="http://localhost/wordpress/wp-content/uploads/2016/12/holsteiner-stute-2400px.png" alt="">
						</div>

						<div class="placeholder">
							<img src="http://localhost/wordpress/wp-content/uploads/2016/12/holsteiner-stute-2400px.png" alt="">
						</div>

						<div class="placeholder no-display-1">
							<img src="http://localhost/wordpress/wp-content/uploads/2016/12/holsteiner-stute-2400px.png"" alt="">
						</div>

						<div class="placeholder no-display-2">
							<img src="http://localhost/wordpress/wp-content/uploads/2016/12/holsteiner-stute-2400px.png"" alt="">
						</div>
					</div>
				</div>
			</section>

			<section id="description-top">
				<div class="indent" id="detailed-images">
					<div id="image-left">
						<img src="http://localhost/wordpress/wp-content/uploads/2016/12/holsteiner-stute-2400px.png" alt="featured product">
					</div>

					<div>
						<h2>Wallpaper Decor</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste fugit ratione perspiciatis, quas tempora officiis labore nostrum, voluptatem dicta magni accusamus, nihil vero excepturi, molestiae eum mollitia ipsa nesciunt facilis.</p>
					</div>
				</div>
			</section>

			<section id="description-bottom">
				<div class="indent">
					<div id="full-screen-details">
						<h2>Wallpaper Decor</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste fugit ratione perspiciatis, quas tempora officiis labore nostrum, voluptatem dicta magni accusamus, nihil vero excepturi, molestiae eum mollitia ipsa nesciunt facilis.</p>
					</div>

					<div id="bottom-image">
						<img src="http://localhost/wordpress/wp-content/uploads/2016/12/holsteiner-stute-2400px.png" alt="">
					</div>

					<div id="mobile-view-details">
						<h2>Wallpaper Decor</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste fugit ratione perspiciatis, quas tempora officiis labore nostrum, voluptatem dicta magni accusamus, nihil vero excepturi, molestiae eum mollitia ipsa nesciunt facilis.</p>
					</div>

				</div>
			</section>

			<section id="members-sign-up">
				<div id="sign-up" class="indent">
					<p>Let us spoil you with early access to our products and new releases</p>

					<div id="top-sign-up">
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
			</section>

			<section id="buttons">
				<div id="flex" class="indent">
					<div class="button-left">
						<button class="view">View our blog "A Horse Of Course"</button>
					</div>

					<div class="button-right">
						<button class="view">View Our Testimonials</button>
					</div>
				</div>
			</section>
		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
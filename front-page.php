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
					
					<?php echo popperscores_slider_template(); ?>






				</div>
			</section>

			<section id="featured-products">
				<div class="indent">
					<h2>Featured Products</h2>

					<div class="placeholder">
						<img src="" alt="">
					</div>

					<div class="placeholder">
						<img src="" alt="">
					</div>

					<div class="placeholder">
						<img src="" alt="">
					</div>

					<div class="placeholder">
						<img src="" alt="">
					</div>
				</div>
			</section>

			<section id="description-top">
				<div class="indent">
					<div>
						<img src="" alt="">
					</div>

					<div>
						<h2>Wallpaper Decor</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste fugit ratione perspiciatis, quas tempora officiis labore nostrum, voluptatem dicta magni accusamus, nihil vero excepturi, molestiae eum mollitia ipsa nesciunt facilis.</p>
					</div>
				</div>
			</section>

			<section id="description-bottom">
				<div class="indent">
					<div>
						<h2>Wallpaper Decor</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste fugit ratione perspiciatis, quas tempora officiis labore nostrum, voluptatem dicta magni accusamus, nihil vero excepturi, molestiae eum mollitia ipsa nesciunt facilis.</p>
					</div>

					<div>
						<img src="" alt="">
					</div>
				</div>
			</section>

			<section id="members-sign-up">
				<div class="indent">
					<h2>Let us spoil you with early access to our products and new releases</h2>

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
			</section>

			<section id="buttons">
				<div class="indent">
					<div class="button-left">
						<button>View our blog "A Hourse Of Course"</button>
					</div>

					<div class="button-right">
						<button>View Our Testimonials</button>
					</div>
				</div>
			</section>
		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
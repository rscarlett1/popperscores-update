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
							<img src="http://localhost/wordpress/wp-content/uploads/2016/12/placeholder-horse.jpg" alt="Featured Product Horse">
						</div>

						<div class="placeholder">
							<img src="http://localhost/wordpress/wp-content/uploads/2016/12/placeholder-horse.jpg" alt="Featured Product Horse">
						</div>

						<div class="placeholder">
							<img src="http://localhost/wordpress/wp-content/uploads/2016/12/placeholder-horse.jpg" alt="Featured Product Horse">
						</div>

						<div class="placeholder no-display-1">
							<img src="http://localhost/wordpress/wp-content/uploads/2016/12/placeholder-horse.jpg"" alt="Featured Product Horse">
						</div>

						<div class="placeholder no-display-2">
							<img src="http://localhost/wordpress/wp-content/uploads/2016/12/placeholder-horse.jpg" alt="Featured Product Horse">
						</div>
					</div>
				</div>
			</section>

			<section id="description-top">
				<div class="indent" id="detailed-images">
					<div id="image-left">
						<img src="http://localhost/wordpress/wp-content/uploads/2016/12/placeholder-horse.jpg" alt="featured product">
					</div>

					<div>
						<h2>Wallpaper Decor</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste fugit ratione perspiciatis, quas tempora officiis labore nostrum, voluptatem dicta magni accusamus, nihil vero excepturi, molestiae eum mollitia ipsa nesciunt facilis.</p>
					</div>
				</div>
			</section>

			<section id="description-bottom">
				<div id="display-images" class="indent" >
					<div id="full-screen-details">
						<h2>Wallpaper Decor</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste fugit ratione perspiciatis, quas tempora officiis labore nostrum, voluptatem dicta magni accusamus, nihil vero excepturi, molestiae eum mollitia ipsa nesciunt facilis.</p>
					</div>

					<div id="bottom-image">
						<img src="http://localhost/wordpress/wp-content/uploads/2016/12/placeholder-horse.jpg" alt="">
					</div>

				</div>

					<div id="mobile-view-details">
						<h2>Wallpaper Decor</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste fugit ratione perspiciatis, quas tempora officiis labore nostrum, voluptatem dicta magni accusamus, nihil vero excepturi, molestiae eum mollitia ipsa nesciunt facilis.</p>
					</div>

				
			</section>

			<section id="members-sign-up">
				<div id="sign-up" class="indent">
	
					</form></aside><aside id="wysija-2" class="widget widget_wysija"><h2 class="widget-title">Subscribe to our Newsletter</h2><div class="widget_wysija_cont"><div id="msg-form-wysija-2" class="wysija-msg ajax"></div><form id="form-wysija-2" method="post" action="#wysija" class="widget_wysija">

					<p id="center-wysija">Let us spoil you with early access to our products and new releases. Subscribe Now!</p>
					<div id="wysija-flex">
						<p class="wysija-paragraph">
						    <label>First name</label>
						    
						    	<input type="text" name="wysija[user][firstname]" class="wysija-input " title="First name"  value="" />
						 
						 	<span class="abs-req">
						        <input type="text" name="wysija[user][abs][firstname]" class="wysija-input validated[abs][firstname]" value="" />
						    </span>
				    
						</p>
						<p class="wysija-paragraph">
						    <label>Last name</label>
						    
						    	<input type="text" name="wysija[user][lastname]" class="wysija-input " title="Last name"  value="" />
						    
						    <span class="abs-req">
						        <input type="text" name="wysija[user][abs][lastname]" class="wysija-input validated[abs][lastname]" value="" />
						    </span>
						    
						</p>
						<p class="wysija-paragraph">
						    <label>Email <span class="wysija-required">*</span></label>
						    
				    	<input type="text" name="wysija[user][email]" class="wysija-input validate[required,custom[email]]" title="Email"  value="" />
				    
					    <span class="abs-req">
					        <input type="text" name="wysija[user][abs][email]" class="wysija-input validated[abs][email]" value="" />
					    </span>
				    
						</p>
					</div>
					<input class="wysija-submit wysija-submit-field" type="submit" value="Subscribe!" />

					    <input type="hidden" name="form_id" value="1" />
					    <input type="hidden" name="action" value="save" />
					    <input type="hidden" name="controller" value="subscribers" />
					    <input type="hidden" value="1" name="wysija-page" />

					    
					        <input type="hidden" name="wysija[user_list][list_ids]" value="1" />

						</form></div></aside>

					
				</div>
			</section>

			<section id="buttons">
				<div id="flex" class="indent">
					<div class="button-left">
						<a href="index.php/blog"><button class="view">View our blog "A Horse Of Course"</button></a>
					</div>

					<div class="button-right">
						<a href="index.php/testimonials"><button class="view">View Our Testimonials</button></a>
					</div>
				</div>
			</section>
		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
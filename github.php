	<?php /* Template Name: github */ ?>


<?php get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			

			<?php while ( have_posts() ) : the_post(); 

				the_content();

				
			endwhile; // End of the loop. ?>

			<div id="intro">
				<button id="go">Start Animation</button>
	        	
	        	<div id="testdiv">
	        		
	        	</div>
			
				<h1>Using the Github API</h1>

				<p>Anything below this line was loaded via the API<br><br><br><br></p>
			</div>

			<div id="place-for-data-to-go"></div>

			<div id="example"></div>
		
			<div id="repos">	
				<h1>Using the Github API</h1>

				<div id="name-repos"></div>
			</div>




		


		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>


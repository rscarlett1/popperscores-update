	<?php /* Template Name: github */ ?>


<?php get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			

			<?php while ( have_posts() ) : the_post(); 

				the_content();

				
			endwhile; // End of the loop. ?>

			<h1>Using the <a href="http://jsonplaceholder.typicode.com/">JSON Placeholder API</a></h1>

			<p>Anything below this line was loaded via the API<br><br><br><br></p>

			<div id="place-for-data-to-go"></div>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>


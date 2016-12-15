	<?php /* Template Name: github */ ?>


<?php get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			

			<?php while ( have_posts() ) : the_post(); 

				the_content();

				
			endwhile; // End of the loop. ?>

			<div id="w">
    			<h1>Simple Github API Webapp</h1>
    			<p>Enter a single Github username below and click the button to display profile info via JSON.</p>
    
    			<input type="text" name="ghusername" id="ghusername" placeholder="Github username...">
    
    			<a href="#" id="ghsubmitbtn">Pull User Data</a>
    
    		<div id="ghapidata" class="clearfix"></div>



		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>


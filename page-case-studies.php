<?php 
/*
	Template Name: Case Studies Page
*/
?>


<?php get_header(); ?>


	<section id="visualLead" class="visual-lead visual-lead--construction">

		<div class="wrapper">
			<div class="visual-lead__content-container">
				
				<h1 class="visual-lead__description visual-lead__description--under-construction">
					<?php if( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<?php the_content(); ?> - Case Studies
					<?php endwhile; else : ?> 
						<?php _e( 'Whoops. It looks like there was an error retrieving the page - "Case Studies"  '); ?>
					<?php endif; ?>
				</h1>
				
				<a href="<?php bloginfo('url') ?>" class="btn btn--white visual-lead__btn">Back To Homepage</a>
			</div>

		</div>
	</section>



<?php get_footer(); ?>
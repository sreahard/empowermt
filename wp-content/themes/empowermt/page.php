<?php
/**
 *	The template for displaying Page.
 *
 *	@package ThemeIsle
 */
get_header();
?>

	<?php
		if ( have_posts() ) {
			while ( have_posts() ) {
				the_post();
				$featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
					<?php
						if ( $featured_image != NULL ) { ?>
							
							<section id="single-header" style="background-image: url('<?php echo $featured_image[0]; ?>'); ">
								<div class="overlay">
									<h1><?php the_title(); ?></h1>
								</div>
							</section><!--/.single-featured-image-->

						<?php } else { ?>

						<section id="single-header" style="background-image: url('http://empowermt.x10host.com/wp-content/themes/empowermt/images/subheader-background-orange.png'); height:250px">
							<h1 style="padding-top: 70px"><?php the_title(); ?></h1>
						</section>

						<?php }
					?>
				<article id="single">
					

				<div class="wrap-sm">					
				<div class="single-entry cf">
						<?php the_content(); ?>
					</div><!--/.single-entry-->
					<?php comments_template(); ?>
				</article><!--/#single-->

				<?php }
		} else {
				echo '<p>No posts found.</p>';
		}
	?>
</div><!--/.wrap-->
<?php get_footer(); ?>
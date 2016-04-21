<?php
/**
 *	The template for displaying Front Page.
 *
 *	@package ThemeIsle
 */
get_header();


if ( get_option( 'show_on_front' ) == 'page' ): ?>
<section id="features-two">
	<div class="wrap">
		<h3>
			<?php the_title(); ?>
		</h3><!--/h3-->
	</div><!--/div .wrapper-->
</section><!--/section .wide-nav-->
<div class="wrap cf">
	<div class="content-left">
		<div class="front-page-article">
			<?php
			if ( have_posts() ) : 

				while ( have_posts() ) : the_post();

			the_content(); 

			endwhile; 

			endif; 
			?>

		</div>
	</div>	
	<?php get_sidebar(); ?>
</div><!--/div .wrapper-->

<?php		
else:

	get_template_part( 'includes/subheader' ); ?>
<section id="features-three">
	<div class="features-three-container">
		<div class="features-box">
			<div class="testimonial">	
				<div class="overlay-orange">
					<blockquote>
						<?php
						if ( get_theme_mod( 'empowermt_frontpage_ourclients_quote1',get_template_directory_uri().'/images/logo_default.png' ) ) {
							echo get_theme_mod( 'empowermt_frontpage_ourclients_quote1',__('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.','cw-business-lite') );}
							?>
						</blockquote>
					</div>

					<?php
					if ( get_theme_mod( 'empowermt_frontpage_ourclients_logo1',get_template_directory_uri().'/images/logo_default.png' ) ) { ?>
					<img src="<?php echo esc_url(get_theme_mod( 'empowermt_frontpage_ourclients_logo1',get_template_directory_uri().'/images/logo_default.png' )); ?>" class="full-width" alt="Sponsor 1" />
					<?php }
					?>
				</div>
			</div>

			<div class="features-box">
				<div class="testimonial">	
					<div class="overlay-blue">
						<blockquote>
							<?php
							if ( get_theme_mod( 'empowermt_frontpage_ourclients_quote2',get_template_directory_uri().'/images/logo_default.png' ) ) {
								echo get_theme_mod( 'empowermt_frontpage_ourclients_quote2',__('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.','cw-business-lite') );}
								?>
							</blockquote>
						</div>
						<?php
						if ( get_theme_mod( 'empowermt_frontpage_ourclients_logo2',get_template_directory_uri().'/images/logo_default.png' ) ) { ?>
						<img src="<?php echo esc_url(get_theme_mod( 'empowermt_frontpage_ourclients_logo2',get_template_directory_uri().'/images/logo_default.png' )); ?>" class="full-width" alt="Sponsor 2" />
						<?php }
						?>
					</div>
				</div>

				<div class="features-box">
					<div class="testimonial">	
						<div class="overlay-orange">
							<blockquote>
								<?php
								if ( get_theme_mod( 'empowermt_frontpage_ourclients_quote3',get_template_directory_uri().'/images/logo_default.png' ) ) {
									echo get_theme_mod( 'empowermt_frontpage_ourclients_quote3',__('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.','cw-business-lite') );}
									?>
								</blockquote>
							</div>

							<?php
							if ( get_theme_mod( 'empowermt_frontpage_ourclients_logo3',get_template_directory_uri().'/images/logo_default.png' ) ) { ?>
							<img src="<?php echo esc_url(get_theme_mod( 'empowermt_frontpage_ourclients_logo3',get_template_directory_uri().'/images/logo_default.png' )); ?>" class="full-width" alt="Sponsor 3" />
							<?php }
							?>
						</div>
					</div>

					<div class="features-box">
						<div class="testimonial">	
							<div class="overlay-blue">
								<blockquote>
									<?php
									if ( get_theme_mod( 'empowermt_frontpage_ourclients_quote4',get_template_directory_uri().'/images/logo_default.png' ) ) {
										echo get_theme_mod( 'empowermt_frontpage_ourclients_quote4',__('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.','cw-business-lite') );}
										?>
									</blockquote>
								</div>
								<?php
								if ( get_theme_mod( 'empowermt_frontpage_ourclients_logo4',get_template_directory_uri().'/images/logo_default.png' ) ) { ?>
								<img src="<?php echo esc_url(get_theme_mod( 'empowermt_frontpage_ourclients_logo4',get_template_directory_uri().'/images/logo_default.png' )); ?>" class="full-width" alt="Sponsor 4" />
								<?php }
								?>
							</div>
						</div>

						<div class="features-box">
							<div class="testimonial">	
								<div class="overlay-orange">
									<blockquote>
										<?php
										if ( get_theme_mod( 'empowermt_frontpage_ourclients_quote5',get_template_directory_uri().'/images/logo_default.png' ) ) {
											echo get_theme_mod( 'empowermt_frontpage_ourclients_quote5',__('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.','cw-business-lite') );}
											?>
										</blockquote>
									</div>
									<?php
									if ( get_theme_mod( 'empowermt_frontpage_ourclients_logo5',get_template_directory_uri().'/images/logo_default.png' ) ) { ?>
									<img src="<?php echo esc_url(get_theme_mod( 'empowermt_frontpage_ourclients_logo5',get_template_directory_uri().'/images/logo_default.png' )); ?>" class="full-width" alt="Sponsor 5" />
									<?php }
									?>
								</div>
							</div>

<!-- 				<?php
				if ( get_theme_mod( 'empowermt_frontpage_ourclients_logo6',get_template_directory_uri().'http://lorempixel.com/250/250/people/6' ) ) { ?>
					<img src="<?php echo esc_url(get_theme_mod( 'empowermt_frontpage_ourclients_logo6',get_template_directory_uri().'/images/logo_default.png' )); ?>" alt="Sponsor 6" />
				<?php }
				?> -->
			</div><!--/.our-clients-->
		</section>
		<section id="features-two">
			<div class="wrap">
				<?php
				if ( get_theme_mod( 'empowermt_frontpage_subheader_title',__('Why Choose Us?','cw-business-lite') ) ) {
					echo '<h3>';
					echo get_theme_mod( 'empowermt_frontpage_subheader_title',__('Why Choose Us?','cw-business-lite') );
					echo '</h3>';	
				}
				?>
				<div class="features-two-container">
					<div class="features-box">

						<?php
						$empowermt_frontpage_firstlybox_link = get_theme_mod('empowermt_frontpage_firstlybox_link');

						if( !empty($empowermt_frontpage_firstlybox_link) ):
							echo '<a href="'.$empowermt_frontpage_firstlybox_link.'">';
						endif;	

						if ( get_theme_mod( 'empowermt_frontpage_firstlybox_image' ) ) {
							echo '<div class="features-box-image">

							<img src="'. esc_url(get_theme_mod( 'empowermt_frontpage_firstlybox_image' )) .'" alt="'. get_theme_mod( 'empowermt_frontpage_firstlybox_title','Fast &amp; Safe' ) .'" title="'. get_theme_mod( 'empowermt_frontpage_firstlybox_title',__('Fast &amp; Safe','cw-business-lite') ) .'" /></div>';
						} else {
							echo '<div class="features-box-icon">						
							<i class="fa fa-graduation-cap fa-3x"></i>
							</div>';
						}

						if ( get_theme_mod( 'empowermt_frontpage_firstlybox_title',__('Fast &amp; Safe','cw-business-lite') ) ) {
							echo '<h4>';
							echo get_theme_mod( 'empowermt_frontpage_firstlybox_title',__('Fast &amp; Safe','cw-business-lite') );
							echo '</h4>';
						} 
						if( !empty($empowermt_frontpage_firstlybox_link) ):
							echo '</a>';
						endif;	
						?>
						<p style="font-size: 16px; color:#787878; margin:30px; text-align: center"> In the 2013-2014 academic year, NCBI provided training to over 20 Montana schools, reaching over 3,500 young people and 300 educators with skill to create safer, more inclusive school communities.  Read more about NCBI's <br><a href="#" style="color: #00acdc">Youth and Schools Work...</a></p>
					</div><!--/.features-box-->
					<div class="features-box">
						<?php
						$empowermt_frontpage_secondlybox_link = get_theme_mod('empowermt_frontpage_secondlybox_link');

						if( !empty($empowermt_frontpage_secondlybox_link) ):
							echo '<a href="'.$empowermt_frontpage_secondlybox_link.'">';
						endif;

						if ( get_theme_mod( 'empowermt_frontpage_secondlybox_image' ) ) {
							echo '<div class="features-box-image"><img src="'. esc_url(get_theme_mod( 'empowermt_frontpage_secondlybox_image' )) .'" alt="'. get_theme_mod( 'empowermt_frontpage_secondlybox_title',__('24/ 7 Support','cw-business-lite') ) .'" title="'. get_theme_mod( 'empowermt_frontpage_secondlybox_title',__('24/ 7 Support','cw-business-lite') ) .'" /></div>';
						} else {
							echo '<div class="features-box-icon"><i class="fa fa-briefcase fa-3x"></i></div>';
						}

						if ( get_theme_mod( 'empowermt_frontpage_secondlybox_title',__('24/ 7 Support','cw-business-lite') ) ) {
							echo '<h4>';
							echo get_theme_mod( 'empowermt_frontpage_secondlybox_title',__('24/ 7 Support','cw-business-lite') );
							echo '</h4>';	
						}

						if( !empty($empowermt_frontpage_secondlybox_link) ):
							echo '</a>';
						endif;
						?>
						<p style="font-size: 16px; color:#787878; margin:30px; text-align: center"> NCBI Missoula has worked with over 80 businesses and organizations from across Montana since 1998, ranging from grassroots nonprofit organizations, to local businesses, to statewide government agencies.  Read more about NCBI's <br><a href="#" style="color: #00acdc">Business and Organizational work...</a></p>

					</div><!--/.features-box-->
					<div class="features-box">
						<?php
						$empowermt_frontpage_thirdlybox_link = get_theme_mod('empowermt_frontpage_thirdlybox_link');

						if( !empty($empowermt_frontpage_thirdlybox_link) ):
							echo '<a href="'.$empowermt_frontpage_thirdlybox_link.'">';
						endif;

						if ( get_theme_mod( 'empowermt_frontpage_thirdlybox_image' ) ) {
							echo '<div class="features-box-image"><img src="'. esc_url(get_theme_mod( 'empowermt_frontpage_thirdlybox_image' )) .'" alt="'. get_theme_mod( 'empowermt_frontpage_thirdlybox_title',__('100% Satisfaction','cw-business-lite') ) .'" title="'. get_theme_mod( 'empowermt_frontpage_thirdlybox_title',__('100% Satisfaction','cw-business-lite') ) .'" /></div>';
						} else {
							echo '<div class="features-box-icon"><i class="fa fa-users fa-3x"></i></div>';
						}
						?>
						<h4>
							<?php
							if ( get_theme_mod( 'empowermt_frontpage_thirdlybox_title',__('100% Satisfaction','cw-business-lite') ) ) {
								echo get_theme_mod( 'empowermt_frontpage_thirdlybox_title',__('100% Satisfaction','cw-business-lite') );
							}
							?>
						</h4>

						<?php
						if( !empty($empowermt_frontpage_thirdlybox_link) ):
							echo '</a>';
						endif;
						?>
						<p style="font-size: 16px; color:#787878; margin:30px; text-align: center"> Last year NCBI Missoula reached over 2,000 community members through their community based workshops and events, including our annual Diversity Day Celebration, Missoula's MLK Day Community Celebration, and more.  Read more about NCBI's <a href="#" style="color: #00acdc">Community Based Work...</a></p>
					</div><!--/.features-box-->
				</div><!--/.features-two-container-->
			</div><!--/.wrap-->
		</section><!--/#features-two-->
		<div class="wrap">
			<article id="content-article">
<!-- 		<?php
		$empowermt_frontpage_thecontent_image = get_theme_mod('empowermt_frontpage_thecontent_image', get_template_directory_uri().'/images/index-article-image.png');
		if( !empty($empowermt_frontpage_thecontent_image) ):
			echo '<div class="content-article-image">';
		echo '<img src="'.esc_url($empowermt_frontpage_thecontent_image).'" alt="Index Article Image" title="Index Article Image" />';
		echo '</div>';
		endif;
		?> -->
		<div class="content-article-video">
			<iframe width="640" height="360" src="https://www.youtube.com/embed/2TdTfXXZNSU" frameborder="0" allowfullscreen></iframe>
		</div>
		<h2>
			<?php
			if ( get_theme_mod( 'empowermt_frontpage_thecontent_title',__('Empower MT 2014 Impact Video','cw-business-lite') ) ) {
				echo get_theme_mod( 'empowermt_frontpage_thecontent_title',__('Empower MT 2014 Impact Video','cw-business-lite') );
			}
			?>
		</h2>
		<p>
			<?php
			if ( get_theme_mod( 'empowermt_frontpage_thecontent_content',__('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt.','cw-business-lite') ) ) {
				echo get_theme_mod( 'empowermt_frontpage_thecontent_content',__('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt.','cw-business-lite') );
			}
			?>
		</p>
	</article><!--/#content-article-->
</div><!--/.wrap-->
<div class="clearfix"></div>
<!-- <div class="wrap"> -->

<section class="content">
<!-- 	<div class="title-border">
		<h3>
			<?php
			if ( get_theme_mod( 'empowermt_frontpage_ourclients_title',__('Our Clients','cw-business-lite') ) ) {
				echo get_theme_mod( 'empowermt_frontpage_ourclients_title',__('Our Clients','cw-business-lite') );
			}
			?>
		</h3>
	</div> --><!--/.title-border-->
</section>
<!--/.content-->
</div><!--/.wrap-->

<?php endif; ?>
<?php get_footer(); ?>
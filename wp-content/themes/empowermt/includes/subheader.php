<section id="subheader" class="cf">
	<div class="wrap cf">
		<div class="subheader-content <?php if ( get_theme_mod( 'empowermt_header_contactform7_shortcode' ) ) { } else { echo 'subheader-content-no-sidebar'; } ?>">
			<h3>
				<?php
				if ( get_theme_mod( 'empowermt_frontpage_header_title',__('Lorem ipsum dolor sit amet, consectetuer adipiscing elit.','empowermt') ) ) {
					echo get_theme_mod( 'empowermt_frontpage_header_title',__('Lorem ipsum dolor sit amet, consectetuer adipiscing elit.','empowermt') );
				}
				?>
			</h3>
			<div class="subheader-content-entry">
				<?php
				if ( get_theme_mod( 'empowermt_frontpage_header_content', __('Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam. Duis autem vel eum iriure it dolor in hendrerit in.Ut wisi enim ad minim veniam. Duis autem vel eum iriure it.','empowermt') ) ) {
					echo get_theme_mod( 'empowermt_frontpage_header_content',__('Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam. Duis autem vel eum iriure it dolor in hendrerit in.Ut wisi enim ad minim veniam. Duis autem vel eum iriure it.','empowermt') );
				}
				?>
			</div><!--/.subheader-content-entry-->
		</div><!--/.subheader-content-->
		
	</div><!--/.wrap .cf-->
</section><!--/#subheader-->
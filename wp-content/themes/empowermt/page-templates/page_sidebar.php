 <?php
/**
 * Template Name: Right Sidebar 
 The template for displaying Page with Side bar.
 *
 *  @package ThemeIsle
 */
get_header();
?>
<div class="wrap cf">
<div class="content-left">
  <?php
    if ( have_posts() ) {
      while ( have_posts() ) {
        the_post();
        $featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>

        <article id="single">
          <h1><?php the_title(); ?></h1>
          <?php
            if ( $featured_image != NULL ) { ?>
              <div class="single-featured-image">
                <img src="<?php echo $featured_image[0]; ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" />
              </div><!--/.single-featured-image-->
            <?php }
          ?>
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
  </div>
    <?php get_sidebar(); ?>
</div>
</div><!--/.wrap-->
<?php get_footer(); ?>
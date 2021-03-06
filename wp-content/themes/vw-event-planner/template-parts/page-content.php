<?php
/**
 * The template part for displaying page content
 *
 * @package VW Event Planner
 * @subpackage vw_event_planner
 * @since VW Event Planner 1.0
 */
?>

<div id="content-vw">  
  <img src="<?php the_post_thumbnail_url('full'); ?>" >
  <h1><?php the_title();?></h1>
  <?php the_content();?>
  <?php
      // If comments are open or we have at least one comment, load up the comment template.
      if ( comments_open() || get_comments_number() ) :
         comments_template();
      endif;
  ?>
  <div class="clearfix"></div>
</div>
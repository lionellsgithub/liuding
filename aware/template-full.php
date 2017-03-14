<?php
/*
Template Name: Page - Full Width
*/
?>
<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<!-- Page Content
  ================================================== -->
<div class="container clearfix fadeInUp animated">
        <div class="sixteen columns content">
      		<div class="contentwrap">
		    <a class="backhome" href="http://www.liuding.com"><< Home</a>
            <?php the_content(); ?>
            <?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
            
			<?php endwhile; else :?>
            <!-- Else nothing found -->
            <h2><?php _e('Error 404 - Not found.', 'framework'); ?></h2>
            <p><?php _e("Sorry, but you are looking for something that isn't here.", 'framework'); ?></p>
            
            <?php endif; ?>
            <div class="clear"></div>
         </div>
       </div>
       
       <div class="clear"></div>

</div>
<?php get_footer(); ?>
<?php 

/**
 Template Name: blacklist
 */

get_header(); 

?>
	<?php while(have_posts()) : the_post(); ?>
	<?php if(akina_option('patternimg') || !get_post_thumbnail_id(get_the_ID())) { ?>
	<span class="linkss-title"><?php the_title();?></span>
	<?php } ?>
		<article <?php post_class("post-item"); ?>>
			<?php the_content(); ?>
			<div class="links">
				<?php echo get_the_link_items('9'); ?>
			</div>
		</article>
        <div class="have-toc"></div><div class="toc-container"><div class="toc"></div></div>
	<?php endwhile; ?>
<?php
get_footer();

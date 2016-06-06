<!-- WHEN ANY OF THE POST IS CLICKED -->
<?php get_header(); ?>

<div class="row">
	<div class="col-xs-12 col-sm-8 text-indent">
		<?php 
		if( have_posts() ):
			while( have_posts() ): the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<?php the_title('<p class="entry-title">','</p>'); ?>
					<?php if ( has_post_thumbnail() ): ?>
						<div class="pull-right"><?php the_post_thumbnail('medium'); ?> </div>
					<?php endif; ?>
					<small> <?php the_category(' '); ?> | <?php the_tags(); ?> | <?php edit_post_link(); ?></small>
					<?php the_content(); ?>
					<hr>
					<?php if(comments_open()){ comments_template(); }
					else{
						echo '<h5 class="text-center">Sorry, Comments are not available.</h5>';
					}
					?>
				</article>
		<?php endwhile;
		endif;
		?>
	</div>
	<div class="col-xs-12 col-sm-3">
		<?php get_sidebar(); ?>
	</div>	
</div>
<?php get_footer(); ?>

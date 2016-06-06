<!-- ARCHIVE PAGE -->
<?php get_header(); ?>

<div class="row">	
	<div class="col-xs-12 col-sm-8">		
		<div class="row text-center no-margin">
		<?php 
			
		if( have_posts() ):
			
			while( have_posts() ): the_post(); ?>
				
				<?php get_template_part('content', 'archive'); ?>

			<?php endwhile;?>

			<div class="col-xs-12 text-center text-format">
				<?php the_posts_navigation(); ?> 
			</div>
		<?php endif;?>
		</div>
	</div>
	<div class="col-xs-12 col-sm-4">
		<?php get_sidebar(); ?>
	</div>
</div>

<?php get_footer(); ?>

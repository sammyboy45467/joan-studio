<?php get_header(); ?>

<?php get_template_part('slider'); ?>


<div class="row">
	<div class="small-12 large-12 columns" role="main">

	<?php do_action('foundationPress_before_content'); ?>

	<?php while (have_posts()) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<header>
				<h1 class="entry-title"><?php the_title(); ?></h1>
				
			</header>
			<?php do_action('foundationPress_post_before_entry_content'); ?>
			<div class="entry-content">

			<?php if ( has_post_thumbnail() ): ?>
				<div class="row">
					<div class="small-12 large-12 columns">
						<?php the_post_thumbnail('', array('class' => 'th')); ?>
					</div>
					<div class="small-12 large-12 columns">
						<?php the_content(); ?>
					</div>

				</div>
			<?php endif; ?>

				
			</div>
			
			<footer>
				<?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'FoundationPress'), 'after' => '</p></nav>' )); ?>
<!--				<p>--><?php //the_tags(); ?><!--</p>-->
			</footer>

		</article>
	<?php endwhile;?>

	<?php do_action('foundationPress_after_content'); ?>

	</div>
<!--	--><?php //get_sidebar(); ?>
</div>
<?php get_footer(); ?>

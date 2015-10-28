<?php get_header(); ?>
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>"></a>
	<?php bloginfo('name'); ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<?php the_title(); ?>
		<?php the_content(); ?>
		<?php the_category(); ?>
		<?php the_time('Y-m-d') ?>
		<?php the_time('F j, Y') ?>
	<?php endwhile; ?>
	<?php else : ?>
		<!-- 404 Message -->
	<?php endif; ?>
<?php get_footer(); ?>
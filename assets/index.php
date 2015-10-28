<?php get_header(); ?>
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>"></a>
	<?php bloginfo('name'); ?>
	<!-- The Loop -->
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<!-- Sample Template Tags  -->
		<?php the_title(); ?>
		<?php the_permalink(); ?>
		<?php the_content(); ?>
		<?php the_category(); ?>
		<?php the_time('F j, Y') ?>
	<?php endwhile; ?>
	<?php else : ?>
		<h1>Not found.</h1>
	<?php endif; ?>
<?php get_footer(); ?>
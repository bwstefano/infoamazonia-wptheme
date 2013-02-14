<?php get_header(); ?>

<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
	<section id="page">
		<div class="limiter clearfix">
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header>
						<h1><?php the_title(); ?></h1>
					</header>
					<section class="post-content">
						<?php the_content(); ?>
					</section>
			</article>
			<?php if(is_active_sidebar('main-sidebar')) : ?>
				<aside id="page-sidebar">
					<ul class="widgets">
						<?php dynamic_sidebar('main-sidebar'); ?>
					</ul>
				</aside>
			<?php endif; ?>
		</div>
	</section>
<?php endwhile; endif; ?>

<?php get_footer(); ?>
<?php get_header(); ?>
	<div id="main">
		<?php
			if (have_posts()): while (have_posts()): the_post();
		?>
			<h1>
				<a href="<?php the_permalink(); ?>">
					<?php the_title(); ?>
				</a>
			</h1>
			<?php the_content(); ?>
		<?php
			endwhile; endif;
		?>
		<?php
			if ($wp_query -> max_num_pages > 1):
		?>
			<div class="navigation">
				<div class="getOld">
					<?php next_posts_link('Prev'); ?>
				</div>
				<div class="getNew">
					<?php previous_posts_link('New'); ?>
				</div>
			</div>
		<?php
			endif;
		?>
	</div>
<?php get_footer(); ?>
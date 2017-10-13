<?php get_header(); ?>

<div id="content">
	<div id="page_banner_container">
		<?php $page_title = get_the_title(get_option('page_for_posts', true));
		$page = get_page_by_title($page_title);
		$url = wp_get_attachment_url(get_post_thumbnail_id($page->ID));
		if ($url) { ?><img src="<?php echo $url; ?>" alt="Poem Banner" /><?php } ?>
	</div>

	<div id="page_title_container"><?php echo $page_title; ?></div>

	<div id="blog_wrapper">
		<div id="post_section">
			<?php if (have_posts()) : while(have_posts()) : the_post();?>

			<div class="post_wrapper">
				<div class="title_wrapper"><strong><?php the_title(); ?></strong></div>
			
				<div class="category_wrapper">
					<?php $i = 0;

					foreach ((get_the_category()) as $category) {
						if ($i > 0) { echo ', '; }
						if ($i % 3 == 0) { echo '<br>'; }
						echo '<span><a href="'.esc_url( get_category_link( $category->term_id ) ).'">'.$category->cat_name.'</a></span>';
						++$i;
					} ?>
				</div>

				<?php the_content(); ?>
			</div>

			<?php endwhile;

			echo '<div class="pagination_wrapper">'.paginate_links(the_post()).'</div>';

			else : echo '<p>There are currently no poems to showcase</p>';
			endif; ?>

		</div><div id="sidebar_section">
			<div class="sidebar_blocks"><?php if (is_active_sidebar('category_widget')) { dynamic_sidebar('category_widget'); } ?></div>

			<?php $args = array('post_type'=>'post', 'post_status'=>'publish', 'orderby' => 'title', 'order' => 'ASC', 'posts_per_page' => -1);
		 	$query = new WP_Query($args);

			if ($query->have_posts()) : while($query->have_posts()) : $query->the_post();

			if ($i > 0) { echo '- '; } ?>
			<a class="posts_in_category" href="<?php the_permalink() ?>"><?php the_title();?></a>
			<?php ++$i;

			endwhile;
			else : echo '<p>There are currently no poems associated with this category</p>';
			endif; ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>
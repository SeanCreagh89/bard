<?php get_header(); ?>

<div id="content">
	<?php if (have_posts()) : while(have_posts()) : the_post();
	$get_poem_state = poem_of_the_month_get_meta('poem_of_the_month_display_poem_of_the_month_on_this_page'); ?>
	
	<div id="page_banner_container"><?php the_post_thumbnail(); ?></div>
	<div id="page_title_container"><?php the_title(); ?></div>

	<?php if ($get_poem_state) { ?>
	<div id="poem_of_the_month_layout" class="content_elements">
		<div id="page_content_container"><?php the_content(); ?></div><div id="poem_of_the_month_container">
			<?php
			$poem_category;
			$month = date('m');

			if ($month == 1) { $poem_category = "january-poem-of-the-month"; }
			elseif ($month == 2) { $poem_category = "february-poem-of-the-month"; }
			elseif ($month == 3) { $poem_category = "march-poem-of-the-month"; }
			elseif ($month == 4) { $poem_category = "april-poem-of-the-month"; }
			elseif ($month == 5) { $poem_category = "may-poem-of-the-month"; }
			elseif ($month == 6) { $poem_category = "june-poem-of-the-month"; }
			elseif ($month == 7) { $poem_category = "july-poem-of-the-month"; }
			elseif ($month == 8) { $poem_category = "august-poem-of-the-month"; }
			elseif ($month == 9) { $poem_category = "september-poem-of-the-month"; }
			elseif ($month == 10) { $poem_category = "october-poem-of-the-month"; }
			elseif ($month == 11) { $poem_category = "november-poem-of-the-month"; }
			elseif ($month == 12) { $poem_category = "december-poem-of-the-month"; }

			$args = array('category_name' => $poem_category);
			$query = new WP_Query($args);

			if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
			
			<div class="title_wrapper"><strong><?php the_title(); ?></strong></div>
			<?php the_content();

			endwhile;

			wp_reset_postdata();

			else :
				$new_args = array('category_name' => 'poem-of-the-month');
				$new_query = new WP_Query($new_args);

				if ($new_query->have_posts()) : while ($new_query->have_posts()) : $new_query->the_post(); ?>
				
				<strong><?php the_title(); ?></strong>
				<?php the_content();

				endwhile;

				wp_reset_postdata();
				
				else : echo '<div id="content_inner_container" class="content_elements"><p>Could not find the Poem of the Month. Make sure that you have set a Poem of the Month.</p></div>';
				endif;
			endif; ?>
		</div>
	</div>

	<?php } else { ?>

	<div id="content_inner_container" class="content_elements"><?php the_content(); ?></div>

	<?php }

	endwhile;
	else : echo '<div id="content_inner_container" class="content_elements"><p>Could not find content</p></div>';
	endif; ?>
</div>

<?php get_footer(); ?>
<?php get_header(); ?>

<?php 
$taxonomy = get_queried_object()->taxonomy;
$terms = get_terms( [
	'taxonomy' => $taxonomy,
] );

$term_id = get_queried_object_id();

$args = array(
	'post_type' => 'brand', 
	'posts_per_page' => 6, 
	'tax_query' => array(
		array(
			'taxonomy' => $taxonomy,
			'field'    => 'id',
			'terms'    => $term_id
		)
	),
	'paged' => get_query_var('paged')
);
$wp_query = new WP_Query($args);
?>

<?php if ($terms && $wp_query->have_posts()): ?>
	<section class="categories">
		<div class="container">
			<h1 class="categories__title h2"><?php single_term_title() ?></h1>
			<div class="categories__body">
				<div class="categories__filter">
					<div class="categories-filter">
						<div class="categories-filter__title">
							<?php _e('Filter by category', 'Bonus') ?>

							<svg width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path
								d="M1.58023 0.451988L0.520235 1.51299L6.29723 7.29199C6.3898 7.38514 6.49988 7.45907 6.62113 7.50952C6.74238 7.55997 6.87241 7.58594 7.00373 7.58594C7.13506 7.58594 7.26509 7.55997 7.38634 7.50952C7.50759 7.45907 7.61767 7.38514 7.71023 7.29199L13.4902 1.51299L12.4302 0.452987L7.00523 5.87699L1.58023 0.451988Z"
								fill="black" />
							</svg>
						</div>
						<div class="categories-filter__list">

							<?php foreach ($terms as $term): ?>
								<a href="<?= get_term_link($term->term_id) ?>"<?php if($term->term_id == $term_id) echo ' class="active"' ?>>
									<?= $term->name ?>
								</a>
							<?php endforeach ?>

						</div>
					</div>
				</div>
				<div class="categories__content">
					<div class="padding-wrap">
						<div class="categories__list grid gap-[2rem] md:grid-cols-2 lg:gap-[4rem]" id="response_brands">

							<?php while ($wp_query->have_posts()): $wp_query->the_post(); ?>
								<?php get_template_part('parts/content', 'brand') ?>
							<?php endwhile; ?>

						</div>

						<?php if ($wp_query->max_num_pages > 1): ?>
							<script> var this_page = 1; </script>

							<div class="mt-[2rem] lg:mt-[3.4rem]">
								<a href="#" class="btn-load-more more_brands" data-param-posts='<?php echo serialize($wp_query->query_vars); ?>' data-max-pages='<?php echo $wp_query->max_num_pages; ?>'>
									<?php _e('View more', 'Bonus') ?>
									<svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M14.8799 3.99318C14.8799 3.8672 14.8301 3.73828 14.7334 3.6416C14.54 3.44824 14.2236 3.44824 14.0303 3.6416L7.41211 10.2598L0.890625 3.73828C0.697265 3.54492 0.380859 3.54492 0.1875 3.73828C-0.00585967 3.93164 -0.0058597 4.24805 0.1875 4.4414L7.06055 11.3174C7.25391 11.5107 7.57031 11.5107 7.76367 11.3174L14.7334 4.34766C14.833 4.24805 14.8799 4.12209 14.8799 3.99318Z"
										fill="currentColor"></path>
									</svg>
								</a>
							</div>
						<?php endif ?>

					</div>
					<div class="mt-[8rem] lg:mt-[3.2rem]">
						<?= do_shortcode('[contact-form-7 id="7eda66f" html_class="get-coupons box-default box-default--dark"]') ?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php 
endif; 
wp_reset_query(); 
?>

<?php get_footer(); ?>
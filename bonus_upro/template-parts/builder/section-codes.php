<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<?php if($codes): ?>

		<?php 
		$args = array(
			'post_type' => 'code', 
			'posts_per_page' => $posts_per_page ?: 6,
			'post__in' => wp_list_pluck($codes, 'ID'),
			'orderby' => 'post__in',
			'paged' => get_query_var('paged')
		);
		$wp_query = new WP_Query($args); 
		if($wp_query->have_posts()):
			?>

			<section class="section-space-lg">
				<div class="container">
					<div class="box-default">

						<?php if ($title): ?>
							<h2 class="box-default__title h2"><?= $title ?></h2>
						<?php endif ?>

						<?php if ($text): ?>
							<div class="box-default__subtitle"><?= $text ?></div>
						<?php endif ?>

						<div class="box-default__content">
							<div class="grid gap-[2rem] md:grid-cols-2 lg:grid-cols-3 lg:gap-[4rem]" id="response_codes_<?= $type ?>">

								<?php while ($wp_query->have_posts()): $wp_query->the_post(); ?>
									<?php get_template_part('parts/content', 'code_' . $type) ?>
									<?php 
								endwhile;
								wp_reset_postdata(); 
								?>

							</div>

							<?php if ($wp_query->max_num_pages > 1): ?>

								<?php if ($type == 'v1'): ?>
									<script> var this_page_1 = 1; </script>
								<?php else: ?>
									<script> var this_page_2 = 1; </script>
								<?php endif ?>
								

								<div class="mt-[2rem] lg:mt-[3.4rem]">
									<a href="#" class="btn-load-more" id="more_codes_<?= $type ?>" data-param-posts='<?php echo serialize($wp_query->query_vars); ?>' data-max-pages='<?php echo $wp_query->max_num_pages; ?>' data-post-template="<?= $type ?>">
										<?php _e('View more', 'Bonus') ?>
										<svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path
											d="M14.8799 3.99318C14.8799 3.8672 14.8301 3.73828 14.7334 3.6416C14.54 3.44824 14.2236 3.44824 14.0303 3.6416L7.41211 10.2598L0.890625 3.73828C0.697265 3.54492 0.380859 3.54492 0.1875 3.73828C-0.00585967 3.93164 -0.0058597 4.24805 0.1875 4.4414L7.06055 11.3174C7.25391 11.5107 7.57031 11.5107 7.76367 11.3174L14.7334 4.34766C14.833 4.24805 14.8799 4.12209 14.8799 3.99318Z" fill="currentColor" />
										</svg>
									</a>
								</div>
							<?php endif ?>

						</div>
					</div>
				</div>
			</section>

			<?php 
			wp_reset_query();
		endif; 
		?>

	<?php endif; ?>

	<?php endif; ?>
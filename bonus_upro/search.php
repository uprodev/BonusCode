<?php get_header(); ?>

<section class="catalog">

	<?php get_template_part('parts/breadcrumbs') ?>

	<div class="container">
		<div class="catalog__content">
			<div class="catalog__title title show">
				<h2>Search results: <?= get_search_query() ?></h2>
			</div>
			<div class="catalog__selects-wrapper">
				
				<?php get_search_form() ?>

			</div>
			<div class="tabs__panels">
				<div class="catalog__items">

					<?php while ($wp_query->have_posts()): $wp_query->the_post(); ?>
						<?php get_template_part('parts/content', 'technique') ?>
					<?php endwhile; ?>

				</div>

				<?php kama_pagenavi([], null) ?>

			</div>

		</div>
	</div>
</section>

<?php get_footer(); ?>
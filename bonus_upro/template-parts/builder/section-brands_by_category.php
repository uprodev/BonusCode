<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<?php if ($category && $brands): ?>

		<?php 
		switch ($category->term_id) {
			case 6:
			$card_type = 'v1';
			$cols = 4;
			break;
			case 10:
			$card_type = 'v3';
			$cols = 3;
			break;

			default:
			$card_type = 'v2';
			$cols = 5;
			break;
		}
		?>

		<section class="section-space">
			<div class="container">
				<div class="box-default">
					<div class="box-default-grid">
						<div class="box-default-grid-title-slot">
							<h2 class="h2 text-center lg:text-start"><?= $category->name ?></h2>
						</div>
						<div class="box-default-grid-content-slot">
							<div class="grid gap-[2rem] md:grid-cols-2 lg:grid-cols-<?= $cols ?> lg:gap-[4rem]">

								<?php foreach($brands as $post): 

									global $post;
									setup_postdata($post); ?>
									<?php get_template_part('parts/content', 'brand_' . $card_type) ?>
								<?php endforeach; ?>

								<?php wp_reset_postdata(); ?>

							</div>
						</div>

						<?php if ($link_text): ?>
							<div class="box-default-grid-btn-slot text-center lg:text-start">
								<a href="<?= get_term_link($category->term_id) ?>" class="btn-primary"><?= $link_text ?></a>
							</div>
						<?php endif ?>

					</div>
				</div>
			</div>
		</section>
	<?php endif ?>

	<?php endif; ?>
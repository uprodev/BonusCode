<?php $post_id = get_the_ID() ?>

<div class="code-card">
	<div class="code-card__head">
		<div class="code-card__title">
			<?php the_field('off') ?>

			<span>

				<?php if (get_field('is_verified') == 'Verified'): ?>
					<img src="<?= get_stylesheet_directory_uri() ?>/assets/icons/check-circle-gradient.svg" alt="">
					<?php _e('Verified', 'Bonus') ?>
				<?php endif ?>

				<?php if (get_field('is_verified') == 'Unverified'): ?>
					<img src="<?= get_stylesheet_directory_uri() ?>/assets/icons/warning-triangle.svg" alt="">
					<?php _e('Unverified', 'Bonus') ?>
				<?php endif ?>
				
				<?php if (($field = get_field('untested')) && get_field('is_verified') == 'Untested'): ?>
					<img src="<?= get_stylesheet_directory_uri() ?>/assets/icons/warning-triangle.svg" alt="">
					<?= $field ?>
				<?php endif ?>
				
			</span>
		</div>

		<?php if (has_post_thumbnail()): ?>
			<div class="code-card__logo">
				<?php the_post_thumbnail('full') ?>
			</div>
		<?php endif ?>
		
	</div>

	<?php if (has_excerpt()): ?>
		<div class="code-card__text">
			<strong>
				<?php the_excerpt() ?>
			</strong>
		</div>
	<?php endif ?>
	
	<div class="code-card__row">
		<a href="#popup-promo-code-<?= $post_id ?>" data-action="open-popup" class="md:ms-auto btn-secondary default-gradient">
			<img src="<?= get_stylesheet_directory_uri() ?>/assets/icons/square-with-arrow-up.svg" alt="">
			<?php _e('Show Promo Code', 'Bonus') ?>
		</a>
	</div>
	<div class="code-card__footer">
		<a href="<?php the_permalink() ?>"><?php the_title() ?></a>

		<?php if (get_field('is_verified')): ?>
			<div>
				<img src="<?= get_stylesheet_directory_uri() ?>/assets/icons/check-circle-gradient.svg" alt="">
				<?php _e('Verified', 'Bonus') ?>
			</div>
		<?php endif ?>
		
	</div>
</div>

<?php get_template_part('parts/content', 'popup_1', ['post_id' => $post_id]) ?>
<a href="<?= get_field('url') ?: get_the_permalink() ?>" class="card-v1"<?php if(get_field('url')) echo ' target="_blank"' ?>>
	<div class="card-v1__head img-center">
		<?php the_post_thumbnail('full') ?>
	</div>
	<div class="card-v1__body">
		<div class="card-v1__body-top">
			<div class="card-v1__title"><?php the_title() ?></div>

			<?php if ($field = get_field('users')): ?>
				<div class="card-v1__value">
					<img src="<?= get_stylesheet_directory_uri() ?>/assets/icons/check-circle-gradient.svg" alt="">
					<?= $field ?> <?php _e('users', 'Bonus') ?>
				</div>
			<?php endif ?>
			
		</div>

		<?php if (has_excerpt()): ?>
			<div class="card-v1__body-content"><?php the_excerpt() ?></div>
		<?php endif ?>
		
	</div>
</a>
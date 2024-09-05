<a href="<?php the_permalink() ?>" class="card-v3">
	<div class="card-v3__image img-center">
		<?php the_post_thumbnail('full') ?>
	</div>
	<div class="card-v3__title"><?php the_title() ?></div>

	<?php if (has_excerpt()): ?>
		<div class="card-v3__text"><?php the_excerpt() ?></div>
	<?php endif ?>

</a>
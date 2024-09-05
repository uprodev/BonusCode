<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<section class="section-space">
		<div class="container">
			<div class="text-col-2-with-img box-default<?php if($is_image_left) echo ' text-col-2-with-img--invert' ?>">
				<div class="text-col-2-with-img__text text-content last-no-margin">
					
					<?= $text ?>

					<?php if ($link): ?>
						<a href="<?= $link['url'] ?>" class="btn-primary"<?php if($link['target']) echo ' target="_blank"' ?>><?= $link['title'] ?></a>
					<?php endif ?>

				</div>

				<?php if ($image): ?>
					<div class="text-col-2-with-img__img">
						<?= wp_get_attachment_image($image['ID'], 'full') ?>
					</div>
				<?php endif ?>

			</div>
		</div>
	</section>

	<?php endif; ?>
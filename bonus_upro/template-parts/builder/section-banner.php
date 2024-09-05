<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<section class="about-us-intro">

		<?php if ($image): ?>
			<div class="about-us-intro__bg">
				<?= wp_get_attachment_image($image['ID'], 'full') ?>
			</div>
		<?php endif ?>
		
		<div class="container about-us-intro__body">
			<div class="top-space"></div>

			<?php if ($logo): ?>
				<div class="about-us-intro__logo">
					<?php if (pathinfo($logo['url'])['extension'] == 'svg'): ?>
						<img src="<?= $logo['url'] ?>" alt="<?= $logo['alt'] ?>">
					<?php else: ?>
						<?= wp_get_attachment_image($logo['ID'], 'full') ?>
					<?php endif ?>
				</div>
			<?php endif ?>

			<?php if ($title): ?>
				<h1 class="about-us-intro__title"><?= $title ?></h1>
			<?php endif ?>

			<?php if ($subtitle): ?>
				<div class="about-us-intro__subtile"><?= $subtitle ?></div>
			<?php endif ?>

			<?php if ($text): ?>
				<div class="about-us-intro__text"><?= $text ?></div>
			<?php endif ?>

		</div>
	</section>

	<?php endif; ?>
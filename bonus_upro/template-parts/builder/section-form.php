<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<?php if ($form): ?>
		<section class="section-space">
			<?= do_shortcode('[contact-form-7 id="' . $form . '"]') ?>
		</section>
	<?php endif ?>

	<?php endif; ?>
<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<?php if ($form): ?>
		<section class="section-space-lg">
			<div class="container">
				<?= do_shortcode('[contact-form-7 id="' . $form . '" html_class="get-coupons box-default box-default--dark"]') ?>
			</div>
		</section>
	<?php endif ?>

	<?php endif; ?>
<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<?php if ($text): ?>
		<section class="section-space-lg">
            <div class="container">
                <div class="box-default text-content last-no-margin title-mob-center"><?= $text ?></div>
            </div>
        </section>
	<?php endif ?>

	<?php endif; ?>
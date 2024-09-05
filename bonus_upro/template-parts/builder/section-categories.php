<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<?php if ($text): ?>
		<section class="section-space">
            <div class="container">
                <div class="text-col-2 box-default text-content last-no-margin"><?= $text ?></div>
            </div>
        </section>
	<?php endif ?>

	<?php endif; ?>
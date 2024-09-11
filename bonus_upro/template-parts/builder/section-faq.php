<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<?php if (is_array($items) && checkArrayForValues($items)): ?>
	<section class="section-space-lg">
		<div class="container">
			<div class="text-col-2 text-col-2--v2 box-default text-content last-no-margin">

				<?php if ($title): ?>
					<h2><?= $title ?></h2>
				<?php endif ?>

				<?php foreach ($items as $item): ?>
					<div class="text-group">
						<h3><?= $item['title'] ?></h3>
						<p><?= $item['text'] ?></p>
					</div>
				<?php endforeach ?>
				
			</div>
		</div>
	</section>
<?php endif ?>

<?php endif; ?>
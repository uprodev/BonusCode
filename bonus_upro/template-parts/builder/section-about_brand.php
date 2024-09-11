<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

	<?php $post_id = get_the_ID() ?>

	<section class="section-space-lg">
		<div class="container">
			<div class="about-service box-default">
				<div class="about-service__col">
					<div class="about-service__head">

						<?php if (has_post_thumbnail($post_id)): ?>
							<a href="<?php the_field('url', $post_id) ?>" class="about-service__logo" target="_blank">
								<?= get_the_post_thumbnail($post_id, 'full') ?>
							</a>
						<?php endif ?>
						
						<div class="about-service__meta">
							<div class="about-service__label"><?= get_the_title($post_id) ?></div>

							<?php if ($field = get_field('url', $post_id)): ?>
								<a href="<?= $field ?>" class="about-service__link" target="_blank"><?= parse_url($field)['host'] ?></a>
							<?php endif ?>
							
							<div class="about-service__stars">
								<div data-stars="clickable" data-stars-value="3.6" class="stars">
									<input type="text" value="3.6" >
									<div class="stars__item">
										<div class="stars__item-outline-icon">
											<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
											stroke="currentColor" class="size-6">
											<path stroke-linecap="round" stroke-linejoin="round"
											d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" />
										</svg>
									</div>
									<div class="stars__item-solid-icon">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
											<path fill-rule="evenodd"
											d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
											clip-rule="evenodd" />
										</svg>
									</div>
								</div>
								<div class="stars__item">
									<div class="stars__item-outline-icon">
										<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
										stroke="currentColor" class="size-6">
										<path stroke-linecap="round" stroke-linejoin="round"
										d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" />
									</svg>
								</div>
								<div class="stars__item-solid-icon">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
										<path fill-rule="evenodd"
										d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
										clip-rule="evenodd" />
									</svg>
								</div>
							</div>
							<div class="stars__item">
								<div class="stars__item-outline-icon">
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
									stroke="currentColor" class="size-6">
									<path stroke-linecap="round" stroke-linejoin="round"
									d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" />
								</svg>
							</div>
							<div class="stars__item-solid-icon">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
									<path fill-rule="evenodd"
									d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
									clip-rule="evenodd" />
								</svg>
							</div>
						</div>
						<div class="stars__item">
							<div class="stars__item-outline-icon">
								<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
								stroke="currentColor" class="size-6">
								<path stroke-linecap="round" stroke-linejoin="round"
								d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" />
							</svg>
						</div>
						<div class="stars__item-solid-icon">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
								<path fill-rule="evenodd"
								d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
								clip-rule="evenodd" />
							</svg>
						</div>
					</div>
					<div class="stars__item">
						<div class="stars__item-outline-icon">
							<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
							stroke="currentColor" class="size-6">
							<path stroke-linecap="round" stroke-linejoin="round"
							d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" />
						</svg>
					</div>
					<div class="stars__item-solid-icon">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
							<path fill-rule="evenodd"
							d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
							clip-rule="evenodd" />
						</svg>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php if ($content = get_the_content(null, false, $post_id)): ?>
	<div class="about-service__text text-content last-no-margin"><?= $content ?></div>
<?php endif ?>

<?php $terms = wp_get_object_terms($post_id, 'brand_tag') ?>

<?php if (is_array($terms)): ?>
	<div class="about-service__btn-group">

		<?php foreach ($terms as $term): ?>
			<a href="<?= get_term_link($term->term_id) ?>" class="about-service__btn"><?= $term->name ?></a>
		<?php endforeach ?>

	</div>
<?php endif ?>

</div>

<?php if (($field = get_field('about', $post_id)) && is_array($field) && checkArrayForValues($field)): ?>
<div class="about-service__col">

	<?php if ($field['title']): ?>
		<h3 class="about-service__title h3"><?= $field['title'] ?></h3>
	<?php endif ?>
	
	<?php if (is_array($field['items']) && checkArrayForValues($field['items'])): ?>
	<div class="about-service__table">

		<?php foreach ($field['items'] as $item): ?>

			<?php if ($item['title']): ?>
				<div class="about-service__table-title"><?= $item['title'] ?></div>
			<?php endif ?>
			
			<?php if ($item['text']): ?>
				<div class="about-service__table-value"><?= $item['text'] ?></div>
			<?php endif ?>
			
		<?php endforeach ?>
		
	</div>
<?php endif ?>

<?php if ($field['text']): ?>
	<div class="about-service__text text-content last-no-margin"><?= $field['text'] ?></div>
<?php endif ?>

</div>
<?php endif ?>

</div>
</div>
</section>

<?php endif; ?>
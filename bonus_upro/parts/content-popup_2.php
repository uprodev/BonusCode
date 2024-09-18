<div class="popup" id="popup-discount-<?= $args['post_id'] ?>">

	<?php
	$featured_posts = get_field('popup_2', $args['post_id'])['codes'];
	if($featured_posts): ?>

		<div class="popup__body">
			<div class="popup__content popup__content--lg">
				<button class="popup__btn-close" data-action="close-popup">
					<svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M4.82822 3.23099L14.9952 13.3905L25.0542 3.33299C25.7397 2.72249 26.4492 3.087 26.7327 3.39299C26.9146 3.6146 27.0084 3.89544 26.9962 4.18185C26.984 4.46825 26.8667 4.74013 26.6667 4.94549L16.6062 15.0015L26.6667 25.0545C27.1137 25.4295 27.1137 26.1645 26.7552 26.5755C26.3952 26.985 25.7352 27.222 25.1127 26.736L14.9952 16.6125L4.86572 26.7405C4.42172 27.138 3.68972 27.057 3.32822 26.6625C2.96522 26.2665 2.82722 25.5825 3.29072 25.0995L13.3842 15.0015L3.33272 4.94549C2.96522 4.54049 2.83772 3.79949 3.33272 3.33299C3.82772 2.86649 4.56572 2.93099 4.82822 3.23099Z" fill="black" />
					</svg>
				</button>
				<div class="popup__scroll-container">
					<div class="popup__scroll-container-inner">
						<div class="discount-popup">

							<?php if ($field = get_field('popup_2', $args['post_id'])['title']): ?>
								<h2 class="discount-popup__title h3"><?= $field ?></h2>
							<?php endif ?>
							
							<?php if ($field = get_field('popup_2', $args['post_id'])['text']): ?>
								<div class="discount-popup__subtitle"><?= $field ?></div>
							<?php endif ?>
							
							<div class="discount-popup__list">

								<?php foreach($featured_posts as $post): 

									global $post;
									setup_postdata($post); ?>
									<?php get_template_part('parts/content', 'code_v2') ?>
								<?php endforeach; ?>

								<?php wp_reset_postdata(); ?>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php endif; ?>
<div class="popup" id="popup-promo-code-<?= $args['post_id'] ?>">
	<div class="popup__body">
		<div class="popup__content">
			<button class="popup__btn-close" data-action="close-popup">
				<svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M4.82822 3.23099L14.9952 13.3905L25.0542 3.33299C25.7397 2.72249 26.4492 3.087 26.7327 3.39299C26.9146 3.6146 27.0084 3.89544 26.9962 4.18185C26.984 4.46825 26.8667 4.74013 26.6667 4.94549L16.6062 15.0015L26.6667 25.0545C27.1137 25.4295 27.1137 26.1645 26.7552 26.5755C26.3952 26.985 25.7352 27.222 25.1127 26.736L14.9952 16.6125L4.86572 26.7405C4.42172 27.138 3.68972 27.057 3.32822 26.6625C2.96522 26.2665 2.82722 25.5825 3.29072 25.0995L13.3842 15.0015L3.33272 4.94549C2.96522 4.54049 2.83772 3.79949 3.33272 3.33299C3.82772 2.86649 4.56572 2.93099 4.82822 3.23099Z"
					fill="black" />
				</svg>
			</button>

			<div class="popup__scroll-container md:!h-auto md:!max-h-[calc(100vh-2rem)]">
				<div class="popup__scroll-container-inner">
					<div class="main-popup-content ">
						<div class="promo-code-popup">

							<?php if (has_post_thumbnail($args['post_id'])): ?>
								<div class="promo-code-popup__logo img-center">
									<a href="<?php the_permalink($args['post_id']) ?>">
										<?= get_the_post_thumbnail($args['post_id'], 'full') ?>
									</a>
								</div>
							<?php endif ?>

							<?php if ($field = get_field('popup', $args['post_id'])['text']): ?>
								<div class="promo-code-popup__title"><?= $field ?></div>
							<?php endif ?>

							<div class="promo-code-popup__code-wrap promo-code" data-promo-code="copy-by-open-popup" >
								<div class="promo-code__message"><?php _e('Code Copied to your Clipboard!', 'Bonus') ?></div>

								<?php if ($field = get_field('code', $args['post_id'])): ?>
									<div class="promo-code__value"><?= $field ?></div>
								<?php endif ?>

								<button class="promo-code__btn" data-action="copy-code">
									<svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd" clip-rule="evenodd" d="M6.77615 4.36549C5.87625 4.36549 5.14674 5.095 5.14674 5.9949V14.8176C5.14674 15.7175 5.87625 16.447 6.77615 16.447H15.5988C16.4987 16.447 17.2283 15.7175 17.2283 14.8176V5.9949C17.2283 5.095 16.4987 4.36549 15.5988 4.36549H6.77615ZM3.875 5.9949C3.875 4.39264 5.17389 3.09375 6.77615 3.09375H15.5988C17.2011 3.09375 18.5 4.39264 18.5 5.9949V14.8176C18.5 16.4199 17.2011 17.7188 15.5988 17.7188H6.77615C5.17389 17.7188 3.875 16.4199 3.875 14.8176V5.9949Z" fill="black" />
										<path fill-rule="evenodd" clip-rule="evenodd" d="M3.67747 0.281253L3.67935 0.28125H12.2636L12.2654 0.281253C13.0231 0.283408 13.7492 0.585379 14.2851 1.12119C14.8209 1.657 15.1228 2.3831 15.125 3.14085C15.125 3.14587 15.125 3.15089 15.1249 3.15591L15.125 3.65625C15.1177 4.00735 14.6324 3.94481 14.2812 3.9375C13.9301 3.93019 13.7114 4.00735 13.7188 3.65625L13.8532 3.13759C13.8502 2.71836 13.6824 2.31703 13.3858 2.02045C13.0878 1.72244 12.684 1.55441 12.2626 1.55299H3.68036C3.1747 1.55471 2.69024 1.75634 2.33267 2.11392C1.97509 2.47149 1.77346 2.95595 1.77174 3.46161V12.0439C1.77316 12.4653 1.94119 12.869 2.2392 13.1671C2.53721 13.4651 2.941 13.6331 3.36244 13.6345H4.31522C4.6664 13.6345 4.95109 13.9192 4.95109 14.2704C4.95109 14.6216 4.6664 14.9062 4.31522 14.9062H3.36141L3.3596 14.9062C2.60185 14.9041 1.87575 14.6021 1.33994 14.0663C0.804129 13.5305 0.502158 12.8044 0.500003 12.0466L0.5 12.0448V3.4606L0.500003 3.45872C0.502491 2.61677 0.838058 1.81001 1.43341 1.21466C2.02876 0.619308 2.83552 0.283741 3.67747 0.281253Z" fill="black" />
									</svg>
									<?php _e('Copy Again', 'Bonus') ?>
								</button>
							</div>

							<?php if ($field = get_field('popup', $args['post_id'])['link']): ?>
								<div class="promo-code-popup__btn">
									<a href="<?= $field['url'] ?>" class="btn-secondary btn-secondary--lg default-gradient"<?php if($field['target']) echo ' target="_blank"' ?>>

										<?php if ($field['target']): ?>
											<img src="<?= get_stylesheet_directory_uri() ?>/assets/icons/square-with-arrow-up.svg" alt="">
										<?php endif ?>

										<?= $field['title'] ?>
									</a>
								</div>
							<?php endif ?>

							<div class="promo-code-popup__question">
								<div class="promo-code-popup__question-title">
									<?php _e('Did this code work?', 'Bonus') ?>
								</div>
								<div class="promo-code-popup__question-btn-group">
									<a href="#" class="promo-code-popup__question-btn text-success">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M23 10C23 9.46957 22.7893 8.96086 22.4142 8.58579C22.0391 8.21071 21.5304 8 21 8H14.68L15.64 3.43C15.66 3.33 15.67 3.22 15.67 3.11C15.67 2.7 15.5 2.32 15.23 2.05L14.17 1L7.59 7.58C7.22 7.95 7 8.45 7 9V19C7 19.5304 7.21071 20.0391 7.58579 20.4142C7.96086 20.7893 8.46957 21 9 21H18C18.83 21 19.54 20.5 19.84 19.78L22.86 12.73C22.95 12.5 23 12.26 23 12V10ZM1 21H5V9H1V21Z" fill="#04D268" />
										</svg>
										<?php _e('Yes', 'Bonus') ?>
									</a>
									<a href="#" class="promo-code-popup__question-btn text-error">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M23 14C23 14.5304 22.7893 15.0391 22.4142 15.4142C22.0391 15.7893 21.5304 16 21 16H14.68L15.64 20.57C15.66 20.67 15.67 20.78 15.67 20.89C15.67 21.3 15.5 21.68 15.23 21.95L14.17 23L7.59 16.42C7.22 16.05 7 15.55 7 15V5C7 4.46957 7.21071 3.96086 7.58579 3.58579C7.96086 3.21071 8.46957 3 9 3H18C18.83 3 19.54 3.5 19.84 4.22L22.86 11.27C22.95 11.5 23 11.74 23 12V14ZM1 3H5V15H1V3Z" fill="#F20B0B" />
										</svg>
										<?php _e('No', 'Bonus') ?>
									</a>
								</div>
							</div>
						</div>

						<?= do_shortcode('[contact-form-7 id="8477871" html_class="popup-subscribe"]') ?>

					</div>
					<div class="extension-info hidden">
						<div class="extension-info__suptitle">
							Thanks for letting us know
						</div>
						<h2 class="extension-info__title h3">
							Unlock more savings
						</h2>
						<div class="extension-info__subtitle">
							Keep the wins coming with the SimplyCodes app. Discover 10x more working coupons than anyone else and unlock rewards!
						</div>
						<div class="extension-info__img">
							<img src="https://dealspotr.com/img/ds_house-a_desktop.webp" alt="">
						</div>
						<a href="#" class="btn-secondary default-gradient">
							Get the SimplyCodes Chrome extension
						</a>
						<button  data-action="hide-extension-info" class="text-success"
						>Continue browsing more codes</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
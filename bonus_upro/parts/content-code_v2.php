<div class="code-card">
	<div class="code-card__head">
		<div class="code-card__title"><?php the_title() ?></div>
		<div class="code-card__logo">
			<img src="<?= get_stylesheet_directory_uri() ?>/assets/images/bb.png" alt="">
		</div>
	</div>

	<?php if (has_excerpt()): ?>
		<div class="code-card__text">
			<?php the_excerpt() ?>
		</div>
	<?php endif ?>
	
	<div class="code-card__row">

		<?php if (has_post_thumbnail()): ?>
			<div class="code-card__logo-external">
				<?php the_post_thumbnail('full') ?>
			</div>
		<?php endif ?>
		
		<?php if (($field = get_field('code')) && get_field('link_or_code') == 'Code'): ?>
		<div class="code-card__promo-code" data-promo-code>
			<div class="promo-code__value"><?= $field ?></div>
			<button class="btn-secondary default-gradient" data-action="copy-code">
				<svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" clip-rule="evenodd" d="M6.77615 4.36549C5.87625 4.36549 5.14674 5.095 5.14674 5.9949V14.8176C5.14674 15.7175 5.87625 16.447 6.77615 16.447H15.5988C16.4987 16.447 17.2283 15.7175 17.2283 14.8176V5.9949C17.2283 5.095 16.4987 4.36549 15.5988 4.36549H6.77615ZM3.875 5.9949C3.875 4.39264 5.17389 3.09375 6.77615 3.09375H15.5988C17.2011 3.09375 18.5 4.39264 18.5 5.9949V14.8176C18.5 16.4199 17.2011 17.7188 15.5988 17.7188H6.77615C5.17389 17.7188 3.875 16.4199 3.875 14.8176V5.9949Z" fill="currentColor" />
					<path fill-rule="evenodd" clip-rule="evenodd" d="M3.67747 0.281253L3.67935 0.28125H12.2636L12.2654 0.281253C13.0231 0.283408 13.7492 0.585379 14.2851 1.12119C14.8209 1.657 15.1228 2.3831 15.125 3.14085C15.125 3.14587 15.125 3.15089 15.1249 3.15591L15.125 3.65625C15.1177 4.00735 14.6324 3.94481 14.2812 3.9375C13.9301 3.93019 13.7114 4.00735 13.7188 3.65625L13.8532 3.13759C13.8502 2.71836 13.6824 2.31703 13.3858 2.02045C13.0878 1.72244 12.684 1.55441 12.2626 1.55299H3.68036C3.1747 1.55471 2.69024 1.75634 2.33267 2.11392C1.97509 2.47149 1.77346 2.95595 1.77174 3.46161V12.0439C1.77316 12.4653 1.94119 12.869 2.2392 13.1671C2.53721 13.4651 2.941 13.6331 3.36244 13.6345H4.31522C4.6664 13.6345 4.95109 13.9192 4.95109 14.2704C4.95109 14.6216 4.6664 14.9062 4.31522 14.9062H3.36141L3.3596 14.9062C2.60185 14.9041 1.87575 14.6021 1.33994 14.0663C0.804129 13.5305 0.502158 12.8044 0.500003 12.0466L0.5 12.0448V3.4606L0.500003 3.45872C0.502491 2.61677 0.838058 1.81001 1.43341 1.21466C2.02876 0.619308 2.83552 0.283741 3.67747 0.281253Z" fill="currentColor" />
				</svg>
				<?php _e('Copy', 'Bonus') ?>
			</button>
		</div>
	<?php endif ?>

	<?php if ($field = get_field('link')): ?>
		<a href="<?= $field['url'] ?>" class="md:ms-auto btn-secondary default-gradient"<?php if($field['target']) echo ' target="_blank"' ?>><?= $field['title'] ?></a>
	<?php endif ?>

</div>
<div class="code-card__footer">

	<?php if ($field = get_field('uses')): ?>
		<div><?= $field ?></div>
	<?php endif ?>
	
	<div>
		
		<?php if (get_field('is_verified') == 'Verified'): ?>
			<img src="<?= get_stylesheet_directory_uri() ?>/assets/icons/check-circle-gradient.svg" alt="">
			<?php _e('Verified', 'Bonus') ?>
		<?php endif ?>

		<?php if (get_field('is_verified') == 'Unverified'): ?>
			<img src="<?= get_stylesheet_directory_uri() ?>/assets/icons/warning-triangle.svg" alt="">
			<?php _e('Unverified', 'Bonus') ?>
		<?php endif ?>

		<?php if (($field = get_field('untested')) && get_field('is_verified') == 'Untested'): ?>
		<img src="<?= get_stylesheet_directory_uri() ?>/assets/icons/warning-triangle.svg" alt="">
		<?= $field ?>
	<?php endif ?>

</div>
</div>
</div>
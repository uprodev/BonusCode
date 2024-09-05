<form role="search" method="get" action="<?php echo home_url( '/' ) ?>" class="header__search">
	<input type="search" class="header__search-input" placeholder="Search for brands" name="s">
	<button type="submit" class="header__search-btn default-gradient">
		<img src="<?= get_stylesheet_directory_uri() ?>/assets/icons/search-white.svg" alt="">
	</button>
</form>
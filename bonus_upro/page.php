<?php get_header(); ?>

<?php if (get_the_content()): ?>
	<section class="section-space-lg">
		<div class="container">
			<div class="box-default text-content last-no-margin title-mob-center">
				<h1><?php the_title() ?></h1>
				<p>
					<strong>
						<?php _e('Last updated', 'Bonus') ?> <?= get_the_modified_date() ?>
					</strong>
				</p>

				<?php the_content() ?>

			</div>
		</div>
	</section>
<?php endif ?>

<?php if ( have_rows('content') ) :

	get_template_part( 'template-parts/content', 'builder' );

else :

	get_template_part( 'template-parts/content', 'none' );

endif;
?>

<?php get_footer(); ?>
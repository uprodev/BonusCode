</main>

<footer class="footer">
  <div class="container">
    <div class="footer__body">

      <?php if ($locations = get_nav_menu_locations()): ?>

        <div class="footer__nav">

          <?php foreach ($locations as $index => $menu): ?>

            <?php if (str_contains($index, 'footer') && has_nav_menu($index)): ?>
            <div class="footer__nav-col">
              <div class="footer__nav-title"><?= wp_get_nav_menu_object($locations[$index])->name ?></div>

              <?php wp_nav_menu( array(
                'theme_location'  => $index,
                'container'       => '',
                'items_wrap'      => '<ul class="footer__nav-list">%3$s</ul>'
              ) ); ?>

            </div>
          <?php endif ?>

        <?php endforeach ?>

      </div>
    <?php endif ?>

    <?php if ($field = get_field('text_f', 'option')): ?>
      <div class="footer__text text-content last-no-margin"><?= $field ?></div>
    <?php endif ?>

  </div>
  <div class="footer__bottom box-default">

    <?php if ($field = get_field('logo_f', 'option')): ?>
      <div class="footer__bottom-logo">
        <a href="<?= get_home_url() ?>">
          <?php if (pathinfo($field['url'])['extension'] == 'svg'): ?>
            <img src="<?= $field['url'] ?>" alt="<?= $field['alt'] ?>">
          <?php else: ?>
            <?= wp_get_attachment_image($field['ID'], 'full') ?>
          <?php endif ?>
        </a>
      </div>
    <?php endif ?>

    <?php if ($field = get_field('copyright_f', 'option')): ?>
      <div class="footer__bottom-copy"><?= $field ?></div>
    <?php endif ?>

  </div>
</div>
</footer>

<?php wp_footer() ?>
</body>
</html>
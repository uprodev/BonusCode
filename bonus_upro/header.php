<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
  <meta charset="UTF-8">
  <?php wp_head(); ?>
  <meta name="format-detection" content="telephone=no">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    .page-loaded .page-loader {
      display: none;
    }

    .page-loader {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: white;
      z-index: 100;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      justify-content: center;
      color: #009233;
    }

    .lds-roller,
    .lds-roller div,
    .lds-roller div:after {
      -webkit-box-sizing: border-box;
      box-sizing: border-box;
    }

    .lds-roller {
      display: inline-block;
      position: relative;
      width: 80px;
      height: 80px;
    }

    .lds-roller div {
      -webkit-animation: lds-roller 1.2s cubic-bezier(0.5, 0, 0.5, 1) infinite;
      animation: lds-roller 1.2s cubic-bezier(0.5, 0, 0.5, 1) infinite;
      -webkit-transform-origin: 40px 40px;
      -ms-transform-origin: 40px 40px;
      transform-origin: 40px 40px;
    }

    .lds-roller div:after {
      content: " ";
      display: block;
      position: absolute;
      width: 7.2px;
      height: 7.2px;
      border-radius: 50%;
      background: currentColor;
      margin: -3.6px 0 0 -3.6px;
    }

    .lds-roller div:nth-child(1) {
      -webkit-animation-delay: -0.036s;
      animation-delay: -0.036s;
    }

    .lds-roller div:nth-child(1):after {
      top: 62.62742px;
      left: 62.62742px;
    }

    .lds-roller div:nth-child(2) {
      -webkit-animation-delay: -0.072s;
      animation-delay: -0.072s;
    }

    .lds-roller div:nth-child(2):after {
      top: 67.71281px;
      left: 56px;
    }

    .lds-roller div:nth-child(3) {
      -webkit-animation-delay: -0.108s;
      animation-delay: -0.108s;
    }

    .lds-roller div:nth-child(3):after {
      top: 70.90963px;
      left: 48.28221px;
    }

    .lds-roller div:nth-child(4) {
      -webkit-animation-delay: -0.144s;
      animation-delay: -0.144s;
    }

    .lds-roller div:nth-child(4):after {
      top: 72px;
      left: 40px;
    }

    .lds-roller div:nth-child(5) {
      -webkit-animation-delay: -0.18s;
      animation-delay: -0.18s;
    }

    .lds-roller div:nth-child(5):after {
      top: 70.90963px;
      left: 31.71779px;
    }

    .lds-roller div:nth-child(6) {
      -webkit-animation-delay: -0.216s;
      animation-delay: -0.216s;
    }

    .lds-roller div:nth-child(6):after {
      top: 67.71281px;
      left: 24px;
    }

    .lds-roller div:nth-child(7) {
      -webkit-animation-delay: -0.252s;
      animation-delay: -0.252s;
    }

    .lds-roller div:nth-child(7):after {
      top: 62.62742px;
      left: 17.37258px;
    }

    .lds-roller div:nth-child(8) {
      -webkit-animation-delay: -0.288s;
      animation-delay: -0.288s;
    }

    .lds-roller div:nth-child(8):after {
      top: 56px;
      left: 12.28719px;
    }

    @-webkit-keyframes lds-roller {
      0% {
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
      }

      100% {
        -webkit-transform: rotate(360deg);
        transform: rotate(360deg);
      }
    }

    @keyframes lds-roller {
      0% {
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
      }

      100% {
        -webkit-transform: rotate(360deg);
        transform: rotate(360deg);
      }
    }

    @media print {

      header,
      footer {
        display: none;
      }
    }
  </style>

  <script>
    let element = document.querySelector('html');
    if (element) {
      let zoom = 1;
      const setFontSize = () => {
        let baseWidth = 1440;
        let baseFontSize = 10;
        let screenWidth = element.clientWidth;
        let screenHeight = element.clientHeight;
        let maxHeight = screenWidth * 0.4817;
        let value;
        let heightOffset = (screenHeight / maxHeight) > 1 ? 1 : screenHeight / maxHeight;

        if (screenWidth <= baseWidth) {
          let scaleFactor = 10;
          value = (baseFontSize + (screenWidth - baseWidth) * scaleFactor / baseWidth) * zoom;
        } else {
          let scaleFactor = 10;
          value = ((baseFontSize + (screenWidth - baseWidth) * scaleFactor / baseWidth) * heightOffset) * zoom;

          if (value < baseFontSize) value = baseFontSize;
        }

        element.style.fontSize = value + 'px';
      }

      setFontSize();
      window.addEventListener('resize', setFontSize);

      document.addEventListener('wheel', function (event) {
        if (document.documentElement.clientWidth < 1024) return;

        if (event.ctrlKey || event.metaKey) {
          if (event.deltaY < 0) {
            zoom += 0.1
            setFontSize();
          } else {
            zoom -= 0.1
            setFontSize();
          }
          event.preventDefault();
        }
      }, { passive: false });
    }
  </script>

</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <div class="page-loader">
    <div class="lds-roller"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
  </div>

  <header data-header class="header">
    <div class="container header__body">

      <?php if (($image = get_field('logo_h', 'option')) || ($image_mobile = get_field('logo_mobile_h', 'option'))): ?>
      <a href="<?= get_home_url() ?>" class="header__logo">
        <picture>

          <?php if (isset($image)): ?>
            <source srcset="<?= $image['url'] ?>" media="(min-width: 1024px)" />
            <?php endif ?>

            <?= wp_get_attachment_image(isset($image_mobile) ? $image_mobile['ID'] : $image['ID'], 'full') ?>
          </picture>
        </a>
      <?php endif ?>
      
      <?php get_search_form() ?>

      <?php wp_nav_menu( array(
        'theme_location'  => 'header',
        'container'       => '',
        'items_wrap'      => '<ul class="header__nav">%3$s</ul>'
      )); ?>

      <button type="button" class="header__burger" data-action="open-mobile-menu">
        <svg width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path
          d="M30.25 24.7569C30.25 25.5131 29.6367 26.125 28.8819 26.125H17.8681C17.5053 26.125 17.1573 25.9809 16.9007 25.7243C16.6441 25.4677 16.5 25.1197 16.5 24.7569C16.5 24.394 16.6441 24.046 16.9007 23.7895C17.1573 23.5329 17.5053 23.3888 17.8681 23.3888H28.8819C29.6381 23.3888 30.25 24.0006 30.25 24.7569ZM30.25 16.5C30.25 17.2563 29.6367 17.8681 28.8819 17.8681H4.11812C3.75528 17.8681 3.40729 17.724 3.15071 17.4674C2.89414 17.2108 2.75 16.8628 2.75 16.5C2.75 16.1372 2.89414 15.7892 3.15071 15.5326C3.40729 15.276 3.75528 15.1319 4.11812 15.1319H28.8819C29.6381 15.1319 30.25 15.7451 30.25 16.5ZM28.8819 9.61125C29.2447 9.61125 29.5927 9.46711 29.8493 9.21054C30.1059 8.95396 30.25 8.60597 30.25 8.24312C30.25 7.88028 30.1059 7.53229 29.8493 7.27571C29.5927 7.01914 29.2447 6.875 28.8819 6.875H12.3681C12.1885 6.875 12.0106 6.91039 11.8446 6.97914C11.6786 7.0479 11.5278 7.14867 11.4007 7.27571C11.2737 7.40276 11.1729 7.55358 11.1041 7.71957C11.0354 7.88556 11 8.06346 11 8.24312C11 8.42279 11.0354 8.6007 11.1041 8.76668C11.1729 8.93267 11.2737 9.08349 11.4007 9.21054C11.5278 9.33758 11.6786 9.43835 11.8446 9.50711C12.0106 9.57586 12.1885 9.61125 12.3681 9.61125H28.8819Z"
          fill="black" />
        </svg>
      </button>

    </div>
  </header>

  <div data-mobile-menu class="mobile-menu">
    <div class="mobile-menu__head">

      <?php if ($field = get_field('logo_h', 'option')): ?>
        <a href="<?= get_home_url() ?>" class="mobile-menu__logo">
          <?php if (pathinfo($field['url'])['extension'] == 'svg'): ?>
            <img src="<?= $field['url'] ?>" alt="<?= $field['alt'] ?>">
          <?php else: ?>
            <?= wp_get_attachment_image($field['ID'], 'full') ?>
          <?php endif ?>
        </a>
      <?php endif ?>
      
      <button data-action="close-mobile-menu" class="mobile-menu__close">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
        class="size-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
      </svg>
    </button>
  </div>
  <div class="mobile-menu__body">

    <?php wp_nav_menu( array(
      'theme_location'  => 'header',
      'container'       => '',
      'items_wrap'      => '<ul class="mobile-menu__nav">%3$s</ul>'
    )); ?>

  </div>
</div>

<?php if (get_field('is_top_space')): ?>
  <div class="top-space"></div>
<?php endif ?>

<main class="_page">
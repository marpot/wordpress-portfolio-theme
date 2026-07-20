<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php bloginfo('name'); ?></title>

  <?php wp_head(); ?>

    <style>
    html {
        visibility: hidden;
    }

    html.app-ready {
        visibility: visible;
    }
    </style>
</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>


<header class="site-header">

  <div class="container">


    <nav class="hero-nav">


      <div class="hero-nav__menu">


        <?php

        wp_nav_menu([

          'theme_location' => 'primary',

          'container' => false,

          'menu_class' => 'hero-nav__list',

          'fallback_cb' => false,

        ]);

        ?>


      </div>



      <?php if (function_exists('pll_the_languages')) : ?>


        <div class="language-switcher">


          <?php

          pll_the_languages([

            'show_names' => 1,

            'show_flags' => 0,

          ]);

          ?>


        </div>


      <?php endif; ?>


    </nav>


  </div>

</header>
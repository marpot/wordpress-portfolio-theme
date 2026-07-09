<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php bloginfo('name'); ?></title>

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<header class="site-header">
  <div class="container">

    <nav class="hero-nav">

      <a class="hero-nav__link" href="#home">
        Start
      </a>

      <a class="hero-nav__link" href="#about">
        O mnie
      </a>

      <a class="hero-nav__link" href="#skills">
        Umiejętności
      </a>

      <a class="hero-nav__link" href="#projects">
        Projekty
      </a>

      <a class="hero-nav__link" href="#contact">
        Kontakt
      </a>

    </nav>

  </div>
</header>
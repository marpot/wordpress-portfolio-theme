<?php get_header(); ?>

<div class="site-background"></div>

<main class="site-main snap-container">

  <!-- HERO -->
  <section class="hero panel" id="home">

    <div class="hero__background"></div>

    <div class="container hero__content">

      <p class="hero__tag">
        SOFTWARE DEVELOPER
      </p>

      <h1 class="hero__title">
        Marcin Potoczny
      </h1>

      <h2 class="hero__subtitle">
        WordPress • Python • Django • React
      </h2>

      <p class="hero__description">
        Tworzę nowoczesne aplikacje webowe,
        automatyzuję procesy i buduję rozwiązania
        z wykorzystaniem sztucznej inteligencji.
      </p>


      <div class="hero__status">

        <span class="hero__status-dot"></span>

        <span>
          Current project:
          AI Multiplayer RPG Engine
        </span>

      </div>


    </div>
  </section>

  <!-- ABOUT -->
  <section class="about panel" id="about">
    <div class="container">
      <h2>O mnie</h2>
      <p>
        Tworzę strony WordPress i uczę się nowoczesnego frontendu.
        Skupiam się na czystym kodzie, SCSS i automatyzacji dev workflow.
      </p>
    </div>
  </section>

  <!-- SKILLS -->
  <section class="skills panel" id="skills">
    <div class="container">
      <h2>Umiejętności</h2>

      <ul class="skills__grid">
        <li>WordPress</li>
        <li>PHP</li>
        <li>TypeScript</li>
        <li>SCSS</li>
        <li>Docker</li>
        <li>Django REST</li>
      </ul>
    </div>
  </section>

  <!-- PROJECTS -->
  <section class="projects panel" id="projects">
    <div class="container">
      <h2>Projekty</h2>

      <div class="projects__grid">
        <article class="project-card">
          <h3>Dev Portfolio</h3>
          <p>Custom WordPress theme + SCSS + Docker</p>
        </article>

        <article class="project-card">
          <h3>Project 2</h3>
          <p>Opis projektu</p>
        </article>

        <article class="project-card">
          <h3>Project 3</h3>
          <p>Opis projektu</p>
        </article>
      </div>
    </div>
  </section>

  <!-- CONTACT -->
  <section class="contact panel" id="contact">
    <div class="container">
      <h2>Kontakt</h2>

      <p>Email: marcin.potoczny@protonmail.com</p>
      <p>GitHub: github.com/marpot</p>
    </div>
  </section>

</main>

<?php get_footer(); ?>
<section class="hero panel" id="home">

    <div class="hero__background"></div>

    <div class="container hero__content">

        <p class="hero__tag">
            <?php echo esc_html(get_field('hero_tag')); ?>
        </p>

        <h1 class="hero__title">
            <?php echo esc_html(get_field('hero_title')); ?>
        </h1>

        <h2 class="hero__subtitle">
            <?php echo esc_html(get_field('hero_subtitle')); ?>
        </h2>

        <p class="hero__description">
            <?php echo esc_html(esc_html(get_field('hero_description'))); ?>
        </p>

        <div class="hero__status">

            <span class="hero__status-dot"></span>

            <span>
                Current project:
                <?php echo esc_html(get_field('project_status')); ?>
            </span>

        </div>

    </div>

</section>
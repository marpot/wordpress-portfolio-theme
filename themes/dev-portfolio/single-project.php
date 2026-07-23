<?php get_header(); ?>

<div class="site-background"></div>

<main class="project-single">

    <div class="container">

        <?php

        while (have_posts()) :

            the_post();

            get_template_part(
                'template-parts/projects/single-project-content'
            );

        endwhile;

        ?>

    </div>

</main>


<?php get_footer(); ?>
<section class="projects panel" id="projects">

    <div class="container">

        <div class="projects__header">

            <span class="projects__label">
                <?php echo pll__('Projekty'); ?>
            </span>


            <h2 class="projects__title">
                <?php echo pll__('Moje realizacje i projekty własne'); ?>
            </h2>

        </div>


        <div class="projects__grid">


            <?php

            $projects = new WP_Query([
                'post_type'      => 'project',
                'posts_per_page' => -1,
                'orderby'        => 'menu_order',
                'order'          => 'ASC',
            ]);


            if ($projects->have_posts()) :

                while ($projects->have_posts()) :

                    $projects->the_post();


                    $short_description = get_field('project_short_description');
                    $technologies      = get_field('project_technologies');
                    $github            = get_field('project_github');
                    $docker            = get_field('project_docker');


            ?>


                <article class="project-card">



                    <?php if (has_post_thumbnail()) : ?>

                        <div class="project-card__image">

                            <?php the_post_thumbnail('large'); ?>

                        </div>

                    <?php endif; ?>




                    <div class="project-card__content">



                        <h3>

                            <?php the_title(); ?>

                        </h3>





                        <?php if ($short_description) : ?>

                            <div class="project-card__description">

                                <?php echo esc_html($short_description); ?>

                            </div>

                        <?php endif; ?>







                        <?php if ($technologies) : ?>

                            <div class="project-card__technologies">


                                <?php

                                $tech_list = explode(',', $technologies);


                                foreach ($tech_list as $tech) :

                                ?>

                                    <span>

                                        <?php echo esc_html(trim($tech)); ?>

                                    </span>


                                <?php endforeach; ?>


                            </div>


                        <?php endif; ?>







                        <?php if ($docker) : ?>

                            <div class="project-card__docker">


                                <strong>
                                    Docker:
                                </strong>


                                <?php echo esc_html($docker); ?>


                            </div>


                        <?php endif; ?>







                        <div class="project-card__actions">



                            <?php if ($github) : ?>

                                <a
                                    class="project-card__github"
                                    href="<?php echo esc_url($github); ?>"
                                    target="_blank"
                                    rel="noopener noreferrer">

                                    GitHub

                                </a>


                            <?php endif; ?>





                            <a
                                class="project-card__details"
                                href="<?php the_permalink(); ?>">

                                <?php echo pll__('Szczegóły projektu'); ?>

                            </a>



                        </div>



                    </div>



                </article>



            <?php

                endwhile;


                wp_reset_postdata();


            endif;

            ?>


        </div>

    </div>

</section>
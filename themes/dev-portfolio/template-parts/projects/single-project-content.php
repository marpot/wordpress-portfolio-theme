<article class="project-single">


    <a
        class="project-single__back"
        href="<?php echo home_url('/'); ?>#projects">

        <span>
            ←
        </span>

        <?php echo pll__('Powrót do projektów'); ?>

    </a>





    <header class="project-single__header">


        <span class="project-single__label">

            <?php echo pll__('Projekt'); ?>

        </span>




        <h1 class="project-single__title">

            <?php the_title(); ?>

        </h1>


    </header>







    <?php if (has_post_thumbnail()) : ?>


        <div class="project-single__image">


            <?php the_post_thumbnail('large'); ?>


        </div>


    <?php endif; ?>









    <div class="project-single__content">





        <?php

        $short_description = get_field('project_short_description');

        $technologies      = get_field('project_technologies');

        $github            = get_field('project_github');

        $docker            = get_field('project_docker');

        ?>









        <?php if ($short_description) : ?>


            <div class="project-single__description">


                <h3 class="project-single__section-title">

                    <?php echo pll__('Opis projektu'); ?>

                </h3>



                <?php echo esc_html($short_description); ?>


            </div>


        <?php endif; ?>









        <div class="project-single__text">


            <?php the_content(); ?>


        </div>









        <?php if ($technologies) : ?>


            <div class="project-single__technologies">


                <h3>

                    <?php echo pll__('Technologie'); ?>

                </h3>





                <div class="project-single__tags">





                    <?php


                    $tech_list = explode(',', $technologies);



                    foreach ($tech_list as $tech) :


                    ?>


                        <span>

                            <?php echo esc_html(trim($tech)); ?>

                        </span>



                    <?php endforeach; ?>





                </div>



            </div>



        <?php endif; ?>









        <?php if ($docker) : ?>


            <div class="project-single__docker">


                <strong>

                    <?php echo pll__('Docker'); ?>:

                </strong>


                <?php echo esc_html($docker); ?>


            </div>



        <?php endif; ?>









        <div class="project-single__actions">





            <?php if ($github) : ?>



                <a
                    class="project-single__github"
                    href="<?php echo esc_url($github); ?>"
                    target="_blank"
                    rel="noopener noreferrer">


                    GitHub


                </a>



            <?php endif; ?>





        </div>







    </div>





</article>
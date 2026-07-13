<section class="experience panel" id="experience">

    <div class="container">


        <div class="experience__header">


            <span class="experience__label">
                Doświadczenie zawodowe
            </span>


            <h2 class="experience__title">
                Moja ścieżka zawodowa
            </h2>


        </div>



        <div class="experience__grid">


            <?php

            $experience_query = new WP_Query([
                'post_type'      => 'experience',
                'posts_per_page' => -1,
                'orderby'        => 'date',
                'order'          => 'DESC',
            ]);



            if ($experience_query->have_posts()) :


                while ($experience_query->have_posts()) :


                    $experience_query->the_post();


                    $company = get_field('company');
                    $position = get_field('position');
                    $period = get_field('period');
                    $work_mode = get_field('work_mode');
                    $description = get_field('description');

            ?>


                    <article class="experience__card">


                        <?php if ($period) : ?>

                            <span class="experience__period">
                                <?php echo esc_html($period); ?>
                            </span>

                        <?php endif; ?>



                        <h3 class="experience__position">

                            <?php echo esc_html($position ?: get_the_title()); ?>

                        </h3>



                        <?php if ($company) : ?>

                            <p class="experience__company">

                                <?php echo esc_html($company); ?>

                            </p>

                        <?php endif; ?>



                        <?php if ($work_mode) : ?>

                            <span class="experience__mode">

                                <?php echo esc_html($work_mode); ?>

                            </span>

                        <?php endif; ?>



                        <?php if ($description) : ?>

                            <p class="experience__description">

                                <?php echo esc_html($description); ?>

                            </p>

                        <?php endif; ?>


                    </article>



            <?php

                endwhile;


                wp_reset_postdata();


            endif;

            ?>


        </div>


    </div>


</section>
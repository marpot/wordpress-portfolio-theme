<section class="skills panel" id="skills">

    <div class="container">


        <div class="skills__header">

            <span class="skills__label">
                <?php echo pll__('Umiejętności'); ?>
            </span>


            <h2 class="skills__title">
                <?php echo pll__('Technologie, z których korzystam'); ?>
            </h2>

        </div>



        <div class="skills__categories">


            <?php

            $categories = [

                'Backend' => 'skills_backend',

                'Frontend' => 'skills_frontend',

                'DevOps & Tools' => 'skills_tools',

                'AI & NLP' => 'skills_ai',

            ];



            foreach ($categories as $title => $field):

                $skills = get_field($field);


                if ($skills):

            ?>


                <div class="skills__category">


                    <h3 class="skills__category-title">

                        <?php echo esc_html($title); ?>

                    </h3>



                    <ul class="skills__items">


                        <?php

                        $items = explode("\n", $skills);


                        foreach ($items as $item):

                            if (trim($item)):

                        ?>


                            <li class="skills__item">

                                <?php echo esc_html(trim($item)); ?>

                            </li>


                        <?php

                            endif;

                        endforeach;

                        ?>


                    </ul>


                </div>


            <?php

                endif;


            endforeach;

            ?>


        </div>


    </div>

</section>
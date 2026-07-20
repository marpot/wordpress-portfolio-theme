<section class="skills panel" id="skills">

    <div class="container">


        <div class="skills__header">

            <span class="skills__label">
                <?php echo pll__('Umiejętności'); ?>
            </span>


            <h2 class="skills__title">
                Technologie, z których korzystam
            </h2>

        </div>



        <ul class="skills__grid">

            <?php

            $skills = get_field('skills_list');


            if ($skills):

                $skills = explode("\n", $skills);


                foreach ($skills as $skill):

                    if (trim($skill)):

            ?>

                <li class="skills__item">

                    <?php echo esc_html(trim($skill)); ?>

                </li>


            <?php

                    endif;

                endforeach;

            endif;

            ?>

        </ul>


    </div>

</section>
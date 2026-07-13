<section class="skills panel" id="skills">
    <div class="container">

        <h2>Umiejętności</h2>

        <ul class="skills__grid">

            <?php
            $skills = get_field('skills_list');

            if ($skills):
                $skills = explode("\n", $skills);

                foreach ($skills as $skill):
            ?>

                <li>
                    <?php echo esc_html(trim($skill)); ?>
                </li>

            <?php
                endforeach;
            endif;
            ?>

        </ul>

    </div>
</section>
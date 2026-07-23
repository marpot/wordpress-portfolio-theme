<section class="about panel" id="about">

    <div class="container">

        <div class="about__grid">


            <div class="about__content">


                <div class="about__header">


                    <h2 class="about__title">
                        <?php echo esc_html(get_field('about_title')); ?>
                    </h2>

                </div>



                <p class="about__description">
                    <?php echo esc_html(get_field('about_description')); ?>
                </p>



            </div>




            <div class="about__logo">


                <img 
                    class="about__logo-image"
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/developer-avatar.png"
                    alt="Software Developer"
                >


            </div>



        </div>

    </div>

</section>
<?php
/*
Template Name: Careers
*/

get_header();
?>
<div data-section="" class="section text-light overlay-img section-vh-60">
    <div class="boxes overlay-img">
        <div class="box-12 text-center align-items-center justify-content-center overlay-img">
            <div class="overlay overlay-img">
                <div class="overlay-img" style="background-image: url(&quot;/static/images/careers/img-bg-careers-1@2x.png&quot;);"></div>
                <div class="overlay-color overlay-img" style="background-color: rgb(0, 0, 0); opacity: 0.15; background-image: url(<?php the_field('careers_hero_img'); ?>);"></div>
            </div>
            <div style="width: 35%; opacity: 1;" data-builder="" class="overlay-img">
                <div class="row overlay-img">
                    <div class="col-md-12 overlay-img">
                        <h6 style="font-size: 0.8rem; text-transform:uppercase; font-weight:bold; letter-spacing:10px; color:rgba(255,255,255,1);"><br><br><?php the_field('careers_hero_h1'); ?><br><br><br></h6>
                        <h1 style="font-size: 52px; letter-spacing: 0px; line-height: 56px;">
                            <div style="color: rgb(255, 255, 255);" class="overlay-img"><?php the_field('careers_hero_subhead'); ?></div>
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div data-section="" class="section text-light section-vh-60">
    <div class="boxes">
        <div style="background-color: rgb(255, 255, 255);" class="box mt-4 mx-5 py-5 text-dark text-center align-items-center justify-content-center">
            <div class="overlay"></div>
            <div style="width: 45%;" data-builder="">
                <div class="row">
                    <div class="col">
                        <h2><?php the_field('careers_sect_h1'); ?></h2>
                    </div>
                </div>
                <div class="row mt-5" style="position: relative; left: 0px; top: 0px;">
                    <div class="col">
                        <p>There are currently no open positions at Felt. Still feel like you're a good fit for our team? You can always submit your resume and portfolio. We love making new friends.</p>
                        <div>&nbsp; <br></div>
                        
                        <p><a href="<?php the_field('careers_sect1_cta_link'); ?>" class="big-link"><?php the_field('careers_sect1_cta'); ?></a></p>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div data-section="" class="section text-light section-vh-70 overlay-img">
    <div class="boxes" style="padding-bottom:40px;">
        <div style="background-color: rgb(253, 249, 244);" class="box mt-4 mx-5 py-5 text-dark text-center align-items-center justify-content-center overlay-img">
            <div class="overlay overlay-img"></div>
            <div style="width: 80%;" data-builder="" class="overlay-img">
                <div class="row overlay-img" style="position: relative; left: 0px; top: 0px;">
                    <div class="col text-left overlay-img" style="padding:20px;">
                        <h2><?php the_field('careers_sect2_1_h1'); ?></h2>
                        <p><br><?php the_field('careers_sect2_1_p'); ?></p>
                        <p><a href="<?php the_field('careers_sect2_1_cta_link'); ?>" class="big-link">
                        <?php the_field('careers_sect2_1_cta'); ?></a></p>
                    </div>
                    <div class="col text-left overlay-img" style="padding:20px;">
                        <h2><?php the_field('careers_sect2_2_h1'); ?></h2>
                        <p><br><?php the_field('careers_sect2_2_p'); ?></p>
                        <p><a href="<?php the_field('careers_sect2_2_cta_link'); ?>" class="big-link">
                        <?php the_field('careers_sect2_2_cta'); ?></a>
                        </p>
                    </div>
                    <div class="col text-left overlay-img" style="padding:20px;">
                        <h2><?php the_field('careers_sect2_3_h1'); ?></h2>
                        <p><br><?php the_field('careers_sect2_3_p'); ?></p>
                        <p><a href="<?php the_field('careers_sect2_3_cta_link'); ?>" class="big-link">
                        <?php the_field('careers_sect2_3_cta'); ?></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div data-section="" class="section text-light overlay-img section-vh-90">
    <div class="boxes overlay-img">
        <div class="box-12 text-center align-items-center justify-content-center overlay-img">
            <div class="overlay overlay-img">
                <div class="overlay-img" style="background-image: url(<?php the_field('careers_sect3_img'); ?>);"></div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
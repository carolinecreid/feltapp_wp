<?php
/*
Template Name: How It Works
*/

get_header();
?>
<div data-section="" class="section text-light section-vh-70">
    <div class="boxes">
        <div class="box-12 text-center align-items-center justify-content-center">
            <div class="overlay">
                <div class="overlay-img" style="background-image: url(<?php the_field('hiw_hero_img'); ?>);"></div>
                <div class="overlay-color" style="background-color: rgb(0, 0, 0); opacity: 0.15;"></div>
            </div>
            <div style="width: 40%; opacity: 1;" data-builder="">
                <div class="row">
                    <div class="col-md-12">
                        <h6 style="font-size: 0.8rem; text-transform:uppercase; font-weight:bold; letter-spacing:10px; color:rgba(255,255,255,1);">
                            <div><br></div><br><br><?php the_field('hiw_hero_h1'); ?><br><br>
                        </h6>
                        <h1 style="font-size: 52px; letter-spacing: 0px; line-height: 56px; color: rgb(255, 255, 255);"><span style="letter-spacing: 0px; background-color: inherit;"><?php the_field('hiw_hero_subhead'); ?></span></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div data-section="" class="section text-light section-vh-60">
    <div class="boxes">
        <div style="background-color: rgb(253, 249, 244);" class="box mt-4 mx-5 py-5 text-dark text-center align-items-center justify-content-center">
            <div class="overlay"></div>
            <div style="width: 60%;" data-builder="">
                <div class="row" style="padding-bottom:30px;">
                    <div class="col">
                        <h1><?php the_field('hiw_sect1_h1'); ?></h1>
                    </div>
                    <!--<div class="col"><img src="/static/images/handwrittenback.png" class="img-fluid"></div>-->
                </div>
                <div class="row" style="position: relative; left: 0px; top: 0px;">
                    <div class="col">
                        <p><?php the_field('hiw_sect1_p'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div data-section="" class="section text-dark my-5 section-auto">
    <div class="boxes">
        <div class="box-sm-12 box-md-6 align-items-center justify-content-center text-center mt-4">
            <div style="width: 80%;" data-builder="">
                <div class="row">
                    <div class="col text-left">
                        <h6 style="font-size: 0.8rem; text-transform:uppercase; font-weight:bold; letter-spacing:10px; color:rgba(102,102,102,.3);"><?php the_field('hiw_step1_step'); ?><br><br><br></h6>
                        <h1 style="font-size: 64px; letter-spacing: 2px; line-height: 71px;"><?php the_field('hiw_step1_h1'); ?></h1>
                        <p><?php the_field('hiw_step1_p'); ?></p>
                        <div><br><a href="<?php the_field('hiw_step1_cta_link'); ?>" class="big-link"><?php the_field('hiw_step1_cta'); ?></a></div>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="box-12 box-md-6 align-items-center justify-content-center">
            <div style="width:90%;" data-builder="">
                <div class="row">
                    <div class="col"><img src="<?php the_field('hiw_step1_img'); ?>" class="img-fluid"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div data-section="" class="section text-dark my-5 section-auto">
    <div class="boxes">
        <div class="box-12 box-md-6 align-items-center justify-content-center">
            <div style="width: 90%;" data-builder="">
                <div class="row">
                    <div class="col"><img src="<?php the_field('hiw_step2_img'); ?>" class="img-fluid"></div>
                </div>
            </div>
        </div>
        <div class="box-12 box-md-6 text-center align-items-center justify-content-start">
            <div style="width: 75%;" data-builder="">
                <div class="row">
                    <div class="col text-left">
                        <h6 style="font-size: 0.8rem; text-transform:uppercase; font-weight:bold; letter-spacing:10px; color:rgba(102,102,102,.3);"><?php the_field('hiw_step2_step'); ?><br><br><br></h6>
                        <h1 style="font-size: 64px; letter-spacing: 2px; line-height: 71px;"><?php the_field('hiw_step2_h1'); ?></h1>
                        <p><br><?php the_field('hiw_step2_p'); ?><br></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div data-section="" class="section text-dark my-5 section-auto">
    <div class="boxes">
        <div class="box-sm-12 box-md-6 align-items-center justify-content-center text-center mt-4">
            <div style="width: 80%;" data-builder="">
                <div class="row">
                    <div class="col text-left">
                        <h6 style="font-size: 0.8rem; text-transform:uppercase; font-weight:bold; letter-spacing:10px; color:rgba(102,102,102,.3);"><?php the_field('hiw_step3_step'); ?><br><br><br></h6>
                        <h1 style="font-size: 64px; letter-spacing: 2px; line-height: 71px;"><?php the_field('hiw_step3_h1'); ?></h1>
                        <p><br><?php the_field('hiw_step3_p'); ?><br><br></p>
                        <div><a href="<?php the_field('hiw_step3_cta_link'); ?>" class="big-link">
                        <?php the_field('hiw_step3_cta'); ?></a></div>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="box-12 box-md-6 align-items-center justify-content-center">
            <div style="width:90%;" data-builder="">
                <div class="row">
                    <div class="col"><img src="<?php the_field('hiw_step3_img'); ?>" class="img-fluid"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div data-section="" class="section text-dark my-5 section-auto">
    <div class="boxes">
        <div class="box-12 box-md-6 align-items-center justify-content-center">
            <div style="width: 90%;" data-builder="">
                <div class="row">
                    <div class="col"><img src="<?php the_field('hiw_step4_img'); ?>" class="img-fluid"></div>
                </div>
            </div>
        </div>
        <div class="box-12 box-md-6 text-center align-items-center justify-content-start">
            <div style="width: 75%;" data-builder="">
                <div class="row">
                    <div class="col text-left">
                        <h6 style="font-size: 0.8rem; text-transform:uppercase; font-weight:bold; letter-spacing:10px; color:rgba(102,102,102,.3);"><?php the_field('hiw_step4_step'); ?><br><br><br></h6>
                        <h1 style="font-size: 64px; letter-spacing: 2px; line-height: 71px;"><?php the_field('hiw_step4_h1'); ?></h1>
                        <p><br><?php the_field('hiw_step4_p'); ?><br></p>
                        <div><br></div>
                        <p></p>
                        <div><a title="" href="<?php the_field('hiw_step4_cta_link'); ?>" style="padding: 10px; letter-spacing:2px; border: 1px solid rgb(255, 255, 255); background-color: #E1B752; border-radius:6px; text-align:center; color: #ffffff; text-transform: uppercase; font-weight: 600; font-size: 0.8rem;" class="btn btn-primary px-5">
                        <?php the_field('hiw_step4_cta'); ?></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php get_footer(); ?>
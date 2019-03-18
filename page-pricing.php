<?php
/*
Template Name: Pricing
*/

get_header();
?>
<div data-section="" class="section text-light overlay-img section-vh-70">
    <div class="boxes overlay-img">
        <div class="box-12 text-center align-items-center justify-content-center overlay-img">
            <div class="overlay overlay-img">
                <div class="overlay-img" style="background-image: url(<?php the_field('pricing_hero_img'); ?>);"></div>
                
            </div>
            <div style="width: 35%; opacity: 1;" data-builder="" class="overlay-img">
                <div class="row overlay-img">
                    <div class="col-md-12 overlay-img">
                        <h6 style="font-size: 0.8rem; text-transform:uppercase; font-weight:bold; letter-spacing:10px; color:rgba(255,255,255,1);"><br><br><?php the_field('pricing_hero_h1'); ?></h6>
                        <h1 style="font-size: 52px; letter-spacing: 0px; line-height: 56px;">
                            <div style="color: rgb(255, 255, 255);" class="overlay-img"><?php the_field('pricing_hero_subhead'); ?></div>
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div data-section="" class="section text-light section-vh-70 overlay-img">
    <div class="boxes overlay-img">
        <div style="background-color: rgb(253, 249, 244);" class="box mt-4 mx-5 py-5 text-dark text-center align-items-center justify-content-center overlay-img">
            <div class="overlay overlay-img"></div>
            <div style="width: 80%;" data-builder="" class="overlay-img">
                <div class="row overlay-img" style="position: relative; left: 0px; top: 0px;">
                    <div class="col text-left overlay-img" style="padding:20px;">
                        <h2><?php the_field('pricing_col1_h1'); ?></h2>
                        <p><br><?php the_field('pricing_col1_p'); ?></p><a href="<?php the_field('pricing_col1_link'); ?>" class="big-link">
                        <?php the_field('pricing_col1_cta'); ?></a>
                    </div>
                    <div class="col text-left overlay-img" style="padding:20px;">
                        <h2><?php the_field('pricing_col2_h1'); ?></h2>
                        <p><br><?php the_field('pricing_col2_p'); ?></p><a href="<?php the_field('pricing_col2_link'); ?>" class="big-link">
                        <?php the_field('pricing_col2_cta'); ?></a>
                    </div>
                    <div class="col text-left overlay-img" style="padding:20px;">
                        <h2><?php the_field('pricing_col3_h1'); ?></h2>
                        <p><br><?php the_field('pricing_col3_p'); ?></p><a href="<?php the_field('pricing_col3_link'); ?>" class="big-link">
                        <?php the_field('pricing_col3_cta'); ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div style="padding-bottom:40px;" data-section="" class="section text-light overlay-img section-vh-70">
    <div class="boxes overlay-img">
        <div class="box-12 text-center align-items-center justify-content-center overlay-img">
            <div class="overlay overlay-img" style="margin-top:40px; margin-bottom:40px;">
                <div class="overlay-img" style="background-image: url(<?php the_field('pricing_img'); ?>);"></div>
            </div>
        </div>
    </div>
</div>
<div data-section="" class="section text-dark my-5 overlay-img section-vh-80">
    <div class="boxes overlay-img">
        <div class="box-12 box-md-6 align-items-center justify-content-center overlay-img">
            <div style="width: 90%;" data-builder="" class="overlay-img">
                <div class="row overlay-img">
                    <div class="col overlay-img"><img src="<?php the_field('pricing_sect1_img'); ?>" class="img-fluid"></div>
                </div>
            </div>
        </div>
        <div class="box-12 box-md-6 text-center align-items-center justify-content-start overlay-img">
            <div style="width: 75%;" data-builder="" class="overlay-img">
                <div class="row overlay-img">
                    <div class="col text-left overlay-img">
                        <h6 style="font-size: 0.8rem; text-transform:uppercase; font-weight:bold; letter-spacing:10px; color:rgba(102,102,102,.3);"><?php the_field('pricing_sect1_h1'); ?><br><br><br></h6>
                        <h1 style="font-size: 64px; letter-spacing: 2px; line-height: 71px;"><?php the_field('pricing_sect1_h2'); ?></h1>
                        <p><br><?php the_field('pricing_sect1_p'); ?></p><img src="<?php the_field('pricing_sect1_infographic'); ?>">
                        <p><br><?php the_field('pricing_sect1_p2'); ?><br></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div data-section="" class="section text-light section-vh-50 overlay-img">
    <div class="boxes overlay-img">
        <div style="background-color: rgb(255, 255, 255);" class="box mt-4 mx-5 py-5 text-dark text-center align-items-center justify-content-center overlay-img">
            <div class="overlay overlay-img"></div>
            <div style="width: 80%;" data-builder="" class="overlay-img">
                <div class="row overlay-img" style="position: relative; left: 0px; top: 0px;">
                    <div class="col text-left overlay-img">
                        <h2><?php the_field('pricing_sect2_col1_h1'); ?></h2>
                        <p><br><?php the_field('pricing_sect2_col1_p'); ?></p>
                    </div>
                    <div class="col text-left overlay-img">
                        <h2> <?php the_field('pricing_sect2_col2_h1'); ?></h2>
                        <p><br><?php the_field('pricing_sect2_col2_p'); ?></p>
                    </div>
                    <div class="col text-left overlay-img">
                        <h2><?php the_field('pricing_sect2_col3_h1'); ?></h2>
                        <p><br><?php the_field('pricing_sect2_col3_p'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div data-section="" class="section text-dark my-5 section-auto overlay-img">
    <div class="boxes overlay-img">
        <div class="box-sm-12 box-md-6 align-items-center justify-content-center text-center mt-4 overlay-img">
            <div style="width: 80%;" data-builder="" class="overlay-img">
                <div class="row overlay-img">
                    <div class="col text-left overlay-img">
                        <h6 style="font-size: 0.8rem; text-transform:uppercase; font-weight:bold; letter-spacing:10px; color:rgba(102,102,102,.3);"><?php the_field('pricing_sect3_h1'); ?><br><br><br></h6>
                        <h1 style="font-size: 64px; letter-spacing: 2px; line-height: 71px;"><?php the_field('pricing_sect3_h2'); ?></h1>
                        <p><?php the_field('pricing_sect3_p'); ?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="box-sm-12 box-md-6 text-light text-right align-items-center justify-content-end overlay-img">
            <div style="width:100%;" data-builder="" class="overlay-img">
                <div class="row overlay-img">
                    <div class="col overlay-img"><img src="<?php the_field('pricing_sect3_img'); ?>" class="img-fluid"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div data-section="" class="section text-dark my-5 section-auto overlay-img">
    <div class="boxes overlay-img">
        <div class="box-12 box-md-6 align-items-center justify-content-center overlay-img">
            <div style="width: 90%;" data-builder="" class="overlay-img">
                <div class="row overlay-img">
                    <div class="col overlay-img"><img src="<?php the_field('pricing_sect4_img'); ?>" class="img-fluid"></div>
                </div>
            </div>
        </div>
        <div class="box-12 box-md-6 text-center align-items-center justify-content-start overlay-img">
            <div style="width: 75%;" data-builder="" class="overlay-img">
                <div class="row overlay-img">
                    <div class="col text-left overlay-img">
                        <h6 style="font-size: 0.8rem; text-transform:uppercase; font-weight:bold; letter-spacing:10px; color:rgba(102,102,102,.3);"><?php the_field('pricing_sect4_h1'); ?><br><br><br></h6>
                        <h1 style="font-size: 64px; letter-spacing: 2px; line-height: 71px;"><?php the_field('pricing_sect4_h2'); ?></h1>
                        <p><br><?php the_field('pricing_sect4_p'); ?><br></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div data-section="" class="section text-light section-vh-60 overlay-img">
    <div class="boxes overlay-img">
        <div style="background-color: rgb(255, 255, 255);" class="box mt-4 mx-5 py-5 text-dark text-center align-items-center justify-content-center overlay-img">
            <div class="overlay overlay-img"></div>
            <div style="width: 80%;" data-builder="" class="overlay-img">
                <div class="row overlay-img" style="position: relative; left: 0px; top: 0px;">
                    <div class="col text-left overlay-img">
                        <h1><?php the_field('pricing_sect5_col1_h1'); ?><br></h1>
                        <p><?php the_field('pricing_sect5_col1_p'); ?></p><a title="" href="<?php the_field('pricing_sect5_col1_link'); ?>" style="padding: 10px; letter-spacing:2px; border: 1px solid rgb(255, 255, 255); background-color: #E1B752; border-radius:6px; text-align:center; color: #ffffff; text-transform: uppercase; font-weight: 600; font-size: 0.8rem;" class="btn btn-primary px-5"><?php the_field('pricing_sect5_col1_cta'); ?></a>
                    </div>
                    <div class="col text-left overlay-img">
                        <h1><?php the_field('pricing_sect5_col2_h1'); ?><br></h1>
                        <p><?php the_field('pricing_sect5_col2_p'); ?></p>
                        <a title="" href="<?php the_field('pricing_sect5_col2_link'); ?>" style="padding: 10px; letter-spacing:2px; border: 1px solid rgb(255, 255, 255); background-color: #E1B752; border-radius:6px; text-align:center; color: #ffffff; text-transform: uppercase; font-weight: 600; font-size: 0.8rem;" class="btn btn-primary px-5"><?php the_field('pricing_sect5_col2_cta'); ?></a>
                    </div>
                    <div class="col text-left overlay-img">
                        <h1><?php the_field('pricing_sect5_col3_h1'); ?><br></h1>
                        <p><?php the_field('pricing_sect5_col3_p'); ?></p>
                        <a title="" href="<?php the_field('pricing_sect5_col3_link'); ?>" style="padding: 10px; letter-spacing:2px; border: 1px solid rgb(255, 255, 255); background-color: #E1B752; border-radius:6px; text-align:center; color: #ffffff; text-transform: uppercase; font-weight: 600; font-size: 0.8rem;" class="btn btn-primary px-5"><?php the_field('pricing_sect5_col3_cta'); ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<? get_footer(); ?>
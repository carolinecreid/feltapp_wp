<?php
/*
Template Name: About
*/

get_header();

?>
<div data-section="" class="section text-light overlay-img section-vh-70">
    <div class="boxes overlay-img">
        <div class="box-12 text-center align-items-center justify-content-center overlay-img">
            <div class="overlay overlay-img">
                <div class="overlay-img" style="background-image: url(<?php the_field('about_hero_img'); ?>);"></div>
                <div class="overlay-color overlay-img" style="background-color: rgb(0, 0, 0); opacity: 0.15;"></div>
            </div>
            <div style="width: 40%; opacity: 1;" data-builder="">
                <div class="row overlay-img">
                    <div class="col-md-12 overlay-img">
                        <h6 style="font-size: 0.8rem; text-transform:uppercase; font-weight:bold; letter-spacing:10px; color:rgba(255,255,255,1);"><?php the_field('about_hero_h1'); ?><br><br><br></h6>
                        <h1 style="font-size: 52px; letter-spacing: 0px; line-height: 56px; color: rgb(255, 255, 255);">
                            <div class="overlay-img"><?php the_field('about_hero_subhead1'); ?></div>
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div data-section="" class="section text-light section-vh-60">
    <div class="boxes">
        <div style="background-color: rgb(253, 249, 244);" class="box mt-4 mx-5 py-5 text-dark align-items-center justify-content-center">
            <div class="overlay"></div>
            <div style="width: 60%;" data-builder="">
                <div class="row" style="padding-bottom:30px;">
                    <div class="col text-center">
                        <h1><?php the_field('about_sect1_h1'); ?></h1>
                    </div>
                    <!--<div class="col"><img src="/static/images/handwrittenback.png" class="img-fluid"></div>-->
                </div>
                <div class="row" style="position: relative; left: 0px; top: 0px;">
                    <div class="col text-left">
                        <p><?php the_field('about_sect1_col1p'); ?></p>
                    </div>
                    <div class="col text-left">
                        <p><?php the_field('about_sect1_col2p'); ?></p>
                        <p><i><?php the_field('about_sect1_it'); ?></i></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div data-section="" class="section text-dark my-5 section-auto overlay-img">
    <div class="boxes overlay-img">
        <div class="box-12 box-md-6 align-items-center justify-content-center overlay-img">
            <div style="width: 90%;" data-builder="">
                <div class="row overlay-img">
                    <div class="col overlay-img"><img src="<?php the_field('about_sect2_img'); ?>" class="img-fluid"></div>
                </div>
            </div>
        </div>
        <div class="box-12 box-md-6 text-center align-items-center justify-content-start overlay-img">
            <div style="width: 75%;" data-builder="">
                <div class="row overlay-img">
                    <div class="col text-left overlay-img">
                        <h1 style="font-size: 64px; letter-spacing: 2px; line-height: 71px;"><?php the_field('about_sect2_h1'); ?></h1>
                        <p><br><?php the_field('about_sect2_p'); ?><br></span><br></p><a href="<?php the_field('about_sect2_cta_link'); ?>" class="big-link"><?php the_field('about_sect2_cta'); ?></a>
                    </div>
                    <p></p>
                </div>
            </div>
        </div>
    </div>
</div>

<div data-section="" class="section section-auto text-dark my-5">
    <div class="boxes">
        <div class="box-12 box-md-3 align-items-center justify-content-center">
            <div style="width: 100%; margin: 20px" data-builder="">
                <div class="row">
                    <div class="col"><img src="<?php the_field('about_sect3_img_1'); ?>" class="img-fluid"></div>
                </div>
				<div class="row">
                    <div class="col" style="margin-top: 30px;"><img src="<?php the_field('about_sect3_img_2'); ?>" class="img-fluid"></div>
                </div>
            </div>
        </div>
		<div class="box-12 box-md-3 align-items-center justify-content-center">
            <div style="width: 100%; margin: 20px" data-builder="">
                <div class="row">
                    <div class="col"><img src="<?php the_field('about_sect3_img_3'); ?>" class="img-fluid"></div>
                </div>
				<div class="row" >
                    <div class="col" style="margin-top: 30px;"><img src="<?php the_field('about_sect3_img_4'); ?>" class="img-fluid"></div>
                </div>
            </div>
        </div>
        <div class="box-12 box-md-6 text-center align-items-center justify-content-start">
            <div style="width: 100%; margin: 20px" data-builder="">
                <div class="row">
                    <div class="col" style="margin-top: 30px; margin-bottom: 30px"><img src="<?php the_field('about_sect3_img_5'); ?>" class="img-fluid"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div data-section="" class="section text-dark my-5 section-auto overlay-img">
    <div class="boxes overlay-img">
        <div class="box-sm-12 box-md-6 align-items-center justify-content-center text-center mt-4 overlay-img">
            <div style="width: 80%;" data-builder="">
                <div class="row overlay-img">
                    <div class="col text-left overlay-img">
                        <h1 style="font-size: 64px; letter-spacing: 2px; line-height: 71px;"><?php the_field('about_sect4_h1'); ?></h1>
                        <p><?php the_field('about_sect4_p'); ?><br></p>
                        <p><a href="/careers" class="big-link"></a></p><a href="/careers" class="big-link">
                        </a>
                        <p></p><a href="<?php the_field('about_sect4_cta_link'); ?>" class="big-link">
                        <?php the_field('about_sect4_cta'); ?></a>
                        <p></p>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="box-12 box-md-6 align-items-center justify-content-center">
            <div style="width:90%;" data-builder="">
                <div class="row overlay-img">
                    <div class="col overlay-img"><img src="<?php the_field('about_sect4_img'); ?>" class="img-fluid"></div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php 
get_footer(); 

?>
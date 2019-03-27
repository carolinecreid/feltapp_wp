<?php 
/*
Template Name: Home Page
*/

get_header();

if (have_posts()) :
while( have_posts() ) :
the_post();
$pc = get_post_custom();

?>

<div data-section="" class="section text-light section-vh-100">
    <div class="boxes">
        <div class="box-12 align-items-center justify-content-center bg-white text-light text-center">
            <div class="overlay">
                <div class="overlay-img" style="background-image: url(<?php the_field('hero_img'); ?>);"></div>
                <div class="overlay-color" style="opacity:0.1"></div>
            </div>
            <div style="width: 40%; opacity: 1;" data-builder="">
                <div class="row">
                    <div class="col-md-12">
                        <h1 style="color: rgb(255, 255, 255); font-family: 'Work Sans', sans-serif;"><?php the_field('hero_h1'); ?></h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <p style="font-size: 16px; line-height: 24px;"><?php the_field('hero_subhead'); ?></i></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12"><a title="" href="<?php the_field('hero_button_link'); ?>" style="padding: 10px; letter-spacing:2px; border: 1px solid rgb(255, 255, 255); background-color: #E1B752; border-radius:6px; text-align:center; color: #ffffff; text-transform: uppercase; font-weight: 600; font-size: 0.8rem;" class="btn btn-primary px-5"><?php the_field('hero_button'); ?></a></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div data-section="" class="section text-light section-vh-80">
    <div class="boxes">
        <div class="box mt-4 mx-5 py-5 text-dark text-center align-items-center justify-content-center">
            <div class="overlay">
                <div class="overlay-img" style="background-image: url(<?php the_field('sect1_background_img'); ?>);"></div>
            </div>
            <div style="width: 85%;" data-builder="">
                <div class="row mt-3" style="position: relative; left: 0px; top: 0px;">
                    <div class="col">
                        <h6 style="font-size: 0.8rem; text-transform:uppercase; font-weight:bold; letter-spacing:10px;"><?php the_field('sect1_h1'); ?></h6>
                    </div>
                </div>
                <div class="row">
                    <div class="col"><img src="<?php the_field('sect1_img'); ?>" class="img-fluid">
                        <p style="padding-top:20px;"><?php the_field('sect1_subhead'); ?></p>
                    </div>
                </div>
                <div class="row justify-content-center align-items-center mt-5" style="position: relative; left: 0px; top: 0px;">
                    <div class="col-auto" style="padding:0;"><a href="<?php the_field('sect1_press1_link'); ?>">
                            <img src="<?php the_field('sect1_press1'); ?>"></a></div>
                    <div class="col-auto"><a href="<?php the_field('sect1_press2_link'); ?>">
                            <img src="<?php the_field('sect1_press2'); ?>"></a></div>
                    <div class="col-auto"><a href="<?php the_field('sect1_press3_link'); ?>">
                            <img src="<?php the_field('sect1_press3'); ?>"></a></div>
                </div>
                <div class="row justify-content-center align-items-center mt-5" style="position: relative; left: 0px; top: 0px;">
                    <div class="col-auto"><a href="<?php the_field('sect1_press4_link'); ?>">
                            <img src="<?php the_field('sect1_press4'); ?>"></a></div>
                    <div class="col-auto"><a href="<?php the_field('sect1_press5_link'); ?>">
                            <img src="<?php the_field('sect1_press5'); ?>"></a></div>
                    <div class="col-auto"><a href="<?php the_field('sect1_press6_link'); ?>">
                            <img src="<?php the_field('sect1_press6'); ?>"></a></div>
                    <div class="col-auto"><a href="<?php the_field('sect1_press7_link'); ?>">
                            <img src="<?php the_field('sect1_press7'); ?>"></a></div><br>
                    <div class="col-auto"><a href="<?php the_field('sect1_press8_link'); ?>">
                            <img src="<?php the_field('sect1_press8'); ?>"></a></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div data-section="" class="section section-auto text-dark my-5">
    <div class="boxes">
        <div class="box-12 box-md-6 align-items-center justify-content-center">
            <div style="width: 85%;" data-builder="">
                <div class="row">
                    <div class="col"><img src="<?php the_field('sect2_img'); ?>" class="img-fluid"></div>
                </div>
            </div>
        </div>
        <div class="box-12 box-md-6 text-center align-items-center justify-content-start">
            <div style="width: 65%;" data-builder="">
                <div class="row">
                    <div class="col text-left">
                        <h1 style="font-size: 64px; letter-spacing: 2px; line-height: 71px;"><?php the_field('sect2_h1'); ?><br></h1>
                        <p><br><?php the_field('sect2_p'); ?></p><a title="Learn More About Our Cards" href="<?php the_field('sect2_cta_link'); ?>" class="big-link"><?php the_field('sect2_cta'); ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div data-section="" class="section section-auto text-dark my-5">
    <div class="boxes">
        <div class="box-12 box-md-4 align-items-center justify-content-center">
            <div style="width: 90%;" data-builder="">
                <div class="row">
                    <div class="col"><img src="<?php the_field('sect3_img'); ?>" class="img-fluid"></div>
                </div>
            </div>
        </div>
        <div class="box-12 box-md-4 align-items-center justify-content-center">
            <div style="width: 90%;" data-builder="">
                <div class="row">
                    <div class="col"><img src="<?php the_field('sect3_img_2'); ?>" class="img-fluid"></div>
                </div>
            </div>
        </div>
		<div class="box-12 box-md-4 align-items-center justify-content-center">
            <div style="width: 90%;" data-builder="">
                <div class="row">
                    <div class="col"><img src="<?php the_field('sect3_img_3'); ?>" class="img-fluid"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<div style="padding-bottom:40px;" data-section="" class="section text-light section-vh-100">
    <div class="boxes">
        <div class="box-12 align-items-center justify-content-center bg-white text-light text-center">
            <div class="overlay"><iframe src="<?php the_field('sect4_video'); ?>" width="100%" height="100%" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe></div>
        </div>
    </div>
</div>
<div data-section="" class="section section-vh-100 text-light">
    <div class="overlay">
        <div class="overlay-img"></div>
        <div class="overlay-color" style="opacity: 1; background-color: rgb(36, 45, 55);"></div>
    </div>
    <div class="boxes">
        <div class="box-sm-12 box-md-6 align-items-center justify-content-center text-center mt-4">
            <div style="width: 70%;" data-builder="">
                <div class="row">
                    <div class="col text-left">
                        <h1 style="font-size: 64px; letter-spacing: 2px; line-height: 72px; color: rgb(255, 255, 255);"><?php the_field('sect5_h1'); ?></h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col text-left">
                        <p><?php the_field('sect5_p'); ?><br><br></p><a href="<?php the_field('sect5_cta_link'); ?>" style="color:#ffffff;" class="big-link"><?php the_field('sect5_cta'); ?></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="box-sm-12 box-md-6 text-light text-right align-items-center justify-content-end">
            <div style="width: 100%;" data-builder="">
                <div class="row" style="padding-bottom:40px;">
                    <div class="col" height="auto"><iframe src="<?php the_field('sect5_video'); ?>" width="100%" height="600px" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div data-section="" class="section text-dark my-5 section-auto">
    <div class="boxes">
        <div class="box-12 box-md-6 align-items-center justify-content-center">
            <div style="width: 85%;" data-builder="">
                <div class="row">
                    <div class="col"><img src="<?php the_field('sect6_img'); ?>" class="img-fluid"></div>
                </div>
            </div>
        </div>
        <div class="box-12 box-md-6 text-center align-items-center justify-content-start">
            <div style="width: 75%;" data-builder="">
                <div class="row">
                    <div class="col text-left">
                        <h1 style="font-size: 64px; letter-spacing: 2px; line-height: 71px;"><?php the_field('sect6_h1'); ?></h1>
                        <p><br><?php the_field('sect6_p'); ?><br><br></p><a href="<?php the_field('sect6_cta_link'); ?>" class="big-link"><?php the_field('sect6_cta'); ?></a>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php endwhile;
else :
  get_template_part('template-parts/content-none');
endif;
wp_reset_postdata();
get_footer();
?>
<?php
/**
 * The template for displaying all pages
 *
 */

get_header();
?>

<main id="main" role="main">
	
	<div data-section="" class="section text-light section-vh-70">
    <div class="boxes">
        <div class="box-12 text-center align-items-center justify-content-center">
            <div class="overlay">
                <div class="overlay-img" style="background-image: url('https://testsite982331334.wpcomstaging.com/wp-content/uploads/2019/03/rawpixel-611122-unsplash-1.jpg');"></div>
                <div class="overlay-color" style="background-color: rgb(0, 0, 0); opacity: 0.15;"></div>
            </div>
            <div style="width: 40%; opacity: 1;" data-builder="">
                <div class="row">
                    <div class="col-md-12">
                        
                        <h1 style="font-size: 52px; letter-spacing: 0px; line-height: 56px; color: rgb(255, 255, 255);"><span style="letter-spacing: 0px; background-color: inherit;"><?php the_title(); ?></span></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
	<div style="margin: 100px">
		<?php echo get_post_field('post_content', $post->ID); ?>
	</div>
	
	
</main>

<?php

get_footer();
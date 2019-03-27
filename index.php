<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package felt
 */

get_header();
if ( have_posts() ) : ?>


<div data-section="" class="section text-light section-vh-70">
    <div class="boxes">
        <div class="box-12 text-center align-items-center justify-content-center">
            <div class="overlay">
                <div class="overlay-img" style="background-image: url(https://testsite982331334.wpcomstaging.com/wp-content/uploads/2019/03/rawpixel-611122-unsplash@2x-1.jpg"></div>
                <div class="overlay-color" style="background-color: rgb(0, 0, 0); opacity: 0.15;"></div>
            </div>
            <div style="width: 40%; opacity: 1;" data-builder="">
                <div class="row">
                    <div class="col-md-12">
                        
                        <h1 style="font-size: 52px; letter-spacing: 0px; line-height: 56px; color: rgb(255, 255, 255);"><span style="letter-spacing: 0px; background-color: inherit;">
							<?php if(is_category() || is_tag() || is_tax() || is_day() || is_month() || is_year() || is_author()) {
    single_cat_title();
 } else {
    the_archive_title('<h1>', '</h1>');
 } ?>
						</span></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



	<?php while (have_posts()): the_post() ?>
    <?php if ($wp_query->current_post % 2 == 0): ?>
        <div data-section="" class="section text-dark my-5 section-auto">
    <div class="boxes">
        <div class="box-sm-12 box-md-6 align-items-center justify-content-center text-center mt-4">
            <div style="width: 80%;" data-builder="">
                <div class="row">
                    <div class="col text-left">
                        <h6 style="font-size: 0.8rem; text-transform:uppercase; font-weight:bold; letter-spacing:10px; color:rgba(102,102,102,.3);"><?php single_cat_title();?><br><br><br></h6>
                        <h1 style="font-size: 64px; letter-spacing: 2px; line-height: 71px;"><?php the_title(); ?></h1>
                        <p><?php the_excerpt(); ?></p>
                        <div><br><a href="<?php the_permalink(); ?>" class="big-link">Read More</a></div>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="box-12 box-md-6 align-items-center justify-content-center">
            <div style="width:80%;" data-builder="">
                <div class="row">
                    <div class="col"><img src="<?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
	the_post_thumbnail_url();
} ?>" class="img-fluid"></div>
                </div>
            </div>
        </div>
    </div>
</div>

    <?php else: ?>
        <div data-section="" class="section text-dark my-5 section-auto">
    <div class="boxes">
        <div class="box-12 box-md-6 align-items-center justify-content-center">
            <div style="width: 90%;" data-builder="">
                <div class="row">
                    <div class="col"><img src="<?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
	the_post_thumbnail_url();
} ?>" class="img-fluid"></div>
                </div>
            </div>
        </div>
        <div class="box-12 box-md-6 text-center align-items-center justify-content-start">
            <div style="width: 75%;" data-builder="">
                <div class="row">
                    <div class="col text-left">
                        <h6 style="font-size: 0.8rem; text-transform:uppercase; font-weight:bold; letter-spacing:10px; color:rgba(102,102,102,.3);"><?php single_cat_title();?><br><br><br></h6>
                        <h1 style="font-size: 64px; letter-spacing: 2px; line-height: 71px;"><?php the_title(); ?></h1>
                        <p><br><?php the_excerpt(); ?><br></p>
                        <div><br></div>
                        <p></p>
                        <div><a title="" href="<?php the_permalink(); ?>" style="padding: 10px; letter-spacing:2px; border: 1px solid rgb(255, 255, 255); background-color: #E1B752; border-radius:6px; text-align:center; color: #ffffff; text-transform: uppercase; font-weight: 600; font-size: 0.8rem;" class="btn btn-primary px-5">
                       Read More</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <?php endif ?>
	<?php endwhile ?>



<?php
get_footer(); 
endif;
?>

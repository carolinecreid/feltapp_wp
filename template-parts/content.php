<?php
/**
 * Template part for displaying posts
 */

?>

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
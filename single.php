<?php
/**
 * The template for displaying all single posts
 *
 */

get_header();
	while ( have_posts() ) : the_post();
?>



<main >
	<div data-section="" class="section text-light section-vh-70">
    <div class="boxes">
        <div class="box-12 text-center align-items-center justify-content-center">
            <div class="overlay">
                <div class="overlay-img" style="background-image: url(<?php 
if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
	the_post_thumbnail_url();
} 
?>);"></div>
                <div class="overlay-color" style="background-color: rgb(0, 0, 0); opacity: 0.15;"></div>
            </div>
            <div style="width: 40%; opacity: 1;" data-builder="">
                <div class="row">
                    <div class="col-md-12">
                        <h6 style="font-size: 0.8rem; text-transform:uppercase; font-weight:bold; letter-spacing:10px; color:rgba(255,255,255,1);">
                            <div><br></div><br><br><br><br>
                        </h6>
                        <h1 style="font-size: 52px; letter-spacing: 0px; line-height: 56px; color: rgb(255, 255, 255);"><span style="letter-spacing: 0px; background-color: inherit;"><?php the_title(); ?></span></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div style="margin-left: 100px; margin-right: 100px; margin-top: 20px; margin-bottom: 20px">
	<h5>
		<a href="https://testsite982331334.wpcomstaging.com/blog"> < Blog</a>
	</h5>
	<br>
	<?php the_content(); ?>
		<h5>
		<a href="https://testsite982331334.wpcomstaging.com/blog"> < Blog</a>
	</h5>
</div>
	

</main>


<?php
get_footer();
endwhile;
	?>
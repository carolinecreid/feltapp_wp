<?php
/*
Template Name: Contact
*/

get_header();
?>
<div data-section="" class="section text-light overlay-img section-vh-70">
    <div class="boxes overlay-img">
        <div class="box-12 text-center align-items-center justify-content-center overlay-img">
            <div class="overlay overlay-img">
                <div class="overlay-img" style="background-image: url(<?php the_field('contact_hero_img'); ?>);"></div>
            </div>
            <div style="width: 35%; opacity: 1;" data-builder="" class="overlay-img">
                <div class="row overlay-img">
                    <div class="col-md-12 overlay-img">
                        <h6 style="font-size: 0.8rem; text-transform:uppercase; font-weight:bold; letter-spacing:10px; color:rgba(255,255,255,1);"><br><br><?php the_field('contact_hero_h1'); ?><br><br><br></h6>
                        <h1 style="font-size: 52px; letter-spacing: 0px; line-height: 56px;">
                            <div style="color: rgb(255, 255, 255);" class="overlay-img"><?php the_field('contact_hero_p'); ?></div>
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div data-section="" class="section text-light section-vh-70 overlay-img">
    <div class="boxes overlay-img">
        <div style="background-color: rgb(255, 255, 255);" class="box mt-4 mx-5 py-5 text-dark text-center align-items-center justify-content-center overlay-img">
            <div class="overlay overlay-img"></div>
            <div style="width:70%;" data-builder="" class="overlay-img">
                <div class="row overlay-img" style="position: relative; left: 0px; top: 0px; padding-bottom:40px;">
                    <div class="col text-left overlay-img" style="padding:20px;">
                        <div class="container overlay-img">
                            <div class="row overlay-img">
                                <div class="col-md-12 overlay-img">
                                    <h2><?php the_field('contact_h1'); ?></h2>
                                    <p><?php the_field('contact_p'); ?></p>
                                    <form role="form" method="post" id="reused_form">
                                        <div class="row overlay-img">
                                            <div class="col-sm-6 form-group overlay-img"><label for="name"> First Name:</label><input class="form-control" id="firstname" name="firstname" maxlength="50"></div>
                                            <div class="col-sm-6 form-group overlay-img"><label for="name"> Last Name:</label><input class="form-control" id="lastname" name="lastname" maxlength="50" type="text"></div>
                                        </div>
                                        <div class="row overlay-img">
                                            <div class="col-sm-12 form-group overlay-img"><label for="email"> Email:</label><input class="form-control" id="email" name="email" maxlength="50" type="text"></div>
                                        </div>
                                        <div class="row overlay-img">
                                            <div class="col-sm-6 form-group overlay-img"><label for="email"> Type of Inquiry:</label><br><select id="inquiry-select" type="tel">
                                                    <option value="">--Please choose an option--</option>
                                                    <option value="general">General Inquiry</option>
                                                    <option value="subscribe">Subscriptions</option>
                                                    <option value="design">Card Design</option>
                                                    <option value="lost">Lost Mail</option>
                                                    <option value="other">Other</option>
                                                </select></div>
                                            <div class="col-sm-6 form-group overlay-img"><label for="orderno"> Order Number:</label><br><input class="form-control" id="orderno" name="orderno" placeholder="optional" maxlength="50" type="text"></div>
                                        </div>
                                        <div class="row overlay-img">
                                            <div class="col-sm-12 form-group overlay-img"><label for="name"> Message:</label><textarea class="form-control" id="message" name="message" placeholder="Your Message Here" maxlength="6000" rows="7" type="textarea"></textarea></div>
                                        </div>
                                        <div class="row overlay-img">
                                            <div class="col-sm-12 form-group overlay-img"><button class="btn btn-lg btn-success btn-block" style="padding: 10px; letter-spacing:2px; border: 1px solid rgb(255, 255, 255); background-color: #E1B752; border-radius:6px; text-align:center; color: #ffffff; text-transform: uppercase; font-weight: 600; font-size: 0.8rem;" id="btnContactUs" type="submit">Submit Message </button></div>
                                        </div>
                                    </form>
                                    <div id="success_message" style="width:100%; height:100%; display:none; " class="overlay-img">
                                        <h3>Sent your message successfully!</h3>
                                    </div>
                                    <div id="error_message" style="width:100%; height:100%; display:none; " class="overlay-img">
                                        <h3>Error</h3> Sorry there was an error sending your form.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 text-left overlay-img" style="padding:20px;">
                        <h3><?php the_field('contact_sidebar_h1'); ?></h3>
                        <p style="padding-bottom:30px;"><br><?php the_field('contact_sidebar_p'); ?></p>
                        <h3><?php the_field('contact_sidebar_h2'); ?></h3>
                        <p><b><?php the_field('contact_sidebar_p2'); ?></p>
                        <p style="padding-bottom:30px;"><?php the_field('contact_sidebar_inquiries'); ?></p>
        
                        <p><a href="https://www.facebook.com/FeltApp/">
                            <img src="/static/images/contact/Facebook.png" style="padding:10px;"></a><a href="https://twitter.com/feltapp">
                            <img src="/static/images/contact/Twitter.png" style="padding:10px;"></a><a href="https://www.pinterest.com/feltcards/">
                            <img src="/static/images/contact/Pinterest.png" style="padding:10px;"></a><a href="http://instagram.com/feltapp">
                            <img src="/static/images/contact/Instagram.png" style="padding:10px;"></a>
                        </p>
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
<div data-section="" class="section text-light overlay-img section-vh-70">
    <div class="boxes overlay-img">
        <div class="box-12 text-center align-items-center justify-content-center overlay-img">
            <div class="overlay overlay-img">
                <div class="overlay-img" style="background-image: url(<?php the_field('contact_img'); ?>);"></div>
            </div>
        </div>
    </div>
</div>
<div data-section="" class="section text-dark my-5 overlay-img section-vh-90">
    <div class="boxes overlay-img">
        <div class="box-12 box-md-6 align-items-center justify-content-center overlay-img">
            <div style="width: 90%;" data-builder="" class="overlay-img">
                <div class="row overlay-img">
                    <div class="col overlay-img"><img src="<?php the_field('contact_bottom_img'); ?>" class="img-fluid"></div>
                </div>
            </div>
        </div>
        <div class="box-12 box-md-6 text-center align-items-center justify-content-start overlay-img">
            <div style="width: 75%;" data-builder="" class="overlay-img">
                <div class="row overlay-img">
                    <div class="col text-left overlay-img">
                        <h6 style="font-size: 0.8rem; text-transform:uppercase; font-weight:bold; letter-spacing:10px; color:rgba(102,102,102,.3);"><?php the_field('contact_bottom_h1'); ?><br><br><br></h6>
                        <h1 style="font-size: 64px; letter-spacing: 2px; line-height: 71px;"><?php the_field('contact_bottom_h2'); ?></h1>
                        <p><br><?php the_field('contact_bottom_p'); ?><br><br></p>
                        <p><a title="" href="<?php the_field('contact_bottom_cta_link'); ?>" style="padding: 10px; letter-spacing:2px; border: 1px solid rgb(255, 255, 255); background-color: #E1B752; border-radius:6px; text-align:center; color: #ffffff; text-transform: uppercase; font-weight: 600; font-size: 0.8rem;" class="btn btn-primary px-5"><?php the_field('contact_bottom_cta'); ?></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
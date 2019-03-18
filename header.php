<?php
/**
 * The header for the theme
 *
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" type="text/css" media="all" />
</head>

<body <?php body_class(); ?>>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<script>
    function body_classes() {
        var current_width = $(window).width();
        var body = $('body');

        if (current_width < 480) {
            body.removeClass('body-xs body-sm body-md body-lg body-xl');
            body.addClass('body-xs');
        } else if (current_width < 768) {
            body.removeClass('body-xs body-sm body-md body-lg body-xl');
            body.addClass('body-sm');
        } else if (current_width < 992) {
            body.removeClass('body-xs body-sm body-md body-lg body-xl');
            body.addClass('body-md');
        } else if (current_width < 1200) {
            body.removeClass('body-xs body-sm body-md body-lg body-xl');
            body.addClass('body-lg');
        } else if (current_width >= 1450) {
            body.removeClass('body-xs body-sm body-md body-lg body-xl');
            body.addClass('body-xl');
        }
    }

    $(function () {
        body_classes();
    });

    window.onresize = function (event) {
        body_classes();
    };
</script>
<nav class="navbar navbar-expand-lg navbar-dark w-100" style="position:fixed; top:0;">
    <div class="container">
        <a href="/"><img
                src="https://felt-web.dev.feltapp.com/images/felt_red.svg" class="img-responsive mr-4"
                style="height: 45px;"/></a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
			<?php echo strip_tags(wp_nav_menu(
            	array(
              		'container' => false,
              		'echo' => false,
              		'theme_location' => 'primary-menu',
              		'items_wrap' => '%3$s',
              		'depth' => 0
            	)
          	), '<a>'); ?>
                <!-- <li class="nav-item">
                    <a class="nav-link" href="#">Browse
                        Cards & Gifts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"
                       href="#">How it Works</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Subscribe</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Gift</a>
                </li> -->
            </ul>
        </div>

        <div class="navbar-text mr-3">
            <a href="#">Log in | Sign up</a>
        </div>


        <button class="btn btn-sm btn-primary pl-3 pr-3 ml-auto" type="button">Download the App</button>
    </div>
</nav>
</body>
</html>
<main>
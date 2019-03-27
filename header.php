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
<!-- Help Scout Chat Widget -->
	<script type="text/javascript">!function(e,t,n){function a(){var e=t.getElementsByTagName("script")[0],n=t.createElement("script");n.type="text/javascript",n.async=!0,n.src="https://beacon-v2.helpscout.net",e.parentNode.insertBefore(n,e)}if(e.Beacon=n=function(t,n,a){e.Beacon.readyQueue.push({method:t,options:n,data:a})},n.readyQueue=[],"complete"===t.readyState)return a();e.attachEvent?e.attachEvent("onload",a):e.addEventListener("load",a,!1)}(window,document,window.Beacon||function(){});</script>
<script type="text/javascript">window.Beacon('init', '33b0e0aa-e1f4-407b-8dc2-94d1b5089a49')</script>
<!-- Help Scout Chat Widget end -->
	
<!-- Mailchimp Script -->
	<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='NAME';ftypes[3]='text';fnames[4]='MMERGE4';ftypes[4]='text';fnames[5]='SIGNUP';ftypes[5]='text';fnames[6]='MMERGE6';ftypes[6]='text';fnames[7]='MMERGE7';ftypes[7]='text';fnames[8]='MMERGE8';ftypes[8]='text';fnames[9]='MMERGE9';ftypes[9]='text';fnames[10]='MMERGE10';ftypes[10]='text';fnames[11]='MMERGE11';ftypes[11]='text';fnames[12]='MMERGE12';ftypes[12]='text';fnames[13]='MMERGE13';ftypes[13]='text';fnames[14]='MMERGE14';ftypes[14]='text';fnames[15]='MMERGE15';ftypes[15]='text';fnames[16]='MMERGE16';ftypes[16]='text';fnames[17]='MMERGE17';ftypes[17]='text';fnames[18]='MMERGE18';ftypes[18]='text';fnames[19]='ROLE';ftypes[19]='text';fnames[20]='L_LOGIN';ftypes[20]='date';fnames[21]='L_ACTIVE';ftypes[21]='date';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
<!-- Mailchimp Script end -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
	$(document).ready(function(){
  $(window).scroll(function(){
  	var scroll = $(window).scrollTop();
	  if (scroll > 75) {
	    $(".navbar").css("background" , "#fff");
		$(".nav-link").css("color" , "#333");
		$(".colorchange").css("color" , "#333");
		$(".nav-logo").attr("src", "https://testsite982331334.wpcomstaging.com/wp-content/uploads/2019/03/felt-logo-gray@2x.png");
		$(".navbar").css("box-shadow", "0 1px 5px rgba(0, 0, 0, 0.25)");
		  
	  }

	  else{
		  $(".navbar").css("background" , "none");  
		  $(".nav-link").css("color" , "#fff");
		  $(".colorchange").css("color" , "#fff");
		  $(".nav-logo").attr("src", "https://testsite982331334.wpcomstaging.com/wp-content/uploads/2019/03/felt-logo@2x.png");
		  $(".navbar").css("box-shadow", "0 0px 0px");
	  }
  })
})
</script>
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
<nav class="navbar navbar-expand-lg navbar-dark w-100" style="top:0;">
    <div class="container">
        <a href="/"><img
                src="https://testsite982331334.wpcomstaging.com/wp-content/uploads/2019/03/felt-logo@2x.png" class="nav-logo img-responsive mr-4"
                style="height: 30px;"/></a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
<!-- 				<?php echo strip_tags(wp_nav_menu(
            array(
              'container' => false,
              'echo' => false,
              'theme_location' => 'header-menu',
              'items_wrap' => '%3$s',
              'depth' => 0,
			  'menu_class' => 'nav-item',
            )
          ), '<li><a>'); ?> -->
				<li class="nav-item">
                    <a class="nav-link" href="https://testsite982331334.wpcomstaging.com/our-cards/">Our Cards</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"
                       href="https://testsite982331334.wpcomstaging.com/how-it-works/">How it Works</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://testsite982331334.wpcomstaging.com/pricing/">Pricing</a>
                </li>
            </ul>
        </div>

        <div class="navbar-text mr-3">
            <a class="colorchange" href="#">Log in | Sign up</a>
        </div>


        <button class="btn btn-sm btn-primary pl-3 pr-3 ml-auto" type="button">Download the App</button>
    </div>
</nav>
</body>
</html>
<main>
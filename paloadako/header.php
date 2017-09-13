<?php
/**
 * @package WordPress
 * @subpackage WP-Skeleton
 */
?>
<!DOCTYPE html><html <?php language_attributes(); ?>>    
<head>
<meta charset="<?php //bloginfo( 'charset' ); ?>" />
<meta charset="UTF-8" />
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if gte IE 9 ]><html class="no-js ie9" lang="en"> <![endif]-->       
<title><?php wp_title('|',true,'right'); ?><?php bloginfo('name'); ?></title>   	
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<!-- Mobile Specific Metas
  ================================================== -->
	<!--<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1 user-scalable=no" />	
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="CrosswaterInternational">
	<meta name="viewport" id="vp" content="initial-scale=1.0,user-scalable=no,maximum-scale=1,width=device-width" />
	<meta name="viewport" id="vp" content="initial-scale=1.0,user-scalable=no,maximum-scale=1" media="(device-height: 568px)" />-->
	<link rel="apple-touch-icon" href="images/touch-icon-iphone.png">
	<link rel="icon" type="image/png" href="<?php bloginfo('template_url') ?>/favicon.png">
	<!-- CSS
  ================================================== -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/stylesheets/base.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/stylesheets/layout.css">	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/stylesheets/flexslider.css" type="text/css" media="screen" />
	<link rel="stylesheet" href= "<?php echo get_template_directory_uri(); ?>/stylesheets/responsive.css">
	<link rel="stylesheet" href= "<?php echo get_template_directory_uri(); ?>/style.css">
	
	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="<?php bloginfo('template_url')?>/js/jquery.flexslider-min.js"></script>
	<script src="<?php bloginfo('template_url')?>/js/jquery.validate.js"></script>
	
	<?php include('google-script.php')?>
	<script src="<?php bloginfo('template_url')?>/js/custom.js"></script>
<?php wp_head(); ?>        
</head>
<body <?php body_class(); ?>><!-- the Body  -->
<!-- TOP -->
<div class="moneyback-hldr">
	<img src="<?php bloginfo('template_url')?>/images/money_back_pm.png" alt="">
</div>
<div id="top-hldr">
    <div class="topflt">		
    	<div class="container"> 			
    	<div class="top-text alignleft">PALOADAKO.com - Send load to any mobile subscribers in the Philippines from anywhere you are... anytime...</div>			
    	<div class="social alignright">					
    	<span>Follow Us:</span>					
    <ul class="social-list">						
    	<li><a href="https://www.facebook.com/Paload-Ako-1665557600145400/"><img src="<?php bloginfo('template_url')?>/images/fb-icon.png" width="28" height="28" alt=""/></a></li>			
    	<li><a href="#"><img src="<?php bloginfo('template_url')?>/images/twit-icon.png" width="28" height="28" alt=""/></a></li>						
    	<li><a href="#"><img src="<?php bloginfo('template_url')?>/images/youtube-icon.png" width="28" height="28" alt=""/></a></li>					
    </ul>			
    </div>			
    	<div class="clear"></div>		
    </div><!-- HEADER NOTICE -->	
</div><!-- HEADER NOTICE -->
        <div class="top-container">
			<div class="container">
				<div class="logo"><a href="<?php bloginfo('url')?>"><img src="<?php bloginfo('template_url')?>/images/paloadako-logo.png" width="" height="" alt="Paload Ako"/></a></div>				<div class="menu-hldr"><?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => '' ) ); ?></div>				
				<div class="clear"></div>
				<!--/menu -->
			</div>
        </div><!--/top-container -->
    </div><!--/topflt -->

</div>
<!--/TOP -->
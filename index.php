<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
	<head>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta name="author" content="Marquay Smith">	
		<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
		<link rel="stylesheet" href="<?php bloginfo('template_url');?>/normalize.css"/>
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>"/>
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
                <link href='http://fonts.googleapis.com/css?family=Satisfy' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Fjalla+One|Cantarell:400,400italic,700italic,700' rel='stylesheet' type='text/css'>
		<script src="<?php bloginfo('template_url');?>/js/respond.min.js"></script>
		
		<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
		<?php wp_head(); ?>
		
		<script src="<?php bloginfo('template_url');?>/js/libs/modernizr-2.5.0.min.js"></script>
	</head>
	
	<body <?php body_class(); ?>>
	
		<header class="container clearfix" role="banner">
		  
		    <div class="logo clearfix">
		       <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">	

            <!--[if gte IE 9]><!-->
             <img alt="Herrington's Waste Services" src="/img/logo.svg">
            <!--<![endif]-->

			<!--[if lte IE 8]>
            <img alt="Herrington's Waste Services" src="/img/logo.png">
              <![endif]-->
            </a>
		    </div>
		    
		    <span class="toggle"> &equiv; Menu</span>
		        
		    <div class="menu_toggle">

			    <nav class="main_nav" role="navigation">
			        <?php wp_nav_menu( array('menu' => 'Main', 'container' => false, )); ?>
				<span class="serv_menu"><?php wp_nav_menu( array('menu' => 'Services', 'container' => false, )); ?></span>
				
			    </nav>
		    </div>
		    
		</header>
<section class="container serv clearfix">

    <div class="services trash">    
        <div class="services_slide">
            <h1><a href="/service/residential/">Residential</a></h1>
            <p>Whatever household items that are no longer needed and that cannot be recycled, we'll collect it curbside.</p>
            <span class="learn_more">
                <a href="/service/residential/">Learn More</a>
            </span>
        </div>
    </div>
    
    <div class="services yard">    
        <div class="services_slide">
            <h1><a href="/service/yard-waste/">Yard Waste</a></h1>
            <p>Leaves, branches, grass clippings. Anything that you can grow, mow or trim, we'll take care of it.</p>
            <span class="learn_more">
                <a href="/service/yard-waste/">Learn More</a>
            </span>
        </div>
    </div>

    <div class="services recycling">    
        <div class="services_slide">
            <h1><a href="/service/recycling/">Recycling</a></h1>
            <p>Reuse, Reduce, Recycle. Do you have household items that can be recycled? Do your part with your cart.</p>
            <span class="learn_more">
                <a href="/service/recycling/">Learn More</a>
            </span>
        </div>
    </div>

    <div class="services commercial">    
        <div class="services_slide">
            <h1><a href="/service/commercial/">Commercial</a></h1>
            <p>We have a wide range of collection options for you and your business. </p>
            <span class="learn_more">
                <a href="/service/commercial/">Learn More</a>
            </span>
        </div>
    </div>

</section>

<nav class="sub container clearfix">
    <ul class="sub_nav">
    <li><a href="/info/CollectionGuidelines.pdf">Collection Guidelines (PDF)</a></li>
    <li><a href="/contact/">Request Service</a></li>
    <li><a href="/contact/">Order Stickers</a></li>
  </ul>
</nav>

<footer class="clearfix">
<section class="foot clearfix">

<?php get_sidebar(); ?>

    <!--<div class="container main clearfix">
        
        <article class="side">
            <h2>Service Updates</h2>
            <p>No service updates or interuptions at this time!</p>
        </article>
    
        <article class="side">
            <h2>Tips that should go to waste:</h2>
            <p>Not an early morning person? Put out the garbage the night before and you’ll be able to sleep in!</p>
        </article>
        <article class="side">

               
               <form>
                   <p>Sign up today for our newsletter to stay up to date with our services and latest news.</p>
                   <input type="search" placeholder="you@example.com">
                   <input type="submit" value="Sign Up">
               </form>

        </article>
    </div>
    -->
    
</section>


    <p class="credit">&copy; Copyright <?php echo date("Y") ?> <?php bloginfo('name'); ?>. All Rights Reserved | 6632 Ramsdell NE Rockford, MI 49341 (616)874-9115 | <a href="/privacy-policy/">Privacy Policy</a> 

<a href="https://www.facebook.com/herringtons.waste">
            <!--[if gte IE 9]><!-->
                <img alt="facebook" src="/img/facebook.svg">
            <!--<![endif]-->

            <!--[if lte IE 8]>
                <img alt="facebook" src="/img/facebook.jpg">
            <![endif]-->
</a>




</p>
    <div class="container">
        <p class="service_areas"><?php bloginfo('name'); ?> is locally owned and operated and proudly serves residential and commercial customers.</p>
    </div>



</footer>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="<?php bloginfo('template_url');?>/js/plugins.js"></script>
        <script src="<?php bloginfo('template_url');?>/js/main.js"></script>
        <script src="<?php bloginfo('template_url');?>/js/response.min.js"></script>


        <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-48989044-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

        <!--[if lt IE 8 ]>
          <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
          <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
        <![endif]-->
        
        <?php wp_footer(); ?>

    </body>
</html>


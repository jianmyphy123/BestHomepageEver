<?php

header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header('Pragma: no-cache');
require_once('init.php');

$CATEGORIES = array('Social Media','Popular','Sports','Travel','Trade/Retail','Shop & Buy',
'Movies & TV','Tech/News','Entertainment','Food & Music','Daily Deals','Finance');

$LINKS = array(
array('name'=>'Facebook','icon'=>'facebook.png', 'link'=>'http://facebook.com/', 'category'=>'Social Media', 'style'=>''),
array('name'=>'Twitter','icon'=>'twitter.png', 'link'=>'http://twitter.com/', 'category'=>'Social Media', 'style'=>''),
array('name'=>'Instagram','icon'=>'instagram.png', 'link'=>'http://instagram.com/', 'category'=>'Social Media', 'style'=>''),
array('name'=>'LinkedIn','icon'=>'linked_in.png', 'link'=>'http://linkedin.com/', 'category'=>'Social Media', 'style'=>''),
array('name'=>'Amazon','icon'=>'amazon.png', 'link'=>'http://www.amazon.com/?_encoding=UTF8&camp=1789&creative=9325&linkCode=ur2&tag=besth0f-20', 'category'=>'Popular', 'style'=>''),
array('name'=>'YouTube','icon'=>'youtube2.png', 'link'=>'http://youtube.com/', 'category'=>'Popular', 'style'=>''),
array('name'=>'Pinterest','icon'=>'pinterest.png', 'link'=>'http://pinterest.com/', 'category'=>'Popular', 'style'=>''),
array('name'=>'Yelp','icon'=>'yelp.png', 'link'=>'http://yelp.com/', 'category'=>'Popular', 'style'=>''),
array('name'=>'CBS','icon'=>'cbs_sports.png', 'link'=>'http://www.cbssports.com/', 'category'=>'Sports', 'style'=>''),
array('name'=>'Yahoo','icon'=>'yahoo_sports.png', 'link'=>'http://sports.yahoo.com/', 'category'=>'Sports', 'style'=>''),
array('name'=>'FoxSports','icon'=>'fox_sports.png', 'link'=>'http://msn.foxsports.com/', 'category'=>'Sports', 'style'=>''),
array('name'=>'ESPN','icon'=>'espn.png', 'link'=>'http://espn.go.com/', 'category'=>'Sports', 'style'=>''),
array('name'=>'Hotels.com','icon'=>'hotels.png', 'link'=>'http://www.jdoqocy.com/click-5253923-10772148', 'category'=>'Travel', 'style'=>''),
array('name'=>'Expedia','icon'=>'expedia.png', 'link'=>'http://www.tkqlhce.com/click-5253923-10517611', 'category'=>'Travel', 'style'=>''),
array('name'=>'TripAdvisor','icon'=>'tripadvisor.png', 'link'=>'http://www.tripadvisor.com', 'category'=>'Travel', 'style'=>''),
array('name'=>'Priceline','icon'=>'priceline.png', 'link'=>'http://priceline.com/', 'category'=>'Travel', 'style'=>''),
array('name'=>'Amazon','icon'=>'amazon.png', 'link'=>'http://www.amazon.com/?_encoding=UTF8&camp=1789&creative=9325&linkCode=ur2&tag=besth0f-20', 'category'=>'Shop & Buy', 'style'=>''),
array('name'=>'eBay','icon'=>'ebay.png', 'link'=>'http://rover.ebay.com/rover/1/711-53200-19255-0/1?icep_ff3=1&pub=5575046875&toolid=10001&campid=5337310444&customid=&ipn=psmain&icep_vectorid=229466&kwid=902099&mtid=824&kw=lg', 'category'=>'Shop & Buy', 'style'=>''),
array('name'=>'Zappos','icon'=>'zappos.png', 'link'=>'http://www.zappos.com/', 'category'=>'Shop & Buy', 'style'=>''),
array('name'=>'Newegg','icon'=>'newegg.png', 'link'=>'http://www.tkqlhce.com/ld104gv30v2IOLOMSLMIKJNNJOON', 'category'=>'Shop & Buy', 'style'=>''),
array('name'=>'Showtimes','icon'=>'yahoo_movies.png', 'link'=>'https://www.yahoo.com/movies/showtimes', 'category'=>'Movies & TV', 'style'=>''),
array('name'=>'TV','icon'=>'tvguide.png', 'link'=>'http://www.tvguide.com/listings/', 'category'=>'Movies & TV', 'style'=>''),
array('name'=>'Flixster','icon'=>'flixster.png', 'link'=>'https://www.flixster.com/', 'category'=>'Movies & TV', 'style'=>''),
array('name'=>'IMDB','icon'=>'imdb.png', 'link'=>'http://imdb.com/', 'category'=>'Movies & TV', 'style'=>''),
array('name'=>'EliteDaily','icon'=>'elitedaily.png', 'link'=>'http://elitedaily.com/', 'category'=>'Entertainment', 'style'=>''),
array('name'=>'Buzzfeed','icon'=>'buzzfeed.png', 'link'=>'https://www.buzzfeed.com/', 'category'=>'Entertainment', 'style'=>''),
array('name'=>'Chive','icon'=>'thechive.png', 'link'=>'http://www.thechive.com/', 'category'=>'Entertainment', 'style'=>''),
array('name'=>'AskMen','icon'=>'askmen.png', 'link'=>'http://www.askmen.com/', 'category'=>'Entertainment', 'style'=>''),
array('name'=>'Craigslist','icon'=>'craigslist.png', 'link'=>'http://craigslist.org/', 'category'=>'Trade/Retail', 'style'=>''),
array('name'=>'Etsy','icon'=>'etsy.png', 'link'=>'http://www.etsy.com/', 'category'=>'Trade/Retail', 'style'=>''),
array('name'=>'Walmart','icon'=>'walmart.png', 'link'=>'http://linksynergy.walmart.com/fs-bin/click?id=ZBhehDWjHCM&offerid=223073.10011426&type=3&subid=0', 'category'=>'Trade/Retail', 'style'=>''),
array('name'=>'Macys','icon'=>'macys.png', 'link'=>'http://click.linksynergy.com/fs-bin/click?id=ZBhehDWjHCM&offerid=206959.100258994&type=3&subid=0', 'category'=>'Trade/Retail', 'style'=>''),
//array('name'=>'Novica','icon'=>'novica.png', 'link'=>'http://novica.com/', 'category'=>'Trade/Retail', 'style'=>''),
array('name'=>'Recipes','icon'=>'all_recipes.png', 'link'=>'http://www.allrecipes.com', 'category'=>'Food & Music', 'style'=>''),
array('name'=>'FoodNetwork','icon'=>'foodnetwork.png', 'link'=>'http://www.foodnetwork.com/recipes.html', 'category'=>'Food & Music', 'style'=>'small'),
array('name'=>'AllMusic','icon'=>'allmusic.png', 'link'=>'http://allmusic.com/', 'category'=>'Food & Music', 'style'=>''),
array('name'=>'Stubhub','icon'=>'stubhub.png', 'link'=>'http://www.stubhub.com/', 'category'=>'Food & Music', 'style'=>''),
array('name'=>'CNET','icon'=>'cnet.png', 'link'=>'http://www.cnet.com', 'category'=>'Tech/News', 'style'=>''),
//array('name'=>'Wired','icon'=>'', 'link'=>'', 'category'=>'Tech/News', 'style'=>''),
array('name'=>'IGN','icon'=>'ign.png', 'link'=>'http://www.ign.com', 'category'=>'Tech/News', 'style'=>''),
array('name'=>'PCMag','icon'=>'pcmag.png', 'link'=>'http://www.pcmag.com', 'category'=>'Tech/News', 'style'=>''),
array('name'=>'MacWorld','icon'=>'macworld.png', 'link'=>'http://www.macworld.com', 'category'=>'Tech/News', 'style'=>''),
array('name'=>'Amazon','icon'=>'amazon.png', 'link'=>'https://www.amazon.com/gp/goldbox/ref=nav_cs_gb?&_encoding=UTF8&tag=besth0f-20&linkCode=ur2&linkId=6f84c1caf15e62a0b9f238d3e26a55a8&camp=1789&creative=9325', 'category'=>'Daily Deals', 'style'=>''),
array('name'=>'Groupon','icon'=>'groupon.png', 'link'=>'http://www.groupon.com', 'category'=>'Daily Deals', 'style'=>''),
array('name'=>'Woot','icon'=>'woot.png', 'link'=>'http://www.woot.com', 'category'=>'Daily Deals', 'style'=>''),
array('name'=>'Slickdeals','icon'=>'slickdeals.png', 'link'=>'http://www.slickdeals.net', 'category'=>'Daily Deals', 'style'=>''),
array('name'=>'MSN','icon'=>'msn-money.png', 'link'=>'http://www.msn.com/en-us/money', 'category'=>'Finance', 'style'=>''),
array('name'=>'Y! Finance','icon'=>'yahoo_finance.png', 'link'=>'http://finance.yahoo.com/', 'category'=>'Finance', 'style'=>''),
array('name'=>'FinViz','icon'=>'finviz.png', 'link'=>'http://www.finviz.com', 'category'=>'Finance', 'style'=>''),
array('name'=>'StockCharts','icon'=>'stock_charts.png', 'link'=>'http://stockcharts.com/h-sc/ui?s=$SPX&p=D&yr=1&mn=0&dy=0&id=p16446588845', 'category'=>'Finance', 'style'=>''),
//array('name'=>'Stocks','icon'=>'', 'link'=>'', 'category'=>'Finance', 'style'=>''),
)

?><!DOCTYPE html>
<html><head>
	<META NAME="AUTHOR" CONTENT="Justin Carver">
    <meta name="copyright" content="BestHomepageEver. 2017" />
	<meta charset="UTF-8" />
    <title>BestHomepageEver | All the Best Websites in a Single Click!</title>
	<!-- <title>Best Homepage Ever | All of Your Favorite Sites in 1-Click!</title> -->
	<meta name="description" content="The Internet's Best Homepage. With just 1-Click, you can access everything you use daily: Email, Search, News, Sports, Social Media, etc - 100% Free & No Ads!"/>
	<meta name="keywords" content="best homepage, best home page, best homepage ever, what is the best homepage, best startpage, top homepage">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">   
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
    <meta http-equiv="content-language" content="en">
    <!-- logo / favicon -->
        <link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-57x57.png?v=dLLvNL8790">
        <link rel="apple-touch-icon" sizes="60x60" href="/apple-touch-icon-60x60.png?v=dLLvNL8790">
        <link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-72x72.png?v=dLLvNL8790">
        <link rel="apple-touch-icon" sizes="76x76" href="/apple-touch-icon-76x76.png?v=dLLvNL8790">
        <link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114x114.png?v=dLLvNL8790">
        <link rel="apple-touch-icon" sizes="120x120" href="/apple-touch-icon-120x120.png?v=dLLvNL8790">
        <link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144x144.png?v=dLLvNL8790">
        <link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon-152x152.png?v=dLLvNL8790">
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon-180x180.png?v=dLLvNL8790">
        <link rel="icon" type="image/png" href="/favicon-32x32.png?v=dLLvNL8790" sizes="32x32">
        <link rel="icon" type="image/png" href="/favicon-194x194.png?v=dLLvNL8790" sizes="194x194">
        <link rel="icon" type="image/png" href="/favicon-96x96.png?v=dLLvNL8790" sizes="96x96">
        <link rel="icon" type="image/png" href="/android-chrome-192x192.png?v=dLLvNL8790" sizes="192x192">
        <link rel="icon" type="image/png" href="/favicon-16x16.png?v=dLLvNL8790" sizes="16x16">
        <link rel="manifest" href="/manifest.json?v=dLLvNL8790">
        <link rel="mask-icon" href="/safari-pinned-tab.svg?v=dLLvNL8790" color="#5bbad5">
        <link rel="shortcut icon" href="/favicon.ico?v=dLLvNL8790">
        <meta name="apple-mobile-web-app-title" content="Homepage">
        <meta name="application-name" content="Homepage">
        <meta name="msapplication-TileColor" content="#2b5797">
        <meta name="msapplication-TileImage" content="/mstile-144x144.png?v=dLLvNL8790">
        <meta name="theme-color" content="#18254b">
        <meta property="og:title" content="BestHomepageEver - All of your favorite sites in a single click" /> 
		<meta property="og:description" content="The Internet's Best Homepage! Quick Access to everything you use daily: E-mail, Maps, Google, News, Sports, Facebook, etc. All in just 1-click. No Advertising!" />
		<meta property="og:image" content="http://besthomepageever.com/pictures/besthomepageever_logo.png" />
        <meta property="og:url" content="http://besthomepageever.com" />

    <!--[if IE 8]>
    <script type="text/javascript">
    window.location = "http://besthomepageever.com/index-ie8.html";
    </script>
    <![endif]-->
    
    <!-- Stylesheets -->
    <!-- Bootstrap 3.3.6 -->
    <link href="bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap/3.3.6/css/bootstrap-theme.min.css" rel="stylesheet"> 
    <link href="bootstrap/3.3.6/css/bootstrap-toggle.min.css" rel="stylesheet">
    <link href="css/custom-v5.0.css" rel="stylesheet"> 
    <!-- Search Bar -->
    <style type="text/css"> .dropdown.dropdown-lg .dropdown-menu{margin-top:-1px;padding:6px 20px}.input-group-btn .btn-group{display:flex!important}.btn-group .btn{border-radius:0;margin-left:-1px}.btn-group .form-horizontal .btn,.form-group .form-control:last-child{border-top-left-radius:4px;border-bottom-left-radius:4px}.btn-group .btn:last-child{border-top-right-radius:4px;border-bottom-right-radius:4px}.form-horizontal .form-group{margin-left:0;margin-right:0}@media screen and (min-width:768px){#adv-search{width:500px;margin:0 auto}.dropdown.dropdown-lg{position:static!important}.dropdown.dropdown-lg .dropdown-menu{min-width:500px}} </style>
    <!-- Set Home -->
    <style type="text/css">.nav.nav-justified>li>a{position:relative}.nav.nav-justified>li>a:focus,.nav.nav-justified>li>a:hover{background-color:transparent}.nav.nav-justified>li>a>.quote{position:absolute;left:0;top:0;opacity:0;width:30px;height:30px;padding:5px;background-color:#13c0ba;border-radius:15px;color:#000}.nav.nav-justified>li.active>a>.quote{opacity:1}.nav.nav-justified>li>a>img{box-shadow:0 0 0 5px #13c0ba;max-width:100%;opacity:.3;-webkit-transform:scale(.8,.8);transform:scale(.8,.8);-webkit-transition:all .3s 0s cubic-bezier(.175,.885,.32,1.275);transition:all .3s 0s cubic-bezier(.175,.885,.32,1.275)}.nav.nav-justified>li.active>a>img,.nav.nav-justified>li:focus>a>img,.nav.nav-justified>li:hover>a>img{opacity:1;-webkit-transform:none;transform:none;-webkit-transition:all .3s 0s cubic-bezier(.175,.885,.32,1.275);transition:all .3s 0s cubic-bezier(.175,.885,.32,1.275)}.tab-pane .tab-inner{padding:30px 0x 20px 0}@media (min-width:768px){.nav.nav-justified>li>a>.quote{left:auto;top:auto;right:20px;bottom:0}} </style>
    <!-- Backgrounds -->
	<style type="text/css">.selBox {background-color:#EEEEEE;border-radius:12px;}</style>
	<style type="text/css">
		*,body{
		<?php
			if(isset($_COOKIE['fontStyle'])){
			echo 'font-family:'.$_COOKIE['fontStyle'].'';
				}
			?> }
		.none {display:none !important;}
		.linkEle {width:16% !important;}
		.linkContainer{display:block !important; margin-left:40px;}

		@media (min-width: 768px) and (max-width: 1091px) {
		.linkEle {width:25% !important;}
		}
		@media (max-width: 768px) {
		.linkContainer{display:none !important;}
		.imageaslink {display:none !important;}
		}

	</style>
    <!-- Links -->
	<style type="text/css">
    div.title{    color: #FF9933;
        font-size: 14pt;
        text-decoration: underline;
        font-weight: normal;	
        }
    .fcl{float:left;clear:left;}
    .floatL{float:left}
    .clear{clear:both}
    .linkss {
        color: #3F6;
        font-size: 12pt;
    }
    .linkss:hover {
        color: #39F;
        text-decoration: underline; 
    }
    </style>

	<!-- Javascript -->
    <!-- Google Analytics Begin -->
    <script type="text/javascript"> var _gaq=_gaq||[];_gaq.push(["_setAccount","UA-31333288-1"]),_gaq.push(["_trackPageview"]),function(){var t=document.createElement("script");t.type="text/javascript",t.async=!0,t.src=("https:"==document.location.protocol?"https://ssl":"http://www")+".google-analytics.com/ga.js";var e=document.getElementsByTagName("script")[0];e.parentNode.insertBefore(t,e)}(); </script>
    <script src="js/jquery-1.12.0.min.js"></script>
    <script src="bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="bootstrap/3.3.6/js/bootstrap-toggle.min.js"></script>
    <!-- Heatmap.me 
	<script>
    (function(h,e,a,t,m,p) {
    m=e.createElement(a);m.async=!0;m.src=t;
    p=e.getElementsByTagName(a)[0];p.parentNode.insertBefore(m,p);
    })(window,document,'script','https://u.heatmap.it/log.js');
    </script>
    -->
    
</head>

<?php
$NUMBERS=array('a','b');
shuffle($NUMBERS);
?>
<body style="<?php if(isset($_COOKIE['BG'])){echo "background-image: url(pictures/background_selection/".$_COOKIE['BG']."".$_COOKIE['BG_LETTER'].".png) !important;";} else {echo "background-image: url(pictures/background_selection/".str_pad(rand(1,16), 2, '0', STR_PAD_LEFT)."".$NUMBERS[0].".png) !important;";} ?>">

<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-W3PGMH"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-W3PGMH');</script>
<!-- End Google Tag Manager -->

<!-- Facebook Sharing -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!-- /Facebook -->

<nav class="hidden-xs hidden-sm hidden-md hidden-lg">
	<ul>
        <li><a href="news/" title="News & Updates">News and Updates</a></li>
        <li><a href="faq/" title="Questions and Answers">Questions and Help</a></li>
        <li><a href="about/" title="About the Homepage">About the homepage</a></li>        
        <li><a href="tips/" title="Tips and Tricks">Tips and Tricks</a></li>
        <li><a href="privacy.php" title="Privacy Policy">Your Policy</a></li>
    </ul>
</nav>

<div class="row">
 	<div class="col-lg-3 col-md-3 col-sm-4 hidden-xs text-left">
    	
 			 <div class="hidden-sm">
             	<a type="button" class="btn btn-xs btn-primary sethomepage" data-toggle="modal" data-target="#sethomepage" title="Make this my homepage">Make this my homepage</a> 
                <img src="pictures/flags/usa.png" align="absmiddle" title="BestHomepageEver USA" width="18" height="12"> | <a href="http://besthomepage.co.uk"><img src="pictures/flags/gb.png" align="absmiddle" border="0" title="BestHomepageEver UK" width="18" height="12"></a>
             </div>
             <div class="visible-sm">
             	<a type="button" class="btn btn-xs btn-primary sethomepage" data-toggle="modal" data-target="#sethomepage" title="Make this my homepage">Set as homepage</a> 
             	<img src="pictures/flags/usa.png" align="absmiddle" title="BestHomepageEver USA" width="18" height="12"> | <a href="http://besthomepage.co.uk"><img src="pictures/flags/gb.png" align="absmiddle" border="0" title="BestHomepageEver UK" width="18" height="12"></a>
             </div>
              
        
    </div>
    <div class="col-lg-6 col-md-6 col-sm-4 col-xs-9 text-center padding-bottom-10px">
    		<img src="Logo/best-homepage-ever-logo-2016.png" title="Best Homepage Ever Logo" class="visible-xs img-responsive" width="400" height="65">
            <img src="Logo/best-homepage-ever-logo-tablet.png" title="Best Homepage Ever Logo" class="visible-sm" width="300" height="45">   	 
            <img src="Logo/best-homepage-ever-logo-2016.png" title="Best Homepage Ever Logo" class="hidden-xs hidden-sm" width="400" height="65"><br>            
    </div>
    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-3 text-right">  
    	<span class="text-info">
          <a tabindex="0" class="btn btn-sm btn-primary" role="button" data-toggle="popover" data-content="<p class='text-center'><small>Vote 1x per month!</small><br><a href='http://www.thetoptens.com/best-homepages/' target='new'><span class='btn btn-primary'><span class='glyphicon glyphicon-check'></span> Vote BestHomepageEver</span></a></p><hr><p class='small text-center'>Please take 2 seconds to vote for BHE, as 'Best Homepage'.</p>"><span class="glyphicon glyphicon-check"></span></a></span></a>
         </span> 
        <div class="btn-group">
          <div class="dropdown">
           <button class="btn btn-sm btn-primary dropdown-toggle" type="button" id="news_settings" data-toggle="dropdown" data-trigger="hover" aria-haspopup="true" aria-expanded="true">
    		<span class="glyphicon glyphicon-menu-hamburger"></span>
           </button>
              <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="news_settings">
                <li><a href="news/" title="News and Updates"><span class="glyphicon glyphicon-comment text-info"></span> News and Updates</a></li>
                <li><a href="about/" title="About the Homepage"><span class="glyphicon glyphicon-info-sign text-info"></span> About the Homepage</a></li>
                <li><a href="tips/" title="Tips and Tricks"><span class="glyphicon glyphicon-thumbs-up text-info"></span> Tips and Tricks</a></li>
                <li><a href="faq/" title="Questions and Answers"><span class="glyphicon glyphicon-question-sign text-info"></span> Questions and Answers</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#" data-toggle="modal" data-target="#bgselect" title="Settings & Preferences"><span class="glyphicon glyphicon-cog text-info"></span> Settings and Preferences</a></li>
              </ul>
           </div><!-- /dropdown -->
         </div><!-- /btn-group -->
    </div>
</div>

<div class="row">   
	<!-- Panoramic -->
    <div class="col-lg-12 col-md-12 col-sm-12 hidden-xs margin-bottom text-center"><!-- Panoramic -->            	
            <script src="js/images-wide.min.js"></script>                               
    </div><!-- /Panoramic -->
    <!-- /Panoramic -->    
</div>       

<!-- Post Panoramic -->
       
<div class="row">

	<!-- // EMAIL // -->

       <div class="col-lg-3 col-md-3 col-sm-2 col-xs-2 text-left hidden-xs">
       		<!-- <a href="https://www.facebook.com" title="Facebook"><img src="pictures/facebook.png" alt="Facebook"></a> -->
            <span id="email"><a href="#" data-title="e-mail" data-content="<a href='https://outlook.live.com'>Outlook</a> | <a href='http://mail.google.com/mail'>G-Mail</a> | <a href='http://mail.yahoo.com/?.intl=us'>Yahoo</a> | <a href='http://www.aol.com'>AOL</a> | <a href='http://www.hotmail.com'>Hotmail</a>" data-placement="right" data-delay-show="1"><img src="pictures/email2.png" title="Check E-Mail" width="50" height="50"></a>
            </span>
       </div>
       
    <!-- // SEARCH // -->
       
       <!-- Search Engines (Normal) -->
       <div class="col-lg-6 col-md-6 hidden-sm hidden-xs text-center">
            <a href="http://bing.com"><img src="pictures/link-logos/search/bing.png" width="110" height="40"></a>  <a href="http://msn.com"><img src="pictures/link-logos/search/msn.png" width="110" height="35"></a>  <a href="http://yahoo.com"><img src="pictures/link-logos/search/yahoo.png" width="110" height="35"></a>  <span class="padding-left-10px"><a href="http://google.com"><img src="pictures/link-logos/search/google2.png" width="110" height="35"></a></span> 
       </div>
       <!-- Search Engines (Mobile) -->
       <div class="visible-xs col-xs-12 text-center">
            <a href="http://bing.com"><img src="pictures/link-logos/search/bing.png" width="110" height="40"></a>  <a href="http://msn.com"><img src="pictures/link-logos/search/msn.png" width="110" height="35"></a>  <a href="http://yahoo.com"><img src="pictures/link-logos/search/yahoo.png" width="110" height="35"></a>  <span class="padding-left-10px"><a href="http://google.com"><img src="pictures/link-logos/search/google2.png" width="110" height="35"></a></span> 
       </div>
       <!-- Search Engines (Tablet) -->
       <div class="visible-sm col-sm-8 text-center">
            <a href="http://bing.com"><img src="pictures/link-logos/search/bing.png" width="110" height="40"></a>  <a href="http://msn.com"><img src="pictures/link-logos/search/msn.png" width="110" height="35"></a>  <a href="http://yahoo.com"><img src="pictures/link-logos/search/yahoo.png" width="110" height="35"></a>  <span class="padding-left-10px"><a href="http://google.com"><img src="pictures/link-logos/search/google2.png" width="110" height="35"></a></span> 
       </div>

    <!-- // REFERENCE // -->   
       <div class="col-lg-3 col-md-3 col-sm-2 col-xs-12 text-right hidden-xs">
           <a href="https://www.google.com/search?q=local+weather&gws_rd=ssl" target="_self"><img src="pictures/weather2.png" width="50" height="50" title="Your local weather"></a>  <a href="http://maps.google.com" title="Maps and Directions"><img src="pictures/maps2.png" alt="Maps and Directions" width="50" height="50"></a> 
       </div>       
    </div><!-- /panoramic-footer -->
</div><!-- /Row -->
<!-- /Post-Panoramic -->
<hr>
<div class="row">

	<div class="col-lg-3 col-md-3 hidden-sm hidden-xs text-left">
      <div id="specials">
      </div>  
    </div>    
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 padding-top-10px text-center">
		<div class="input-group" id="adv-search">
			<input type="text" class="form-control" placeholder="Search" id="search_query" />
			<div class="input-group-btn">
				<div class="btn-group" role="group">
					<div class="dropdown dropdown-sm">
						<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false" id="search_dropdown">
							<span class="caret"></span>
						</button>
						<div class="dropdown-menu dropdown-menu-right" role="menu">
							<form class="form-horizontal form col-lg-12" role="form">
							  <img src="pictures/link-logos/search/google-tr.png" id="search_google"> | <img src="pictures/link-logos/search/bing-tr.png" id="search_bing"> | <img src="pictures/link-logos/search/duck-tr.png" id="search_duck"> | <img src="pictures/link-logos/search/yahoo-tr.png" id="search_yahoo"> 
							</form>
						</div>
					</div>             
					<button type="button" class="btn btn-success" id="search_go">
						<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
					</button>
				</div>
			</div>
		</div>
    </div>    
    
    <div class="col-lg-3 col-md-3 hidden-sm hidden-xs text-right" style="position: relative; top: 9px"> 
    	   
	   <?php 
		if($_COOKIE['ti']=='image')$image=1;
		if($image==0){
			$checkedon='';
			$checkedoff='checked';
		} else {
			$checkedon='checked';
			$checkedoff='';
		}
	   ?>
       <!--
	   <input type="radio" onclick="javascript:showImages();" name="textOrImage" data-toggle="toggle" <?php echo $checkedon; ?>> <span class="small">Images</span>
	   <input type="radio" onclick="javascript:showLinks();" name="textOrImage" data-toggle="toggle" style="margin-left:5px;" <?php echo $checkedoff; ?>> <span class="small">Classic</span>

       -->
       <input type="checkbox" id="toggle-button" checked data-toggle="toggle" data-on="Classic" data-off="Images" data-onstyle="success" data-offstyle="info" data-size="mini">
        <span id="savelinkhelp" class="padding-left-3px">
           <a href="#" data-title="Images vs Classic" data-content="You can save your preference using the <button class='btn btn-sm btn-primary dropdown-toggle'><span class='glyphicon glyphicon-menu-hamburger'></span></button> button<br> at top right of homepage, under <strong>Settings & Preferences</strong>." data-placement="left"><span class="glyphicon glyphicon-question-sign"></span></a>
        </span>

    	
        <!-- Images/Text Toggle 
        <input type="checkbox" checked data-toggle="toggle" data-size="small" data-on="<i class='fa fa-play'></i> Classic"  data-offstyle="success" data-off="<i class='fa fa-pause'></i> Images">  -->
    </div>   
    
</div>
<!-- /Search -->

<!-- Best of Begin -->
<div class="row padding-top-10px margin-bottom-minus-15px ">   
  	<div class="text-center"> 
	   <h4 style="color:#fff;">The Best of the Internet:</h4> 
    </div>
</div>  
<!-- /Best of the Web -->    

<div class="row hidden-sm hidden-xs linkContainer">    

<?php
$counts=array();
foreach($LINKS as $num=>$var){
	if(!isset($counts[$var['category']]))$counts[$var['category']]=0;
	$counts[$var['category']]++;
}

$x=0;
foreach($CATEGORIES as $cat){
	$marg='';
	echo '<div style="width:225px;float:left;text-align:left;margin-top:20px;" class="linkEle"><div class="title floatL">'.$cat.'</div>';
	echo '<div class="clear"></div>';
	$ccat=0;
	foreach($LINKS as $num=>$var){
		if($var['category']!=$cat)continue;
		if($var['category']==$cat)$ccat++;
		if($ccat % 3==0)echo '<div class="clear"></div>';
		echo '<div class="floatL" style="">';
		
		$image=0;
		if($_COOKIE['ti']=='image')$image=1;
		if($image==0){
			$bheClass='';
			$bheClassImg='none';
		} else {
			$bheClass='none';
			$bheClassImg='';
		}
		echo '<a class="linkss bheClass '.$bheClass.'" href="'.$var['link'].'"> '.$var['name'].'</a>';
		if($ccat!=$counts[$var['category']] && $ccat!=2)echo '<font class="bheClass '.$bheClass.'" style="color:#FFF;margin-left:2px;margin-right:4px;"> | </font>';
		echo '<a class="bheClassImg linkss '.$bheClassImg.'" href="'.$var['link'].'" style="margin:2px;"><img title="'.$var['name'].'" alt="'.$var['name'].'" src="pictures/link-logos/'.$var['icon'].'" width="50px" height="50px"></a>';		
	
		echo '</div>';
	}
		
	echo '</div>';
	$x++;
}
?>
</div>


<!-- MOBILE -->

<div class="row visible-xs padding-right-10px text-center padding-top-20px">
	<div class="col-xs-4 frame-with-padding">
    	<h5><span class="glyphicon glyphicon-user"></span> Social Media</h5>
    	<div class="col-xs-6">
        	<a href="https://www.facebook.com"><img src="pictures/link-logos/facebook.png" width="50px" height="50px"></a>
            <a href="https://www.instagram.com"><img src="pictures/link-logos/instagram.png" width="50px" height="50px"></a>
        </div>
        <div class="col-xs-6 padding-bottom-5px">
        	<a href="https://www.twitter.com"><img src="pictures/link-logos/twitter.png" width="50px" height="50px"></a>
            <a href="https://www.linkedin.com"><img src="pictures/link-logos/linked_in.png" width="50px" height="50px"></a>
        </div>        
    </div>
    
	<div class="col-xs-4 frame-with-padding">
    	<h5><span class="glyphicon glyphicon-plane"></span> Travel</h5>
    	<div class="col-xs-6">
        	<a href="http://www.jdoqocy.com/click-5253923-10772148"><img src="pictures/link-logos/hotels.png" width="50px" height="50px"></a>
            <a href="https://www.expedia.com"><img src="pictures/link-logos/expedia.png" width="50px" height="50px"></a>
        </div>
        <div class="col-xs-6 padding-bottom-5px">
        	<a href="https://www.tripadvisor.com"><img src="pictures/link-logos/tripadvisor.png" width="50px" height="50px"></a>
            <a href="https://www.priceline.com"><img src="pictures/link-logos/priceline.png" width="50px" height="50px"></a>
        </div>        
    </div>

	<div class="col-xs-4 frame-with-padding">
    	<h5><span class="glyphicon glyphicon-heart"></span> Popular</h5>
        <div class="col-xs-6">
        	<a href="http://www.amazon.com/?_encoding=UTF8&camp=1789&creative=9325&linkCode=ur2&tag=besth0f-20"><img src="pictures/link-logos/amazon.png" width="50px" height="50px"></a>
            <a href="https://www.pinterest.com"><img src="pictures/link-logos/pinterest.png" width="50px" height="50px"></a>
        </div>
        <div class="col-xs-6 padding-bottom-5px">
        	<a href="https://www.youtube.com"><img src="pictures/link-logos/youtube.png" width="50px" height="50px"></a>
            <a href="https://www.yelp.com"><img src="pictures/link-logos/yelp.png" width="50px" height="50px"></a>
        </div>        
    </div>

</div>

<div class="row visible-xs padding-right-10px text-center padding-top-20px">
	<div class="col-xs-4 frame-with-padding">
    	<h5><span class="glyphicon glyphicon-usd"></span> Trade / Retail</h5>
        <div class="col-xs-6">
        	<a href="https://www.craigslist.org"><img src="pictures/link-logos/craigslist.png" width="50px" height="50px"></a>
            <a href="https://www.walmart.com"><img src="pictures/link-logos/walmart.png" width="50px" height="50px"></a>
        </div>
        <div class="col-xs-6">
        	<a href="https://www.etsy.com"><img src="pictures/link-logos/etsy.png" width="50px" height="50px"></a>
            <a href="https://www.macys.com"><img src="pictures/link-logos/macys.png" width="50px" height="50px"></a>
        </div>        
    </div>
	<div class="col-xs-4 frame-with-padding">
    	<h5><span class="glyphicon glyphicon-film"></span> Movies & TV</h5>
        <div class="col-xs-6">
        	<a href="http://www.yahoo.com/movies/showtimes"><img src="pictures/link-logos/yahoo_movies.png" width="50px" height="50px"></a>
            <a href="http://www.flixster.com"><img src="pictures/link-logos/flixster.png" width="50px" height="50px"></a>
        </div>
        <div class="col-xs-6">
        	<a href="http://www.tvguide.com"><img src="pictures/link-logos/tvguide.png" width="50px" height="50px"></a>
            <a href="http://www.imdb.com"><img src="pictures/link-logos/imdb.png" width="50px" height="50px"></a>
        </div>        
    </div>
	<div class="col-xs-4 frame-with-padding">
    	<h5><span class="glyphicon glyphicon-phone"></span> Technology</h5>
        <div class="col-xs-6">
        	<a href="http://www.cnet.com"><img src="pictures/link-logos/cnet.png" width="50px" height="50px"></a>
            <a href="http://www.pcmag.com"><img src="pictures/link-logos/pcmag.png" width="50px" height="50px"></a>
        </div>
        <div class="col-xs-6">
        	<a href="http://www.ign.com"><img src="pictures/link-logos/ign.png" width="50px" height="50px"></a>
            <a href="http://www.macworld.com"><img src="pictures/link-logos/macworld.png" width="50px" height="50px"></a>
        </div>        
    </div>

</div>

<div class="row visible-xs padding-right-10px text-center padding-top-20px">
	<div class="col-xs-4 frame-with-padding">
    	<h5><span class="glyphicon glyphicon-sunglasses"></span> Entertainment</h5>
        <div class="col-xs-6">
        	<a href="http://www.elitedaily.com"><img src="pictures/link-logos/elitedaily.png" width="50px" height="50px"></a>
            <a href="http://www.thechive.com"><img src="pictures/link-logos/thechive.png" width="50px" height="50px"></a>
        </div>
        <div class="col-xs-6">
        	<a href="http://www.buzzfeed.com"><img src="pictures/link-logos/buzzfeed.png" width="50px" height="50px"></a>
            <a href="http://www.askmen.com"><img src="pictures/link-logos/askmen.png" width="50px" height="50px"></a>
        </div>        
    </div>
	<div class="col-xs-4 frame-with-padding">
    	<h5><span class="glyphicon glyphicon-cutlery"></span> <span class=" glyphicon glyphicon-cd"></span> Food / Music</h5>
        <div class="col-xs-6">
        	<a href="http://allrecipes.com"><img src="pictures/link-logos/all_recipes.png" width="50px" height="50px"></a>
            <a href="http://allmusic.com"><img src="pictures/link-logos/allmusic.png" width="50px" height="50px"></a>
        </div>
        <div class="col-xs-6">
        	<a href="http://www.foodnetwork.com"><img src="pictures/link-logos/foodnetwork.png" width="50px" height="50px"></a>
            <a href="https://www.stubhub.com"><img src="pictures/link-logos/stubhub.png" width="50px" height="50px"></a>
        </div>        
    </div>
	<div class="col-xs-4 frame-with-padding">
    	<h5><span class="glyphicon glyphicon-signal"></span> Finance</h5>
        <div class="col-xs-6">
        	<a href="http://www.msn.com/en-us/money"><img src="pictures/link-logos/msn-money.png" width="50px" height="50px"></a>
        	<a href="http://www.finviz.com"><img src="pictures/link-logos/finviz.png" width="50px" height="50px"></a>
        </div>
        <div class="col-xs-6">
            <a href="https://finance.yahoo.com/"><img src="pictures/link-logos/yahoo_finance.png" width="50px" height="50px"></a>
            <a href="http://stockcharts.com/h-sc/ui?s=%24SPX&p=D&yr=1&mn=0&dy=0&id=p16446588845"><img src="pictures/link-logos/stock_charts.png" width="50px" height="50px"></a>
        </div>        
    </div>

</div>


<div class="row">    
	 <div class="col-xs-12 visible-xs padding-top-20px">
      <div class="dropup">      
       <button class="btn btn-lg btn-block btn-success dropdown-toggle" type="button" id="news" data-toggle="dropdown" data-trigger="hover" aria-haspopup="true" aria-expanded="true">
        <span class="glyphicon glyphicon-list-alt"></span> News
       </button>
				<ul class="dropdown-menu dropdown-menu-large row navbar-inverse">
					<li class="col-xs-6">
						<ul>
							<li class="dropdown-header"><span class="h4 text-warning strong">National News</span></li>
							<li><a href="http://www.cnn.com">CNN</a></li>
							<li><a href="http://www.nbcnews.com/">NBC</a></li>
							<li><a href="http://www.foxnews.com">FOX</a></li>
                            <li><a href="http://www.usatoday.com">USA Today</a></li>
                            <li><a href="http://www.npr.org">NPR</a></li>                            
							<li class="divider"></li>
							<li class="dropdown-header"><span class="h4 text-warning strong">Global News</span></li>
							<li><a href="http://www.bbc.com/news/world">BBC World</a></li>
							<li><a href="http://www.cnn.com/world">CNN World</a></li>
                            <li class="divider"></li>
							<li class="dropdown-header"><span class="h4 text-warning strong">Financial News</span></li>
							<li><a href="http://reuters.com/news">Reuters</a></li>
							<li><a href="http://www.marketwatch.com">MarketWatch</a></li>
                            <li><a href="http://www.thestreet.com">The Street</a></li>
						</ul>
					</li>
					<li class="col-xs-6">
						<ul>
							<li class="dropdown-header"><span class="h4 text-warning strong">Newspapers</span></li>
							<li><a href="http://www.nytimes.com">New York Times</a></li>
							<li><a href="http://www.latimes.com">L.A. Times</a></li>
							<li><a href="https://www.washingtonpost.com">Washington Post</a></li>
							<li><a href="http://www.wsj.com">Wall Street Journal</a></li>							
							<li class="divider"></li>
							<li class="dropdown-header"><span class="h4 text-warning strong">Political</span></li>
							<li><a href="http://www.huffingtonpost.com">HuffPost</a></li>
                            <li><a href="http://www.drudgereport.com">Drudge Report</a></li>
                            <li><a href="http://www.theblaze.com">Blaze</a></li>
                            <li><a href="http://www.breitbart.com">Breitbart</a></li>
                            <li><a href="http://www.truthout.com">Truth Out</a></li>
                            <li class="divider"></li>
							<li class="dropdown-header"><span class="h4 text-warning strong">Miscellaneous</span></li>
							<li><a href="http://www.reddit.com">Reddit</a></li>
						</ul>
					</li>
				</ul>
            
   </div>
 </div>
 
	 <div class="col-xs-12 visible-xs padding-top-20px">
      <div class="dropup">      
       <button class="btn btn-lg btn-block btn-danger dropdown-toggle" type="button" id="news" data-toggle="dropdown" data-trigger="hover" aria-haspopup="true" aria-expanded="true">
        <span class="glyphicon glyphicon-bullhorn"></span> Sports
       </button>
				<div class="dropdown-menu dropdown-menu-right dropdown-menu-large row navbar-inverse">
                    <div class="col-xs-12 frame-with-padding text-center">
                        <h5>Sports</h5>
                        <div class="col-xs-3">
                            <a href="http://espn.go.com/"><img src="pictures/link-logos/espn.png" width="50px" height="50px"></a>
                        </div>
                        <div class="col-xs-3">                        
                            <a href="http://www.cbssports.com"><img src="pictures/link-logos/cbs_sports.png" width="50px" height="50px"></a>
                        </div>
                        <div class="col-xs-3">
                            <a href="http://sports.yahoo.com"><img src="pictures/link-logos/yahoo_sports.png" width="50px" height="50px"></a>
                        </div>
                        <div class="col-xs-3">
                            <a href="http://www.foxsports.com"><img src="pictures/link-logos/fox_sports.png" width="50px" height="50px"></a>
                        </div>        
                    </div>
				</div>
       
	  </div>
     </div>

</div>
    
    
  <!-- Best of END -->
  
  <div class="row hidden-xs padding-top-30px">
	<div class="col-lg-3 col-md-3 col-sm-3 text-left">
    	<div id="streaming">
    	<span style="font-size:1.5em;" class="glyphicon glyphicon-music"></span> <span style="font-size:1.5em;" class='glyphicon glyphicon-facetime-video'></span> <a href="#" data-content="<span class='glyphicon glyphicon-facetime-video'></span> Watch: <a href='http://netflix.com'>Netflix</a> | <a href='http://www.hulu.com'>Hulu</a> | <a href='http://www.amazon.com/Prime-Video/b?ie=UTF8&node=2676882011&tag=besth0f-20' target='_blank'>Amazon Video</a><img src='http://www.assoc-amazon.com/e/ir?t=besth0f-20&l=ur2&o=1' width='1' height='1' border='0' alt='' style='border:none !important; margin:0px !important;' /><br><span class='glyphicon glyphicon-music'></span> Listen: <a href='http://www.pandora.com'>Pandora</a> | <a href='http://spotify.com'>Spotify</a>" data-placement="right" data-delay-show="1"> Stream Music/Video</a>
        </div>        
        <div id="banking">
            <span style="font-size:1.5em;" class="glyphicon glyphicon-usd"></span> <a href="#" data-title="Banks & Financials" data-content="<strong>Banking</strong>: <a href='http://www.chase.com'>Chase</a> | <a href='http://www.wellsfargo.com'>Wells</a> | <a href='http://www.usbank.com'>USBank</a> | <a href='http://www.bankofamerica.com'>BofA</a> | <a href='https://online.citi.com/US/JPS/portal/Index.do'>Citi</a> | <a href='https://www.usaa.com'>USAA</a><br><strong>Pay/Transfer</strong>: <a href='https://www.paypal.com'>Paypal</a> | <a href='https://venmo.com/'>Venmo</a><br><strong>Brokerages</strong>: <a href='https://www.schwab.com/public/schwab/client_home'>Schwab</a> | <a href='https://www.fidelity.com'>Fidelity</a> | <a href='https://www.scottrade.com'>ScotTrade</a> | <a href='https://www.tdameritrade.com'>TD/Ameritrade</a> | <a href='https://investor.vanguard.com/home/'>Vanguard</a>" data-placement="right" data-delay-show="1">Banking/Finance</a>
        </div>  
    </div>
    
    <div class="col-lg-6 col-md-6 col-sm-6">

    	<div class="box-with-shadow">
              <span class="label label-primary"><span class="glyphicon glyphicon-list-alt"></span> - NEWS -</span><br>
        			<div class="padding-top-10px">
                    	<a href="http://www.cnn.com/">CNN</a> | <a href="http://www.nbcnews.com">NBC</a> | <a href="http://abcnews.go.com/">ABC</a> | <a href="http://foxnews.com">FOX</a> | <a href="http://www.usatoday.com">USA Today</a> | <a href="http://www.npr.org">NPR</a> | <a href="http://reuters.com/news">Reuters</a>
                    </div>                    
                    
                    <div>
                    	<a href="http://www.latimes.com/">LA</a>/<a href="http://www.nytimes.com/">NY Times</a> | <a href="https://www.washingtonpost.com/">Washington Post</a> | <a href="http://www.wsj.com/">WSJ</a> | <a href="http://huffingtonpost.com">HuffPost</a>
                    </div>
                    
              		<div>
                    	<a href="http://reddit.com">Reddit</a> | <a href="http://www.drudgereport.com/">DrudgeReport</a> | <a href="http://www.breitbart.com/">Breitbart</a> | <a href="http://www.theblaze.com/">Blaze</a> | <a href="https://www.propublica.org/">ProPublica</a>
                    </div>
                    <hr>
                    <span class="glyphicon glyphicon-globe"></span> Global: <a href="http://www.bbc.com/news/world">BBC World</a> | <a href="http://www.cnn.com/world">CNN World</a>
                   
        </div><!-- /box -->
       </div><!-- /col-xx-6 --> 
    
    
	<div class="col-lg-3 col-md-3 col-sm-3 text-right">
    
        <div id="timer">
            <a href="#" data-title="Timer" data-content="Minutes: <a href='https://www.google.com/search?as_q=5+minute+timer&gws_rd=ssl' target='_blank'>5</a> | <a href='https://www.google.com/search?as_q=5+minute+timer&gws_rd=ssl#q=10+minute+timer' target='_blank'>10</a> | <a href='https://www.google.com/search?as_q=5+minute+timer&gws_rd=ssl#q=15+minute+timer' target='_blank'>15</a> | <a href='https://www.google.com/search?as_q=5+minute+timer&gws_rd=ssl#q=30+minute+timer' target='_blank'>30</a> | <a href='https://www.google.com/search?as_q=5+minute+timer&gws_rd=ssl#q=60+minute+timer' target='_blank'>60</a>" data-placement="left">Quick Timer</a> <span style="font-size:1.5em;" class="glyphicon glyphicon-time padding-left-3px"></span> 
        </div>   
        <a href="https://bitly.com/">BitLy</a> <span style="font-size:1.2em;" class="glyphicon glyphicon-link padding-left-3px"></span>		
 <!--   <div id="makeadifference">
        	<a href="#" data-title="Make a Difference:" data-content="<span class='glyphicon glyphicon-tree-deciduous text-success'></span> Help the Environment: <a href='https://www.catalogchoice.org'>Cut down on paper junk mail!</a><br><span class='glyphicon glyphicon-globe text-success'></span> Give back: <a href='http://www.charitynavigator.org/'>Find a charity</a>" data-placement="left" data-delay-show="1"><span style="font-size:1.5em;" class='glyphicon glyphicon-leaf text-success'></span></a>      
        </div>   -->
    </div>
</div><!-- /row -->

   <div class="row padding-top-10px"></div>
	<!-- NEWS (non-mobile)-->    
   


    <!-- Justin's Network -->
<div class="row text-center">
	<div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3">
		<h5><small>:: BestHomepageEver ::<br><a href="news/" title="News and Updates">News and Updates</a> | <a href="faq/" title="Questions and Answers">Questions and Help</a> | <a href="tips/" title="Tips and Tricks">Tips/Tricks</a><br><a href="about/" title="About the Homepage">About BHE</a> | <a href="privacy.php">Your Privacy</a> | <a href="http://justincarver.com">Justin Carver</a></small></h5>
    </div>
</div>
	
    <!-- Footer Row -->
<div class="row hidden-xs">
    <div class="col-lg-6 col-md-6 col-sm-6 text-left">
	<!--	<a href="http://www.thetoptens.com/best-homepages/" class="btn btn-xs btn-success"><span class="glyphicon glyphicon-edit"></span> Vote for BHE</a><br>
        <small>Vote up to once per week!</small>           -->
	</div>
    <div class="col-lg-6 col-md-6 col-sm-6 text-right">
        <br><a href="http://justincarver.com"><img src="Logo/jc.png" border="0" alt="signature" title="Website by: Justin Carver, San Diego, USA. Question/Comments? Write me at: JustinCarver@hotmail.com. Please share this site with others." width="27" height="14"></a>
    </div>
</div>        	
    
     <?php require("modals/sethomepage.php"); ?>      	
<!-- Background Selection -->
								
<div class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="bgselect" aria-hidden="true" id="bgselect">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h3><span class="glyphicon glyphicon-cog"></span> Settings / Preferences</h3>
                    </div><!-- /modal-header -->
                    <div class="modal-body">
						<ul class="nav nav-tabs" role="tablist">						
                            <li role="presentation" class="active"><a href="#bgtab" aria-controls="home" role="tab" data-toggle="tab" class="text-success">Backgrounds</a></li>
                            <li role="presentation"><a href="#fonts" aria-controls="fonts" role="tab" data-toggle="tab" class="text-success">Fonts</a></li>	
                            <li role="presentation"><a href="#links" aria-controls="links" role="tab" data-toggle="tab" class="text-success">Links</a></li>							
						</ul>
   						<div class="tab-content text-info">
                            <div role="tabpanel" class="tab-pane active" id="bgtab">
                            
                             <ol>
                             	<li><h3>Automatic:</h3>
                                    <div class="row margin-top">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-left" style="width:100%;">
                                            <button type="button" class="btn btn-info" onclick="javascript:randomBg();"><span class="glyphicon glyphicon-repeat"></span> Cycle Automatically</button>											
                                        </div>
                                    </div>
                                </li>                                
                                <li class="margin-top"><h3>Custom:</h3>
									<div id="selA" class="selBox" style="display:inline-block;padding-right:12px;">
										<label for="bg_solid" class="radio-inline">Solid</label>
										<input checked type="radio" name="bg_texture" value="bg_solid" id="bg_solid" onclick="javascript:showA();" />
									</div>
									<div id="selB" class="" style="display:inline-block;padding-right:12px;">
										<label for="bg_textured" class="radio-inline">Grain</label>
										<input type="radio" name="bg_texture" value="bg_textured" id="bg_textured" onclick="javascript:showB();" />
									</div>
									<div id="selC" class="" style="display:inline-block;padding-right:12px;">
										<label for="bg_hatch" class="radio-inline">Hatch</label>
										<input type="radio" name="bg_texture" value="bg_hatch" id="bg_hatch" onclick="javascript:showC();" />
									</div>
								<div id="pics_a">
                            	<div class="row bottomspace margin-top text-center">
                                	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                     <a href="#" id="b_01" onclick="javascript:bgChange('01','a');"><img src="pictures/background_selection/01a.png" width="50" height="50"></a><br>
                                     <small>Brick</small>
                                    </div>
                                	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                     <a href="#" id="b_02" onclick="javascript:bgChange('02','a');"><img src="pictures/background_selection/02a.png" width="50" height="50"></a><br>
                                     <small>Chestnut</small>
                                    </div>
                                	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                     <a href="#" id="b_03" onclick="javascript:bgChange('03','a');"><img src="pictures/background_selection/03a.png" width="50" height="50"></a><br>
                                    <small>Rose</small>
                                    </div>                                    
                                	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                     <a href="#" id="b_04" onclick="javascript:bgChange('04','a');"><img src="pictures/background_selection/04a.png" width="50" height="50"></a><br>
                                    <small>Cherry</small>
                                    </div>
                                </div>
                            	<div class="row bottomspace text-center">
                                	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                     <a href="#" id="b_05" onclick="javascript:bgChange('05','a');"><img src="pictures/background_selection/05a.png" width="50" height="50"></a><br>
                                     <small>Forest</small>
                                    </div>
                                	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                     <a href="#" id="b_06" onclick="javascript:bgChange('06','a');"><img src="pictures/background_selection/06a.png" width="50" height="50"></a><br>
                                    <small>Ocean</small>
                                    </div>
                                	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                     <a href="#" id="b_07" onclick="javascript:bgChange('07','a');"><img src="pictures/background_selection/07a.png" width="50" height="50"></a><br>
                                    <small>Midnight</small>
                                    </div>
                                	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                     <a href="#" id="b_08" onclick="javascript:bgChange('08','a');"><img src="pictures/background_selection/08a.png" width="50" height="50"></a><br>
                                    <small>Petunia</small>
                                    </div>
                                </div> 
                            	<div class="row bottomspace text-center">
                                	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                     <a href="#" id="b_09" onclick="javascript:bgChange('09','a');"><img src="pictures/background_selection/09a.png" width="50" height="50"></a><br>
                                    <small>Peas</small>
                                    </div>
                                	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">

                                     <a href="#" id="b_10" onclick="javascript:bgChange('10','a');"><img src="pictures/background_selection/10a.png" width="50" height="50"></a><br>
                                    <small>Deep Ocean</small>
                                    </div>
                                	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                     <a href="#" id="b_11" onclick="javascript:bgChange('11','a');"><img src="pictures/background_selection/11a.png" width="50" height="50"></a><br>
                                    <small>Charcoal</small>
                                    </div>
                                	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                     <a href="#" id="b_12" onclick="javascript:bgChange('12','a');"><img src="pictures/background_selection/12a.png" width="50" height="50"></a><br>
                                    <small>Lava</small>
                                    </div>
                                </div>
                            	<div class="row bottomspace text-center">
                                	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                     <a href="#" id="b_13" onclick="javascript:bgChange('13','a');"><img src="pictures/background_selection/13a.png" width="50" height="50"></a><br>
                                    <small>Coral</small>
                                    </div>
                                	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                     <a href="#" id="b_14" onclick="javascript:bgChange('14','a');"><img src="pictures/background_selection/14a.png" width="50" height="50"></a><br>
                                    <small>Pine</small>
                                    </div>
                                	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                     <a href="#" id="b_15" onclick="javascript:bgChange('15','a');"><img src="pictures/background_selection/15a.png" width="50" height="50"></a><br>
                                    <small>Plumb</small>
                                    </div>
                                	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                     <a href="#" id="b_16" onclick="javascript:bgChange('16','a');"><img src="pictures/background_selection/16a.png" width="50" height="50"></a><br>
                                    <small>Eggplant</small>
                                    </div>
                                </div>
								</div>
								
								<div id="pics_b" style="display:none;">
                            	<div class="row bottomspace margin-top text-center">
                                	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                     <a href="#" id="b_01" onclick="javascript:bgChange('01','b');"><img src="pictures/background_selection/01b.png" width="50" height="50"></a><br>
                                     <small>Brick</small>
                                    </div>
                                	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                     <a href="#" id="b_02" onclick="javascript:bgChange('02','b');"><img src="pictures/background_selection/02b.png" width="50" height="50"></a><br>
                                     <small>Chestnut</small>
                                    </div>
                                	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                     <a href="#" id="b_03" onclick="javascript:bgChange('03','b');"><img src="pictures/background_selection/03b.png" width="50" height="50"></a><br>
                                    <small>Rose</small>
                                    </div>                                    
                                	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                     <a href="#" id="b_04" onclick="javascript:bgChange('04','b');"><img src="pictures/background_selection/04b.png" width="50" height="50"></a><br>
                                    <small>Cherry</small>
                                    </div>
                                </div>
                            	<div class="row bottomspace text-center">
                                	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                     <a href="#" id="b_05" onclick="javascript:bgChange('05','b');"><img src="pictures/background_selection/05b.png" width="50" height="50"></a><br>
                                     <small>Forest</small>

                                    </div>
                                	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                     <a href="#" id="b_06" onclick="javascript:bgChange('06','b');"><img src="pictures/background_selection/06b.png" width="50" height="50"></a><br>
                                    <small>Ocean</small>
                                    </div>
                                	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                     <a href="#" id="b_07" onclick="javascript:bgChange('07','b');"><img src="pictures/background_selection/07b.png" width="50" height="50"></a><br>
                                    <small>Midnight</small>
                                    </div>
                                	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                     <a href="#" id="b_08" onclick="javascript:bgChange('08','b');"><img src="pictures/background_selection/08b.png" width="50" height="50"></a><br>
                                    <small>Petunia</small>
                                    </div>
                                </div> 
                            	<div class="row bottomspace text-center">
                                	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                     <a href="#" id="b_09" onclick="javascript:bgChange('09','b');"><img src="pictures/background_selection/09b.png" width="50" height="50"></a><br>
                                    <small>Peas</small>
                                    </div>
                                	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                     <a href="#" id="b_10" onclick="javascript:bgChange('10','b');"><img src="pictures/background_selection/10b.png" width="50" height="50"></a><br>
                                    <small>Deep Ocean</small>
                                    </div>
                                	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                     <a href="#" id="b_11" onclick="javascript:bgChange('11','b');"><img src="pictures/background_selection/11b.png" width="50" height="50"></a><br>
                                    <small>Charcoal</small>
                                    </div>
                                	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                     <a href="#" id="b_12" onclick="javascript:bgChange('12','b');"><img src="pictures/background_selection/12b.png" width="50" height="50"></a><br>
                                    <small>Lava</small>
                                    </div>
                                </div>
                            	<div class="row bottomspace text-center">
                                	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                     <a href="#" id="b_13" onclick="javascript:bgChange('13','b');"><img src="pictures/background_selection/13b.png" width="50" height="50"></a><br>
                                    <small>Coral</small>
                                    </div>
                                	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                     <a href="#" id="b_14" onclick="javascript:bgChange('14','b');"><img src="pictures/background_selection/14b.png" width="50" height="50"></a><br>
                                    <small>Pine</small>
                                    </div>
                                	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                     <a href="#" id="b_15" onclick="javascript:bgChange('15','b');"><img src="pictures/background_selection/15b.png" width="50" height="50"></a><br>
                                    <small>Plumb</small>
                                    </div>
                                	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                     <a href="#" id="b_16" onclick="javascript:bgChange('16','b');"><img src="pictures/background_selection/16b.png" width="50" height="50"></a><br>
                                    <small>Eggplant</small>
                                    </div>
                                </div>
								</div>
								<div id="pics_c" style="display:none;">
                            	<div class="row bottomspace margin-top text-center">
                                	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                     <a href="#" id="c_01" onclick="javascript:bgChange('01','c');"><img src="pictures/background_selection/01c.png" width="50" height="50"></a><br>
                                     <small>Brick</small>
                                    </div>
                                	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                     <a href="#" id="c_02" onclick="javascript:bgChange('02','c');"><img src="pictures/background_selection/02c.png" width="50" height="50"></a><br>
                                     <small>Chestnut</small>
                                    </div>
                                	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                     <a href="#" id="c_03" onclick="javascript:bgChange('03','c');"><img src="pictures/background_selection/03c.png" width="50" height="50"></a><br>
                                    <small>Rose</small>
                                    </div>                                    
                                	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                     <a href="#" id="c_04" onclick="javascript:bgChange('04','c');"><img src="pictures/background_selection/04c.png" width="50" height="50"></a><br>
                                    <small>Cherry</small>
                                    </div>
                                </div>
                            	<div class="row bottomspace text-center">
                                	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                     <a href="#" id="c_05" onclick="javascript:bgChange('05','c');"><img src="pictures/background_selection/05c.png" width="50" height="50"></a><br>
                                     <small>Forest</small>
                                    </div>
                                	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                     <a href="#" id="c_06" onclick="javascript:bgChange('06','c');"><img src="pictures/background_selection/06c.png" width="50" height="50"></a><br>
                                    <small>Ocean</small>
                                    </div>
                                	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                     <a href="#" id="c_07" onclick="javascript:bgChange('07','c');"><img src="pictures/background_selection/07c.png" width="50" height="50"></a><br>
                                    <small>Midnight</small>
                                    </div>
                                	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                     <a href="#" id="c_08" onclick="javascript:bgChange('08','c');"><img src="pictures/background_selection/08c.png" width="50" height="50"></a><br>
                                    <small>Petunia</small>
                                    </div>
                                </div> 
                            	<div class="row bottomspace text-center">
                                	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                     <a href="#" id="c_09" onclick="javascript:bgChange('09','c');"><img src="pictures/background_selection/09c.png" width="50" height="50"></a><br>
                                    <small>Peas</small>
                                    </div>
                                	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                     <a href="#" id="c_10" onclick="javascript:bgChange('10','c');"><img src="pictures/background_selection/10c.png" width="50" height="50"></a><br>
                                    <small>Deep Ocean</small>
                                    </div>
                                	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                     <a href="#" id="c_11" onclick="javascript:bgChange('11','c');"><img src="pictures/background_selection/11c.png" width="50" height="50"></a><br>

                                    <small>Charcoal</small>
                                    </div>
                                	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                     <a href="#" id="c_12" onclick="javascript:bgChange('12','c');"><img src="pictures/background_selection/12c.png" width="50" height="50"></a><br>
                                    <small>Lava</small>
                                    </div>
                                </div>
                            	<div class="row bottomspace text-center">
                                	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                     <a href="#" id="c_13" onclick="javascript:bgChange('13','c');"><img src="pictures/background_selection/13c.png" width="50" height="50"></a><br>
                                    <small>Coral</small>
                                    </div>
                                	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                     <a href="#" id="c_14" onclick="javascript:bgChange('14','c');"><img src="pictures/background_selection/14c.png" width="50" height="50"></a><br>
                                    <small>Pine</small>
                                    </div>
                                	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                     <a href="#" id="c_15" onclick="javascript:bgChange('15','c');"><img src="pictures/background_selection/15c.png" width="50" height="50"></a><br>
                                    <small>Plumb</small>
                                    </div>
                                	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                     <a href="#" id="c_16" onclick="javascript:bgChange('16','c');"><img src="pictures/background_selection/16c.png" width="50" height="50"></a><br>
                                    <small>Eggplant</small>
                                    </div>
                                </div>
								</div>
								
                                </li>                             
                             </ol>
                                <hr>                                                                
                                <h3 class="text-left text-primary">Preview</h3>                                                                                             
                                <div id="bg_preview" class="frame-with-padding text-center">
                                	<img src="Logo/best-homepage-ever-logo2.png" width="400" height="65">
                                </div> 
                                <p class="text-center text-muted small margin-top">*Cookies must be enabled/allowed to save correctly.</p> 
                 
                                
							</div>
                            <div role="tabpanel" class="tab-pane" id="fonts">
                            	<h3>Choose your preferred font:</h3>
                                 <ol>
									<?php
										$x=0;
										foreach($FONT as $num=>$var){
											$checked='';
											if(isset($_COOKIE['fontStyle'])){
												if($_COOKIE['fontStyle']==$var['value'])$checked='checked';
											}
											echo '
                                    <li>
                                        <div class="radio" style="font-family:'.$var['value'].' !important;">

                                          <label style="font-family:'.$var['value'].' !important;"><input '.$checked.' type="radio" name="optionsRadios" id="optionsRadios'.$x.'" value="'.$var['value'].'" onclick="$(\'#efont\').css(\'font-family\',\''.$var['value'].'\');">
                                            '.$var['name'].'
                                          </label>
                                        </div>
                                    </li>
											';
											$x++;
										}
									
									?>
                                 </ol>
                                 <div class="padding-top-10px">
                                 </div>
                                <h3 class=" text-primary">Preview</h3>                                                                                             
                                <div id="" class="frame-with-padding" >
                                	
                                        <p class="text-primary" id="efont" style="font-size:26px;">Best sample text ever.</p>
                                    
                                </div> 
                                <p class="text-center text-muted small margin-top">*Cookies must be enabled/allowed to save correctly.</p>
                            </div>					
                            <div role="tabpanel" class="tab-pane" id="links">
                            	<h3>When selecting a website, open the webpage in:</h3>
                                    <div class="text-center padding-top-10px">
                                        <label class="radio-inline">                            	
                                          <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="same" <?php if(isset($_COOKIE['tab'])){if($_COOKIE['tab']=='same'){echo 'checked';}}else{echo 'checked';} ?>> Current Window
                                        </label>
                                        <label class="radio-inline">
                                          <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="blank" <?php if(isset($_COOKIE['tab'])){if($_COOKIE['tab']=='blank'){echo 'checked';}} ?>> New Window/Tab  
                                        </label>
                                         <div id="linkchoice" class="padding-top-10px"><a href="#" data-content="<p><strong>Current window</strong>: Best for minimal number of browser windows/tabs.<br>When using this option, it's ideal to have a home button (<span class='glyphicon glyphicon-home'></span>) or link on bookmarks bar for quick return to homepage.</p><p><strong>New Window/Tab</strong>: Keeps homepage always open in one tab.<br>This is better if you prefer having one tab be your portal for launching all your favorite websites.</p>Give both a try, you can always change this setting back!" data-placement="bottom" data-delay-show="1"><small>Help me choose</small></a>
                               			 </div>

                                    </div>
                                    
                            	<h3 class="imagesaslink">Display links as:</h3>
                                    <div class="imagesaslink text-center padding-top-10px">
                                        <label class="radio-inline">
                                          <input type="radio" name="tiChoice" id="tiText" value="text" <?php if(isset($_COOKIE['ti'])){if($_COOKIE['ti']=='text'){echo 'checked';}}else{echo 'checked';} ?>> Classic (text) 
                                        </label>
                                        <label class="radio-inline">
                                          <input type="radio" name="tiChoice" id="tiImages" value="image" <?php if(isset($_COOKIE['ti'])){if($_COOKIE['ti']=='image'){echo 'checked';}} ?>> Images 
                                        </label>										
                                    </div>
                                    
                                    <p class="text-center text-muted small padding-top-20px">*Cookies must be enabled/allowed to save correctly.</p>                                                      
                                	
                            </div>					

  						</div><!-- /tab-content -->
					</div><!-- /modal-body -->
					
					<div class="modal-footer">
						 <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
       					 <button type="button" class="btn btn-primary" onClick="javascript:saveBg();">*Save changes</button>     	
					</div><!-- /modal-footer -->
				</div><!-- /modal-content -->
			</div><!-- /modal-dialog -->
		</div>
	<!-- /background selection -->
    

    
    <!-- Background Selection -->	
    <script>
		var num='01';
		var letter='a';
		window.onload = function() {
			document.getElementById("search_query").focus();
			<?php
		if(isset($_COOKIE['BG'])){
			echo "
			$('body').css('background-image', 'url(pictures/background_selection/".$_COOKIE['BG']."".$_COOKIE['BG_LETTER'].".png)');
			num = '".$_COOKIE['BG']."';
			letter = '".$_COOKIE['BG_LETTER']."';
			";
		} 
			?>
		};
		function Shuffle(o) {
			for(var j, x, i = o.length; i; j = parseInt(Math.random() * i), x = o[--i], o[i] = o[j], o[j] = x);
			return o;
		}
		function randomBg(){
			window.location="index.php?clearbg";
			/*
			var test = ['01','02','03','04','05','06','07','08','09','10','11','12','13','14','15','16'];
			Shuffle(test);
			$('#b_'+test[0]+''+letter+'').click();
			*/
		}
		function showA(){
			$('#selA').addClass('selBox');
			$('#selB').removeClass('selBox');
			$('#selC').removeClass('selBox');
			$('#pics_a').css('display', 'block');
			$('#pics_b').css('display', 'none');
			$('#pics_c').css('display', 'none');
		}
		function showB(){
			$('#selA').removeClass('selBox');
			$('#selB').addClass('selBox');
			$('#selC').removeClass('selBox');
			$('#pics_a').css('display', 'none');
			$('#pics_b').css('display', 'block');
			$('#pics_c').css('display', 'none');
		}
		function showC(){
			$('#selA').removeClass('selBox');
			$('#selB').removeClass('selBox');
			$('#selC').addClass('selBox');
			$('#pics_a').css('display', 'none');
			$('#pics_b').css('display', 'none');
			$('#pics_c').css('display', 'block');
		}
		function bgChange(val,val1){
			num = val;
			letter = val1;
			$('body').css('background-image', 'url(pictures/background_selection/'+num+''+letter+'.png)');
			$('#bg_preview').css('background-image', 'url(pictures/background_selection/'+num+''+letter+'.png)');	
		}
		function saveBg(){ 
			var fontStyle = $('input[name=optionsRadios]:checked').val();
			var tab = $('input[name=inlineRadioOptions]:checked').val();
			var ti = $('input[name=tiChoice]:checked').val();
			window.location='index.php?num='+num+'&letter='+letter+'&fontStyle='+fontStyle+'&tab='+tab+'&ti='+ti;
		}
		function showImages(){
			 $( ".bheClass" ).addClass( "none" );
			 $( ".bheClassImg" ).removeClass( "none" );
		}
		function showLinks(){
			 $( ".bheClass" ).removeClass( "none" );
			 $( ".bheClassImg" ).addClass( "none" );
		}
	</script>
    <!-- /Background Selection -->
    
    
    
    <!-- Popovers -->
 	<script src="https://cdn.jsdelivr.net/jquery.webui-popover/1.2.1/jquery.webui-popover.min.js"></script>
	<script>
		$('#email a').webuiPopover({	
		trigger:'hover',
		style:'inverse',
		animation:'pop',
		});
	</script>
	<script>
		$('#timer a').webuiPopover({	
		trigger:'hover',
		style:'inverse',
		animation:'pop',
		});
	</script>
   	<script>
		$('#banking a').webuiPopover({	
		trigger:'hover',

		style:'inverse',
		animation:'pop',
		});
	</script>
    <script>
		$('#streaming a').webuiPopover({	
		trigger:'hover',		
		style:'inverse',
		animation:'pop',
		});
	</script>
    <script>
		$('#linkchoice a').webuiPopover({	
		trigger:'hover',		
		style:'inverse',
		animation:'pop',
		});
	</script>
    <script>
		$('#ticketwindow a').webuiPopover({	
		trigger:'hover',		
		style:'inverse',
		animation:'pop',
		});
	</script>
    <script>
		$('#expand_finance a').webuiPopover({	
		trigger:'hover',		
		style:'inverse',
		animation:'pop',
		});
	</script>
    <script>
		$('#savelinkhelp a').webuiPopover({	
		trigger:'hover',		
		style:'inverse',
		animation:'pop',
		});
	</script>
<!--<script>
		$('#newtab a').webuiPopover({	
		trigger:'hover',		
		style:'inverse',
		animation:'pop',
		});
	</script> -->
<!--<script>
		$('#makeadifference a').webuiPopover({	
		trigger:'hover',		
		style:'inverse',
		animation:'pop',
		color:'#E74C3C',
		});
	</script> -->
    
	<!-- dropdowns -->
    <script>
		$(document).ready(function(){
		$('[data-toggle="popover"]').popover({
		placement : 'bottom',
		html: 'true',
		trigger: 'focus',		
		});

            $('#toggle-button').change(function() {
                if($(this).prop('checked') == false) {
                    showImages();
                }
                else {
                    showLinks();
                }
            })
		});
	</script>



    <!-- Search Script -->
    <script src="js/searchbar-v1.2.min.js"></script> 
    
    <!-- Addthis Script -->   	
<!--	<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5746023de419d5f9"></script> -->
    <script>
//		var addthis_share = { email_template: "default_template" }
		
		<?php
			if(isset($_COOKIE['tab'])){
				if($_COOKIE['tab']=='blank'){
					echo "$('a[href^=\"http://\"]').attr('target','_blank');";
				} else {
					echo "$('a[href^=\"http://\"]').attr('target','_self');";
				}
			}
			if(isset($_COOKIE['tab'])){
				if($_COOKIE['tab']=='blank'){
					echo "$('a[href^=\"https://\"]').attr('target','_blank');";
				} else {
					echo "$('a[href^=\"https://\"]').attr('target','_self');";
				}
			}
		?>
	</script>
</body>    
       

</html>

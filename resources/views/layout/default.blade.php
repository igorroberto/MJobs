<!DOCTYPE html>
<html >
<!--<![endif]-->
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<title>Mjobs</title>
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-46063522-3', 'auto');
    ga('send', 'pageview');

  </script>
		<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
<link rel="stylesheet" id="nunito-font-css" href="http://fonts.googleapis.com/css?family=Nunito%3A400%2C300%2C700&amp;ver=4.3.9" type="text/css" media="all">
<link rel="stylesheet" id="company-css" href="{!! asset("assets/stylesheets/company.css") !!}" type="text/css" media="screen">
<link rel="stylesheet" id="animate-css" href="{!! asset("assets/stylesheets/animate.css?ver=3.2.0") !!}" type="text/css" media="screen">
<link rel="stylesheet" id="bootstrap-css" href="{!! asset("assets/stylesheets/bootstrap.min.css?ver=3.2.0") !!}" type="text/css" media="all">
<link rel="stylesheet" id="font-awesome-css" href="{!! asset("assets/stylesheets/font-awesome.min.css?ver=4.1.0") !!}" type="text/css" media="all">
<link rel="stylesheet" id="select-to-css" href="{!! asset("assets/stylesheets/jquery-ui-1.7.1.custom.css?ver=4.3.9") !!}" type="text/css" media="all">
<link rel="stylesheet" id="select-to-extras-css" href="{!! asset("assets/stylesheets/ui.slider.extras.css?ver=4.3.9") !!}" type="text/css" media="all">
<link rel="stylesheet" id="owl-carousel-css" href="{!! asset("assets/stylesheets/owl.carousel.css?ver=2.0") !!}" type="text/css" media="screen">
<link rel="stylesheet" id="owl-carousel-theme-css" href="{!! asset("assets/stylesheets/owl.theme.default.min.css?ver=2.0") !!}" type="text/css" media="screen">
<link rel="stylesheet" id="flexslider-css" href="{!! asset("assets/stylesheets/flexslider.css?ver=0.0.1") !!}" type="text/css" media="screen">
<link rel="stylesheet" id="shortcode-css" href="{!! asset("assets/stylesheets/shortcodes.css?ver=1.0") !!}" type="text/css" media="all">
<link rel="stylesheet" id="default-css" href="{!! asset("assets/stylesheets/style-theme.css") !!}" type="text/css" media="all">
<link rel="stylesheet" id="default-responsive-css" href="{!! asset("assets/stylesheets/style-responsive.css") !!}" type="text/css" media="all">
<link rel="stylesheet" id="selectize-css-css" href="{!! asset("assets/scripts/jquery.selectize.css?ver=all") !!}" type="text/css" media="all">
<script type="text/javascript" src="{!! asset("assets/scripts/jquery.js?ver=1.11.3") !!}"></script>
<style type="text/css">
:root #header + #content > #left > #rlblock_left
{ display: none !important; }</style>


<style type="text/css" id="application-status-color">
				.application-status_considering_55{
					background-color:#CCCCCC;
				}


				.application-status_emailed_54{
					background-color:#CCCCCC;
				}


				.application-status_open_56{
					background-color:#CCCCCC;
				}


				.application-status_under-review_52{
					background-color:#CCCCCC;
				}

			</style><style type="text/css" id="custom_css">.input-newstler{
    border-radius:0;
	background:#656565;
	border:none;
	height:40px;
	width:100%;
	padding:10px;
	color:#868686;
}
.btn-newstler{
    padding:7px 30px;
	background:#1abc9c;
	font-size:16px;
	border-radius:0;
	border:none;
	color:#0a6064;
	margin:0;
}
.media-footer{
    width:24px;
	height:24px;
	display:inline-block;
	line-height:25px;
	background-repeat:no-repeat;
	margin-right:5px;
	margin-top:28px;
	background:url(http://demo.puriwp.com/jobboard-static/images/icon-media-footer.png)0 0 no-repeat;
}
.footer-twitt{
	background-position:0 0;
}
.footer-twitt:hover{
	background-position:0 -26px;
}
.footer-fb{
	background-position:-30px 0;
}
.footer-fb:hover{
	background-position:-30px -26px;
}
.footer-linkedin{
	background-position:-58px 0;
}
.footer-linkedin:hover{
	background-position:-58px -26px;
}
.footer-yahoo{
	background-position:-92px 0;
	width:27px;
}
.footer-yahoo:hover{
	background-position:-92px -26px;
	width:27px;
}
.footer-blog{
	background-position:-133px 0;
}
.footer-blog:hover{
	background-position:-133px -26px;
}
.footer-rss{
	background-position:-167px 0;
}
.footer-rss:hover{
	background-position:-167px -26px;
}

#footer-text a{
 color:#818181;
 text-decoration:none;
}
#footer-text a:hover{
 color:#1abc9c;
 text-decoration:none;
}
</style>


<body >

	<div id="wrapper">
		<header id="header">
		@include('layout.header')

		</header><!-- /#header -->
<div class="contents"> @yield('content') </div>
  <footer> @include('layout.footer') </footer>

	<script src="{!! asset("assets/scripts/jquery.js") !!}"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="{!! asset("assets/scripts/bootstrap.min.js") !!}"></script>

  <script type="text/javascript" src="{!! asset("assets/scripts/bootstrap.min.js?ver=3.2.0") !!}"></script>
<script type="text/javascript" src="{!! asset("assets/scripts/jquery.select-to-ui-slider.js?ver=4.3.9") !!}"></script>
<script type="text/javascript" src="{!! asset("assets/scripts/retina.min.js?ver=1.3.0") !!}"></script>
<script type="text/javascript" src="{!! asset("assets/scripts/owl.carousel.min.js?ver=2.0") !!}"></script>
<script type="text/javascript" src="{!! asset("assets/scripts/jquery.flexslider-min.js?ver=2.5.0") !!}"></script>
<script type="text/javascript" src="{!! asset("assets/scripts/image-liquid.min.js?ver=0.9.944") !!}"></script>
<script type="text/javascript" src="{!! asset("assets/scripts/jquery.selectize.min.js?ver=0.12.1") !!}"></script>

<script type="text/javascript">
/* <![CDATA[ */
var home_slider = {"auto_play":"1","auto_play_timeout":"3000","animate_in":"fadeIn","animate_out":"fadeOut","flexslider_animation":"slide","flexslider_auto_slide":"1","flexslider_delay":"7000"};
var slider = {"init":"1","home_init":"1"};
/* ]]> */
</script>
<script type="text/javascript" src="{!! asset("assets/scripts/theme-script.js?ver=1.0") !!}"></script>
<script type="text/javascript" src="{!! asset("assets/scripts/advance-search.js?ver=1.0") !!}"></script>

	@yield('scripts')
</div>
</body>
</html>

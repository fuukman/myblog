<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Coffee Break a Blog Category Flat Bootstarp responsive Website Template | Home :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Coffee Break Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="{{ url('css/bootstrap.css')}}" rel='stylesheet' type='text/css' />
<link href="{{ url('css/style.css')}}" rel='stylesheet' type='text/css' />
<link href="{{ url('css/font-awesome.css')}}" rel='stylesheet' type='text/css' />
<script src="{{ url('js/jquery.min.js')}}"></script>
<script src="{{ url('adminpanel/assets/js/bootstrap.min.js')}}"></script>
<!---- start-smoth-scrolling---->
<script type="text/javascript" src="{{ url('js/move-top.js')}}"></script>
<script type="text/javascript" src="{{ url('js/easing.js')}}"></script>
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
<!--start-smoth-scrolling-->
</head>
<body>
	@include('layouts.header')
	<!--about-starts-->
<div class="about" style="
    background: #136a8a;  /* fallback for old browsers */
    background: -webkit-linear-gradient(to right, #267871, #136a8a);  /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to right, #267871, #136a8a); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
">
		<div class="container">
			<div class="about-main">
				<div class="col-md-8 about-left">
				@yield('content')
			</div>
				@include('layouts.side')		
		</div>
	</div>
	
	</div>
	<!--about-end-->
	<!--slide-starts-->
	
	<!--slide-end-->
	@include('layouts.footer')
	<script id="dsq-count-scr" src="//luqman-pe-hu.disqus.com/count.js" async></script>
	@yield('js')
</body>
</html>
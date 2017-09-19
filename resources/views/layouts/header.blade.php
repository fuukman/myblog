
	<div class="" style="
    background: #16a085;
">
		<div class="container">
			<div class="head-main">
				{{-- <a href="index.html"><img src="images/logo-1.png" alt="" /></a> --}}
			</div>
		</div>
	</div>
	<!--header-top-end-->
	<!--start-header-->
	<div class="header">
		<div class="container">
			<div class="head">
			<div class="navigation">
				 <span class="menu"></span> 
					<ul class="navig">
						@guest
						<li><a href="{{ url('/') }}"  class="active">Home</a></li> 
						 @else
						<li><a href="{{ url('/') }}"  class="active">Home</a></li> 
						<li><a href="{{ url('/panel/dashboard') }}"  class="active">Dashboard</a></li>
						<li><a href="{{ url('/panel/posted') }}"  class="active">Create Post</a></li>
						 @endguest
					</ul>
			</div>
			<div class="header-right">
				<div class="search-bar">
					<input type="text" value="Search"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
					<input type="submit" value="">
				</div>
				<ul>
					<li><a href="#"><span class="fb"> </span></a></li>
					<li><a href="#"><span class="twit"> </span></a></li>
					<li><a href="#"><span class="pin"> </span></a></li>
					<li><a href="#"><span class="rss"> </span></a></li>
					<li><a href="#"><span class="drbl"> </span></a></li>
				</ul>
			</div>
				<div class="clearfix"></div>
			</div>
			</div>
		</div>	

		
	<!-- script-for-menu -->
	<!-- script-for-menu -->
		<script>
			$("span.menu").click(function(){
				$(" ul.navig").slideToggle("slow" , function(){
				});
			});
		</script>
	<!-- script-for-menu -->
	<!--banner-starts-->
	<div class="banner" style="
    background: #16a085;
">
		{{-- <div class="container">
			<div class="banner-top">
				<div class="banner-text">
					<h2>Aliquam erat</h2>
					<h1>Suspendisse potenti</h1>
					<div class="banner-btn">
						<a href="single.html">Read More</a>
					</div>
				</div>
			</div>
		</div> --}}
	</div>
	<!--banner-end
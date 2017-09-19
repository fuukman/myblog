@extends('layouts.index')
@section('content')

					<div class="about-one">
						<h2>{{ str_replace("-"," ",$artikel->judul) }}</h2>
					</div>
					<div style="float: left; font-size: 12px;">
				<i class="fa fa-user"> {{ $artikel->name }} </i>
				<i class="fa fa-calendar"> {{ $artikel->created_at->format('d-M-Y') }} </i>
				<i class="fa fa-folder-open"> {{ $artikel->nama }} </i>
				</div>
				<div style="float: right;">
					penulis : luqman
				</div></br>
					<div class="about-two">
						<a href="single.html"><img src="{{ url('/images/'.$artikel->gambar) }}" alt="" /></a>
							
							{!! $artikel->konten !!}
						
						<ul>
							<li><p>Share : </p></li>
							<li><a href="#"><span class="fb"> </span></a></li>
							<li><a href="#"><span class="twit"> </span></a></li>
							<li><a href="#"><span class="pin"> </span></a></li>
							<li><a href="#"><span class="rss"> </span></a></li>
							<li><a href="#"><span class="drbl"> </span></a></li>
						</ul>
				<hr>
						<div id="disqus_thread"></div>
					</div>	
						
				
@stop

@section('js')
<script>

(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://luqman-pe-hu.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
@stop
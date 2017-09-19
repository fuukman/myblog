<div class="col-md-4 about-right heading" style="
    /* background: darkslategrey; */
    background: #42275a;  /* fallback for old browsers */
    background: -webkit-linear-gradient(to right, #734b6d, #42275a);  /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to right, #734b6d, #42275a); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    /* box-shadow: rgba(0,0,0,.1) 0 2px 5px; */
    /* background: #2C3E50; */  /* fallback for old browsers */
    background: -webkit-linear-gradient(to right, #FD746C, #2C3E50);  /* Chrome 10-25, Safari 5.1-6 */
    /* background: linear-gradient(to right, #FD746C, #2C3E50); */ /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
">
					
					<div class="abt-2">
						<h3>Ente Pasti juga suka</h3>
							@php
								$populer = App\Artikel::orderBy('viewer','desc')->limit(5)->get();
							@endphp
							@foreach($populer as $data)
							<div class="might-grid">
								<div class="grid-might">
									<a href="single.html"><img src="{{ url('/images/'.$data->gambar) }}" class="img-responsive" alt=""> </a>
								</div>
								<div class="might-top">
									<h4><a href="{{ url('/') .'/'. str_replace(" ","-",$data->judul) }}">{{ str_replace("-"," ",$data->judul) }}</a></h4>
								
								</div>
								<div class="clearfix"></div>
							</div>	
							@endforeach
														
					</div>
					<div class="abt-2">
						<h3>Tags</h3>
						<ul>
						@php
							$getTags = App\Tags::groupBy('tags')->get();
						@endphp
						@foreach($getTags as $data)
							<a href="{{ url('/tags/'. $data->tags) }}"><button class="btn btn-primary">{{ $data->tags }}</button></a>						
						@endforeach
							
						</ul>	
					</div>
					<div class="abt-2">
						<h3>Langganan Gan</h3>
						<div class="fa fa-newspaper-o news" aria-hidden="true">
							<form action="{{ route('langganan') }}" method="post">
							 {{ csrf_field() }}
								<input type="text" name="email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" />
								<input type="submit" value="Subscribe">
							</form>
						</div>
					</div>
				</div>
				<div class="clearfix"></div>			
			</div>
@extends('layouts.index')
@section('content')



					@foreach($artikel->take(1) as $key => $data)
						@if($key == 0)
					<div class="about-one">
						<h2 style="font-weight: 100px;">{{ str_replace("-"," ",$data->judul) }}</h2>
					</div></br>
				<div style="float: left; font-size: 12px;">
				<i class="fa fa-user"> {{ $data->name }} </i>
				<i class="fa fa-calendar"> {{ $data->created_at->format('d-M-Y') }} </i>
				<i class="fa fa-folder-open"> {{ $data->nama }} </i>
				</div>
				<div style="float: right;">
					penulis : luqman
				</div></br>
					<div class="about-two">
						<a href="{{ url('/') .'/'. str_replace(" ","-",$data->judul) }}"><img src="{{ url('/images/'.$data->gambar) }}" alt="" /></a>
						  
							@php
								$paragraf = explode("\r\n" , $data->konten)[0];
							@endphp

							{!! $paragraf !!}
							 
							 <div class="about-btn">
								<a href="{{ url('/') .'/'. str_replace(" ","-",$data->judul) }}">Read More</a>
							</div>
						
						<ul>
							<li><p>Share : </p></li>
							<li><a href="#"><span class="fb"> </span></a></li>
							<li><a href="#"><span class="twit"> </span></a></li>
							<li><a href="#"><span class="pin"> </span></a></li>
							<li><a href="#"><span class="rss"> </span></a></li>
							<li><a href="#"><span class="drbl"> </span></a></li>
						</ul>
					</div>
						@endif	
				@endforeach	
				
				{{-- more artikel --}}
		
					<div class="about-tre">
						<div class="a-1">
						
						@foreach($artikel as $key => $data)
						@if($key > 0)
							<div class="col-md-6 abt-left">
								<a href="{{ url('/') .'/'. str_replace(" ","-",$data->judul) }}"><img src="{{ url('/images/'.$data->gambar) }}" alt="" /></a>
								
								<h3><a href="{{ url('/') .'/'. str_replace(" ","-",$data->judul) }}">{{ str_replace("-"," ",$data->judul) }}</a></h3>
			
								@php
								$paragraf = explode("\r\n" , $data->konten)[0];
							@endphp

							{!! $paragraf !!}
							 
							 <div class="about-btn">
								<a href="{{ url('/') .'/'. str_replace(" ","-",$data->judul) }}">Read More</a>
							</div>
								
							</div>
						@endif
						@endforeach	
						
						</div>
					</div>	
					
					<div style="text-align: center;">
					{{ $artikel->links() }}
												
					</div>
			


				
				
@stop
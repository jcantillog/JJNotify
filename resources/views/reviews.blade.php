@extends('layouts.principal')
	@section('content')
	<div class="menu">
				<ul>
					<li><a href="/"><i class="home"></i></a></li>
					<li><a class="active" href="reviews"><div class="cat"><i class="watching"></i><i class="watching1"></i></div></a></li>
					<li><a href="contact"><div class="cnt"><i class="contact"></i><i class="contact1"></i></div></a></li>
				</ul>
			</div>
				<div class="review-content">
			<div class="top-header span_top">
				<div class="logo">
					<a href="/"><img src="images/logo.png" alt="" /></a>
					<p>JJNotify</p>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="reviews-section">
				<h3 class="head">Listado de películas</h3>
					<div class="col-md-9 reviews-grids">
					@foreach($movies as $movie)
						<div class="review">
							<div class="movie-pic">
								<img src="movies/{{$movie->path}}" alt="" />
							</div>
							<div class="review-info">
								<a class="span" href="#"><i>{{$movie->name}}</i></a>
								<p class="info">CAST:&nbsp; &nbsp;{{$movie->cast}}</p>
								<p class="info">DIRECTION: &nbsp;&nbsp;{{$movie->direction}}</p>
								<p class="info">GENRE:&nbsp;&nbsp;{{$movie->genre}}</p>
								<p class="info">DURATION:&nbsp;&nbsp;{{$movie->duration}}</p>
							</div>

							<div class="clearfix"></div>
						</div>
					@endforeach	
					</div>
					<div class="clearfix"></div>
			</div>
			</div>
		<div class="review-slider">
			 <ul id="flexiselDemo1">
			 @foreach($movies as $movie)
					<li><img src="movies/{{$movie->path}}" alt="" /></li>
			 @endforeach
			</ul>	
		</div>	
	@endsection
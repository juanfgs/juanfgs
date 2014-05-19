@extends('frontend')
@section('title', 'Home Page')


@section('frontend.slider')

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->


            <div class="carousel-inner">

	@foreach($slides as $slide)
        <div class="item {{ $slide->active ? 'active' : '' }}">


          <img src="/img/upload/1280x480/{{ $slide->photo }}" alt="First slide">
		<div class="carousel-caption">
			<h1><a  href="{{ action('PostsController@showPost', $slide->id) }}">{{ $slide->title}}</a></h1>
			<p>{{ $slide->excerpt() }}</p>

		</div>
        </div>
        @endforeach

        </div>


         <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
	<a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>

      </div>

      </div>

@stop

@section('frontend.content')

<div class="row">
	@if(!empty($featured_posts))
		@foreach ($featured_posts as $featured)
		<div class="col-sm-6 col-md-4">

			<img src="{{ $featured->photo }}" alt="{{$featured->title}}"/>
			<h4><a  href="{{ action('PostsController@showPost', $featured->id) }}">{{ $featured->title }}</a></h4>
			<p>
			{{ $featured->excerpt() }}
			</p>
			<a role="button" href="{{ action('PostsController@showPost', $featured->id) }}" class="btn btn-sm btn-primary">Read Me</a>

		</div>
		@endforeach
	@endif

</div>

<div class="row">
<div class="col-md-6 latest-posts">
<h2>Latest Posts</h2>
@foreach($latest as $post )

<div class="media ">
  <a class="pull-left" href="{{ action('PostsController@showPost', $post->id) }}">
    <img  class="thumbnail  media-object" src="{{ $post->photo }}" alt="...">
  </a>
  <div class="media-body ">
    <h4 class="media-heading"><a  href="{{ action('PostsController@showPost', $post->id) }}">{{ $post->title }}</a></h4>
    <p>{{ $post->excerpt() }}</p>
    <a role="button" href="{{ action('PostsController@showPost', $post->id) }}" class="btn btn-sm btn-primary">Read Me</a>
  </div>
</div>
@endforeach
</div>
</div>

@stop

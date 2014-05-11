@extends('frontend')
@section('title', 'Home Page')


@section('frontend.slider')

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
  
      
            <div class="carousel-inner">
        <div class="item active">
        
        
          <img src="/img/slide01.JPG" alt="First slide">
		<div class="carousel-caption">
			<h1>Welcome to my blog</h1>
			<p>I'm a web developer from Argentina, if you wanna know more about me just click on the button below</p>
			<p><a role="button" href="/about-me" class="btn btn-lg btn-primary">About me</a></p>
		</div>
        </div>
                <div class="item ">
          <img src="/img/slide01.JPG" alt="First slide">
         
        </div>
                <div class="item ">
          <img src="/img/slide01.JPG" alt="First slide">
         
        </div>
        
      </div>

          
         <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
	<a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
        
      </div>

@stop

@section('frontend.content')
<div class="row">
	<div class="col-sm-6 col-md-4">
		<div class="thumbnail">
		</div>
	</div>
	<div class="col-sm-6 col-md-4">
		<div class="thumbnail">
		</div>
	</div>
		<div class="col-sm-6 col-md-4">
		<div class="thumbnail">
		</div>
	</div>
</div>

@stop
@extends('layouts.master')

@section('title', 'Inicio')

@push('css')
	<!-- Swiper CSS -->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/swiper.css') }}">
@endpush

@section('slider')
	<section id="slider" class="slider-element swiper_wrapper clearfix" data-autoplay="2000" data-speed="650" data-loop="true">
		<div class="container clearfix">
			<div class="slider-parallax-inner">
				<div class="swiper-container swiper-parent">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<img src="https://via.placeholder.com/1280x550">
						</div>
					</div><!--.swiper-wrapper-->
					<div class="slider-arrow-left"><i class="icon-angle-left"></i></div>
					<div class="slider-arrow-right"><i class="icon-angle-right"></i></div>
					<div class="slide-number"><div class="slide-number-current"></div><span>/</span><div class="slide-number-total"></div></div>
					<div class="swiper-pagination"></div>
				</div><!--.swiper-container-->
			</div><!--.slider-parallax-inner-->
		</div><!--.container-->
	</section>
@endsection

@section('content')
    <div class="container">

    	<h1>test</h1>
    	
	</div><!--.container-->
@endsection

@push('js')
	<!-- Initialize Swiper -->
  	<script>
    	var swiper = new Swiper('.swiper-container', {
	      pagination: {
	        el: '.swiper-pagination',
	        dynamicBullets: true,
	      },
	    });
  	</script>
@endpush

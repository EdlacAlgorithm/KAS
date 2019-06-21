@extends('frontend.app')
@section('content')
	@section('slider')
		{{-- @include('frontend._pertial.slider') --}}
		@include('frontend._pertial.slidersearch')
	@show
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">						
						@include('frontend._pertial.category')						
						<div class="shipping text-center"><!--shipping-->
							<img src="{{asset('assets/images/kas/clear2.png')}}" alt="" />
						</div><!--/shipping-->
						@if(!strpos(request()->url(),'product/detail'))
							<div class="shipping text-center "><!--shipping-->
								<img src="{{asset('assets/images/kas/clear2.png')}}" alt="" />
							</div>
							<div class="shipping text-center "><!--shipping-->
								<img src="{{asset('assets/images/kas/clear2.png')}}" alt="" />
							</div>
							<div class="shipping text-center "><!--shipping-->
								<img src="{{asset('assets/images/kas/clear2.png')}}" alt="" />
							</div>
						@endif
					</div>
				</div>
				<div class="col-sm-9 padding-right">
					@section('body_content')
						@include('frontend._pertial.latest_products')
						@include('frontend._pertial.categorise_products')
						@include('frontend._pertial.testimonials')
					@show
				</div>
			</div>
		</div>
	</section>
@endsection
@section('script')
	<script src="{{ asset('assets/js/jquery.backstretch.js') }}"></script>
	<script>
		var header_height = $('#header').height()

		/* parallax header */
		function parallax(){
			var scrolled = $(window).scrollTop()
			$('#header .backstretch img').css('top',''+-(scrolled*0.6)+'px')
			$('.heading').css('background-position', 'center '+-(scrolled*0.5)+'px')
		}


		/* backstretch slider */
		 $('.header-slide').backstretch([
				'{{asset("assets/slide/hookahe1.jpg")}}',
				'{{asset("assets/slide/hookahe2.jpg")}}',
				'{{asset("assets/slide/hookahe3.jpg")}}',
				'{{asset("assets/slide/hookahe5.jpg")}}',  
			],{
				fade: 850,
				duration: 4000
			 }
			);


		/* navbar */
		$(window).scroll(function(){
			parallax();
			if($(window).scrollTop() > header_height){
				//$('.navbar').css('border-bottom-color', '#3bafda');
			}else{
				//$('.navbar').css('border-bottom-color', '#fff');
			}
		});
	</script>
	
@endsection


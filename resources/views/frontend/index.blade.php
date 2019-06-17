@extends('frontend.app')
@section('content')
	@section('slider')
		@include('frontend._pertial.slider')
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
							<div class="shipping text-center"><!--shipping-->
								<img src="{{asset('assets/images/kas/clear2.png')}}" alt="" />
							</div>
							<div class="shipping text-center"><!--shipping-->
								<img src="{{asset('assets/images/kas/clear2.png')}}" alt="" />
							</div>
							<div class="shipping text-center"><!--shipping-->
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



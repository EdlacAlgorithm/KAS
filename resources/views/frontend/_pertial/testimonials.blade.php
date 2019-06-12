<div class="recommended_items" id="testimonials"><!--recommended_items-->
	<h2 class="title text-center">View Of Our Certisfied Clients</h2>
	<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner">
			@foreach($testimonials->chunk(3) as $testimonialChunk)
				<div class="item {{$loop->first?'active':''}}">
					@foreach($testimonialChunk as $testimonial)
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										{{-- <img alt="{{$testimonial->name}}"
											src="{{asset('assets/images/home/'.$testimonial->avater.'.jpg')}}"  /> --}}

										 @php
											$avater = $testimonial->avater?'testimonials/similar_'.$testimonial->avater:'no_image.jpg';
										 @endphp
										 <img src="{{asset('assets/images/'.$avater)}}" alt="{{$testimonial->name}}" width="">

										<h5>{{$testimonial->name}}</h5>
										<p>{{$testimonial->profile}}</p>
									</div>
								</div>
							</div>
						</div>
					@endforeach	
				</div>
			@endforeach
		</div>
		 <a class="left recommended-item-control" 
		 	href="#recommended-item-carousel" data-slide="prev">
			<i class="fa fa-angle-left"></i>
		  </a>
		  <a class="right recommended-item-control" 
		  		href="#recommended-item-carousel" data-slide="next">
				<i class="fa fa-angle-right"></i>
		  </a>			
	</div>
</div><!--/recommended_items-->
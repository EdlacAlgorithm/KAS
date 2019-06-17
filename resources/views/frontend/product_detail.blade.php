@extends('frontend.index')
@section('slider','')
@section('body_content')
	@php $latestProducts = []; @endphp
	<div class="product-details"><!--product-details-->
		<div class="col-sm-5">
			<div class="view-product">
				@php
					 $detailImage = $product->image?'products/detail_'.$product->image:'no_image.jpg';
				 @endphp
				 <img src="{{asset('assets/images/'.$detailImage)}}" alt="{{$product->name}}" width="">
				<h3>ZOOM</h3>
			</div>
			<div id="similar-product" class="carousel slide" data-ride="carousel">
				  <!-- Wrapper for slides -->
				    <div class="carousel-inner">
				    	@foreach($product->similar->chunk(3) as $similarChunk)
							<div class="item {{$loop->first?'active':''}}">
								@foreach($similarChunk as $similar)
							  		<a href="/product/{{$similar->unique_id}}">
							  			@php
											$similarImage = $product->image?'products/similar_'.$product->image:'no_image.jpg';
										@endphp
										<img src="{{asset('assets/images/'.$similarImage)}}" alt="{{$product->name}}" width="85">
							  		</a>
							  	@endforeach
							</div>
						@endforeach
					</div>
				  <!-- Controls -->
				  <a class="left item-control" href="#similar-product" data-slide="prev">
					<i class="fa fa-angle-left"></i>
				  </a>
				  <a class="right item-control" href="#similar-product" data-slide="next">
					<i class="fa fa-angle-right"></i>
				  </a>
			</div>
		</div>
		<div class="col-sm-7">
			<div class="product-information"><!--/product-information-->
				<h2>{{$product->name}}</h2>
				<p>Web ID: 1089772</p>
				<span>
					<span>₦{{$product->price}}</span>
					<a class="btn btn-default add-to-cart whatappbtn"
						href="javascript:whatsAppWith('08108012345')">
						<i class="fa fa-whatsapp"></i>WhatsApp
					</a>
					<a href="#" class="btn btn-default add-to-cart">
						<i class="fa fa-phone-square"></i>Call
					</a>
				</span>
				<p><b>Availability:</b> In Stock</p>
				<p><b>Condition:</b> New</p>
				<p><b>Category:</b> {{$product->category->name}}</p>
				<div class="social-share text-cente"></div>
			</div><!--/product-information-->
		</div>
	</div><!--/product-details-->
	<div class="category-tab shop-details-tab"><!--category-tab-->
		<div class="col-sm-12">
			<ul class="nav nav-tabs">
				<li><a href="#details" data-toggle="tab">Similar Products</a></li>
				<li class="active"><a href="#reviews" data-toggle="tab">Detail & Review</a></li>
			</ul>
		</div>
		<div class="tab-content">
			<div class="tab-pane fade" id="details" >
				@foreach($product->similar->take(4) as $similarPro)
					<div class="col-sm-3">
						<div class="product-image-wrapper">
							<div class="single-products">
								<div class="productinfo text-center">
									@php
										$similarProImage = $product->image?'products/detail_'.$product->image:'no_image.jpg';
									@endphp
									<img src="{{asset('assets/images/'.$similarProImage)}}" alt="{{$product->name}}" width="">
									<h2>₦{{$similarPro->price}}</h2>
									<p>{{$similarPro->name}}</p>
									<a  class="btn btn-default add-to-cart whatappbtn"
										href="javascript:whatsAppWith('08108012345')">
										<i class="fa fa-whatsapp"></i>WhatsApp
									</a>
									<a href="#" class="btn btn-default add-to-cart">
										<i class="fa fa-phone"></i>Call
									</a>
								</div>
							</div>
						</div>
					</div>
				@endforeach
			</div>
			<div class="tab-pane fade active in" id="reviews" >
				<div class="col-sm-12">
					<ul>
						<li><a href=""><i class="fa fa-th-large"></i> {{$product->name}}</a></li>
					</ul>
					<div>{!!$product->description!!}</div>
					<p><b>Write Your Review</b></p>	
					<form action="#">
						<span>
							<input type="text" placeholder="Your Name"/>
							<input type="email" placeholder="Email Address"/>
						</span>
						<textarea name="message" ></textarea>
						{{-- <b>Rating: </b> 
						<img src="{{asset('assets/images/home/rating.png')}}" 
											 alt="rating" /> --}}
						<button type="button" class="btn btn-default pull-right">
							Submit
						</button>
					</form>
				</div>
			</div>
		</div>
	</div><!--/category-tab-->
@endsection

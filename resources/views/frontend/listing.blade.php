@extends('frontend.app')
@section('content')
	<section id="advertisement">
		<div class="container">
			<img src="{{asset('assets/images/shop/advertisement.jpg')}}" alt="" />
		</div>
	</section>
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="features_items" id="latestproducts"><!--features_items-->
						<h2 class="title text-center">Product Listing</h2>
						@foreach($listingProducts as $product)
							<div class="col-sm-3">
								<div class="product-image-wrapper">
									<div class="single-products">
										<div class="productinfo text-center">
											<a href="/product/detail/{{$product->unique_id}}">
												@php
													$image = $product->image?'products/list_'.$product->image:'no_image.jpg';
												@endphp
												<img src="{{asset('assets/images/'.$image)}}" alt="{{$product->name}}" width="">
											</a>
											<h2>₦{{$product->price}}</h2>
											<p>{{$product->name}}</p>
											<a  class="btn btn-default add-to-cart whatappbtn"
												href="javascript:whatsAppWith('08108012345')">
												<i class="fa fa-whatsapp"></i>WhatsApp
											</a>
											<a href="#" class="btn btn-default add-to-cart">
												<i class="fa fa-phone-square"></i>Call
											</a>
										</div>
										{{--<div class="product-overlay">
											<div class="overlay-content">
												<h3>{{$product->price}}</h3>
												<p>{{$product->name}}</p>
												<a href="#" class="btn btn-default add-to-cart">
													<i class="fa fa-shopping-cart"></i>Add to cart
												</a>
											</div>
										</div>--}}
										{{--<img src="{{asset('assets/images/home/new.png')}}" class="new" alt="" />--}}
									</div>
									<div class="social-share text-center"></div>
								</div>
							</div>
						@endforeach
					</div><!--features_items-->
					{{$listingProducts->links()}}
				</div>
			</div>
		</div>
	</section>
@endsection
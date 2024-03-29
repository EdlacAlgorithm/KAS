@extends('frontend.app')
@section('content')
	<section id="advertisement">
		<div class="header-bottom"><!--header-bottom-->
        <div class="container">
            <div class="row">
                <div class="col-sm-offset-3 col-sm-9">
                    <div class="mainmenu">
                        <form class="form-inline" action="/product/listing" method="get">
                            <div class="price-rang form-group"><!--price-range-->
                                @php 
                                    $prices = '[1500,2500]';
                                    if(request('price')){
                                        $prices = explode(',',request('price'));
                                        $prices = '['.$prices[0].','.$prices[1].']';
                                    }
                                @endphp
                                <div class="wel text-center" style="padding-right:10px">
                                    <input type="text" class="span2" value="" name="price" 
                                    data-slider-min="1000" data-slider-max="5000" 
                                    data-slider-step="500" data-slider-value="{{$prices}}" id="sl2"><br/>
                                    <b class="pull-left">₦1000</b> <b class="pull-right">₦5000</b>
                                </div>
                            </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="search" 
                                placeholder="What ?" value="{{request('search')}}">
                        </div>
                        <div class="form-group">
                            <select class="form-control" name="category">
                                <option value="0">All</option>
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}" 
                                        {{request('category') == $category->id?'selected':''}}>
                                        {{$category->name}}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="bt btn-info" 
                                style="height: 35px;border-radius:5%;">
                                    Search
                        </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-bottom-->
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
												href="javascript:whatsAppWith('{{config('app.whatsapp_number')}}','{{$product->name}}')">
												<i class="fa fa-whatsapp"></i>WhatsApp
											</a>
											<a href="tel:{{config('app.call_number')}}" class="btn btn-default add-to-cart call">
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
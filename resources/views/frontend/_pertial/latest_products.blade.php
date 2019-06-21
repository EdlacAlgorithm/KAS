<div class="features_items" id="latestproducts"><!--features_items-->
	<h2 class="title text-center">Our Latest products</h2>
	@foreach($latestProducts as $product)
		<div class="col-sm-4">
			<div class="product-image-wrapper">
				<div class="single-products">
					<div class="productinfo text-center">
						<a href="/product/detail/{{$product->unique_id}}">
							@php
								$image = $product->image?'products/similar_'.$product->image:'no_image.jpg';
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
				</div>
				<div class="social-share text-center"></div>
			</div>
		</div>
	@endforeach
</div><!--features_items-->
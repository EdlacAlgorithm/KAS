<div class="features_items" id="latestproducts"><!--features_items-->
	<h2 class="title text-center">Our Latest products</h2>
	@foreach($latestProducts as $product)
		<div class="col-sm-4">
			<div class="product-image-wrapper">
				<div class="single-products">
					<div class="productinfo text-center">
						<a href="/product/detail/{{$product->unique_id}}">
							<img src="{{asset('assets/images/home/'.$product->image.'.jpg')}}" 
								alt="{{$product->name}}" />
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
				</div>
				<div class="social-share text-center"></div>
			</div>
		</div>
	@endforeach
</div><!--features_items-->
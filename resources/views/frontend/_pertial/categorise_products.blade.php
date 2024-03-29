<div class="category-tab" id="categoriseproducts"><!--category-tab-->
	<div class="col-sm-12">
		<ul class="nav nav-tabs">
			@foreach($categoriseProducts as $category)
				<li class="{{$loop->first?'active':''}}">
					<a href="#{{$category->name}}" data-toggle="tab">
						{{$category->subName}}
					</a>
				</li>
			@endforeach
		</ul>
	</div>
	<div class="tab-content">
		@foreach($categoriseProducts as $category)
			<div class="tab-pane fade {{$loop->first?'active in':''}}" id="{{$category->name}}" >
				@foreach($category->shishas->take(4) as $product)
					<div class="col-sm-3">
						<div class="product-image-wrapper">
							<div class="single-products">
								<div class="productinfo text-center">
									@php
										$image = $product->image?'products/similar_'.$product->image:'no_image.jpg';
									@endphp
									<img src="{{asset('assets/images/'.$image)}}" alt="{{$product->name}}" width="">
									<h2>₦{{$product->price}}</h2>
									<p>{{$product->name}}</p>
									<a  class="btn btn-default add-to-cart whatappbtn"
										href="javascript:whatsAppWith('{{config('app.whatsapp_number')}}','{{$product->name}}')">
										<i class="fa fa-whatsapp"></i>WhatsApp
									</a>
									<a href="{{config('app.call_number')}}" class="btn btn-default add-to-cart call">
										<i class="fa fa-phone"></i>Call
									</a>
								</div>
							</div>
							<div class="social-share text-center"></div>
						</div>
					</div>
				@endforeach
			</div>
		@endforeach
	</div>
</div><!--/category-tab-->
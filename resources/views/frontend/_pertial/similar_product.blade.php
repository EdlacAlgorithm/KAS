<div id="similar-product" class="carousel slide" data-ride="carousel">
	  <!-- Wrapper for slides -->
	    <div class="carousel-inner">
	    	@foreach($product->similar->chunk(3) as $similarChunk)
				<div class="item {{$loop->first?'active':''}}">
					@foreach($similarChunk as $similar)
				  		<a href="/product/detail/{{$similar->unique_id}}">
								@php
									$image = $similar->image?'products/similar_'.$similar->image:'no_image.jpg';
								@endphp
								<img src="{{asset('assets/images/'.$image)}}" alt="{{$similar->name}}" width="">
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
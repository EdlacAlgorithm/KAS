<section id="slider"><!--slider-->
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div id="slider-carousel" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						@foreach($sliders as $slider)
							<li data-target="#slider-carousel" 
								data-slide-to="{{$loop->index}}" 
								class="{{$loop->first?'active':''}}">
							</li>
						@endforeach
					</ol>
					<div class="carousel-inner">
						@foreach($sliders as $slider)
							<div class="item {{$loop->first?'active':''}}">
								<div class="col-sm-6">
									<h1><span>KAS</span>-{{$slider->title}}</h1>
									<h2>{{$slider->sub_title}}</h2>
									<p>{{$slider->description}}.</p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									@php
										$image = $slider->image?'sliders/slide_'.$slider->image:'no_image.jpg';
									@endphp
									<img src="{{asset('assets/images/'.$image)}}" alt="{{$slider->name}}" width=""
										class="girl img-responsive">
								</div>
							</div>
						@endforeach						
					</div>
					<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
						<i class="fa fa-angle-left"></i>
					</a>
					<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
						<i class="fa fa-angle-right"></i>
					</a>
				</div>
			</div>
		</div>
	</div>
</section><!--/slider-->
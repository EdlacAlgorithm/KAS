@extends('backend.index')
@section('content_title','Testimonial List')
@section('page_style')
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/DT_row_background.css')}}">
@endsection
@section('add_link','#modalComponet')
@section('modal')
	data-toggle="modal" data-action="Create"
@endsection
@section('page_name','Testimonial')
@section('thead')
	<td class="image">Testimonial Image</td>
	<td class="description">Name & Profile</td>
	<td>Actions</td>
@endsection
@section('tbody')
	@foreach($testimonials as $testimonial)
		<tr>
			<td class="cart_product">
				<a href="#">
					<img src="{{asset('assets/images/home/small_product'.rand(1,6).'.jpg')}}" 
						 alt="{{$testimonial->name}}" class="img-circle">
				</a>
			</td>
			<td class="cart_description">
				<h4><a href="#">{{$testimonial->name}}</a></h4>
				<p>{{$testimonial->profile}}</p>
			</td>
			<td class="cart_delete">
				<a class="cart_quantity_delete" href="#modalComponet" data-toggle="modal"
					data-action="Edit"  data-content="{{$testimonial->toJson()}}"
					style="background: #5bc0de;">
					<i class="fa fa-edit" ></i>
				</a>
				<a class="cart_quantity_delete" href="#" 
					onclick="deleteItem('testimonial',{{$testimonial->id}})" 
					style="background: #d9534f">
					<i class="fa fa-trash" ></i>
				</a>
			</td>
		</tr>
	@endforeach
@endsection
@section('modal_component')
	@component('components.modal')
		@slot('modalTitle','Create Testimonial')
		@slot('modalFormAction','/testimonial')
		@slot('modalBody')
			<label for="recipient-name" class="control-label"> Name:</label>
			<input type="text" class="form-control" id="name" name="name" required>
			<label for="recipient-name" class="control-label"> Profile:</label>
			<input type="text" class="form-control" id="profile" name="profile"/>
			<div class="file-upload-previews">
				<div class="MultiFile-label">
					<a class="MultiFile-remove" href="#" id="removeAdImg" 
						data-item-id="$product->id" 
						data-img-name="$product->image">x</a> 
					<span>
						<span class="MultiFile-label" 
							title="File selected: $product->image.jpg">
							<span class="MultiFile-title">Image</span>
							<img class="MultiFile-preview" 
								style="max-height:100px;product max-width:100px;" 
								src="img.jpg">
						</span>
					</span>
					<input type="hidden" name="previousImage" value="" />
				</div>
			</div>
			<div class="file-upload">
				<input type="file" name="image" 
				class="file-upload-input with-preview"  
				title="Click to add files" 
				maxlength="1" accept="jpg|png" 
				onchange="checkFile(this)" id="img">
				<span style="color:#000">CLICK OR DRAG IMAGE HERE</span>
				<input type="hidden" id="imgCount" value="1"/>
			</div>
		@endslot
	@endcomponent
@endsection
@section('page_script')
	<script src="{{asset('assets/js/testimonial.modal.js')}}"></script>
@endsection
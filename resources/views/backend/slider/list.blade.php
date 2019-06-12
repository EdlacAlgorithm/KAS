@extends('backend.index') 
@section('content_title','Slider List')
@section('page_style')
	<link href="{{asset('assets/css/bootstrap-switch.css')}}" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/DT_row_background.css')}}">
@endsection
@section('add_link','#modalComponet')
@section('modal')
	data-toggle="modal" data-action="Create"
@endsection
@section('page_name','Slider')
@section('thead')
	<td class="image">Slider Image</td>
	<td class="description">Title</td>
	<td class="quantity">Status</td>
	<td>Actions</td>
@endsection
@section('tbody')
	@foreach($sliders as $slider)
		<tr>
			<td class="cart_product">
				<a href="#">
					@php
						$image = $slider->image?'sliders/slide_'.$slider->image:'no_image.jpg';
					 @endphp
				 	<img src="{{asset('assets/images/'.$image)}}" alt="{{$slider->title}}" width="85px">
				</a>
			</td>
			<td class="cart_description">
				<h4>{{$slider->title}}</h4>
				<p>{{$slider->sub_title}}</p>
			</td>
			<td class="cart_quantity">
				<input type="checkbox" name="slide_{{$slider->id}}" 
					{{$slider->status == 1?"checked":""}} onchange="toggle({{$slider->id}})" class="switches" />
			</td>
			<td class="cart_delete">
				<a class="cart_quantity_delete" href="#modalComponet" data-toggle="modal"
					data-action="Edit" data-content="{{$slider->toJson()}}"
					style="background: #5bc0de;">
					<i class="fa fa-edit" ></i>
				</a>
				<a class="cart_quantity_delete" href="#" 
					onclick="deleteItem('slider',{{$slider->id}})"
					style="background: #d9534f">
					<i class="fa fa-trash" ></i>
				</a>
			</td>
		</tr>
	@endforeach
@endsection
@section('pagination')
	{{$sliders->links()}}
@endsection
@section('modal_component')
	@component('components.modal')
		@slot('modalTitle','Create Slider')
		@slot('modalFormAction','/slider')
		@slot('modalBody')
			<label for="recipient-name" class="control-label"> Title:</label>
			<input type="text" class="form-control" id="name" name="title" required>
			<label for="sub_title" class="control-label"> Sub Title:</label>
			<input type="text" class="form-control" id="profile" name="sub_title"/>
			<label for="description" class="control-label"> Description:</label>
			<input type="text" class="form-control" id="profile" name="description"/>
			<div class="file-upload-previews">
				<div class="MultiFile-label">
					<a class="MultiFile-remove" href="#" id="removeAdImg">x</a> 
					<span>
						<span class="MultiFile-label" 
							title="File selected: image.jpg">
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
				<input type="file" name="image" class="file-upload-input with-preview"  
					title="Click to add files" maxlength="1" accept="jpg|png" 
					onchange="checkFile(this)" id="img">
				<span style="color:#000">CLICK OR DRAG IMAGE HERE</span>
			</div>
		@endslot
	@endcomponent
@endsection
@section('page_script')
	<script>
		const $realUrl = "{{route('slider.store')}}"
	</script>
	<script type='text/javascript' src='{{asset("assets/js/bootstrap-switch.js")}}'></script>
	<script type="text/javascript" src="{{asset('assets/js/slider_switching.js')}}"></script>
	<script src="{{asset('assets/js/slider.modal.js')}}"></script>
@endsection
@extends('backend.index')
@section('content_title','Category List')
@section('page_style')
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/DT_row_background.css')}}">
@endsection
@section('add_link','#modalComponet')
@section('modal')
	data-toggle="modal" data-action="Create"
@endsection
@section('page_name','Category')
@section('thead')
	<td class="quantity">SN</td>
	<td class="total">Title</td>
	<td class="quantity">Product Count</td>
	<td>Action</td>
@endsection
@section('tbody')
	@foreach($categories as $category)
		<tr>
			<td class="cart_quantity">
				<div class="cart_quantity_button">
					{{$loop->iteration}}
				</div>
			</td>
			<td class="cart_total">
				<p class="cart_total_pric">
					{{$category->name}}
				</p>
			</td>
			<td class="cart_quantity">
				<div class="cart_quantity_button">
					<a class="cart_quantity_up" href="#"> + </a>
						<input class="cart_quantity_input" type="text" 
							name="quantity" value="{{$category->shishas_count}}" 
							autocomplete="off" size="2">
					<a class="cart_quantity_down" href="#"> + </a>
				</div>
			</td>
			<td class="cart_delete">
				<a class="cart_quantity_delete" href="#modalComponet" 
					data-toggle="modal" data-action="Edit"
					data-content="{{$category->toJson()}}"
					style="background: #5bc0de;">
					<i class="fa fa-edit"></i>
				</a>
				<a class="cart_quantity_delete" href="#"
					onclick="deleteItem('category',{{$category->id}})" 
					style="background: #d9534f">
					<i class="fa fa-trash"></i>
				</a>
			</td>
		</tr>
	@endforeach
@endsection
@section('modal_component')
	@component('components.modal')
		@slot('modalTitle','Create Category')
		@slot('modalFormAction','/category')
		@slot('modalBody')
			<label for="recipient-name" class="control-label">Category Name:</label>
			<input type="text" class="form-control" id="name" name="name">
		@endslot
	@endcomponent
@endsection
@section('page_script')
	<script>
		const $realUrl = "{{route('category.store')}}"
	</script>
	<script src="{{asset('assets/js/category.modal.js')}}"></script>
@endsection
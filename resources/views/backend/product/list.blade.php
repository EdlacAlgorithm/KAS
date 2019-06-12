@extends('backend.index')
@section('content_title','Product List')
@section('add_link','/product/create')
@section('page_name','Product')
@section('thead')
	<td class="image">Product Image</td>
	<td class="description"></td>
	<td class="price">Price</td>
	<td class="quantity">View Count</td>
	<td class="total">Category</td>
	<td></td>
@endsection
@section('tbody')
	@foreach($products as $product)
		<tr>
			<td class="cart_product">
				<a href="#">
					@php
						$image = $product->image?'products/similar_'.$product->image:'no_image.jpg';
					@endphp
					<img src="{{asset('assets/images/'.$image)}}" alt="{{$product->name}}" width="85px">
				</a>
			</td>
			<td class="cart_description">
				<h4><a href="#">{{$product->name}}</a></h4>
				<p>{{$product->subDescription}}</p>
			</td>
			<td class="cart_price">
				<p>₦{{$product->price}}</p>
			</td>
			<td class="cart_quantity">
				<div class="cart_quantity_button">
					<a class="cart_quantity_up" href="#"> + </a>
					<input class="cart_quantity_input" type="text" 
						name="quantity" value="{{$product->view_count}}" 
						autocomplete="off" size="2">
					<a class="cart_quantity_down" href="#"> + </a>
				</div>
			</td>
			<td class="cart_total">
				<p class="cart_total_pric">
					{{$product->category->name}}
				</p>
			</td>
			<td class="cart_delete">
				<a class="cart_quantity_delete" 
					href="/product/{{$product->unique_id}}/edit"
					style="background:#5bc0de;">
					<i class="fa fa-edit"></i>
				</a>
				<a class="cart_quantity_delete" 
					id="{{$product->unique_id}}"
					onclick="deleteProduct(this)"	 
					style="background: #d9534f">
					<i class="fa fa-trash"></i>
				</a>
			</td>
		</tr>
	@endforeach
@endsection
@section('pagination')
	{{$products->links()}}
@endsection
@extends('backend.app')
@section('style')
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/select2.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/ckeditor.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/MultiFileUpload.css')}}">
@endsection
@section('content_title','Create Product')
@section('content_body')
	 <div id="contact-page" class="container">
		<div class="bg">  	
			<div class="row">  	
	    		<div class="col-sm-offset-2 col-sm-8">
	    			<div class="contact-form">
						@include('backend._pertial.flash')
						<a href="/product" class="btn btn-primary pull-right" style="margin-bottom:10px">
							<i class="fa fa-angle-double-left"></i> Back
						</a>
				    	<form id="main-contact-form" class="contact-form row" 
				    		 method="post" action="/product" enctype="multipart/form-data">
				            
				            <div class="form-group col-md-12">
				                <input type="text" name="name" class="form-control" 
				                	required="required" placeholder="Name">
				            </div>
				            <div class="form-group col-md-12">
				                <input type="text" name="price" class="form-control" 
				                	required="required" placeholder="Price">
				            </div>
				            <div class="form-group col-md-12">
				                <select class="form-control" name="category_id" id="category" 
				                	required="">
				                	@foreach($categories as $category)
				                		<option value="{{$category->id}}">
				                			{{$category->name}}
				                		</option>
				                	@endforeach
				                </select>
				            </div>
				            <div class="form-group col-md-12">
				                <p id="for_ad_image" class="valError text-danger small"></p>
				                <div class="file-upload-previews"></div>
				                <div class="file-upload">
				                    <input type="file" name="image" 
				                    class="file-upload-input with-preview" 
				                    title="Click to add files" 
				                    maxlength="1" accept="jpg|png" 
				                    onchange="checkFile(this)" id="img">
				                    <span style="color:#000">CLICK OR DRAG IMAGES HERE</span>
				                    <input type="hidden" id="imgCount" value="1"/>
				                    <input type="hidden" id="previousImages" 
				                    		name="previousImages" value="1">
				                </div>
				            </div>
				            <div class="form-group col-md-12">
				                <textarea name="description" id="message" required="required" 
				                	class="form-control ckeditor" rows="4" 
				                	placeholder="Product description">
				                </textarea>
				            </div>                        
				            <div class="form-group col-md-12 text-center">
				            	{{csrf_field()}}
				                <input type="submit" class="form-control btn btn-success" 
				                	value="Create" style="background:#FE980F;color:#fff;">
				            </div>
				        </form>
	    			</div>
	    		</div>
	    	</div>  
		</div>	
	</div><!--/#contact-page-->
@endsection
@section('script')
	<script type="text/javascript" src="{{asset('assets/js/jQuery.MultiFile.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/js/select2.min.js')}}"></script> 
	<script type="text/javascript" src="{{asset('assets/js/ckeditor/ckeditor.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/js/select2_init.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/js/MultiFileUpload.js')}}"></script>
@endsection
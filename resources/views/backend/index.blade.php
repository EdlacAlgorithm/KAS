@extends('backend.app')
@section('style')
	<link href="{{asset('assets/css/demo_table.css')}}" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/DT_bootstrap.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/MultiFileUpload.css')}}">
	@yield('page_style')
@endsection
@section('content_body')
    <section id="cart_items">
    	<div class="container">
    		<div class="row">
    		<div class="col-md-3">
    		<div class="breadcrumbs">
    			<ol class="breadcrumb">
    			  <li><a href="/">Home</a></li>
    			  <li class="active">@yield('page_name')</li>
    			</ol>
    		</div>
    		</div> 
    		<div class="col-md-9" style="padding-left:70px;">
    			<div class="shop-menu pull-righ">
    			    <ul class="nav navbar-nav">
    			    	@foreach($sidenavs as $sidenav)
    			        	{!!$sidenav!!}
						@endforeach
						<li>
							<a href="{{ route('logout') }}"  onclick="event.preventDefault();
								document.getElementById('logout-form').submit();">
								<i class="fa fa-unlock"></i> 
								Logout
							</a>
							<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
								{{ csrf_field() }}
							</form>
						</li>
    			    </ul>
    			</div>
    		</div>
    		</div>
    		<div class="row">
	    		<div class="col-md-offset-1 col-md-10">
					@include('backend._pertial.flash')
					<a href="@yield('add_link')" @yield('modal')
						class="btn btn-info pull-right" 
	    				style="margin:15px;">
	    				<i class="fa fa-plus"></i>
	    				Add @yield('page_name')
	    			</a>
		    		<div class="table-responsive cart_info">
		    			<table class="table table-condensed" id="datatable">
		    				<thead>
		    					<tr class="cart_menu">
		    						@yield('thead')
		    					</tr>
		    				</thead>
		    				<tbody>
		    					@yield('tbody')
		    				</tbody>
		    			</table>
		    			@yield('pagination')
		    		</div>
	    		</div>
    		</div>
    	</div>
    </section> <!--/#cart_items-->       
@endsection
@section('script')
 	<script type='text/javascript' src='{{asset("assets/js/jquery.dataTables.js")}}'></script>
	 <script type='text/javascript' src='{{asset("assets/js/DT_bootstrap.js")}}'></script>
	 <script type="text/javascript" src="{{asset('assets/js/jQuery.MultiFile.min.js')}}"></script>
	 <script type="text/javascript" src="{{asset('assets/js/MultiFileUpload.js')}}"></script>
	 @yield('page_script')
	 <script src="{{asset('assets/js/custom.modal.js')}}"></script>
 	<script type="text/javascript">
 		$(document).ready(function(){
 			$('#datatable').dataTable();
 		});
 	</script>
@endsection
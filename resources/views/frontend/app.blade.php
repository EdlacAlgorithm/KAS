
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>KAS SHISA ZONE</title>
		@include('frontend._pertial.head')
		@yield('style')
	</head>
	<body>
		<div id="app">
			@section('body')
				@include('frontend._pertial.header')
				@yield('content')
				@include('frontend._pertial.footer')
			@show
		</div>
		@yield('modal_component')
		@include('frontend._pertial.foot')
		@yield('script')
	</body>
</html>
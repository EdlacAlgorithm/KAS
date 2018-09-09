@extends('frontend.app')
@section('content')
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="features_items" id="latestproducts"><!--features_items-->
						<h2 class="title text-center">@yield('content_title')</h2>
						@yield('content_body')
					</div><!--features_items-->
				</div>
			</div>
		</div>
	</section>
@endsection

@if($errors->any())
  <div class="status alert alert-danger">
  	! @foreach($errors->all() as $error)
  	    {{$error}} 
  	  @endforeach
  </div>  
@endif

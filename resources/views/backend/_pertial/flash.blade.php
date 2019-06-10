@if(session()->has('flash') || session()->has('warning'))
    <div class="alert alert-{{session('warning')?'warning':'success'}} alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
      {{-- <strong>{{session('warning')?'!!! Warning':$sucess}} </strong>   --}}
      {{session('warning')?:session('flash')}}
    </div>
@endif

@if($errors->any())
    <div class="alert alert-danger alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
      ! @foreach($errors->all() as $error)
            {{$error}} 
        @endforeach
    </div>
@endif
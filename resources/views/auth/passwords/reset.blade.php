@extends('frontend.app')
@section('content')
<div id="page-content">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="/">Home</a></li>
            <li><a href="/login">Login</a></li>
            <li class="active">Forgot Password</li>
        </ol>
        <!--end breadcrumb-->
        <section>
            <div class="row">
                <div class="col-md-6 col-sm-8 col-md-offset-3 col-sm-offset-2">
                    <div class="middle-dabba">
                    <h1>Reset Password</h1>
                    <div style="padding:10px">
                        <form method="post" action="{{ route('password.request') }}" id="send">
                            {{ csrf_field() }}
                            <input type="hidden" name="token" value="{{ $token }}">
                            <p>
                                @if($errors->any())
                                    <article class="byMsg byMsgError" id="formErrors" style="width:92%">
                                        @foreach($errors->all() as $error)
                                            ! {{$error}}
                                        @endforeach
                                    </article>
                                @endif
                            </p>
                            <div class="input-field">
                               {{--<span class="fbold">Email : </span> {{$email}}<br />--}}
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" 
                                        value="{{ $email or old('email') }}" required autofocus/>
                            </div>
                            <div class="input-field">
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password"/>
                            </div>
                            <div class="input-field">
                                <label for="password-confirm">Confirm Password</label>
                                <input type="password" name="password_confirmation" id="password-confirm"/>
                            </div>
                            <div class="input-field">
                                <button class="btn btn-primary waves-effect" type="submit">
                                    <span>Reset Password</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                </div>
            </div>
        </section>
        <!--end ro-->
    </div>
    <!--end container-->
</div>
<!--end page-content-->
@endsection
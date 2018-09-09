@extends('frontend.app')
@section('style')
    <link rel='stylesheet'  href='{{asset("material-theme/assets/css/passwordreset.css")}}' type='text/css' />
@endsection
@section('content')
    <div id="page-content">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="/">Home</a></li>
                <li><a href="/login">Login</a></li>
                <li class="active">Forgot Password</li>
            </ol>
            <!--end breadcrumb-->
            @if(session('status'))
                <div class="container" style="padding-top:20px">
                    <div class="callout callout-success">
                        <h4>Confirmation mail sent</h4>
                        <p>Please check your email account for the forgot password details</p>
                    </div>
                </div>
            @endif
            <div class="row">
                <div class="col-md-6 col-sm-8 col-md-offset-3 col-sm-offset-2">
                    <div class="middle-dabba">

                        <h1>Request Password</h1>
                        <p class="modal-title">
                            Enter your e-mail address below and we will send you a link to create a new password.
                        </p>
                        <div id="post-form" style="padding:0 10px 10px">
                            <form  method="post" action="{{ route('password.email') }}" id="send">
                                {{ csrf_field() }}
                                <div class="input-field">
                                    @if($errors->any())
                                        <article class="byMsg byMsgError" id="formErrors" style="width:92%">
                                            @foreach($errors->all() as $error)
                                                ! {{$error}}
                                            @endforeach
                                        </article>
                                    @endif
                                </div>
                                <div class="input-field">
                                    <label for="email">Enter Email</label>
                                    <input type="email" name="email" id="email" required="required"/>
                                </div>
                                <div class="input-field">
                                    <button class="btn btn-primary waves-effect" type="submit" >
                                        <span>Request Password</span>
                                    </button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </div>
    <!--end page-content-->
@endsection
			
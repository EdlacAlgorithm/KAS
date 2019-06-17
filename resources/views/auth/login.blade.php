@extends('frontend.app')
@section('content')
    <div id="page-content">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="{LINK_INDEX}">HOME</a></li>
                <li class="active">Login</li>
            </ol>
            <!--end breadcrumb-->
            <div class="row">
                <div class="col-md-6 col-sm-8 col-md-offset-3 col-sm-offset-2">
                    <div class="middle-dabba">
                        <h1>Login Here</h1>

                        <div id="post-form" style="padding:10px">
                             @include('frontend._pertial.flash')
                            <form method="post" action="/login">
                                <div class="form-group input-field">
                                    <label for="email">Email</label>
                                    <input type="text" name="email" id="email" class="form-control">
                                </div>
                                <!--end form-group-->
                                <div class="form-group input-field">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" id="password" class="form-control">
                                </div>
                                <div class="form-group">
                                    {{csrf_field()}}
                                    <button type="submit"  id="submit" class="btn btn-primary waves-effect">
                                        LOGIN
                                    </button>&nbsp;&nbsp;
                                    {{-- <a href="{{ route('password.request') }}" class="forgotlink">Forgot Password?</a> --}}
                                </div>
                                <!--end form-group-->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end container-->
    </div>
    <!--end page-content-->
@endsection
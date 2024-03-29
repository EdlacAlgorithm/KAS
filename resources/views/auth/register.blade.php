@extends('frontend.app')
@section('content')
    <div id="page-content">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="/">HOME</a></li>
                <li class="active">REGISTER</li> 
            </ol>
            <!--end breadcrumb-->

            <div class="row">
                <div class="col-md-6 col-sm-8 col-md-offset-3 col-sm-offset-2">
                    <div class="middle-dabba">
                        <h1>Register</h1>
                        <div class="social-signup" style="padding-bottom: 20px;">
                            <div class="row">
                                <div class="col-xs-6"><a class="loginBtn loginBtn--facebook" onclick="fblogin()"><i class="fa fa-facebook"></i> <span>Facebook</span></a></div>
                                <div class="col-xs-6"><a class="loginBtn loginBtn--google" onclick="gmlogin()"><i class="fa fa-google-plus"></i> <span>Google+</span></a></div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        @if(session()->has('flash'))
                            <div class="alert alert-success alert-dismissible" role="alert">
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                              <strong>Sucessfully submitted </strong>  Thanks for your consign, we will look into it
                            </div>
                        @endif

                        @if($errors->any())
                            <article class="byMsg byMsgError" style="margin-bottom: 40px;" id="formErrors">
                                ! @foreach($errors->all() as $error)
                                    {{$error}} 
                                  @endforeach
                            </article>
                        @endif
                        <div id="post-form" style="padding:10px">
                            <form method="post" action="/register">
                                <div class="input-field">
                                    <label for="name">Name</label>
                                    <input type="text" value="{{old('name')}}" id="name" 
                                           name="name" onBlur="checkAvailabilityName()" required="">
                                </div>
                                <span id="name-availability-status" class="help-block">
                                    @if($errors->has('name')) {{$errors->first('name')}} @endif
                                </span>
                                <div class="input-field">
                                    <label for="school_id">School</label>
                                    <select class="meterialselect" name="school_id" id="school_id">
                                        @foreach($schools as $school)
                                            <option value="{{$school->id}}">{{$school->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="input-field">
                                    <label for="email">Email</label>
                                    <input type="email" value="{{old('email')}}" name="email" id="email" 
                                            onBlur="checkAvailabilityEmail()" required="">
                                    <span id="email-availability-status">
                                        @if($errors->has('email')) {{$errors->first('email')}} @endif
                                    </span>
                                </div>
                                <div class="input-field">
                                    <label for="phone">Phone</label>
                                    <input type="text" value="{{old('phone')}}" id="phone" 
                                           name="phone" required="">
                                    <span id="phone-availability-status" class="help-block">
                                        @if($errors->has('phone')) {{$errors->first('phone')}} @endif
                                    </span>
                                </div>
                                <div class="input-field">
                                    <label for="gender">Gender</label>
                                    <select name="gender" id="gender" class="meterialselect">
                                        <option value="male">
                                            Male
                                        </option>
                                        <option value="female">
                                            Female
                                        </option>
                                    </select>
                                </div>
                                <!--end input-field-->
                                <div class="input-field">
                                    <label for="password">Password</label>
                                    <input type="password" id="password" name="password" 
                                            onBlur="checkAvailabilityPassword()" required="">
                                </div>
                                <span id="password-availability-status">
                                    @if($errors->has('password')) {{$errors->first('password')}} @endif
                                </span>
                                <!--end input-field-->

                                <div class="input-field center">
                                    {{ csrf_field() }}
                                    <button type="submit"  id="submit" class="btn btn-primary waves-effect">    
                                        REGISTER NOW
                                    </button>
                                </div>
                                <!--end input-field-->
                                <hr>

                                <p class="center">
                                    By clicking on “Register Now” button you are agree to our 
                                    <a href="/terms">Terms & Condition</a>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!--end ro-->
        </div>
        <!--end container-->
    </div>
    <!--end page-content-->
@endsection
@section('script')
    <script>
        var error = "";
        function checkAvailabilityName() {
            $("#loaderIcon").show();
            jQuery.ajax({
                url: "check_availability.php",
                data:'name='+$("#name").val(),
                type: "POST",
                success:function(data){
                    if(data!="success"){
                        error = 1;
                        $("#name").removeClass('has-success');
                        $("#name-availability-status").html(data);
                        $("#name").addClass('has-error mar-zero');
                    }
                    else{
                        error = 0;
                        $("#name").removeClass('has-error mar-zero');
                        $("#name-availability-status").html("");
                        $("#name").addClass('has-success');
                    }
                    $("#loaderIcon").hide();
                },
                error:function (){}
            });
        }
        
        function checkAvailabilityEmail() {
            $("#loaderIcon").show();
            jQuery.ajax({
                url: "check_availability.php",
                data:'email='+$("#email").val(),
                type: "POST",
                success:function(data){
                    if(data!="success"){
                        error = 1;
                        $("#email").removeClass('has-success');
                        $("#email-availability-status").html(data);
                        $("#email").addClass('has-error mar-zero');
                    }
                    else{
                        error = 0;
                        $("#email").removeClass('has-error mar-zero');
                        $("#email-availability-status").html("");
                        $("#email").addClass('has-success');
                    }
                    $("#loaderIcon").hide();
                },
                error:function (){}
            });
        }
        function checkAvailabilityPassword() {
            $("#loaderIcon").show();
            jQuery.ajax({
                url: "check_availability.php",
                data:'password='+$("#password").val(),
                type: "POST",
                success:function(data){
                    if(data!="success"){
                        error = 1;
                        $("#password").removeClass('has-success');
                        $("#password-availability-status").html(data);
                        $("#password").addClass('has-error mar-zero');
                    }
                    else{
                        error = 0;
                        $("#password").removeClass('has-error mar-zero');
                        $("#password-availability-status").html("");
                        $("#password").addClass('has-success');
                    }
                    $("#loaderIcon").hide();
                },
                error:function (){}
            });
        }
    </script>
    <script type="text/javascript">
        var w=400;
        var h=580;
        var left = (screen.width/2)-(w/2);
        var top = (screen.height/2)-(h/2);
        function fblogin()
        {
            var newWin = window.open("includes/social_login/facebook/index.php", "fblogin", 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, copyhistory=no,display=popup, width='+w+', height='+h+', top='+top+', left='+left);
        }

        function gmlogin()
        {
            var newWin = window.open("includes/social_login/google/index.php", "gmlogin", 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, copyhistory=no, width='+w+', height='+h+', top='+top+', left='+left);
        }

        function twlogin()
        {

            var newWin = window.open("/twlogin.php", "twlogin", 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, copyhistory=no, width='+w+', height='+h+', top='+top+', left='+left);

        }



        $(document).ready(function() {

            $('#button').click(function(e) { // Button which will activate our modal

                $('.modal').reveal({ // The item which will be opened with reveal

                    animation: 'fade',                   // fade, fadeAndPop, none

                    animationspeed: 600,                       // how fast animtions are

                    closeonbackgroundclick: true,              // if you click background will modal close?

                    dismissmodalclass: 'close'    // the class of a button or element that will close an open modal

                });

                return false;

            });

        });

    </script>
@endsection
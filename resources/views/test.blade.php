@extends('frontend.app')
@section('body')
    @component('componets.test',['ok'=>'ok test'])
        @section('alert','success')
        @slot('title')
            Forbidden
        @endslot

        You are not allowed to access this resource!
        @section('content')
            Here is the component content
        @endsection
    @endcomponent
@endsection

{{--<!DOCTYPE html>
<html>
<head>
    <title>Testing</title>
    <link rel="stylesheet" type="text/css" href="css/app.css">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    <div id="app">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">Chat Log</div>
                        <div class="panel-body">
                            <chat-log  :messages="messages"></chat-log>
                            <chat-composer @messagesend="recieveMessage"></chat-composer>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="js/app.js"></script>
</body>
</html>--}}



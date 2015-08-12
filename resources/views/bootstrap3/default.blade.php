<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../favicon.ico">
        <title>Starter Template for Bootstrap 3</title>

        <link href="//fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/vendor/bootstrap3/bootstrap.css') }}" rel="stylesheet">
        <style>
            body {
                padding-top: 50px;
            }
            .starter-template {
                padding: 40px 15px;
                text-align: center;
            }
        </style>
        {{--<link href="starter-template.css" rel="stylesheet">--}}
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
            <script src="{{ asset('js/vendor/html5shiv.min.js') }}" type="text/javascript"></script>
        <![endif]-->
        <!--<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>-->
    </head>
    <body>
        @include('bootstrap3.partial.menu')
        <div class="container">
            <div class="starter-template">
                <h1>Bootstrap starter template</h1>
                <p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>
            </div>
            @yield("content")
        </div>

        <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
        <script src="{{ asset('js/vendor/bootstrap3/bootstrap.js') }}" type="text/javascript"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        {{--<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>--}}
    </body>
</html>

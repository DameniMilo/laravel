<!DOCTYPE html>
<html>
    <head>
        <title>Bootstrap 3</title>

        <link href="//fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link href="{{ asset('public/css/vendor/bootstrap3/bootstrap.css') }}" rel="stylesheet">
        <link href="{{ asset('public/css/vendor/bootstrap3/bootstrap-responsive.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="container-fluid">
            @yield("content")
        </div>

        <script src="{{ asset('public/js/vendor/bootstrap3/bootstrap.js') }}" type="text/javascript"/>
        <script src="{{ asset('public/js/app.js') }}" type="text/javascript"/>
    </body>
</html>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Bootstrap 2</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <link href="//fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/vendor/bootstrap2/bootstrap.css') }}" rel="stylesheet">
        <link href="{{ asset('css/vendor/bootstrap2/bootstrap-responsive.css') }}" rel="stylesheet">
        <style>
            body {
                padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
            }
        </style>
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="../assets/js/html5shiv.js"></script>
        <![endif]-->
    </head>
    <body>
        @include('fragment/bootstrap2/menu')
        <div class="container-fluid">
            <h1>Bootstrap starter template</h1>
            <p>Use this document as a way to quick start any new project.<br> All you get is this message and a barebones HTML document.</p>
            @yield("content")
        </div>

        <script src="{{ asset('js/vendor/bootstrap2/bootstrap.js') }}" type="text/javascript"/>
        <script src="{{ asset('js/app.js') }}" type="text/javascript"/>
    </body>
</html>

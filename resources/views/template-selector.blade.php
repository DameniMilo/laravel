<!DOCTYPE html>
<html>
    <head>
        <title>Laravel Test Project</title>

        <link href="//fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                height: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            iframe {
                height: 100%;
                overflow:hidden;
                position: absolute;
            }
        </style>
    </head>
    <body>
        <iframe width="50%" height="100%" marginheight="0" marginwidth="0" frameborder="0"
                src="{{ url('/bootstrap2') }}">

        </iframe>
        <iframe width="50%" height="100%" style="float: right;left: 50%;" marginheight="0" marginwidth="0" frameborder="0"
                src="{{ url('/bootstrap3') }}">

        </iframe>
    </body>
</html>

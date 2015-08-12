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
        <h1>Choose Bootstrap template version you wanna use</h1>
        <ul>
            <li>
                <a class="btn btn-primary" href="{{ url('/bootstrap2') }}">
                    Bootstrap 2.3.2
                </a>
            </li>
            <li>
                <a class="btn btn-primary" href="{{ url('/bootstrap3') }}">
                    Bootstrap 3.x
                </a>
            </li>
        </ul>
        {{--<iframe width="50%" height="100%" marginheight="0" marginwidth="0" frameborder="0"--}}
                {{--src="{{ url('/bootstrap2') }}">--}}

        {{--</iframe>--}}
        {{--<iframe width="50%" height="100%" style="float: right;left: 50%;" marginheight="0" marginwidth="0" frameborder="0"--}}
                {{--src="{{ url('/bootstrap3') }}">--}}

        {{--</iframe>--}}
    </body>
</html>

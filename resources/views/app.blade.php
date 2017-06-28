<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel White Screen</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .is-flex {
                display: flex;
            }

            .is-flex-column {
                flex-flow: column;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .subtitle {
                font-size: 24px;
                font-weight: 500;
            }

            .links > a {
                display: inline-block;
                color: #636b6f;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .cause {
                padding: 0.55rem 1rem 0.5rem;
            }

            .cause:hover {
                color: #fff;
                background: #636b6f;
                border-radius: 0.25rem;
            }

            .content {
                margin-top: auto;
                margin-bottom: auto;
            }

            footer {
                margin-top: auto;
                padding: 0.7rem 0.5rem 0.6rem;
                font-size: 14px;
                width: 100%;
                text-align: center;
                font-weight: 500;
                color: #b0b3bd;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height is-flex is-flex-column">
            @yield("content")

            <footer>Here you go, Matt.</footer>
        </div>
    </body>
</html>

<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel White Screen</title>

        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="{{ mix("/css/app.css") }}" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="flex-center position-ref full-height is-flex is-flex-column">
            @yield("content")

            <footer>Here you go, Matt.</footer>
        </div>
    </body>
</html>

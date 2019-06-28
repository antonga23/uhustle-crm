<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token()}}">
        <title>uhustle</title>
        <!-- Fonts -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet'
        type='text/css'>
        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

        <!-- Styles -->
        <link href="{{asset('css/custom.css')}}" rel="stylesheet">
        <link href="{{asset('css/app.css')}}" rel="stylesheet">
        <link href="{{asset('assets/aos/aos.css')}}" rel="stylesheet">
    </head>
    <body>
        <div id="app">
            <div class="">
                <landing-page></landing-page>
            </div>
        </div>
        <script src="{{ asset('js/app.js') }} "></script>
        <script src="{{ asset('assets/aos/aos.js') }}"></script>
        <script>
            AOS.init();
        </Script>
    </body>
</html>

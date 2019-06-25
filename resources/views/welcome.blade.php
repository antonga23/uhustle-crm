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
        <link href="{{asset('css/app.css')}}" rel="stylesheet">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    </head>
    <body>
            <div id="app">
                <div class="container">
                    <landing-page></landing-page>
                </div>
            </div>
            <script src="{{asset('js/app.js')}}"></script>
    </body>
    <script>
          AOS.init();
        //     function animateValue(id, start, end, duration) {
        //         var range = end - start;
        //         var current = start;
        //         var increment = end > start? 1 : -1;
        //         var stepTime = Math.abs(Math.floor(duration / range));
        //         var obj = document.getElementById(id);
        //         var timer = setInterval(function() {
        //             current += increment;
        //             obj.innerHTML = current;
        //             if (current == end) {
        //                 clearInterval(timer);
        //             }
        //         }, stepTime);
        //     }
        //     animateValue("value", 290000, 321978, 50000);
    </Script>
</html>

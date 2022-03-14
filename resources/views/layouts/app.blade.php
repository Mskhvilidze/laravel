<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
  
    <link rel="dns-prefetch" href="{{asset('//fonts.gstatic.com')}}">
    <link href="{{asset('https://fonts.googleapis.com/css?family=Nunito')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('../resources/css/app.css')}}"> 
    <link rel="stylesheet" href="{{asset('../resources/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('https://stackpath.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css')}}">
    <script src="{{asset('//code.jquery.com/jquery-1.11.1.min.js')}}"></script>
    <script src="{{asset('https://cdn.ckeditor.com/ckeditor5/16.0.0/classic/ckeditor.js')}}"></script>
</head>
<body>
    <div id="app">
        @include('inc.navbar')
        @include('inc.messages')
        
            @yield('content')
            <script src="{{asset('../resources/js/myApp.js')}}"></script>
            <script src="{{asset('https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js')}}"></script>
            <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
            @yield('ck-editor')
        
    </div>
</body>
<footer>
    <div class="footer" id="footer-jump">
        <label for="footer-icon">Rechtliches</label>    
            <ul class="footer-block footUL">
                <li><a href="./rechtliches.php#impressum">Impressum</a></li> &nbsp;|&nbsp;
                <li><a href="./rechtliches.php#datenschutzerklaerung">Datenschutzerklärung</a></li>&nbsp;|&nbsp;
                <li><a href="./rechtliches.php#disclaimer">Disclaimer</a></li>&nbsp;|&nbsp;
                <li><a href="./rechtliches.php#nutzungsbedingungen">Nutzungsbedingungen</a></li>
            </ul>
    </div>
</footer>
</html>

<!--
    <link rel="stylesheet" id=bootstrap-css href="{{asset('//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css')}}">
    <script src="{{asset('//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js')}}"></script>
-->
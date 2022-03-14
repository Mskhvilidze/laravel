<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('../resources/css/app.css')}}"> 
        <link rel="stylesheet", href="{{asset('../resources/css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{asset('https://stackpath.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css')}}">
        <link href="{{asset('../resources/js/bootstrap.js')}}">
        <link href="{{asset('../resources/js/app.js')}}">
        <title>{{config('app.name', 'LSAPP')}}</title>
        <script src="https://cdn.ckeditor.com/ckeditor5/16.0.0/classic/ckeditor.js"></script>
    </head>
    <!-- Body -->
    <body>
        @include('inc.navbar')
        <div class="container">
            @include('inc.messages')
            @yield('content')
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

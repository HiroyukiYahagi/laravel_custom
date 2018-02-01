<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="auth-type" content="{{ session('auth.type') }}">
    <meta name="auth-token" content="{{ session('auth.data.access_token') }}">
    <meta name="refresh-token" content="{{ session('auth.data.refresh_token') }}">

    <title>
        @if(isset($title)){{ $title." | "}}@endif{{ config('app.title', 'Laravel') }}
    </title>

    <meta name="description" content="@if(isset($description)){{$description}}@else{{ config('app.description', '') }}@endif">

    @yield('link')

    <meta name="google-site-verification" content="0DwSPEsV2F7_a7DCiMfIAhvA-wTT78D7sxZKESu6eac">

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    <link href="{{ asset('lib/timeline/style.css') }}" rel="stylesheet">
</head>
<body>
    
    <div class="uk-offcanvas-content">
        <div class="base"> 
            @yield('base')
        </div>
        @include('layouts.footer')
    </div>

    <div class="uk-position-small uk-position-fixed uk-position-bottom-right uk-position-z-index">
        <a uk-scroll class="uk-icon-button">
            <span uk-icon="icon: triangle-up"></span>
        </a>
    </div>

    @if(isset($errors) || session("success") )
    <div class="uk-position-fixed uk-position-bottom-center uk-width-large@s" style="z-index: 1000;">
    @foreach ($errors->all() as $message)
        <div class="uk-display-inline-block uk-width-1-1 uk-margin-small uk-alert-danger" uk-alert>
            <a class="uk-alert-close" uk-close></a>
            <p>
                {{$message}}
            </p>
        </div>
    @endforeach
    @if ( session("success"))
        <div class="uk-display-inline-block uk-width-1-1 uk-margin-small uk-alert-success" uk-alert>
            <a class="uk-alert-close" uk-close></a>
            <p>
                {{session("success")}}
            </p>
        </div>
    @endif
    </div>
    @endif

    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>

    <!-- uikit -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.38/js/uikit.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.38/js/uikit-icons.min.js"></script>

    <!-- lazy-load -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/layzr.js/2.0.2/layzr.min.js"></script>

    @yield('script')

    <script src="{{ asset('lib/timeline/main.js') }}"></script>

    <!-- custom js -->
    <script src="{{ mix('js/app.js') }}"></script>


    @if( config("app.env") == "production" )
    <script async="" src="//www.google-analytics.com/analytics.js"></script>
    <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-79447633-1', 'auto');
    ga('send', 'pageview');
    </script>
    @endif

</body>
</html>

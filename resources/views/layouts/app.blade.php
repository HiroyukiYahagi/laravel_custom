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
        @if(isset($title))
           {{ $title." | "}} 
        @endif
        {{ config('app.name', 'Laravel') }}
    </title>

    <meta name="description" content="@if(isset($description)){{$description}}@else{{ config('app.description', '') }}@endif">

    @yield('link')

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

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

    @if(isset($errors))
    <div class="uk-position-fixed uk-position-bottom-center uk-width-large@s">
    @foreach ($errors->all() as $message)
        <div class="uk-display-inline-block uk-width-1-1 uk-margin-small uk-alert-danger" uk-alert>
            <a class="uk-alert-close" uk-close></a>
            <p>
                {{$message}}
            </p>
        </div>
    @endforeach
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

    <!-- custom js -->
    <script src="{{ mix('js/app.js') }}"></script>

</body>
</html>

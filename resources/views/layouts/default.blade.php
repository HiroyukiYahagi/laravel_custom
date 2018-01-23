@extends('layouts.app')

@section('base')

<nav class="uk-navbar-container uk-navbar-transparent uk-overlay-default" uk-navbar uk-sticky="show-on-up: true">
    <div class="uk-navbar-center">
        <a class="uk-navbar-item uk-logo" href="{{route('root.index')}}">
            test
        </a>
    </div>
    <div class="uk-navbar-right">
        <div class="uk-navbar-item uk-visible@m">
            <a class="uk-button uk-button-default" href="{{ route('root.index') }}">
                ログイン
            </a>
        </div>

        <ul class="uk-navbar-nav uk-hidden@m">
            <li>
                <div class="uk-navbar-item">
                    <a href="#" class="uk-link-reset" uk-toggle="target: #menu-offcanvas;">
                        <span uk-navbar-toggle-icon></span>
                    </a>
                </div>
            </li>
        </ul>
    </div>
</nav>

<div id="menu-offcanvas" uk-offcanvas="overlay: true;flip: true;">
    <div class="uk-offcanvas-bar">
        <div class="uk-margin">
            <h4 class="uk-margin-small">
                カテゴリ
            </h4>
        </div>
    </div>
</div>

<div class="uk-section uk-section-default" uk-height-viewport="offset-bottom: 20">
    <div class="uk-container">
        @yield('content')
    </div>
</div>

<div class="uk-position-small uk-position-fixed uk-position-bottom-left uk-position-z-index uk-hidden@s">
    <a href="tel:{{config('app.company_tel')}}" class="uk-button uk-button-danger" style="opacity: 0.8;">
        <span uk-icon="icon: whatsapp"></span>
        {{config('app.company_tel')}}
    </a>
</div>

@endsection

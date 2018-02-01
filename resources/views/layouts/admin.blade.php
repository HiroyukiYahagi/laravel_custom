@extends('layouts.app')

@section('base')

<nav class="uk-navbar-container uk-navbar-transparent uk-overlay-default" uk-navbar uk-sticky="show-on-up: true">
    <div class="uk-navbar-center">
        <a class="uk-navbar-item uk-logo" href="{{route('root.index')}}">
            つくラボ
        </a>
    </div>
    <div class="uk-navbar-right">
        <div class="uk-navbar-item">
            <a class="uk-button uk-button-primary uk-border-rounded" href="{{ route('admin.logout') }}">
                ログアウト
            </a>
        </div>
    </div>
</nav>

<div class="uk-section uk-section-default" uk-height-viewport="offset-bottom: 20">
    <div class="uk-container">
        @yield('content')
    </div>
</div>

@endsection

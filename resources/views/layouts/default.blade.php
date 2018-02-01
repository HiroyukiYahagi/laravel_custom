@extends('layouts.app')

@section('base')

<nav class="uk-navbar-container uk-navbar-transparent uk-overlay-default" uk-navbar uk-sticky="show-on-up: true">
    <div class="uk-navbar-left">
        <a class="uk-navbar-item" href="{{route('root.index')}}">
            <img src="{{asset('img/logo.png')}}" class="nav-logo"/>
        </a>
    </div>
    <div class="uk-navbar-right">
        <div class="uk-navbar-item">
            <a class="uk-button uk-button-primary uk-border-rounded" href="#contact-modal" uk-toggle>
                相談する
            </a>
        </div>
    </div>
</nav>

@yield('content')

@endsection

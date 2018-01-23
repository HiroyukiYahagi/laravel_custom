@extends('layouts.default')

@section('content')

<div class="uk-section uk-section-default" uk-height-viewport="offset-bottom: 20">
    <div class="uk-container">

        <h1 class="uk-text-center">
            このページにはアクセスできません。
        </h1>
        <p class="uk-text-center">
            大変申し訳ございませんが、このページにはアクセスできません。<br/>
            <br/>
            <a href="{{route('articles.search')}}">記事検索ページ</a>から他の公開された記事を検索できますので、<br/>
            そちらからあたらめてお探しください。
        </p>
        <div class="uk-margin uk-text-center">
            <a class="uk-button uk-button-large uk-button-default uk-width-large@s" href="{{route('root.index')}}">
                トップページへ戻る
            </a>
        </div>
    </div>
</div>

@endsection

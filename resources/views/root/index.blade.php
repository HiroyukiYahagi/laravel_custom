@extends('layouts.default')

@section('content')

<div class="uk-section uk-section-large">
    <div class="uk-container">
        <div uk-grid class="uk-margin-large uk-flex-bottom">
            <div class="uk-width-2-3@s">
                <div class="uk-heading-hero uk-text-center">
                    超特急開発<br/>
                    しませんか？
                </div>
                <h1 class="uk-text-center  uk-text-nowrap">
                    業界史上最速<wbr/>システム開発
                </h1>
            </div>
            <div class="uk-width-expand">
                <img src="{{asset('img/doctoryellow.png')}}">
            </div>
        </div>
        <div uk-grid class="uk-margin-large uk-flex-center">
            <div class="uk-width-xlarge@s">
                <a class="uk-button uk-button-primary uk-button-large uk-border-rounded uk-width-1-1 uk-box-shadow-medium" href="#contact-modal" uk-toggle>
                    今すぐ無料で事業相談する
                </a>
            </div>
        </div>
    </div>
</div>

<div class="uk-section uk-section-large uk-section-muted">
    <div class="uk-container uk-text-center">
        <h2 class="uk-margin-large uk-heading-line uk-text-center uk-text-primary"><span class="uk-text-nowrap">
            事業の立ち上げ、<wbr>請け負います！
        </span></h2>

        <p class="uk-margin">
            ベンチャーや大企業、業界を追わず、<br />
            <span class="uk-h3 uk-text-nowrap">
                ITを活用した<wbr/>"新規事業の立ち上げ"
            </span><br/>
            が目下の課題となっています。
        </p>
        <p class="uk-margin">
            しかし、システム開発を伴う<br />
            <span class="uk-h3 uk-text-nowrap">
                十分な初期資金と<wbr/>一定以上の時間
            </span><br/>
            がかかり足踏みしてしまっている方が多く、<br/>
            <br/>
            スキルセットが事業内容とは異なるため、<br/>
            外注や新規採用を目指し、<br/>
            <span class="uk-h3">
                より複雑化してしまう
            </span><br/>
            といった問題点があります。
        </p>
    </div>
</div>

<div class="uk-section uk-section-large">
    <div class="uk-container uk-text-center">
        <h2 class="uk-heading-line uk-text-center uk-text-primary"><span class="uk-text-nowrap">
            つくラボと<wbr />やりましょう！
        </span></h2>
        <p class="uk-margin-large">
            つくラボなら<br />
            多数の事業立ち上げ経験をもとに最短でリリースまでドライブし、<br/>
            <br/>
            <span class="uk-h3">
                ワンストップでシステム開発を請け負います！
            </span><br/>
        </p>
        <div uk-grid class="uk-margin-large uk-flex-center">
            <div class="uk-width-xlarge@s">
                <a class="uk-button uk-button-primary uk-button-large uk-border-rounded uk-width-1-1 uk-box-shadow-medium" href="#contact-modal" uk-toggle>
                    今すぐ無料で事業相談する
                </a>
            </div>
        </div>
    </div>
</div>


<div class="uk-section uk-section-large uk-section-muted">
    <div class="uk-container">
        <h2 class="uk-text-center uk-text-primary">
            つくラボの事業
        </h2>
        <div class="uk-margin-large uk-grid-match" uk-grid>
            <div class="uk-width-1-3@s">
                <div class="uk-card uk-card-default uk-card-body">
                    <h3 class="uk-text-center uk-text-green">
                        Total Consulting
                    </h3>
                    <p>
                        新規事業の立ち上げやモダンな価値観への方向転換に参画し、ユーザのベネフィットと運営側のベネフィットの最大化に注力します。<br/>
                        <br/>
                        一年間で10以上の多岐にわたるサービスリリースを行い、
                        それらのノウハウが蓄積されています。<br/>
                        少人数の優秀な人材のみで運営しているため、密に連携し本当に最新の知識を共有できます。
                    </p>
                </div>
            </div>

            <div class="uk-width-1-3@s">
                <div class="uk-card uk-card-default uk-card-body">
                    <h3 class="uk-text-center uk-text-red">
                        Fast Development
                    </h3>
                    <p>
                        「新規事業のアイデア」からリリースまでを請け負い、最短で実現化します。<br/>
                        <br/>
                        メンバーそれぞれが、ちょっとした事業のアイデアから顧客体験・顧客価値の最大化したシステムの開発を請け負っています。<br/>
                        UXを理解した上でワンストップで実現までたどり着けるため、コミュニケーションによるロスをなくすことができます。
                    </p>
                </div>
            </div>

            <div class="uk-width-1-3@s">
                <div class="uk-card uk-card-default uk-card-body">
                    <h3 class="uk-text-center uk-text-yellow">
                        Acceralator Education
                    </h3>
                    <p>
                        事業をドライブできるエンジニアを育成します。<br/>
                        <br/>
                        事業計画からデザイン・開発まで全てを請け負えるスキルは、大きな組織に所属すると培えません。<br/>
                        個人でここまで培った経験をもとに、真のフルスタックプレーヤを育成できます。
                    </p>
                </div>
            </div>
        </div>

        <div uk-grid class="uk-margin-large uk-flex-center">
            <div class="uk-width-xlarge@s">
                <a class="uk-button uk-button-primary uk-button-large uk-border-rounded uk-width-1-1 uk-box-shadow-medium" href="#contact-modal" uk-toggle>
                    今すぐ無料で事業相談する
                </a>
            </div>
        </div>

    </div>
</div>

<div class="uk-section uk-section-large">
    <div class="uk-container">

        <div uk-grid class="uk-margin-large">
            <div class="uk-width-1-2@m">
                <h2 class="uk-text-center uk-text-green uk-text-nowrap">
                    つくラボだから<wbr/>できること
                </h2>
                <div class="uk-margin-large" uk-grid>
                    <div class="uk-width-auto">
                        <span class="uk-text-green" uk-icon="icon:check;ratio:2;"></span>
                    </div>
                    <div class="uk-width-auto">
                        <h3 class="uk-margin-remove uk-text-green">
                            業界史上最速リリース
                        </h3>
                    </div>
                    <div class="uk-width-1-1">
                        <p>
                            UXデザインからフロントエンド・バックエンド・サーバ構築まで、基本的には各ポジションにおける十分なスキルを持った1人のメンバーで担当します。<br/>
                            <br/>
                            余計なコミュニケーションが発生しないため、最速でリリースまでたどり着きます。<br/>
                            ワンストップで事業アイデアから開発することは他社ではできません。
                        </p>
                    </div>
                </div>
                <div class="uk-margin-large" uk-grid>
                    <div class="uk-width-auto">
                        <span class="uk-text-green" uk-icon="icon:check;ratio:2;"></span>
                    </div>
                    <div class="uk-width-auto">
                        <h3 class="uk-margin-remove uk-text-green">
                            初期費用0円~の開発
                        </h3>
                    </div>
                    <div class="uk-width-1-1">
                        <p>
                            業界初のレベニューシェア型開発を請け負っています。<br/>
                            事業の売り上げをシェアするため、初期費用は0円からご相談可能です。
                        </p>
                    </div>
                </div>

            </div>
            <div class="uk-width-1-2@m">
                <h2 class="uk-text-center uk-text-red  uk-text-nowrap">
                    つくラボが<wbr />やらないこと
                </h2>
                <div class="uk-margin-large" uk-grid>
                    <div class="uk-width-auto">
                        <span class="uk-text-red" uk-icon="icon:close;ratio:2;"></span>
                    </div>
                    <div class="uk-width-auto">
                        <h3 class="uk-text-red uk-margin-remove">
                            孫請け開発
                        </h3>
                    </div>
                    <div class="uk-width-1-1">
                        <p>
                            エンドユーザと密に連携してワンストップで取り組むことが、最速でリリースする最も重要なポイントだと考えています。<br/>
                            <br/>
                            そのため、事業の最終決定権を持たない請負会社等を通した開発はお受けできません。
                        </p>
                    </div>
                </div>
                <div class="uk-margin-large" uk-grid>
                    <div class="uk-width-auto">
                        <span class="uk-text-red" uk-icon="icon:close;ratio:2;"></span>
                    </div>
                    <div class="uk-width-auto">
                        <h3 class="uk-text-red uk-margin-remove">
                            事業への部分的な関与
                        </h3>
                    </div>
                    <div class="uk-width-1-1">
                        <p>
                            事業全体の顧客体験を最大化から個々の機能に対する要求が発生すると考えており、
                            全体像の把握できない部分的な関与は恐縮ですがお断りしています。
                        </p>
                    </div>
                </div>

            </div>
        </div>

        <div uk-grid class="uk-margin-large uk-flex-center">
            <div class="uk-width-xlarge@s">
                <a class="uk-button uk-button-primary uk-button-large uk-border-rounded uk-width-1-1 uk-box-shadow-medium" href="#contact-modal" uk-toggle>
                    今すぐ無料で事業相談する
                </a>
            </div>
        </div>
    </div>
</div>

<div class="uk-section uk-section-large uk-section-default">
    <div class="uk-container">
        <h2 class="uk-text-center uk-text-primary uk-text-nowrap">
            つくラボの<wbr/>メンバー
        </h2>
        <div uk-grid class="uk-margin-large">
            <div class="uk-width-medium@m uk-text-center">
                <div class="image-wrapper uk-border-circle uk-width-medium uk-display-inline-block">
                    <img src="{{asset('img/face.jpg')}}">
                </div>
            </div>
            <div class="uk-width-expand">
                <h3>
                    矢作 裕之
                </h3>
                <p>
                    2014年 東京大学工学部卒<br/>
                    同年 日本オラクル株式会社でITコンサルタントとして3年半サーバサイドを中心としたコンサルティングに関与。<br/>
                    2017年エンジニアとして独立しつくラボを設立。<br/>
                    <br/>
                    株式会社バイオフィリア CTO<br/>
                    つくラボ代表<br/>
                    インフラエンジニア、サーバエンジニア、Webデザイナー、コンサルタント、起業家、個人投資家、
                </p>
            </div>
        </div>
    </div>
</div>


<div class="uk-section uk-section-large uk-section-muted">
    <div class="">
        <h2 class="uk-text-center uk-text-primary uk-text-nowrap">
            つくラボの<wbr/>ポートフォリオ
        </h2>
        <section id="cd-timeline" class="cd-container">

            @foreach($products as $product)
            <div class="cd-timeline-block">
                <div class="cd-timeline-img type_{{$product->product_type_id}}">
                    <img src="img/cd-icon-picture.svg" alt="Picture">
                </div>

                <div class="cd-timeline-content">
                    <h2 class="type_text_{{$product->product_type_id}}">
                        {{$product->title}}
                    </h2>
                    <p>
                        @lined($product->description)
                    </p>
                    <div class="uk-margin uk-height-small image-wrapper">
                        <img src="{{$product->image_url}}" />
                    </div>
                    <a href="{{$product->url}}" target="_blank" class="uk-button-primary uk-button uk-border-rounded">
                        サイトを見る
                    </a>
                    <span class="cd-date">
                        @date($product->started_at)
                    </span>
                </div> 
            </div>
            @endforeach
        </section> 

    </div>
</div>

<div id="contact-modal" class="uk-modal-full" uk-modal>
    <div class="uk-modal-dialog">
        <button class="uk-modal-close-full uk-close-large" type="button" uk-close></button>
        <div uk-height-viewport uk-overflow-auto class="uk-padding-large">
            <div class="uk-flex-center" uk-grid>
                <div class="uk-width-xlarge@s">
                    <h3>
                        お問い合わせフォーム
                    </h3>
                    <form action="{{route('contacts.add')}}" method="POST">
                        {{ csrf_field() }}
                        <div class="uk-margin">
                            <label class="uk-form-label" for="email">
                                メールアドレス
                            </label>
                            <div class="uk-form-controls">
                                <input class="uk-input" id="email
                                " type="email" name="email" required>
                            </div>
                        </div>
                        <div class="uk-margin">
                            <label class="uk-form-label" for="description">
                                問い合わせ内容
                            </label>
                            <div class="uk-form-controls">
                                <textarea class="uk-textarea uk-height-medium" id="description
                                " name="description" required></textarea>
                            </div>
                        </div>
                        <div class="uk-margin">
                            <button class="uk-button uk-button-large uk-border-rounded uk-button-primary uk-width-1-1">
                                今すぐ無料で事業相談する
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
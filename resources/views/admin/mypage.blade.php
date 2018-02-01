@inject("productTypeService", "App\Services\ProductTypeService")

@extends('layouts.admin')

@section('content')

<h1>
    プロダクト一覧
</h1>

<div class="uk-margin uk-grid-small uk-grid-match" uk-grid> 
    <div class="uk-width-1-3@m">
        <a class="uk-display-block uk-reset-link uk-card uk-card-primary uk-card-small uk-position-relative" href="#add-modal" uk-toggle>
            <div class="uk-position-center uk-text-center">
                <span uk-icon="icon:plus;ratio:3;"></span>
                <h3>追加</h3>
            </div>
        </a>
    </div>
    @foreach($products as $product)
    <div class="uk-width-1-3@m">
        <div class="uk-card uk-card-default uk-card-small">
            <div class="uk-card-media-top uk-height-small image-wrapper">
                <img src="{{$product->image_url}}" />
            </div>
            <div class="uk-card-body">
                <h3 class="uk-card-title">
                    {{$product->title}}
                </h3>
                <p>
                    @lined($product->description)
                </p>
            </div>
            <div class="uk-card-footer">
                <div class="uk-grid-small uk-flex-middle" uk-grid>
                    <div class="uk-width-expand">
                        @foreach($product->tags as $tag)
                        <span class="uk-label" style="background-color: {{$tag->color}}">
                            {{$tag->label}}
                        </span>
                        @endforeach
                    </div>
                    <div class="uk-width-auto">
                        <a class="uk-icon-button" uk-icon="icon: file-edit;" uk-toggle href="#edit-modal__{{$product->id}}"></a>

                        <form class="uk-inline uk-margin-small-left" action="{{route('admin.products.delete', ['product'=>$product])}}" method="POST" onsubmit="confirmDelete(event)">
                            {{ csrf_field() }}
                            <button class="uk-icon-button uk-button-danger" type="submit" uk-icon="icon: trash;">
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            <div id="edit-modal__{{$product->id}}" class="uk-flex-top" uk-modal>
                <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">
                    <button class="uk-modal-close-default" type="button" uk-close></button>
                    <form action="{{route('admin.products.edit', ['product' => $product])}}" method="POST">
                        {{ csrf_field() }}
                        <div class="uk-grid-small uk-flex-center" uk-grid>
                            <div class="uk-width-1-1">
                                <label class="uk-form-label" for="product_type_id">
                                    タイトル
                                </label>
                                <div class="uk-form-controls">
                                    <select id="product_type_id" class="uk-select" name="product_type_id">
                                        <option>
                                            選択してください
                                        </option>
                                        @foreach($productTypeService->getAll() as $productType )

                                        <option value="{{$productType->id}}" {{
                                            $productType->id == $product->product_type_id ? "selected" : null
                                        }} >
                                            {{$productType->label}}
                                        </option>
                                        
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="uk-width-1-1">
                                <label class="uk-form-label" for="title">
                                    タイトル
                                </label>
                                <div class="uk-form-controls">
                                    <input class="uk-input" id="title" name="title" type="text" value="{{$product->title}}" required>
                                </div>
                            </div>
                            <div class="uk-width-1-1">
                                <label class="uk-form-label" for="url">
                                    サイトのURL
                                </label>
                                <div class="uk-form-controls">
                                    <input class="uk-input" id="url" name="url" type="text" value="{{$product->url}}" required>
                                </div>
                            </div>
                            <div class="uk-width-1-1">
                                <label class="uk-form-label" for="image_url">
                                    画像URL
                                </label>
                                <div class="uk-form-controls">
                                    <input class="uk-input" id="image_url" name="image_url" type="text" value="{{$product->image_url}}" required>
                                </div>
                            </div>
                            <div class="uk-width-1-2">
                                <label class="uk-form-label" for="started_at">
                                    開発開始(yyyy-mm-dd)
                                </label>
                                <div class="uk-form-controls">
                                    <input class="uk-input" id="started_at" name="started_at" type="date" value="@date($product->started_at)" required>
                                </div>
                            </div>
                            <div class="uk-width-1-2">
                                <label class="uk-form-label" for="released_at">
                                    公開日(yyyy-mm-dd)
                                </label>
                                <div class="uk-form-controls">
                                    <input class="uk-input" id="released_at" name="released_at" type="date" value="@date($product->released_at)" required>
                                </div>
                            </div>
                            <div class="uk-width-1-1">
                                <label class="uk-form-label" for="description">
                                    詳細
                                </label>
                                <div class="uk-form-controls">
                                    <textarea class="uk-textarea uk-height-small" id="description" name="description" required>{{$product->description}}</textarea>
                                </div>
                            </div>
                            <div class="uk-width-1-1">
                                <label class="uk-form-label" for="tags">
                                    タグ(カンマ区切り)
                                </label>
                                <div class="uk-form-controls">
                                    <input class="uk-input" id="tags" name="tags" type="text" value="{{$product->tags->reduce(function ($carry, $item) {
                                        return $carry.$item->label.',';
                                    }, '')}}" required>
                                </div>
                            </div>
                            <div class="uk-width-auto">
                                <a class="uk-button uk-button-muted uk-modal-close">
                                    キャンセル
                                </a>
                            </div>
                            <div class="uk-width-auto">
                                <button class="uk-button uk-button-primary" type="submit" >
                                    保存する
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
    @endforeach
</div>

<div id="add-modal" class="uk-flex-top" uk-modal>
    <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">
        <button class="uk-modal-close-default" type="button" uk-close></button>
        <form action="{{route('admin.products.add')}}" method="POST">
            {{ csrf_field() }}
            <div class="uk-grid-small uk-flex-center" uk-grid>
                <div class="uk-width-1-1">
                    <label class="uk-form-label" for="url">
                        サイトのURL
                    </label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="url" name="url" type="text" placeholder="http://...">
                    </div>
                </div>
                <div class="uk-width-auto">
                    <a class="uk-button uk-button-muted uk-modal-close">
                        キャンセル
                    </a>
                </div>
                <div class="uk-width-auto">
                    <button class="uk-button uk-button-primary" type="submit" >
                        追加する
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection

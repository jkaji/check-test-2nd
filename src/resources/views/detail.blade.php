@extends('layouts.app')

@section('css')
<link rel = "stylesheet" href = "{{ asset('css/detail.css') }}">
@endsection

@section('content')

<div class = "product-detail">
  <form class = "form" action = "/products/{productld}/update" method = "post">
    @csrf
    <div class = "product-detail__inner">
        <div class = "product-detail__title">
            <span class = "title__item">商品一覧</span>
            <span class = "title__joint"> ">" </span>
            <input class = "title__item--input" type = "text" name = "name" placeholder = "キウイ"/>
        </div>

        <div class = "product-detail__image">
            <div class = "image__input">
                <input type = "text" name = "image" placeholder = <img src = "storage/img/kiwi.png" alt = "代替テキスト"> />
            </div>
            <p class = "image__selection">ファイルを選択</p>
            <span class = "image-type">image01.jpeg</span>
            <div class = "form__error">
                @error('image')
                {{ $message }}
                @enderror
            </div>
        </div>

        <div class = "product-detail__content">
            <div class = "content__item">
                <span class = "item__label">商品名</span>
                <input class = "item__text" type = "text" name = "name" placeholder = "キウイ"/>
            </div>
            <div class = "form__error">
                @error('name')
                {{ $message }}
                @enderror
            </div>
            <div class = "content__item">
                <span class = "item__label">値段</span>
                <input class = "item__text" type = "int" name = "price" placeholder = "800"/>
            </div>
            <div class = "form__error">
                @error('price')
                {{ $message }}
                @enderror
            </div>
            <div class = "content__item">
                <span class = "item__label">季節</span>
                    <label>
                        <input type="checkbox" name="season[]" value="春" {{ is_array(old("season")) && in_array("春", old("season"), true)? ' checked' : '' }}>春
                    </label>
                    <label>
                        <input type="checkbox" name="season[]" value="夏" {{ is_array(old("season")) && in_array("夏", old("season"), true)? ' checked' : '' }}>夏
                    </label>
                    <label>
                        <input type="checkbox" name="season[]" value="秋" {{ is_array(old("season")) && in_array("秋", old("season"), true)? ' checked' : '' }}>秋
                    </label>
                    <label>
                        <input type="checkbox" name="season[]" value="冬" {{ is_array(old("season")) && in_array("冬", old("season"), true)? ' checked' : '' }}>冬
                    </label>
            </div>
            <div class = "form__error">
                @error('season')
                {{ $message }}
                @enderror
            </div>
        </div>

        <div class = "product-detail__description">
            <div class = "description__item">
                <span class = "item__label">商品説明</span>
                <textarea class = "item__textarea" name = "description" placeholder = "爽やかな香りと上品な甘みが特徴的なキウイは大人から子どもまで大人気のフルーツです。疲れた脳や体のエネルギ―補給にも最適の商品です。もぎたてフルーツのスムージーをお召し上がりください！"></textarea>
            </div>
            <div class = "form__error">
                @error('description')
                {{ $message }}
                @enderror
            </div>
        </div>

        <div class = "product-detail__button">
            <a class = "btn-return" href="/products">
                戻る
            </a>
            <button class = "btn-store" type = "submit">変更を保存</button>
        </div>

        <div class = "product-detail__icon">
            <button class = "icon-delete" type = "submit" name = "delete"><img src = "storage/img/ごみ箱のフリーアイコン.jpeg" alt = "削除"></button>
        </div>
    </div>
  </form>
</div>



@extends('layouts.app')

@section('css')
<link rel = "stylesheet" href = "{{ asset('css/register.css') }}">
@endsection

@section('content')

<div class = "product-register">
    <div class = "product-register__inner">
        <div class = "inner__heading">
            <h2>商品登録</h2>
        </div>

        <form class = "form" action = "/products/register" method = "post">
            @csrf
        <div class = "inner__content">
            <div class = "content__item">
                <div class = "item__title">
                    <span class = "item__title--label">商品名</span>
                    <span class = "item__title--required">必須</span>
                </div>
                <div class = "item__input--text">
                    <input type = "text" name = "name" placeholder = "商品名を入力" readonly/>
                </div>
                <div class = "form__error">
                    @error('name')
                    {{ $message }}
                    @enderror
                </div>
            </div>

            <div class = "content__item">
                <div class = "item__title">
                    <span class = "item__title--label">値段</span>
                    <span class = "item__title--required">必須</span>
                </div>
                <div class = "item__input--text">
                    <input type = "int" name = "price" placeholder = "値段を入力" readonly/>
                </div>
                <div class = "form__error">
                    @error('price')
                    {{ $message }}
                    @enderror
                </div>
            </div>

            <div class = "content__item">
                <div class = "item__title">
                    <span class = "item__title--label">商品画像</span>
                    <span class = "item__title--required">必須</span>
                </div>
                <div class = "item__image--selection">
                    <button class = "image__btn-selection" type = "submit" name = "image">ファイルを選択</button>
                </div>
                <div class = "form__error">
                    @error('image')
                    {{ $message }}
                    @enderror
                </div>
            </div>

            <div class = "content__item">
                <div class = "item__title">
                    <span class = "item__title--label">季節</span>
                    <span class = "item__title--required">必須</span>
                    <span class = "item__title--multiple">複数選択可</span>
                </div>
                <div class = "item__season--selection">
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
            </div>

            <div class = "content__item">
                <div class = "item__title">
                    <span class = "item__title--label">商品説明</span>
                    <span class = "item__title--required">必須</span>
                </div>
                <div class = "item__textarea">
                    <textarea name = "description" placeholder = "商品の説明を入力" readonly></textarea>
                </div>
                <div class = "form__error">
                    @error('description')
                    {{ $message }}
                    @enderror
                </div>
            </div>

            <div class = "register__button">
                <a class = "btn-return" href="/products">
                    戻る
                </a>
                <button class = "btn-store" type = "submit">登録</button>
            </div>
        </div>
        </form>
    </div>
</div>


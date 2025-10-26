@extends('layouts.app')

@section('css')
<link rel = "stylesheet" href = "{{ asset('css/index.css') }}" />
@endsection

@section('content')

<div class="container mx-auto px-4 py-8">
  <div class = "products-list__content">
    <div class = "products-list__heading">
        <h2>商品一覧</h2>
    </div>
    <div class = "products-list__add">
        <a href = "{{ route('product.register') }}">+商品を追加</a>
    </div>

    <div class = "form">
        <div class = "form__nav">
            <form class = "search-form" action = "/products/search" method = "get">
                @csrf
                <input class = "search-form__keyword-input" type = "text" name = "keyword" placeholder = "商品名で検索" value = "{{ request('keyword') }}">
                <div class = "search-form__actions">
                    <button class = "search-form-btn" type = "submit">検索</button>
                </div>

                <div class = "search-form__sort">
                    <label for = "sort-order">価格順で表示</label>
                    <select id = "sort-order" name ="sort-order">
                        <option value = "desc">高い順に表示</option>
                        <option value = "asc">低い順に表示</option>
                    </select>
                </div>
            </form>
        </div>

        <div class = "form__group">
            <div class = "grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($products as $product)
                <div class = "bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src = "{{ asset('storage/' . $product->image_path) }}" alt = "{{ $product->name }}" class = "w-full h-48 object-cover">
                    <div class = "p-4">
                        <h3 class = "text-xl font-semibold text-gray-800 mb-2">{{ $product->name }}</h3>
                        <span class = "text-2xl font-bold text-indigo-600">¥{{ number_format($product->price)}}</span>
                        <a href = "/products/{productld}" ></a>
                    </div>
                </div>
                @endforeach
            </div>
            <div class = "mt-8">
                {{ $products->links() }}
            </div>
        </div>
    </div>
  </div>
</div>
@endsection
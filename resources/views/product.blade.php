@extends('layouts.master')

@section('title', 'Товар')

@section('content')
<div class="my-menu-1">
<h1>{{ $product->name }}</h1>
<img width="400px" src="{{ Storage::url($product->image) }}">
</div>
<div class="my-menu">
    <h2><p>Цена: <b>{{ $product->price }} руб.</b></p></h2>
    <p>{{ $product->description }}</p>
    @if($product->isAvailable())
        <form action="{{ route('basket-add', $product) }}" method="POST">
            <button type="submit" class="btn btn-success" role="button">Добавить в корзину</button>
            @csrf
        </form>
    @else
        <span class="badge badge-dark">Не доступен</span>
        <br>
        <span>Сообщить мне, когда торт появится в наличии:</span>
        <div class="warning">
            @if($errors->get('email'))
                {!! $errors->get('email')[0] !!}
            @endif
        </div>
        <form method="POST" action="{{ route('subscription', $product) }}" class="my-menu-2">
            <div class="input-group">
                <input type="text" name="email" placeholder="Email"></input>
                <button class="btn btn-outline-secondary" type="submit">Отправить</button>
            </div>
        @csrf
        </form>
    @endif
</div>
@endsection

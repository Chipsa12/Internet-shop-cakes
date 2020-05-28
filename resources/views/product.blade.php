@extends('layouts.master')

@section('title', 'Товар')

@section('content')
    <h1>iPhone X 64GB</h1>
    <h2>{{ $product }}</h2>
    <p>Цена: <b>71990 руб.</b></p>
    <img width="600px" src="https://big-cake-house.ru/assets/cache/products/410/tortik-s-yagodnyim-dekorom_0x1080_9f9.jpg">
    <p>Отличный продвинутый телефон с памятью на 64 gb</p>
    <a class="btn btn-success" href="http://laravel-diplom-1.rdavydov.ru/basket/1/add">Добавить в корзину</a>
@endsection

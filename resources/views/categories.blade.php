@extends('layouts.master')

@section('title', 'Все категории')

@section('content')
    @foreach($categories as $category)
        <div class="panel">
            <a href="{{ route('category', $category->code) }}">
                <img width="50px" src="https://big-cake-house.ru/assets/cache/products/410/tortik-s-yagodnyim-dekorom_0x1080_9f9.jpg">
                <h2>{{ $category->name }}</h2>
            </a>
            <p>
                {{ $category->description }}
            </p>
        </div>
    @endforeach
@endsection

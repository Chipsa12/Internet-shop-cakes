
@extends('master')

@section('title', 'Все категории')

@section('content')
    <div class="starter-template">
        @foreach($categories as $category)
            <div class="panel">
                <a href="{{ route('category', $category->code) }}">
                    <img height="20px" src="https://big-cake-house.ru/assets/cache/products/410/tortik-s-yagodnyim-dekorom_0x1080_9f9.jpg">
                    <h2>{{ $category->name }}</h2>
                </a>
                <p>
                    {{ $category->description }}
                </p>
            </div>
        @endforeach
    </div>
@endsection

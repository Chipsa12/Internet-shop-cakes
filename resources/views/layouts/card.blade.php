<div class="col-sm-6 col-md-4">
    <div class="thumbnail">
        <img src="https://big-cake-house.ru/assets/cache/products/410/tortik-s-yagodnyim-dekorom_0x1080_9f9.jpg" alt="Cake">
        <div class="caption">
            <h3>{{ $product->name }}</h3>
            <p>{{ $product->price }} руб.</p>
            <p>
                <form action="{{ route('basket-add', $product) }}" method="POST">
                <button type="submit" class="btn btn-primary" role="button">В корзину</button>
                <a href="{{ route('product', [$product->category->code, $product->code]) }}" class="btn btn-default"
                   role="button">Подробнее</a>
                @csrf
            </form>
            </p>
        </div>
    </div>
</div>

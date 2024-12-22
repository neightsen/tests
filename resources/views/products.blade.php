<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>Список продуктов</h1>

@foreach ($products as $product)
    <div>
        <h2>{{ $product->name }}</h2>
        <p>Цена: {{ number_format($product->cost, 0, ',', ' ') }} ₽</p>
        
        @if ($product->amount == 0)
            <p>Нет в наличии</p>
        @else
            <p>Количество: {{ $product->amount }}</p>
        @endif
    </div>
@endforeach

</body>
</html>
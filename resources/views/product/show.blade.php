<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>{{ $product->name }}</h1>
    <p>{{ $product->amount }}</p>
    <p>Цена: {{ $product->cost }} ₽</p>

    <form action="{{ route('order.store', $product->id) }}" method="POST">
        @csrf
        <label for="quantity">Количество:</label>
        <input type="number" id="quantity" name="quantity" min="1" required>
        
        <button type="submit">Заказать</button>
    </form>

    <a href="/products">Перейти на страницу товара</a>
    
    @if(session('success'))
    <p style="color: green">{{ session('success') }}</p>
    @endif

</body>
</html>
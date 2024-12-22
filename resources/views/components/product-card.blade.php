<div class="product-card">
    <h2>{{ $name }}</h2>
    <p>Цена: {{ number_format($cost, 0, ',', ' ') }} ₽</p>
    <p>Количество: {{ $amount }}</p>

    @if ($amount == 0)
        <p>Нет в наличии</p>
    @endif
</div>
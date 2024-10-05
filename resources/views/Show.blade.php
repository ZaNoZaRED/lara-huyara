<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $product->name }}</title>
</head>
<body>
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4; /* Светлый фон */
    color: #333; /* Темный текст */
    margin: 0;
    padding: 20px;
}

.product-detail {
    background-color: #fff; /* Белый фон для деталей продукта */
    border-radius: 8px; /* Скругленные углы */
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Легкая тень */
    padding: 20px;
    max-width: 600px;
    margin: auto; /* Центрирование */
}

h1 {
    font-size: 24px; /* Размер заголовка */
    margin-bottom: 10px; /* Отступ снизу */
    color: #007BFF; /* Цвет заголовка */
}

p {
    font-size: 18px; /* Размер текста */
    margin: 5px 0; /* Вертикальные отступы */
}

a {
    text-decoration: none; /* Убираем подчеркивание */
    color: #007BFF; /* Цвет ссылки */
    margin-top: 10px;
    display: inline-block; /* Чтобы задать отступ */
}

a:hover {
    text-decoration: underline; /* Подчеркивание при наведении */
}

form {
    margin-top: 20px; /* Отступ сверху формы */
}

label {
    display: block; /* Переносим метку на новую строку */
    margin-bottom: 5px; /* Отступ снизу */
}

input[type="number"] {
    width: 100%; /* Полная ширина */
    padding: 8px; /* Внутренние отступы */
    border: 1px solid #ccc; /* Рамка */
    border-radius: 4px; /* Скругленные углы */
}

button {
    background-color: #28a745; /* Зеленая кнопка */
    color: white; /* Белый текст */
    padding: 10px 15px; /* Внутренние отступы */
    border: none; /* Без границ */
    border-radius: 4px; /* Скругленные углы */
    cursor: pointer; /* Курсор указателя */
    font-size: 16px; /* Размер текста */
}

button:hover {
    background-color: #218838; /* Темнее при наведении */
}

    </style>
    <div class="product-detail" style="text-align: center;">
        <h1>{{ $product->name }}</h1>
        <p>Цена: {{ number_format($product->cost, 2, ',', ' ') }} ₽</p>
        <p>Количество: {{ $product->amount }}</p>
        <p>{{ $product->amount > 0 ? 'В наличии' : 'Нет в наличии' }}</p>

        <a href="/products">Назад к списку товаров</a>
    </div>
    <h1>{{ $product->name }}</h1>
    <p>Стоимость: {{ $product->cost }}</p>
    <p>Количество на складе: {{ $product->amount }}</p>

    <!-- Форма заказа -->
    <form action="{{ route('orders.store') }}" method="POST">
        @csrf
        <input type="hidden" name="product_id" value="{{ $product->id }}">
        
        <label for="quantity">Количество:</label>
        <input type="number" name="quantity" id="quantity" min="1" max="{{ $product->amount }}" required>
        
        <button type="submit">Заказать</button>
    </form>
</body>
</html>
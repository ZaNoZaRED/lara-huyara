<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
        }
        .nav-links {
            margin-bottom: 20px;
        }
        .nav-links a {
            display: inline-block;
            margin-right: 10px;
            padding: 10px 15px;
            background-color: #3498db;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
        .nav-links a:hover {
            background-color: #2980b9;
        }
        .dada {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }
        .product-card {
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 15px;
            width: calc(33.333% - 20px);
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }
        .product-card:hover {
            transform: translateY(-5px);
        }
        .product-card h2 {
            margin-top: 0;
            color: #333;
        }
        .product-card p {
            margin: 5px 0;
            color: #666;
        }

    </style>
    @if(!Auth::check())
    <a href="/register" type="submit">Регистрация</a>
    <a href="/login" type="submit">Авторизация</a>
    @else
    <a href="{{route('logout')}}">Выйти </a>
    <a href="{{route('cart')}}">Мои заказы</a>
    @endif
    <div class="dada">
        @foreach ($products as $product)
        <div class="product-card {{$product->amount == 0 ? 'out-of-stock' : '' }}">

            <a href="{{ route('product.show', ['id' => $product->id]) }}" style="text-decoration: none; color: inherit;">
                <!--который проверяет, если количество товара (amount) равно 0:
 - Если условие верно (товар отсутствует), он возвращает строку 'out-of-stock', которая добавляется в класс.
- Если условие ложно (товар в наличии), он возвращает пустую строку, и класс останется только product-card.-->
                <h2> {{$product->name;}}</h2>
                <p>Цена: {{$product->cost;}} </p>
                <p> {{$product->amount > 0 ? 'В наличии: ' . $product->amount : 'Товара нет';}} </p>
                <!--больше 0, выводится текст "В наличии: " вместе с количеством товара.
            - Если количество меньше или равно 0, выводится текст "Товара нет".-->
        </div>
        @endforeach
    </div>


</body>

</html>

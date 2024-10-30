<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <a href="{{ route('main')}}">Главная</a>

    <h1>{{ $product->name }}</h1>
    <p>Цена: {{ $product->cost }} ₽</p>
    <p>Доступное количество: {{ $product->amount }}</p>


    <form action="{{ route ('product.store') }}" method="POST">
        @csrf
        <label for="count">Количество:</label>
        <input type="number" id="count" name="amount" min="1" max="{{$product->amount}}" required>
        <input type="hidden" name="product_id" value="{{$product->id}}">
        <button type="submit">Заказать</button>
    </form>
    @if ($errors->any())
    {{$errors->first()}}
    @endif
</body>

</html>
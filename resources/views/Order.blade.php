<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    

<div>
    <h1>Ваша корзина</h1>
    
    @foreach ($pro as $input)
        <div class="{{ $input['amount'] > 0 ? 'card' : 'bruh' }}">
            <h2>Название: {{$input->product->name}}</h2>
            <p>Кол-во: {{ $input['quantity'] }}</p>
            <p>Сумма: {{$input['sum']}} ₽</p>
        </div>
    @endforeach

</div>

<style>
    .product-cards {
        display: flex;
        justify-content: space-around;   
    }
    .card {
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        border: 1px solid #ccc; padding: 10px; margin: 10px; width: 200px;
        background-color: blue;
        color: white;
        height: 250px;
    }
    .bruh {
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        border: 1px solid #ccc; padding: 10px; margin: 10px; width: 200px;
        background-color: grey;
        height: 250px;
    }
    a {
        color: white;
    }
</style>
</body>
</html>

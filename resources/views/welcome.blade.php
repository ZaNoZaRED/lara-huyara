<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <style>
        .cards {
            display: flex;
            flex-wrap: wrap;
            flex-direction: row;
            justify-content: space-around;
        }

        .card {
            background-color: #9793a7;
            height: 200px;
            width: 200px;
            margin: 20px;

            font-family: "Rubik", sans-serif;
            font-optical-sizing: auto;
            font-weight: weight;
            font-style: normal;
        }

        .none {
            background-color: aquamarine;
        }
    </style>
    <section class="cards">
        @foreach($products as $product)
            <div class="{{$product['amount'] === 0 ? 'card none' : 'card'}}">
                <p>{{$product->name}}</p>
                <p>{{$product->cost}}</p>
                <p>{{$product->amount}}</p>
            </div>
        @endforeach
    </section>
</body>
</html>
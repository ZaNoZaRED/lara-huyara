

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
       .product-card {
        border: 1px solid #ccc;
        padding: 10px;
            margin: 10px;
            flex: 1 1 calc(30% - 20px); 
            box-sizing: border-box;
       }
       .out-of-stock {
            background-color: #d3d3d3;
            color: #666;
        }
        .dada{
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            padding: 20px;
            text-align: center;
        }  
</style>
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
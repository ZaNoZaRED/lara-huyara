<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <form method="POST" action="{{ route('login') }}">
        @csrf <!--скрытое поле!-->
        <input type="email" name="email" required placeholder="Email">
        <input type="password" name="password" required placeholder="Пароль">
        <button type="submit">Войти</button>
    </form>
    <a href="{{route('register')}}">Зарегестрироваться</a>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <input type="text" name="name" required placeholder="Имя">
        <input type="email" name="email" required placeholder="Email">
        <input type="password" name="password" required placeholder="Пароль">
        <input type="password" name="password_confirmation" required placeholder="Подтвердите пароль">
        <button type="submit">Зарегистрироваться</button>
    </form>
    @if ($errors->any())
    {{$errors->first()}}
    @endif
</body>

</html>
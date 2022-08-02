<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Система учета клиентов автостоянки</title>
</head>
<body>

<div class="container">

    <ul class="nav mb-3 " style="background-color: #d7f3e3">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('client.index')}}">Все клиенты</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('client.create')}}">Регистрация нового клиента</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Добавление на стоянку</a>
        </li>
    </ul>


    @yield('content')


</div>
</div>

</body>
</html>

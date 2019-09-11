<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="{{asset('css/stylesheet.css')}}">
<link href="https://fonts.googleapis.com/css?family=Fredoka+One&display=swap" rel="stylesheet">
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.css">
    <title>Investindo</title>
    @yield('css-view')
</head>
<body>
    @include('templates.menu-lateral')
    <section id="view-conteudo">
    @yield('conteudo-view')
    </section>
    @yield('js-view')
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title','titulo default')</title>
</head>
<body>
    
    <h1>Layout</h1>
    @include('msgs')

    busca
    <form method="post" action="{{ route('search') }}">
        @csrf
        <input name="q" />
        <button>ok</button>
    </form>

    <h3>menu</h3>
    @foreach ($categories as $category)
        <a href="{{ route('list',$category) }}">{{ $category->name }}</a><br>
    @endforeach

    <hr>
    <a href="{{ route('home') }}">home</a><br><br>
    <a href="{{ route('cart.index') }}">cart</a><br><br>
   
    

   

    @yield('content')

    rodape
</body>
</html>
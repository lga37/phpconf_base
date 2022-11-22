@extends('layout')


@section('content')
    <h1>meus pedidos</h1>    

     
    @auth
        @foreach(auth()->user()->checkouts as $checkout)
        {{ $checkout->id }}
        @php echo "<pre>"; print_r(json_decode($checkout->products,true)); echo "</pre>"; @endphp
        {{ $checkout->created_at }}<hr>
        @endforeach
        
    @else

    faca o login
    @endauth
    


@endsection
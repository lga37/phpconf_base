@extends('layout')


@section('content')
    <h1>Cartttttttttttt</h1>    


    @if(session()->has('cart'))
    <a href="{{ route('cart.clear') }}">clear</a><br><br>
    <a href="{{ route('checkout') }}">checkout</a><br><br>

        @foreach (session()->get('cart') as $product)
            
            {{ $product->name }}  R${{ $product->price }} x {{ $product->qty }}  

            <a href="{{ route('cart.incr',$product)}}">+</a>

            <a href="{{ route('cart.del',$product)}}">del</a><br>
        @endforeach

    @else 
        vaziooooooo
    @endif
    
    <hr>
    @php 
    echo collect(session()->get('cart'))
        ->reduce(function($carry, $product){
            return $carry + ($product['qty']*$product['price']);
        });

    @endphp

@endsection
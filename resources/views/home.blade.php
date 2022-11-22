@extends('layout')


@section('content')
    <h1>Homeeeeeeeeeeeee</h1>    
    

    @foreach ($products as $product)
    <a href="{{ route('cart.add',$product)}}">{{ $product->name }}</a><br>
    
    @endforeach
    {{ $products->links() }}

@endsection
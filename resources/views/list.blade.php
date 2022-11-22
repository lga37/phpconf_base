@extends('layout')


@section('content')
    <h1>Lissssssssssssssssssssstttt</h1>    

    @forelse ($products as $product)
        <a href="{{ route('cart.add',$product)}}">{{ $product->name }}</a><br>
    @empty
            sem regs
    @endforelse
    


@endsection
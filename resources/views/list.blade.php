@extends('layout')


@section('content')
    <h1>List</h1>    
   
    
    <div class="album py-5 bg-light">
        <div class="container">
    
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                @forelse ($products as $product)
                <div class="col">
                    <div class="card shadow-sm">
                        <img class="bd-placeholder-img card-img-top" src="{{ $product->img }}">
                        <div class="card-body">
                            <p class="card-text">{{ $product->name }}</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="{{ route('cart.add',$product)}}"
                                        class="btn btn-sm btn-outline-success">Comprar</a>
                                    <a href="#"
                                        class="btn btn-sm btn-outline-success">Share</a>
                                </div>
                                <p class="fw-bold">R$ {{ $product->price }}</p>
                            </div>
                            <a href="#" class="link-warning">+ Warning link</a>
                        </div>
                    </div>
                </div>
                @empty    
                    <p>Sem regs</p>

                @endforelse           
                      
            </div>
        </div>
    </div>

@endsection
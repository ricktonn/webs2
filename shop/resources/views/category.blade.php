@extends('layouts.app')

@section('content')


    <h1>{{$category or 'No name'}}</h1>


    @foreach($products->chunk(3) as $chunk)
    <div class="row" style="margin-bottom: 2rem;">
        @foreach($chunk as $product)
            <div class="col-lg-4">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{asset('/images/'.$product['img'])}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{$product['title']}}</h5>
                        <p class="card-text">{{$product['desc']}}</p>
                        <span class="card-price-text">${{$product['price']}},00</span>
                        <a href="#" class="btn btn-primary pull-right">Go somewhere</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    @endforeach


@endsection()
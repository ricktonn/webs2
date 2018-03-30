@extends('layouts.app')

@section('content')


    <h1>{{$category or 'No name'}}</h1>
    {{--@foreach($categories as $test)--}}
        {{--<h2>{{$test['name']}}</h2>--}}
        {{--@foreach($test->subCategories as $subCategory)--}}
            {{--<h2>{{$subCategory['name']}}</h2>--}}
        {{--@endforeach--}}
    {{--@endforeach--}}

    @foreach($products->chunk(3) as $chunk)
    <div class="row" style="margin-bottom: 2rem;">
        @foreach($chunk as $product)
            <div class="col-lg-4">
                <div class="card" style="width: 18rem;">
                    <a style="text-decoration:none; color: inherit;" href="{{ url('product', $product) }}">
                        <img class="card-img-top" src="{{asset('/images/'.$product['img'])}}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{$product['name']}}</h5>
                            <p class="card-text">{{$product['desc']}}</p>
                            <span class="card-price-text">Price: ${{$product['price']}},00</span>
                        </div>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
    @endforeach


@endsection()
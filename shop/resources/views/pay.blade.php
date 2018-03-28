@extends('layouts.app')

@section('content')

        <div class="container">
            <h1>Payment</h1>
            <div class="row">
            <select>
                <option>Payment method1</option>
                <option>Payment method2</option>
                <option>Payment method3</option>
                <option>Payment method4</option>
                <option>Payment method5</option>
                <option>Payment method6</option>
                <option>Payment method7</option>
            </select>
            </div>
            <div class="row">
            <strong>Total price: ${{$total}}</strong>
            <a href="{{ route("goSucces") }}">
                <button type="button" class="btn btn-success"> Pay </button>
            </a>
            </div>
        </div>
@endsection()
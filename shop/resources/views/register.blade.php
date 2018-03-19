@extends('layouts.app')
@section('content')
    <h2>Registratie</h2>
    @if(count($errors) > 0)
        @foreach($errors->all() as $error)
            <div class="row">
                {{$error}}
            </div>
        @endforeach
    @endif
    <form action="{{ route('register') }}" method="post">
        <div class="form-group {{ $errors->has('username') ? 'has-error' : ''}}">
            {{ csrf_field() }}
            <p>Username:</p>
            <input type="text" class="form-control" name="username"  placeholder="Username" value="{{ Request::old('username') }}"/>
            <p>Wachtwoord:</p>
            <input type="text" class="form-control {{ $errors->has('password') ? 'has-error' : ''}}" name="password" placeholder="Password" value="{{ Request::old('password') }}"/>
            <input type="submit" class="form-control btn-dark" name="submit" value="Register"/>
            <input type="hidden" name="_token" value="{{ Session::token() }}">
        </div>
    </form>
@endsection()
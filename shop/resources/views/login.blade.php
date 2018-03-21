@extends('layouts.app')
@section('content')
    @if (\Session::has('fail'))
        <div class="alert alert-danger">
            <p>{{ \Session::get('fail') }}</p>
        </div><br />
    @endif
    <h2>Login</h2>
    <form action="{{ route('loginfunction') }}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" class="form-control" name="username" id="username" placeholder="Username" value="{{ Request::old('username') }}"/>
            @if ($errors->has('username'))
                <div class="alert alert-danger">{{ $errors->first('username') }}</div>
            @endif
        </div>
        <div class="form-group">
            <label for="password">Wachtwoord:</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="Password" value="{{ Request::old('password') }}"/>
            @if ($errors->has('password'))
                <div class="alert alert-danger">{{ $errors->first('password') }}</div>
            @endif
        </div>
        <input type="submit" class="form-control btn-dark" name="submit" value="Login"/>
        <input type="hidden" name="_token" value="{{ Session::token() }}">
    </form>
@endsection()
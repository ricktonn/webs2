<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>De dampende boykes</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" >
</head>
<body>
{{--<section id="header" class="header">--}}
    {{--<div class="header-wrapper">--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}
                {{--@include('includes.navbar')--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</section>--}}
@include('includes.nav')

<div class="content-wrapper">
    <div class="container">
@yield('content')
    </div>
</div>

<section class="section-footer">
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">

                </div>
                <div class="col-lg-3"></div>
                <div class="col-lg-3"></div>
                <div class="col-lg-3"></div>
            </div>
        </div>
    </footer>
</section>
<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
</body>
</html>

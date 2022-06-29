<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a><a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">{{__('Sing.Login')}}</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">{{__('Sing.Register')}}</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="content">
        <div class="title m-b-md">
            Laravel
        </div>
        <div class="col-md-6">
            <a href="{{ url('login/facebook') }}" class="btn btn-social-icon btn-facebook"><i class="fa fa-facebook"></i></a>
            <a href="{{ url('login/twitter') }}" class="btn btn-social-icon btn-twitter"><i class="fa fa-twitter"></i></a>
            <a href="{{ url('login/google') }}" class="btn btn-social-icon btn-google-plus"><i class="fa fa-google-plus"></i></a>
            <a href="{{ url('login/linkedin') }}" class="btn btn-social-icon btn-linkedin"><i class="fa fa-linkedin"></i></a>
            <a href="{{ url('login/github') }}" class="btn btn-social-icon btn-github"><i class="fa fa-github"></i></a>
            <a href="{{ url('login/bitbucket') }}" class="btn btn-social-icon btn-bitbucket"><i class="fa fa-bitbucket"></i></a>
        </div>
        {{--                <p>  {{$obj ?? '' ->name}}     {{$obj ?? ''-> age}}     {{$obj ?? ''-> tall}}</p>    <p> {{$obj ?? '' -> name}} {{$obj ?? ''-> id }}  </p>--}}
        <div class="links">

            <h2>{{__('massege.hello')}}</h2>
            {{--  {{$data ?? 19}}--}}
            {{--            @if('age' >=18)--}}
            {{--              <p> <h4>{{__('massege.goinweb')}}</h4></p>--}}
            {{--            @else--}}
            {{--                <p><h4>{{__('massege.gooutweb')}}</h4></p>--}}
            {{--            @endif--}}
            {{--            @foreach($data as $_see)--}}
            {{--                <p>{{$_see}}</p>--}}
            {{--            @endforeach--}}
            {{--             <p>{{print_r($data)}}</p>--}}
            {{--            @forelse($data as $_see)--}}
            {{--                <p>{{$_see}}</p>--}}
            {{--            @empty--}}
            {{--                <p>please enter data</p>--}}

            {{--            @endforelse--}}
            <a href="https://laravel.com/docs">Docs</a>
{{--            <a href="{{route('s')}}">d</a>--}}
{{--            <a href="{{route('admin')}}">admin</a>--}}
            <a href="https://blog.laravel.com">Blog</a>
            <a href="https://nova.laravel.com">Nova</a>
            <a href="https://forge.laravel.com">Forge</a>
            <a href="https://vapor.laravel.com">Vapor</a>
            <a href="https://github.com/laravel/laravel">GitHub</a>
        </div>
    </div>
</div>
</body>
</html>

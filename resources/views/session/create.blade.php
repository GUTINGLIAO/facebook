@extends('layout.default')
@section('title', 'log in')
@section('content')
    <body>
    <form method="post", action="{{route('login')}}">
        @include('shared._messages')
        {{csrf_field()}}

        <div class="lead">
            <div class="form_group">
                <label for="email">Email:</label><br>
                <input class="form-control" type="text", name="email", value="{{old('email')}}">
            </div><br>

            <div class="form_group">
                <label for="password">password:(<a href="{{route('password.request')}}">forget your password ?</a>) </label><br>
                <input class="form-control" type="password" name="password" value="{{old('password')}}">
            </div><br>

            <div class="form-group">
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" name="remember" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">remember me</label>
                </div>
            </div>

            <button class="btn btn-lg btn-success" type="submit">log in</button>
        </div>

        <p class="lead">
            not a member ?
            <a href="{{route('signup')}}">sign up now</a>
        </p>
    </form>
    </body>
@stop
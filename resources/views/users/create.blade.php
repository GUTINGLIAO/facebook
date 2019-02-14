@extends('layout.default')
@section('title', 'sign up')
@section('content')
    <body>
    <h1>sign up</h1>
    <form method="post" action="{{route('users.store')}}">
        @include('shared._errors')

        {{csrf_field()}}
        <div class="lead">
            <div class="form-group">
                <label for="name">Username:</label><br>
                <input class="form-control" type="text" name="name" placeholder="Enter username" value="{{old('name')}}">
            </div><br>

            <div class="form-group">
                <label for="email">Email:</label><br>
                <input class="form-control" type="text" name="email" placeholder="Enter email" value="{{old('emal.blade.php')}}">
            </div><br>

            <div class="form-group">
                <label for="password">Password:</label><br>
                <input class="form-control" type="password" name="password" placeholder="Enter password" value="{{old('password')}}">
            </div><br>

            <div class="form-group">
                <label for="password_confirmation">Confirm your password:</label><br>
                <input class="form-control" type="password" name="password_confirmation" placeholder="Password again" value="{{old('password_confirmation')}}">
            </div><br>
        </div>

        <button class="btn btn-lg btn-success" type="submit">sign up</button>
    </form>
    </body>
@stop
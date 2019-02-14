@extends('layout.default')
@section('title', 'The palace of user')
@section('content')
    {{ $user->name }} - {{ $user->email }}
@stop

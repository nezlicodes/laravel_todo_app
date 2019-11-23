@extends('layouts.app')
@section('content')
<card class="card-default">
    <div class="card-header"> {{ $todo->name }}</div>
    <p class="text-center card-bodys"> {{$todo->description}} </p>
    <a class="btn btn-info" href="/edit/{{ $todo->id }}">Edit </a>
</card>
@endsection
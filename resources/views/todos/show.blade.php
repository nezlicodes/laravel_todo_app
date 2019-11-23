@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <card class="card-default">
            <div class="card-header"> {{ $todo->name }}</div>
            <p class="text-center card-bodys"> {{$todo->description}} </p>
            <a class="btn btn-info" href="/edit/{{ $todo->id }}">Edit </a>
        </card>
    </div>
</div>
@endsection
@extends('layouts.app')
@section('content')
<h2 class="text-primary text-center">My todo list</h2>


<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">completed</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>@foreach($todos as $todo)
        <tr>
            <td> {{ $todo->id }}</td>
            <td> <a href="/todos/{{ $todo->id }}"> {{ $todo->name }} </a></td>
            <td>{{ $todo->description }}</td>
            <td>{{ $todo->completed === 1 ?' True': 'False'}}</td>
            <td> <a href="/delete/{{ $todo->id }}" class="btn btn-danger"> Delete </a></td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
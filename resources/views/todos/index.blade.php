@extends('layouts.app')
@section('content')
<h3 class="my-2 text-secondary text-center"> <u> My todo list </u></h3>

<div class="content">

    <div class="d-flex justify-content-end pb-2">
        <label for="filter" class="py-1">Filter By</label>
        <i class="fa fa-filter pr-3 py-2 pl-2" aria-hidden="true"></i>
        <select name="filter" class="form-control col-md-3">
            <option value="">Status</option>
            <option value="">Description</option>
        </select>
    </div>
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
</div>
@endsection
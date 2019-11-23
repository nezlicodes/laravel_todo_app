@extends('layouts.app')

@section('content')
<h1 class="text-center">Create Todo!</h1>
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card card-default">
            <div class="card-header">Create new todo</div>
            <div class="card-body">
                <form method="POST" action="/new-todo">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="name" name="name">
                    </div>
                    <div class="form-group">
                        <textarea type="text" class="form-control" cols="5" rows="5" placeholder="name" placeholder="Description" name="description">
                        </textarea>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success float-right" type="submit">Create todo</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
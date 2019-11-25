@extends('layouts.app')

@section('content')
<h1 class="text-center">Create Todo!</h1>
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card card-default">
            <div class="card-header">Create new todo</div>
            <div class="card-body">
                @if($errors->any())
                <div class="alert alert-danger">
                    <ul class="list-group">
                        @foreach($errors->all() as $error)
                        <li class="list-item"> {{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
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
                        <select name="completed" id="" class="form-control select">
                            <option disabled>Completed:</option>
                            <option value="0">False</option>
                            <option value="1"> True</option>
                        </select>
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
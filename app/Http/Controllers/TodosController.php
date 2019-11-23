<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;

class TodosController extends Controller
{
    // fetch all todos from database
    public function index()
    {
        $todos = Todo::all();
        return view('todos.index')->with('todos', $todos);
    }
}

<?php

namespace App\Http\Controllers;

use App\Todo;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\App;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::all();

        return view('todos.index', compact('todos'));
    }

    public function store(Request $request)
    {
        $input = $request->all();

        Todo::create($input);

        return redirect('todos');
    }

    public function create()
    {
        $authors = User::lists('name', 'id');

        return view('todos.create', compact('authors'));
    }

    public function edit($id)
    {
        $todo = Todo::find($id);
        $authors = User::lists('name', 'id');

        return view('todos.edit', compact('todo', 'authors'));
    }

    public function update(Request $request, $id)
    {
        $todo = Todo::find($id);

        $todo->title = $request->get('title');
        $todo->description = $request->get('description');
        $todo->completed_by = $request->get('completed_by');
        $todo->author = $request->get('author');

        $todo->save();

        return redirect('todos');
    }
}

<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::latest()->get();
        return view('welcome', compact('todos'));
    }

    public function store(Request $request)
    {
        $todo        = new Todo();
        $todo->title = $request->title;
        $todo->desc  = $request->tags;
        $todo->save();
        return 'ok';
    }
}

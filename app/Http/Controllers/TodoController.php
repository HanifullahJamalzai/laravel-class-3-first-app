<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    public function index()
    {
        $data = Todo::all();
        // dd($data);

        return view('todo.index',compact('data'));
    }

    public function create()
    {
        return view('todo.create');
    }

    public function store()
    {
        $data = request()->all();
        // dd($data);
        Todo::create(['name' => $data['name']]);

        return redirect('/todo');
    }

}

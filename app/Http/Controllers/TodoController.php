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
        request()->validate([
            'name' => 'required|min:3|max:255',
        ]);

        $data = request()->all();
        // dd($data);
        Todo::create(['name' => $data['name']]);
        
        session()->flash('success', 'You have successfully added a todo');
        
        return redirect('/todo');
    }

    public function destroy($id)
    {
        // $todo = Todo::find($id);
        $todo = Todo::find($id)->delete();
        // dd($todo);
        return redirect('/todo');
    }

    public function show($id)
    {
        $todo = Todo::find($id);
        // dd($todo);
        return view('todo.show', compact('todo'));
    }

    public function edit($id)
    {
        $todo = Todo::find($id);

        return view('todo.edit', compact('todo'));
    }

    public function update($id)
    {
        request()->validate([
            'name' => 'required|min:3|max:255',
        ]);

        $todo = Todo::find($id);
        // dd($todo);
        // dd(request()->all());

        $todo->update(['name' => request()->name]);

        return redirect('/todo');


        // return 'I am in Update method';
    }



}

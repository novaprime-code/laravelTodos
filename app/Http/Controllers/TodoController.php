<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use App\Models\Todo;

class TodoController extends Controller
{
    public function create()
    {
        return view('todos.create');
    }
    public function index()
    {
        $todo = Todo::all();
        return view('todos.index')->with('todos', $todo);
    }
    // public function store(Request $request)
    // {
    public function store(Request $request)
    {


        // try {
        //     $this->validate(request(), [
        //         'title' => 'required|min:3',
        //         'description' => 'required'
        //     ]);
        // } catch (ValidationException $e) {
        // }
        $todo = new Todo();
        //On the left is the field name in DB and on the right is field name in Form/view
        $todo->name = $request->title;
        $todo->description = $request->description;
        $todo->save();

        session()->flash('success', 'Todo created succesfully');

        return redirect()->back();


        // $data = request()->all();


    }
    // }
    public function details(Todo $todo)
    {

        return view('todos.details')->with('todos', $todo);
    }
    public function show(Todo $todo)
    {
        return view('todos.show', compact('todo', $todo));
    }

    public function edit(Todo $todo)
    {
        return view('todos.edit', compact('todo', $todo));
    }

    public function update(Todo $todo)
    {

        try {
            $this->validate(request(), [
                'name' => ['required'],
                'description' => ['required'],

            ]);
        } catch (ValidationException $e) {
        }

        $data = request()->all();


        $todo->name = $data['name'];
        $todo->description = $data['description'];
        $todo->save();

        session()->flash('success', 'Todo updated successfully');

        return redirect('/');
    }



    public function delete(Todo $todo)
    {

        $todo->delete();

        return redirect('/');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;
use App\Http\Requests\TodoRequest;
use Redirect;

class TodoController extends Controller
{
    public function index()
    {

        $todos = Todo::all();
        // dd($todos);
        return view('todos.index',['todos' => $todos]);
    }

    public function create()
    {
        return view('todos.create');
    }

    public function store(TodoRequest $request)
    {
        // dd($request->title);
        // return $request->all();

        Todo::create([
            'title' => $request->title,
            'description' => $request->description,
            'completed'  => 0

        ]);

        $request->session()->flash('alert-success', 'Created Successfully');
        
        $todos = Todo::all();
        // dd($todos);
        return Redirect::route('todos.index', ['todos' => $todos]);
        // return view('todos.index',['todos' => $todos]);

    }

    // public function edit()
    // {
    //     return view('todos.edit');
    // }

    public function view($id)
    {
        // dd($request->title);
        $todos = Todo::find($id);
        if(! $todos){
            return to_route('todos.index')->withErrors([
                'error' => 'no suitable data'
            ]);
        }

        return view('todos.view',['todos' => $todos]);

    }

    public function edit($id)
    {
        // dd($request->title);
        $todos = Todo::find($id);
        if(! $todos){
            return to_route('todos.index')->withErrors([
                'error' => 'no suitable data'
            ]);
        }

        return view('todos.edit',['todos' => $todos]);

    }

    public function update(TodoRequest $request)
    {
        // dd($request->all());
        $todos = Todo::find($request->id);
        if(! $todos){
            return to_route('todos.index')->withErrors([
                'error' => 'no suitable data'
            ]);
        }
        
        $todos->update([
            'title' => $request->title,
            'description' => $request->description,
            'completed' => $request->status
        ]);

        $request->session()->flash('alert-success', 'Edit Successfully');
        
        $todos = Todo::all();
        return Redirect::route('todos.index', ['todos' => $todos]);
        // return view('todos.index',['todos' => $todos]);
    }


    public function delete(Request $request)
    {
        // dd($request->all());
        $todos = Todo::find($request->id);
        if(! $todos){
            $request->session()->flash('error', 'Delete error');
            return to_route('todos.index')->withErrors([
                'error' => 'no suitable data'
            ]);
        }
        
        $todos->delete();
        $request->session()->flash('alert-success', 'Delete Successfully');
        
        $todos = Todo::all();
        // return view('todos.index',['todos' => $todos]);
        return Redirect::route('todos.index', ['todos' => $todos]);

    }

}

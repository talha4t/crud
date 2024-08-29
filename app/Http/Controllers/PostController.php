<?php

namespace App\Http\Controllers;

use App\Models\Crud;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('index', [
            'cruds' => Crud::all()
        ]);

    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string'],
            'description' => ['required', 'string'],
        ]); 

        Crud::create($request->all());

        return redirect('/cruds');
    }

    public function edit(Crud $crud)
    {
        return view('edit', [
            'crud' => $crud,
        ]);
    }

    public function update(Request $request, Crud $crud)
    {
        $payload = $request->validate([
            'name' => ['required', 'string'],
            'description' => ['required', 'string'],
        ]);
    
        $crud->update($payload);

        return redirect('/cruds');
    }

    public function destroy(Crud $crud)
    {
        $crud->delete();

        return redirect('/cruds');
    }

}

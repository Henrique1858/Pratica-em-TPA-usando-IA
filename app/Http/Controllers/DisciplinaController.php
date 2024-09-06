<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DisciplinaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $disciplinas = disciplina::all();
    return view('disciplinas.index', compact('disciplinas'));
}

public function create()
{
    return view('disciplinas.create');
}

public function store(Request $request)
{
    disciplina::create($request->all());
    return redirect()->route('disciplinas.index');
}

public function show(disciplina $disciplina)
{
    return view('disciplinas.show', compact('disciplina'));
}

public function edit(disciplina $disciplina)
{
    return view('disciplinas.edit', compact('disciplina'));
}

public function update(Request $request, disciplina $disciplina)
{
    $disciplina->update($request->all());
    return redirect()->route('disciplinas.index');
}

public function destroy(disciplina $disciplina)
{
    $disciplina->delete();
    return redirect()->route('disciplinas.index');
}

}

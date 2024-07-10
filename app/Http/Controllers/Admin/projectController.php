<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class projectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();

        $data = [
            'projects' => $projects
        ];
        return view('projects.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('projects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //PRENDO TUTTI I DATI
        // $data = $request->all();

        // Qui abbiamo la validazione
        $data = $request->validate([
            "name_project" => "required|min:3|max:200",
            "description" => "required|min:5|max:255",
            "group" => "required|boolean",
            "date" => "required|integer|min:1980|max:2099",
        ]);


        //CREO L'OGGETTO
        $newProject = new Project();

        //POPOLO L'OGGETTO CREANDO L'ISTANZA
        $newProject->fill($data);

        //SALVO SUL DB
        $newProject->save();

        //RITORNO LA ROTTA
        // return redirect()->route('project.index');
        return redirect()->route('projects.show', $newProject);
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
                $data = [
            "project" => $project
        ];

        return view("project.show", $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

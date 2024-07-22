<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        return response()->json([
            'status' => 'success',
            'progetti' => Project::with(['languages', 'type'])->orderByDesc('id')->paginate(3)
            //languages e type del 'with()' li prendi dal metodo del modello Project
        ]);
    }

    public function show($id)
    {
        $project = Project::with(['languages', 'type'])->where('id', $id)->first(); //con first al posto di get, ti da il primo dato non un array

        if ($project) {
            return response()->json([
                'status' => 'success',
                'progetto' => $project
            ]);
        } else {
            return response()->json([
                'status' => 'not found',
                'message' => 'project not found...'
            ]);
        }
    }
}

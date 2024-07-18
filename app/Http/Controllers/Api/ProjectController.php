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
            'progetti' => Project::with(['languages', 'type'])->orderByDesc('id')->paginate()
            //languages e type del 'with()' li prendi dal metodo del modello Project
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function projects() {
        $projects = Project::all();
        return view('welcome')->with('projects', $projects);
    }
}

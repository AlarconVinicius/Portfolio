<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Project;

class SiteController extends Controller
{
    public function index(){

        $projects = Project::all();
        return view('index', [
            'projects' =>$projects
        ]);
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        $page_section_title = "Projetos";

        $projects = Project::all();
        return view('admin.projects.index', [
            'page_section_title' => $page_section_title,
            'projects' =>$projects
        ]);
    }
}

<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Service;

class SiteController extends Controller
{
    public function index(){

        $projects = Project::all();
        $services = Service::all();
        return view('index', [
            'projects' => $projects,
            'services' => $services
        ]);
    }
}

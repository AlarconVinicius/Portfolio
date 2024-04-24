<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Service;
use Illuminate\Support\Facades\Auth;

class SiteController extends Controller
{
    public function index(){

        $projects = Project::all();
        $services = Service::all();
        $profileInformation = Auth::user()->profileInformation()->first();
        return view('index', [
            'projects' => $projects,
            'services' => $services,
            'profileInformation' => $profileInformation
        ]);
    }
}

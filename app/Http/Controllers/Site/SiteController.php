<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Project;
use App\Models\Service;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

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

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => [
                'required',
                'string',
                'min:2',
                'max:255'
            ],
            'email' => [
                'required',
                'email',
                'max:255'
            ],
            'last_name' => [
                'required',
                'string',
                'min:2',
                'max:255'
            ],
            'message' => [
                'required',
                'string',
                'min:2'
            ],
        ]);
        Contact::create($validatedData);
        return redirect()->route('site.index', "#contato")->with('success', 'Mensagem enviada com sucesso! Obrigado por entrar em contato.');
    }
}

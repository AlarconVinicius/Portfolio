<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Project\StoreProjectRequest;
use App\Http\Requests\Admin\Project\UpdateProjectRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        $page_section_title = "Projetos";
        $projects = Auth::user()->projects()->get();
        return view('admin.projects.index', [
            'page_section_title' => $page_section_title,
            'projects' =>$projects
        ]);
    }

    public function details(string $id)
    {
        $project = Auth::user()->projects()->find($id);
        if (!$project) {
            return redirect()->route('projects.index')->with('error', 'Projeto não encontrado.');
        }

        $page_section_title = "Detalhes do Projeto: " . $project->title;

        return view('admin.projects.details', [
            'page_section_title' => $page_section_title,
            'project' => $project
        ]);
    }

    public function create()
    {
        $page_section_title = "Adicionar Projeto";

        return view('admin.projects.create', [
            'page_section_title' => $page_section_title
        ]);
    }

    public function store(StoreProjectRequest $request)
    {
        $data = $request->only([
            'title',
            'description',
            'language',
            'link'
        ]);
        $data['user_id'] = Auth::user()->id;
        Project::create($data);
        return redirect()->route('projects.index')
                         ->with('success', 'Projeto adicionado com sucesso.');
    }

    public function edit(string $id)
    {
        $project = Auth::user()->projects()->find($id);

        if (!$project) {
            return redirect()->route('projects.index')
                             ->with('message', 'Projeto não encontrado.');
        }

        $page_section_title = "Editar Projeto: " . $project->title;

        return view('admin.projects.edit', [
            'page_section_title' => $page_section_title,
            'project' => $project
        ]);
    }

    public function update(UpdateProjectRequest $request, string $id)
    {
        $project = Auth::user()->projects()->find($id);
        if (!$project) {
            return back()->with('message', 'Projeto não encontrado.');
        }
        $data = $request->only([
            'title',
            'description',
            'language',
            'link'
        ]);
        //Example
        // if($request->password) {
        //     $data['password'] = bcrypt($request->password);
        // }

        $project->update($data);
        return redirect()->route('projects.index')
                         ->with('success', 'Projeto atualizado com sucesso.');
    }

    public function delete(string $id)
    {
        $project = Auth::user()->projects()->find($id);

        if (!$project) {
            return redirect()->route('projects.index')->with('message', 'Projeto não encontrado.');
        }

        $page_section_title = "Deletar Projeto: " . $project->title;

        return view('admin.projects.delete', [
            'page_section_title' => $page_section_title,
            'project' => $project
        ]);
    }

    public function destroy(string $id)
    {
        $project = Auth::user()->projects()->find($id);
        if (!$project) {
            return back()->with('message', 'Projeto não encontrado.');
        }

        //Example
        //if(Auth::user()->id === $user->id){
        //     return back()->with('message', 'Você não pode deletar o seu perfil.');
        // }

        $project->delete();
        return redirect()->route('projects.index')
                         ->with('success', 'Projeto deletado com sucesso.');
    }
}

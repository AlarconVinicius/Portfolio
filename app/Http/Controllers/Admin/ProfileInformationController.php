<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProfileInformation\StoreProfileInformationRequest;
use App\Http\Requests\Admin\ProfileInformation\UpdateProfileInformationRequest;
use App\Models\ProfileInformation;
use Illuminate\Support\Facades\Auth;

class ProfileInformationController extends Controller
{
    public function index()
    {
        $page_section_title = "Informações do Perfil";
        $profileInformation = Auth::user()->profileInformation;

        return view('admin.profile_informations.index', [
            'page_section_title' => $page_section_title,
            'profileInformation' =>$profileInformation
        ]);
    }

    public function details(string $id)
    {
        $profileInformation = Auth::user()->profileInformation()->find($id);
        if (!$profileInformation) {
            return redirect()->route('profile_informations.index')->with('message', 'Informações do perfil não encontradas.');
        }

        $page_section_title = "Detalhes do Perfil";

        return view('admin.profile_informations.details', [
            'page_section_title' => $page_section_title,
            'profileInformation' => $profileInformation
        ]);
    }

    public function create()
    {
        $page_section_title = "Adicionar Informações do Perfil";
        $user_id = Auth::user()->id;
        return view('admin.profile_informations.create', [
            'page_section_title' => $page_section_title,
            'user_id' => $user_id
        ]);
    }

    public function store(StoreProfileInformationRequest $request)
    {
        $data = $request->validated();
        ProfileInformation::create($data);

        return redirect()->route('profile_informations.index')
                         ->with('success', 'Informações do perfil adicionadas com sucesso.');
    }

    public function edit(string $id)
    {
        $profileInformation = Auth::user()->profileInformation()->find($id);

        if (!$profileInformation) {
            return redirect()->route('profile_informations.index')
                             ->with('message', 'Informações do perfil não encontradas.');
        }

        $page_section_title = "Editar Informações do Perfil";

        return view('admin.profile_informations.edit', [
            'page_section_title' => $page_section_title,
            'profileInformation' => $profileInformation
        ]);
    }

    public function update(UpdateProfileInformationRequest $request, string $id)
    {
        $profileInformation = Auth::user()->profileInformation()->find($id);

        if (!$profileInformation) {
            return back()->with('message', 'Informações do perfil não encontradas.');
        }

        $data = $request->validated();

        $profileInformation->update($data);

        return redirect()->route('profile_informations.index')
                         ->with('success', 'Informações do perfil atualizadas com sucesso.');
    }

    public function delete(string $id)
    {
        $profileInformation = Auth::user()->profileInformation()->find($id);

        if (!$profileInformation) {
            return redirect()->route('profile_informations.index')->with('message', 'Informações do perfil não encontradas.');
        }

        $page_section_title = "Deletar Informações do Perfil";

        return view('admin.profile_informations.delete', [
            'page_section_title' => $page_section_title,
            'profileInformation' => $profileInformation
        ]);
    }

    public function destroy(string $id)
    {
        $profileInformation = Auth::user()->profileInformation()->find($id);

        if (!$profileInformation) {
            return back()->with('message', 'Informações do perfil não encontradas.');
        }

        $profileInformation->delete();

        return redirect()->route('profile_informations.index')
                         ->with('success', 'Informações do perfil deletadas com sucesso.');
    }
}

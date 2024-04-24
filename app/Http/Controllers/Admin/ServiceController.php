<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Service\StoreServiceRequest;
use App\Http\Requests\Admin\Service\UpdateServiceRequest;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ServiceController extends Controller
{
    public function index()
    {
        $page_section_title = "Serviços";
        $services = Auth::user()->services()->get();
        return view('admin.services.index', [
            'page_section_title' => $page_section_title,
            'services' =>$services
        ]);
    }

    public function details(string $id)
    {
        $service = Auth::user()->services()->find($id);
        if (!$service) {
            return redirect()->route('services.index')->with('error', 'Serviço não encontrado.');
        }

        $page_section_title = "Detalhes do Serviço: " . $service->name;

        return view('admin.services.details', [
            'page_section_title' => $page_section_title,
            'service' => $service
        ]);
    }

    public function create()
    {
        $page_section_title = "Adicionar Serviço";

        return view('admin.services.create', [
            'page_section_title' => $page_section_title
        ]);
    }

    public function store(StoreServiceRequest $request)
    {
        $data = $request->validated();
        $data['user_id'] = Auth::user()->id;
        Service::create($data);
        return redirect()->route('services.index')
                         ->with('success', 'Serviço adicionado com sucesso.');
    }

    public function edit(string $id)
    {
        $service = Auth::user()->services()->find($id);

        if (!$service) {
            return redirect()->route('services.index')
                             ->with('message', 'Serviço não encontrado.');
        }

        $page_section_title = "Editar Serviço: " . $service->name;

        return view('admin.services.edit', [
            'page_section_title' => $page_section_title,
            'service' => $service
        ]);
    }

    public function update(UpdateServiceRequest $request, string $id)
    {
        $service = Auth::user()->services()->find($id);
        if (!$service) {
            return back()->with('message', 'Serviço não encontrado.');
        }

        $data = $request->validated();

        $service->update($data);
        return redirect()->route('services.index')
                         ->with('success', 'Serviço atualizado com sucesso.');
    }

    public function delete(string $id)
    {
        $service = Auth::user()->services()->find($id);

        if (!$service) {
            return redirect()->route('services.index')->with('message', 'Serviço não encontrado.');
        }

        $page_section_title = "Deletar Serviço: " . $service->name;

        return view('admin.services.delete', [
            'page_section_title' => $page_section_title,
            'service' => $service
        ]);
    }

    public function destroy(string $id)
    {
        $service = Auth::user()->services()->find($id);
        if (!$service) {
            return back()->with('message', 'Serviço não encontrado.');
        }

        $service->delete();
        return redirect()->route('services.index')
                         ->with('success', 'Serviço deletado com sucesso.');
    }
}

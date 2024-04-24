<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        $page_section_title = "Mensagens de Contato";
        $contacts = Contact::orderBy('created_at', 'desc')->get();
        return view('admin.contacts.index', compact('contacts', 'page_section_title'));
    }

    public function details(string $id)
    {
        $page_section_title = "Detalhes da Mensagem de Contato";
        $contact = Contact::find($id);
        if (!$contact) {
            return back()->with('message', 'Mensagem não encontrada.');
        }
        return view('admin.contacts.details', compact('contact', 'page_section_title'));
    }

    public function delete(string $id)
    {
        $page_section_title = "Excluir Mensagem de Contato";
        $contact = Contact::find($id);
        if (!$contact) {
            return back()->with('message', 'Mensagem não encontrada.');
        }
        return view('admin.contacts.delete', compact('contact', 'page_section_title'));
    }

    public function destroy(string $id)
    {
        $contact = Contact::find($id);
        if (!$contact) {
            return back()->with('message', 'Mensagem não encontrada.');
        }

        $contact->delete();
        return redirect()->route('contacts.index')->with('success', 'Mensagem excluída com sucesso!');
    }
}

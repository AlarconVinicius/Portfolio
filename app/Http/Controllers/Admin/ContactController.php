<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::orderBy('created_at', 'desc')->get();
        return view('admin.contacts.index', compact('contacts'));
    }

    public function details(string $id)
    {
        $contact = Contact::find($id);
        if (!$contact) {
            return back()->with('message', 'Mensagem não encontrada.');
        }
        return view('admin.contacts.details', compact('contact'));
    }

    public function delete(string $id)
    {
        $contact = Contact::find($id);
        if (!$contact) {
            return back()->with('message', 'Mensagem não encontrada.');
        }
        return view('admin.contacts.delete', compact('contact'));
    }

    public function destroy(string $id)
    {
        $contact = Contact::find($id);
        if (!$contact) {
            return back()->with('message', 'Mensagem não encontrada.');
        }

        $contact->delete();
        return redirect()->route('admin.contacts.index')->with('success', 'Mensagem excluída com sucesso!');
    }
}

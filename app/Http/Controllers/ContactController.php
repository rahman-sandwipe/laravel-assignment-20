<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    // GET /contacts: List all contacts
    public function list(){
        $contacts=Contact::orderBy('created_at','DESC')->get();
        return view('contacts.index',compact('contacts'));
    }

    // GET /contacts/create: Show the form to create a new contact
    public function create(){
        return view('contacts.create');
    }

    // POST /contacts: Store a new contact
    public function store(Request $request){
        Contact::create($request->all());
        return redirect(url('/contects'));
    }

    // GET /contacts/{id}: Show a specific contact
    public function show(string $id){
        return view('contacts.show');
    }

    // GET /contacts/{id}/edit: Show the form to edit a contact
    public function edit(string $id){
        return view('contacts.edit');
    }

    // PUT /contacts/{id}: Update a contact
    public function update(Request $request, string $id){
        //
    }

    // DELETE /contacts/{id}: Delete a contact
    public function delete(string $id){
        $contact = Contact::find($id);
        $contact->delete();
        return back();
    }
}

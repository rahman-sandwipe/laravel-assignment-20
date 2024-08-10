<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    // GET /contacts: List all contacts
    public function list(Request $request){
        // Request Input
        $search=$request->get;

        $contacts =Contact::where (function($query) use ($search) {
            $query->where('name', 'like', "%$search%")
            ->orwhere('email', 'like', "%$search%");
        })->orderBy('created_at','DESC')->get();
        
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
        $showdata=Contact::find($id);
        return view('contacts.show', compact('showdata'));
    }

    // GET /contacts/{id}/edit: Show the form to edit a contact
    public function edit(string $id){
        $data=Contact::find($id);
        return view('contacts.edit',compact('data'));
    }

    // PUT /contacts/{id}: Update a contact
    public function update(Request $request, string $id){
        $getData=Contact::find($id);
        $data=$request->all();
        $getData->fill($data)->save();
        return redirect(url('/contects'));
    }

    // DELETE /contacts/{id}: Delete a contact
    public function delete(string $id){
        $contact = Contact::find($id);
        $contact->delete();
        return back();
    }
}

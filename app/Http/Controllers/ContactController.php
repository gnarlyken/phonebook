<?php

namespace App\Http\Controllers;


use App\Models\Contacts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ContactController extends Controller
{
    public function index()
    {
        
        $contacts = Contacts::all();

        return view('index')->with('contacts', $contacts);
    }
    

    public function create()
    {
        return view('contacts.create');
    }
    public function store(Request $request)
    {
        $contact = new Contacts();
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->phone_number = $request->input('phone_number');

        // Associate the contact with the current authenticated user
        $user = Auth::user();
        $contact->user()->associate($user);

        $contact->save();

        return redirect()->route('main')->with('success', 'Contact created successfully.');
    }
    
    

    

    public function edit($id)
    {
        $contact = Contacts::findOrFail($id);
        return view('contacts.edit', compact('contact'));
    }
    
    
    
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'phone_number' => 'required',
            'email' => 'required|email',
            // Add validation rules for other relevant fields
        ]);
    
        $contact = Contacts::findOrFail($id);
        $contact->update($validatedData);
    
        return redirect()->route('main')->with('success', 'Contact updated successfully.');
    }
    

    public function destroy(Contacts $contact)
    {
        $contact->delete();

       return redirect('/main')->with('success', 'Contact deleted successfully.');
       

    }
    
}

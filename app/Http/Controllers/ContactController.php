<?php

namespace App\Http\Controllers;


use App\Models\Contacts;
use Illuminate\Http\Request;

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
        $validatedData = $request->validate([
            'name' => 'required',
            'phone_number' => 'required',
            'email' => 'required|email',
            // Add validation rules for other relevant fields
        ]);

        $contacts=Contacts::all();

        return redirect('/main')->with('contacts', $contacts)->with('success', 'Contact created successfully.');
    }

    public function edit(Contacts $contact)
    {
        return view('contacts.edit', compact('contact'));
    }

    public function update(Request $request, Contacts $contact)
{
    $validatedData = $request->validate([
        'name' => 'required',
        'phone_number' => 'required',
        'email' => 'required|email',
        // Add validation rules for other relevant fields
    ]);

    $contact->update($validatedData);

    return redirect()->route('main')->with('success', 'Contact updated successfully.');
}

    public function destroy(Contacts $contact)
    {
        $contact->delete();

       return redirect('/main')->with('success', 'Contact deleted successfully.');
       

    }
}

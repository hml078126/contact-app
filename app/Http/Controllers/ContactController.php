<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){
        $contacts = Contact::orderBy('first_name', 'asc')->paginate(10);
        return view('contacts.index', compact('contacts'));
    }
    
    public function create(Request $request){
        // $contact = new Contact;
        // $contact->first_name = $request->first_name;
        // $contact->last_name = $request->last_name;
        // $contact->email = $request->email;
        // $contact->phone = $request->phone;
        // $contact->address = $request->address;
        // $contact->company_id = $request->company_id;

        // $contact->save();

        // return redirect()->route('contacts.index')->with('success', 'Contact created Successfully!');
        
        // return view('contacts.create');
    }

    public function show($id){
        $contact = Contact::find($id);
        return view('contacts.show', compact('contact')); // ['company'=> $company]
    }

    public function destroy($id)
    {
   
        $contacts = Contact::find($id);
        $contacts->delete();

        return redirect()->route('contacts.index')->with('success', 'Deleted');
    }
}

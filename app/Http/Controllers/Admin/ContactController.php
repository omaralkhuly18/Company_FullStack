<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\OtherPageContact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $Contacts = Contact::all();
        return view("admins.contacts.index", compact("Contacts"));
    }

    public function store(Request $request)
    {
        $Contact = new Contact();
        $Contact->full_name = $request->name;
        $Contact->email = $request->email;
        $Contact->subject = $request->subject;
        $Contact->message = $request->message;
        $Contact->save();

        return redirect()->back()->with('success', trans('web_trans.message_sent_success'));
    }
    public function destroy(Request $request, $id)
    {
        $Contact = Contact::where('id', $id)->first();
        $Contact->delete();
        return redirect()->route('dash.contact.index')->with('success', trans('web_trans.contact_delete_success'));
    }

    public function siteContact()
    {
        $Contact = OtherPageContact::latest()->first();
        return view("home.contact",compact("Contact"));
    }
}

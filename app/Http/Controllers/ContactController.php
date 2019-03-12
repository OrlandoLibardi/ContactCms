<?php

namespace OrlandoLibardi\ContactCms\app\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use OrlandoLibardi\ContactCms\app\Contact;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Contact::paginate(10);
        return view('admin.contact.index', compact('contacts'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        $contact->status = 1;
        $contact->save();
        return view('admin.contact.view', compact('contact'));
    }


}

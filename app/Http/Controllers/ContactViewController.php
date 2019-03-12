<?php

namespace OrlandoLibardi\ContactCms\app\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use OrlandoLibardi\ContactCms\app\Contact;
use OrlandoLibardi\ContactCms\app\Http\Requests\ContactRequest;

class ContactViewController extends Controller
{
    public function store(ContactRequest $request)
    {
        $contact = Contact::create($request->all());
        return response()
                ->json(
                    array(
                        'message' => __('messages.create_success'),
                        'status'  =>  'success'
                    ), 
                200);                        

    }
}
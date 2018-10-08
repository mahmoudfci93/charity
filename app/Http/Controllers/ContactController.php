<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ContactController extends Controller
{
    public function index()
    {
        return view('admin.contact.index');
    }
    public function edit($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->fill(['view'=>1])->save();
        return view('admin.contact.edit',compact('contact'));
    }
    public function store(ContactRequest $request , Contact $contact)
    {
        $contact->create($request->all());
        return Redirect::back()->withFlashMessage('Your Message has been sent Successfully , thank you :)');
    }
    public function update(ContactRequest $request , $id)
    {
        $contact = Contact::findOrFail($id);
        $contact->fill($request->all())->save();
        return Redirect::back()->withFlashMessage('Message has been updated Successfully');
    }
    public function destroy($id)
    {
        Contact::findOrFail($id)->delete();
        return Redirect::route('contact.index')->withFlashMessage('Message has been deleted Successfully');
    }


}

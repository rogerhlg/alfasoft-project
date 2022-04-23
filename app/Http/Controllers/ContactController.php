<?php

namespace App\Http\Controllers;

use App\Http\Services\ContactService;
use Illuminate\Http\Request;
use App\Http\Requests\CreateContactRequest;
use App\Http\Requests\UpdateContactRequest;
use Illuminate\Contracts\Session\Session;


class ContactController extends Controller
{
    private $contactService;

    public function __construct(ContactService $contactService)
    {
        $this->contactService = $contactService;
    }
    
    public function index(Request $request){
        $contacts = $this->list();
        return view('index', ['contacts' => $contacts]);
    }

    public function create(CreateContactRequest $request){
        $contact = $this->contactService->create($request->validated());
        $msg = $contact ? 'Contact created successfully' : 'Failed to create contact';
        $request->session()->flash('msg', $msg);
        
        return view('create-contact');
    }
    
    public function showContact(Int $id){
        $contact = $this->contactService->get($id);
        
        return view('contact-details', ['contact' => $contact]);
    }

    public function update(Int $id){
        $contact = $this->contactService->get($id);
        return view('update-contact', ['contact' => $contact]);
    }
    
    public function actionUpdate(UpdateContactRequest $request){
        $attributes = $request->all();
        $contact = $this->contactService->updateById($attributes);
        $msg = $contact ? 'Contact updated successfully' : 'Failed to update contact';
        $request->session()->flash('msg', $msg);
        
        return view('contact-details', ['contact' => $contact]);
    }

    public function delete(){

    }

    public function list(){
        return $this->contactService->list();
    }
}

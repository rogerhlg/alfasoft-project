<?php

namespace App\Http\Services;

use App\Models\Contact;

class ContactService
{
    public function create(Array $data){
        try {
            return Contact::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'contact' => $data['contact']
            ]);
        } catch (\Throwable $th) {
            dd($th);
            return null;
        }
    }

    public function update(){

    }

    public function delete(){

    }

    public function list(){
        return Contact::all();
    }
    
    public function get(Int $id){
        return Contact::find($id);
    }
    
    public function updateById(Array $attributes){
        $contact = Contact::find($attributes['id']);
        $contact->name = $attributes['name'];
        $contact->email = $attributes['email'];
        $contact->contact = $attributes['contact'];
        $contact->save();
        
        return $contact;
    }
}

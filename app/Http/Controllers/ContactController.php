<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(Request $request){
        $this->list();
    }

    public function create(Request $request){

    }

    public function update(){

    }

    public function delete(){

    }

    public function list(){
        return Contact::where('active', 1)->all();
    }
}

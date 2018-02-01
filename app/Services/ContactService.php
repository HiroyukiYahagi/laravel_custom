<?php

namespace App\Services;


use App\Models\Contact;
use Validator;
use Illuminate\Validation\Rule;

class ContactService
{

    public function add($data){
        Validator::make($data, [
            'email' => 'required|string|max:255',
            'description' => 'required|string',
        ])->validate();
        $contact = Contact::create($data);
        return $contact;
    }
    
}
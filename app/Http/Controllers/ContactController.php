<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ContactService;

use App\Mail\Contacted;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    protected $contactService;

    public function __construct(ContactService $contactService){
        $this->contactService = $contactService;
    }

    public function add(Request $request){
        $contact = $this->contactService->add($request->all());

        Mail::to( (object)[
            "name" => $contact->email,
            "email" => $contact->email,
        ] )->cc( (object)[
            "name" => "つくラボ",
            "email" => config("mail.from.address"),
        ] )->send(new Contacted($contact));

        return back()->with("success", "お問い合わせを受け付けました");
    }
}

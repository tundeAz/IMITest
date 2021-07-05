<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    public function create(){
        return view('contact');
    }

       //validate user datas 
       public function store(){
        //validate request
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        //send email
        Mail::to('test@test.com')->send(new ContactFormMailable($data));

        //redirect to contact page after suucessfully sending message
        session()->flash('message', 'Thank you for you message. we will be in touch.');
        return redirect('contact');

    }
}

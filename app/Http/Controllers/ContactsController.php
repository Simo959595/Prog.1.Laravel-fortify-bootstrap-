<?php

namespace App\Http\Controllers;

use App\Mail\ContactsMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\ContactsController;

class ContactsController extends Controller
{

    public function home(){
        return view('welcome');
    }


    public function contacts(){
        return view("contacts");
    }

    public function contactsSend(Request $request){
        
        $name = $request->input('name');
        $email = $request->input('email');
        $info = $request->info;

        Mail::to($email)->send(new ContactsMail());
        return redirect(route('welcome'))->with('emailSent', 'email inviata con successo');
    }


}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Contact;


class ContactController extends Controller
{
    public function index(){
    
        
        return view("contacts.index",$param);
    }

    public function confirm(Request $request)
    {
        $inputs=$request->all();
        return view('contacts.confirm',['inputs'=>$inputs]);
    }

    public function send(Request $request){
        $items=$request->all();
        Contact::create($items);
        return redirect("/contact/complete");
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Contact;


class ContactController extends Controller
{
    public function index(){
     return view("contact.index");
    }

 
    
  

    public function confirm(Request $request)
    {   
        
    $input = $request->only(['fullname','email','postcode','address','building_name','opinion']); 
     
     return view('contact.confirm',['input'=>$input]);
    }

}
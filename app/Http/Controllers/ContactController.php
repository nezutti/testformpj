<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Contact;


class ContactController extends Controller
{
    public function index(){
    return view("contact.index");
    }


    public function post(Request $request){
        $input=$request->all();
        $request->session()->put("form_input", $input);
        return redirect()->action([ContactController::class,'confirm']);

    }

 
    
  

    public function confirm(Request $request)
    {   
     
    $input = $request->session()->get("form_input");
    
     
     return view('contact.confirm',['input'=>$input]);
    }


    public function send(Request $request){
        $input=$request->session()->get("form_input");

        if($request->has("back")){
     	return redirect()->action([ContactController::class,"index"])
			->withInput($input);
        }

    }
}
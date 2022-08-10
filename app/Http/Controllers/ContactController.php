<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Contact;

use App\Rules\ZipCodeRule;

class ContactController extends Controller
{
    public function index(){
    return view("contact.index");
    }


    public function post(Request $request){
        $request->validate([
        'fullname'=>'required',
        'gender'=>'required',
        'email'=>'required|email',
        'postcode'=>['required',new ZipCodeRule()],
        'address'=>'required',
        'opinion'=>'required|max:120',
        ]);
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

        Contact::create($input);
        return redirect()->action([ContactController::class,"complete"]);

    }

    public function complete(){
        return view('contact.complete');
    }


    public function find(){
        return view('find');
    }

    public function search(Request $request){
        $fullname=$request->fullname;
        $email=$request->email;
        $from_time=$request->from_time;
        $to_time=$request->to_time;
        $gender=$request->gender;

        $query=Contact::query();
        
        $query->when($fullname,function($query,$fullname){
            return $query->where('fullname','like',"%$fullname%");
        });

        $query->when($gender,function($query,$gender){
          
            return $query->where('gender',$gender);
                
        });

        $query->when($email,function($query,$email){
            return $query->where('email','like',"%$email%");
        });

        $query->when($from_time,function($query,$from_time){
            return $query->whereDate('created_at','>=',$from_time);
        });

        $query->when($to_time,function($query,$to_time){
            return $query->whereDate('created_at','<=',$to_time);
        });

        $items=$query->paginate(10);

        return view('find',['items'=>$items]);
    }

    public function delete(Request $request){
        $contact=Contact::find($request->id);
        $contact->delete();
        return back();
    }

}


<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Contact;

use Illuminate\Support\Facades\Hash;

class Register extends Component
{   public $fullname;
    public $gender;
    public $email;
    public $postcode;
    public $address;
    public $building_name;
    public $opinion;

    protected $rules=[
        'fullname'=>'required',
        
        'email'=>'required|email',
        'postcode'=>'required|regex:/^[0-9-]+$/|size:8',
        'address'=>'required',
        'opinion'=>'required|max:120',
    ];
    
    public function updated($property)
    {
        $this->validateOnly($property);
    }

    public function register(){
        $validateData=$this->validate();
       
    }


}

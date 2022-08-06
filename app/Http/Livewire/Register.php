<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Contact;
use App\Models\Gender;
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
        'gender'=>'required|boolean',
        'email'=>'required|email',
        'postcode'=>'required|integer',
        
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

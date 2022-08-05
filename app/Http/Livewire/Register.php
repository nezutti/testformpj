<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
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
        'gender'=>'required',
        'email'=>'required|email',
        'postcode'=>'required|',
        'address'=>'required',
        'opinion'=>'required|max:120'
    ];
    
    public function render()
    {
        return view('livewire.register');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable=[
        "fullname",
        "email",
        "postcode",
        "address",
        "building_name",
        "opinion",
    ];

    public static $rules=array(
        
        'fullname'=>'required',
        'email'=>'required|email',
        'postcode'=>'required|regex:/^[0-9-]+$/|size:8',
        'address'=>'required',
        'opinion'=>'required|max:120',
    );

    


}

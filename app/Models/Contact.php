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
        'postcode'=>'required|integer',
        'address'=>'required',
        'building_name'=>'required',
        'opinion'=>'required|max:120',
    );

    


}

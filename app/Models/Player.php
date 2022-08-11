<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;
    protected $fillable =[
        'fname',
        'mname',
        'lname',
        'whatsapp_num',
        'alt_num',
        'email',
        'dateOfBirth',
        'gender',
        'pincode',
        'city',
        'state',
        'country',
        'height',
        'weight',
        'position',
        'level',
        'document',
        'jersy',
        'experiance',
        'termId',
    ];
}


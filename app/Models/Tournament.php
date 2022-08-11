<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tournament extends Model
{
    use HasFactory;
    protected $fillable =[
       
        'name',
        'email',
        'mobileNumber',
        'logo',
       'tournament_name',
       'tournament_location',
       'startDate',    
       'endDate',
       'tournamentCategory',
       'tournamentType',
       'ageRestriction',
       'ageCutOff',
       'aboutTournament',
     
    
   ];
}

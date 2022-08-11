<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tournament;

class tournamentController extends Controller
{
    public function tournament()
    {
            return view("user.tournamentRegister");
    }
    public function tournamentUser(Request $request)
    {
       request()->validate([
            'name' => 'required | min:3 ',
            'email' => 'required|email',
            'mobileNumber'=>'required|numeric|digits:10',
            'logo'=> 'required|image|mimes:jpg,png,jpeg',
            'tournament_name' => 'required'  ,
            'tournament_location'=>'required',
            'startDate'=>'required',
            'endDate'=>'required',
            'tournamentCategory'=>'required',
            'tournamentType'=>'required',
            'ageRestriction'=>'required',
            'ageCutOff'=>'required',
            'aboutTournament'=>'required',
         ]);

      $tournament = new Tournament();
      
      $tournament->name = $request->input('name');
      $tournament->email = $request->input('email');
      $tournament->mobileNumber = $request->input('mobileNumber');
      if ($request->hasfile('logo'))
      {
        $file = $request->file('logo');
        $extention = $file->getClientOriginalExtension();
        $filename = time().'.'.$extention;
        $file->move('upload/tournamentRegister/',$filename);
        $tournament->logo = $filename;
      } 
      $tournament->tournament_name = $request->input('tournament_name');
      $tournament->tournament_location = $request->input('tournament_location');
      $tournament->startDate = $request->input('startDate');
      $tournament->endDate = $request->input('endDate');
      $tournament->tournamentCategory = $request->input('tournamentCategory');
      $tournament->tournamentType = $request->input('tournamentType');
      $tournament->ageRestriction = $request->input('ageRestriction');
      $tournament->ageCutOff = $request->input('ageCutOff');
      $tournament->aboutTournament = $request->input('aboutTournament');
   
      $res = $tournament->save();
  
        if ($res) 
        {   
                  return redirect('tournamentInfo')->with('success', 'You have registered successfuly');
        }
         else 
         {
                 return back()->with('fail', 'Something wrong');
         }
    }

}
/*
   
            $table->bigIncrements('playerId')->nullable(false);
            $table->string('p_firstName')->nullable(false);
            $table->string('p_middelName');
            $table->string('p_lastName')->nullable(false);
            $table->string('p_whatsapp_num',10)->nullable(false);
            $table->string('p_alt_num',10);
            $table->string('p_email');
            $table->date('dateOfBirth')->nullable(false);
            $table->string('p_gender')->nullable(false);
            $table->integer('p_pincode')->nullable(false);
            $table->string('p_city')->nullable(false);
            $table->string('p_state')->nullable(false);
            $table->string('p_country')->nullable(false);
            $table->integer('p_height')->nullable(false);
            $table->integer('p_weight')->nullable(false);
            $table->string('p_position')->nullable(false);
            $table->string('p_level')->nullable(false);
            $table->string('p_file')->nullable();
            $table->integer('p_jersy')->nullable(false);
            $table->string('p_experiance')->nullable(false);
            $table->integer('termId')->nullable(false);
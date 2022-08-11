<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;    
//use App\Models\PlayerDetail;


class playerController extends Controller
{
    public function player()
    {
            return view("user.playerRegister");
    }
    public function playerUser(Request $request)
    {
     
        
       request()->validate([
        'fname'=>'required|min:3',
        'mname',
        'lname'=>'required|min:3',
        'whatsapp_num'=>'required|numeric|digits:10',
        'alt_num'=>'required|numeric|digits:10',
        'email'=>'required|email',
        'dateOfBirth'=>'required',
        'gender'=>'required',
        'pincode'=>'required|max:6|min:6 ',
        // 'city'=>'required',
        // 'state'=>'required',
        // 'country'=>'required',
         'city',
        'state',
        'country',
        'height'=>'required|numeric',
        'weight'=>'required|numeric',
        'position'=>'required',
        'level'=>'required',
        'document'=>'required|mimes:jpeg,jpg,pdf,png',
        'jersy'=>'required',
        'experiance'=>'required',
        'termId'=>'required',
         ]);
 
         $player = new Player();
        

         $player-> fname = $request->input('fname');
         $player->mname = $request->input('mname');
         $player->lname = $request->input('lname');
         $player->whatsapp_num = $request->input('whatsapp_num');
         $player->alt_num = $request->input('alt_num');
         $player->email = $request->input('email');
         $player->dateOfBirth = $request->input('dateOfBirth');
         $player->gender = $request->input('gender');
         $player->pincode = $request->input('pincode');
         $player->city = $request->input('city');
         $player->state = $request->input('state');
         $player->country = $request->input('country');     
         $player->height=$request->input('height');
         $player->weight=$request->input('weight');
         $player->position=$request->input('position');
         $player->level=$request->input('level');
     
        
         if ($request->hasfile('document'))
         {
           $file = $request->file('document');
           $extention = $file->getClientOriginalExtension();
           $filename = time().'.'.$extention;
           $file->move('upload/playerRegister/',$filename);
           $player->document = $filename;
         } 
         $player->jersy=$request->input('jersy');
         $player->experiance=$request->input('experiance');
         $player->termId=$request->input('termId');

         $res =  $player->save();
         if ($res) 
         {   
                   return redirect('playerInfo')->with('success', 'You have registered player information successfully');
         }
          else 
          {
                  return back()->with('fail', 'Something wrong');
          }  
    }
}

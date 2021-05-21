<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class AddheroController extends Controller
{

    
    public function submit(Request $req){
       $validation = $req->validate([
        "nickname" => 'required|min:2|max:50',
        "fullname" => 'required|min:2|max:50',
        "discription" => 'required',
        "tecniq" => 'required',
        "phrase" => 'required',
        "photo" => 'required'
       ]);
/*if($req->hasfile('photos')) { 
        foreach($request->file('photos') as $file)
        {
            $fileName = time().rand(0, 1000).pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
            $fileName = $fileName.'.'.$file->getClientOriginalExtension();
            $file->move(public_path(),$fileName);
            $input['photos'] = $filename;
        }
       
    }   */      
    DB::table('heroes')->insert(
        ['nickname' => $req->input('nickname'),
        'real_name' => $req->input('fullname'),
        'origin_description' => $req->input('discription'),
        'superpowers' => $req->input('tecniq'),
        'catch_phrase' => $req->input('phrase'),
        'image' => $input
    ]
      );
       //$input = Input::file('photos[]')->getRealPath();

       
       /*$heroe = new Heroes();
       $heroe->nickname = $req->input('nickname');
       $heroe->real_name = $req->input('fullname');
       $heroe->origin_description = $req->input('discription');
       $heroe->superpowers = $req->input('tecniq');
       $heroe->catch_phrase = $req->input('phrase');
       $heroe->image_id = $req->input('photo');

       $heroe->save();
*/    
       //return redirect()->route('addheroe');
    }
}

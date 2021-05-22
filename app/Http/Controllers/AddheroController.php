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
        "phrase" => 'required'
       ]);
        $imagePath = $req->file('images')->store('uploads', 'public');
        //$input = Input::file('images[]')->getRealPath();

        DB::table('heroes')->insert(
        ['nickname' => $req->input('nickname'),
        'real_name' => $req->input('fullname'),
        'origin_description' => $req->input('discription'),
        'superpowers' => $req->input('tecniq'),
        'catch_phrase' => $req->input('phrase'),
        'image' => $imagePath
        ]
      );
 

       return redirect()->route('addheroe');
    }


    public function allData(){
        $data = DB::table('heroes')->select('hero_id','nickname', 'real_name','origin_description','superpowers','catch_phrase','image')->paginate(5);
        return view('home', ['data' => $data]);
    }
    
    public function currData($id){

        $data = DB::table('heroes')->select('hero_id', 'nickname', 'real_name','origin_description','superpowers','catch_phrase','image')
                                            ->where('hero_id', '=', $id)->first();
        return view('currHero', ['data' => $data]);
    }

    public function submitmodifyData(Request $req, $id){
        if( $req->file('images') == null)  $imagePath = $req->input('image-last');
        else $imagePath = $req->file('images')->store('uploads', 'public');
        
        DB::table('heroes')
                            ->where('hero_id',  $id)
                            ->update(['nickname'=> $req->input('nickname'), 'real_name' => $req->input('fullname'),
                            'origin_description' => $req->input('discription'),'superpowers' => $req->input('tecniq'),
                            'catch_phrase'=> $req->input('phrase'),'image'=> $imagePath]);
        $data = DB::table('heroes')->select('hero_id','nickname', 'real_name','origin_description','superpowers','catch_phrase','image')->paginate(5);
        return view('home', ['data' => $data]);
    }

    public function modifyData($id){
        $data = DB::table('heroes')->select('hero_id', 'nickname', 'real_name','origin_description','superpowers','catch_phrase','image')
        ->where('hero_id', '=', $id)->first();
        return view('modify', ['data' => $data]);
    }

    public function deleteData($id){
        DB::table('heroes')->where('hero_id', '=', $id)->delete();

        $data = DB::table('heroes')->select('hero_id','nickname', 'real_name','origin_description','superpowers','catch_phrase','image')->paginate(5);
        return view('home', ['data' => $data]);
    }

}

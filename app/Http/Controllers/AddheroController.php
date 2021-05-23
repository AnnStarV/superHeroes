<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class AddheroController extends Controller
{

    
    public function submit(Request $req){
      /* $validation = $req->validate([
        "nickname" => 'required|min:2|max:50',
        "fullname" => 'required|min:2|max:50',
        "discription" => 'required',
        "tecniq" => 'required',
        "phrase" => 'required'
       ]);*/
    /*    $imagePath = $req->file('images')->store('uploads', 'public');
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
 
     

      
       return redirect()->route('addheroe'); */

     $array_image = [];
      foreach($req->file('image') as $file){
        $imagePath = $file->store('uploads', 'public');
        array_push($array_image, $imagePath);
      }
      //dd($array_image);
      $json_image = json_encode($array_image);   

      DB::table('heroes')->insert(
        ['nickname' => $req->input('nickname'),
        'real_name' => $req->input('fullname'),
        'origin_description' => $req->input('discription'),
        'superpowers' => $req->input('tecniq'),
        'catch_phrase' => $req->input('phrase'),
        'image' => $json_image
        ]
      );

      return redirect()->route('addheroe');
       
    }


    public function allData(){
        $data = DB::table('heroes')->select('hero_id','nickname', 'real_name','origin_description','superpowers','catch_phrase', 'image')->paginate(5);
        if($data->items()!=null){
          foreach($data->items() as $key=> $el){
            $data[$key]->image = json_decode($data[$key]->image)[0];
          }
          return view('home', ['data' => $data]);
        }
        else return redirect()->route('addheroe');
    }
    
    public function currData($id){

        $data = DB::table('heroes')->select('hero_id', 'nickname', 'real_name','origin_description','superpowers','catch_phrase','image')
                                            ->where('hero_id', '=', $id)->first();
                                            
        $data->image = json_decode($data->image);
        return view('currHero', ['data' => $data]);
    }

    public function submitmodifyData(Request $req, $id){
        $arr_of_im = [];
        $countOfIm = count($req->input())-7;
        for ($i = 1; $i <= $countOfIm; $i++) {
          if(($req->file(('image-'.$i)) == null)){
            $imagePath = $req->input('image-last-'.$i);
            array_push($arr_of_im, $imagePath);
          }
          else{
            $imagePath = ($req->file('image-'.$i)[0])->store('uploads', 'public');
            array_push($arr_of_im, $imagePath);
          }
        }
        if($req->file('image')!=null){
          foreach($req->file('image') as $file){
            $imagePath = $file->store('uploads', 'public');
            array_push($arr_of_im, $imagePath);
          }
        }
        
        $json_image = json_encode($arr_of_im);   
        DB::table('heroes')
                            ->where('hero_id',  $id)
                            ->update(['nickname'=> $req->input('nickname'), 'real_name' => $req->input('fullname'),
                            'origin_description' => $req->input('discription'),'superpowers' => $req->input('tecniq'),
                            'catch_phrase'=> $req->input('phrase'),'image'=> $json_image]);
        $data = DB::table('heroes')->select('hero_id','nickname', 'real_name','origin_description','superpowers','catch_phrase','image')->paginate(5);
        return redirect()->route('home')->with(['data' => $data]);
    }

    public function modifyData($id){
        $data = DB::table('heroes')->select('hero_id', 'nickname', 'real_name','origin_description','superpowers','catch_phrase','image')
        ->where('hero_id', '=', $id)->first();
        $data->image = json_decode($data->image);
        return view('modify', ['data' => $data]);
    }

    public function deleteData($id){
        DB::table('heroes')->where('hero_id', '=', $id)->delete();

        $data = DB::table('heroes')->select('hero_id','nickname', 'real_name','origin_description','superpowers','catch_phrase','image')->paginate(5);
        return view('home', ['data' => $data]);
    }

    public function deleteImageData($id, $curr_image){
      $data = DB::table('heroes')->select('hero_id', 'nickname', 'real_name','origin_description','superpowers','catch_phrase','image')
      ->where('hero_id', '=', $id)->first();
      $arr_of_im = json_decode($data->image);
    
      unset($arr_of_im[$curr_image]);
   
      $new_arr_of_im = array_values(array_filter( $arr_of_im));
      
      $json_image = json_encode($new_arr_of_im);

      $data = DB::table('heroes')
      ->where('hero_id',  $id)
      ->update(['image'=> $json_image]);
 
      $data = DB::table('heroes')->select('hero_id', 'nickname', 'real_name','origin_description','superpowers','catch_phrase','image')
                                            ->where('hero_id', '=', $id)->first();
      $data->image = json_decode($data->image);
      return view('currHero', ['data' => $data]);
      
      $data = DB::table('heroes')->select('hero_id','nickname', 'real_name','origin_description','superpowers','catch_phrase', 'image')->paginate(5);
      $data[0]->image = json_decode($data[0]->image)[0];
      return view('home', ['data' => $data]);
  }
}

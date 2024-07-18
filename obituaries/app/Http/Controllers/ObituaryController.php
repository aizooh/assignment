<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\obituaries;

class ObituaryController extends Controller
{
    function HomeIndex(){
        return view('obituary_form');
    }
    public function submit_obituary(Request $request) {
      $data= new obituaries;
      $data->name=$request->name;
      $data->dateOfBirth=$request->dateOfBirth;
      $data->dateOfDeath=$request->dateOfDeath;
      $data->content=$request->content;
      $data->author=$request->author;
      echo $data->save();



        // $name = $request->input('name');
        // $dateOfBirth = $request->input('dateofBirth'); 
        // $dateOfDeath = $request->input('dateOfDeath'); 
        // $content = $request->input('content');
        // $author = $request->input('author');
        // $isInsertSuccess = obituaries::insert(['name'=>$name,
        //                                        'dateOfBirth'=>$dateOfBirth,
        //                                        'dateOfDeath'=>$dateOfDeath,
        //                                        'content'=>$content,
        //                                        'author'=>$author,]);
if($isInsertSuccess)
echo'<h1> Sumbited Successfully</h1>';
else 
echo'<h1>Record not submited</h1>';
    }
} 

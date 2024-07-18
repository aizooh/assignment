<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\obituaries;

class ObituaryController extends Controller
{
    function HomeIndex(){
        return view('obituary_form');
    }
    public function submit_obituary(Request $request) {
        $name = $request->input('name');
        $dateOfBirth = $request->input('dateofBirth'); 
        $dateOfDeath = $request->input('dateOfDeath'); 
        $content = $request->input('content');
        $author = $request->input('author');
        $isInsertSuccess = obituaries::insert(['name'=>$name,
                                               'dateOfBirth'=>$dateOfBirth,
                                               'dateOfDeath'=>$dateOfDeath,
                                               'content'=>$content,
                                               'author'=>$author,]);
if($isInsertSuccess)
echo'<h1> Sumbited Successfully</h1>';
else 
echo'<h1>Record not submited</h1>';
    }
} 

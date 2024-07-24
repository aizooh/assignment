<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Obituary; 

class ObituaryController extends Controller
{
    public function HomeIndex()
    {
        return view('obituary_form');
    }

    public function store(Request $request)
    {
       
        $validatedData = $request->validate([
            'name' => 'required|max:100',
            'dateOfBirth' => 'required|date',
            'dateOfDeath' => 'required|date',
            'content' => 'required',
            'author' => 'required|max:100',
        ]);

       
        $obituary = new Obituary();
        $obituary->name = $validatedData['name'];
        $obituary->dateOfBirth = $validatedData['dateOfBirth'];
        $obituary->dateOfDeath = $validatedData['dateOfDeath'];
        $obituary->content = $validatedData['content'];
        $obituary->author = $validatedData['author'];

    
        $isSaved = $obituary->save();

        if ($isSaved) {
            return '<h1>Submitted Successfully</h1>';
        } else {
            return '<h1>Record not submitted</h1>';
        }
    }
}

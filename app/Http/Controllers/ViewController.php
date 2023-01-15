<?php

namespace App\Http\Controllers;

use App\Models\Prompt;

class ViewController extends Controller
{
    public function index(){
        return view('index');
    }

    public function vertoaling($id){
        $prompt = Prompt::find($id);

        if (!$prompt) {
            return redirect()->route('index');
        }

        return view('vertoaling', ['prompt' => $prompt]);
    }
}

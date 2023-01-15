<?php

namespace App\Http\Controllers;

use App\Models\Prompt;
use App\Services\OpenAI;
use Illuminate\Http\Request;

class PromptController extends Controller
{
    public function completion (Request $request){
        $validatedData = $request->validate([
            'prompt' => 'required',
        ]);

        $openai = new OpenAI();
        $result = $openai->complete('Vertaal deze tekst naar het Limburgs Maastrichts dialect: ' . $validatedData['prompt']);

        $prompt = new Prompt();
        $prompt->prompt = $validatedData['prompt'];
        $prompt->response = $result['choices'][0]['text'];
        $prompt->save();

        return redirect()->route('vertoaling', ['id' => $prompt->id]);
    }
}

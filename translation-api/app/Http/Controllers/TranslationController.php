<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stichoza\GoogleTranslate\GoogleTranslate;

class TranslationController extends Controller
{
    public function translate(Request $request)
    {
      
        $request->validate([
            'text' => 'required|string', 
        ]);

       
        $textToTranslate = $request->input('text');

        
        $translator = new GoogleTranslate('fr');
        $translatedText = $translator->translate($textToTranslate);

      
        return response()->json(['translated_text' => $translatedText]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\GeminiService;

class GeminiImageController extends Controller
{
    public function home ()
    {
        return view('home');
    }

    public function describe (Request $request, GeminiService $service)
    {
        $request->validate([
            'image_url' => 'required|string'
        ]);

        try {
            $analysisResult = $service->analyzeImage($request->image_url);
            $message = $analysisResult;
        } catch (\Exception $e) {
            $message = "Ops! Algo deu errado, por favor tente novamente.";
        }

        return back()->with(['message' => $message, 'image_url' => $request->image_url]);
    }
}

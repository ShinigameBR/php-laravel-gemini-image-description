<?php

namespace App\Services;

use Gemini\Laravel\Facades\Gemini;
use Gemini\Data\Blob;
use Gemini\Enums\MimeType;

class GeminiService
{
    public function analyzeImage(string $image_url) : string {
        $prompt = "Describe this image. Answer in Brazilian Portuguese.";
        $imageBlob = new Blob(
            mimeType: MimeType::IMAGE_JPEG,
            data: base64_encode(file_get_contents($image_url))
        );

        $result = Gemini::geminiProVision()->generateContent([$prompt, $imageBlob]);

        return $result->text();
    }
}


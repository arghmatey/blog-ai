<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class AIService
{
    public function generateText(string $prompt): string
    {
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . config('services.openai.key'),
            'Content-Type' => 'application/json',
        ])->post(config('services.openai.url') . '/chat/completions', [
            'model' => config('services.openai.model'),
            'messages' => [
                ['role' => 'system', 'content' => "You are a professional blogger. Write informative and friendly posts for the general public."],
                ['role' => 'user', 'content' => "Write a blog post titled: {$prompt}. Make it 400-600 words in length. Include an engaging introduction that hooks the reader. Provide a 1-2 main sections with subheadings."]
            ],
            'temperature' => 0.7,
            'max_tokens' => 500,
        ]);

        if (!$response->successful()) {
            throw new \Exception('API error: ' . $response->body());
        }

        return $response['choices'][0]['message']['content'] ?? 'No output received';
    }
}
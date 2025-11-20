<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatbotController extends Controller
{
    public function message(Request $request)
    {
        $message = strtolower($request->input('message'));

        // TODO: Replace this with a real AI API call (e.g., OpenAI, Groq)
        // Example:
        // $response = Http::withToken(env('OPENAI_API_KEY'))->post('https://api.openai.com/v1/chat/completions', [
        //     'model' => 'gpt-3.5-turbo',
        //     'messages' => [['role' => 'user', 'content' => $message]],
        // ]);
        // return response()->json(['reply' => $response['choices'][0]['message']['content']]);

        if (str_contains($message, 'skill')) {
            $reply = "I am proficient in Laravel, PHP, Tailwind CSS, MySQL, and JavaScript. I also have experience with Git and Docker.";
        } elseif (str_contains($message, 'project')) {
            $reply = "I have worked on various projects including this portfolio, e-commerce platforms, and management systems. Check out the Projects section!";
        } elseif (str_contains($message, 'contact') || str_contains($message, 'email')) {
            $reply = "You can reach me via the contact form below or email me directly at hello@example.com.";
        } else {
            $reply = "Thanks for reaching out! I'm an AI assistant here to help you learn more about my creator. Ask me about skills, projects, or experience.";
        }

        return response()->json(['reply' => $reply]);
    }
}

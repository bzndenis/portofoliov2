<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ChatbotController;

Route::get('/', function () {
    return view('portfolio');
});

Route::post('/chatbot/message', [ChatbotController::class, 'message']);

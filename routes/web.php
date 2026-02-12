<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;

Route::get('/', fn(): array => [config('app.name')]);

Route::get('/teste-email', function () {
    Mail::raw('Email de teste', function ($message) {
        $message->to('teste@exemplo.com')
                ->subject('Teste Mailpit');
    });

    return 'Email enviado';
});

Route::middleware('guest')->group(function(){
    Route::post('/api/register', [AuthController::class, 'register']);
    Route::post('/api/login', [AuthController::class, 'login']);
});
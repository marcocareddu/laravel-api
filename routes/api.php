<?php

use App\Http\Controllers\Api\MailController;
use App\Http\Controllers\Api\ProjectController;
use Illuminate\Http\Request;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// All API Projects Route
Route::apiResource('projects', ProjectController::class);

// API Mail Message
Route::post('/mail-message', [MailController::class, 'mailMessage']);

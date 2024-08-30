<?php

use App\Http\Controllers\ProfileController;
use App\Mail\FeedbackMail;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Illuminate\Support\Facades\Mail;

Route::get('/', function () {
    return Inertia::render('Home');
});

Route::get('/home', function () {
    return Inertia::render('Home');
})->name('home');

Route::get('/about', function () {
    return Inertia::render('About');
})->name('about');

Route::get('/products', function () {
    return Inertia::render('Products');
})->name('products');

Route::get('/contacts', function () {
    return Inertia::render('Contacts');
})->name('contacts');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

Route::post('/api/feedback', function (Request $request) {

    try {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);
        $details = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'message' => $request->input('message'),
        ];

        Log::info('Mail details', $details);

        Mail::to('pastbin.alex@gmail.com')->send(new FeedbackMail($details));
        Log::info('Mail sent successfully');

        return response()->json(['data' => 'ok']);
    } catch (\Illuminate\Validation\ValidationException $e) {
        return response()->json(['errors' => $e->errors()]);
    } catch (\Exception $e) {
        Log::error('Mail sending failed', ['error' => $e->getMessage()]);
        return response()->json(['errors' => $e->getMessage()]);
    }
});



require __DIR__ . '/auth.php';

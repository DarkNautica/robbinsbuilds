<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ContactController;


Route::get('/', function () {
    return view('home');
});

Route::get('/pricing', function () {
    return view('pricing');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/portfolio', function () {
    return view('portfolio');
});

Route::get('/privacy-policy', function () {
    return view('/readables/privacy-policy');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/contact/send', function () {
    return redirect()->route('home'); // or another appropriate route
});


Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');
Route::get('/test-curl-email', [ContactController::class, 'sendViaCurl']);


require __DIR__.'/auth.php';
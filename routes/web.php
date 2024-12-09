<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('appointment', function () {
    return view('appointment');
});
Route::get('contact', function () {
    return view('contact');
});
Route::get('services', function () {
    return view('services');
});
Route::get('service-individual', function () {
    return view('service-individual');
});
Route::get('services-couple', function () {
    return view('services-couple');
});
Route::get('services-career', function () {
    return view('services-career');
});
Route::get('service-stress', function () {
    return view('service-stress');
});
Route::get('service-anxiety', function () {
    return view('service-anxiety');
});
Route::get('service-depression', function () {
    return view('service-depression');
});
Route::get('Blog', function () {
    return view('Blog');
});
Route::get('about', function () {
    return view('about');
});
Route::get('study-case', function () {
    return view('study-case');
});

Route::get('case-details', function () {
    return view('case-details');
});
Route::get('blog-single', function () {
    return view('blog-single');
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

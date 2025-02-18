<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\HomeController;
use Filament\Http\Middleware\Authenticate;
use Illuminate\Support\Facades\Route;

Route::get('logs', [\Rap2hpoutre\LaravelLogViewer\LogViewerController::class, 'index']);

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/how-is-it-free', [HomeController::class, 'how_is_it_free'])->name('home.how-is-it-free');
Route::get('/replacement-vehicle', [HomeController::class, 'replacement_vehicle'])->name('home.replacement-vehicle');
Route::get('/accident-repairs', [HomeController::class, 'accident_repairs'])->name('home.accident-repairs');
Route::get('/privacy-policy', [HomeController::class, 'privacy_policy'])->name('home.privacy-policy');
Route::get('/cookie-policy', [HomeController::class, 'cookie_policy'])->name('home.cookie-policy');
Route::get('/terms-and-conditions', [HomeController::class, 'terms_and_conditions'])->name('home.terms-and-conditions');
Route::get('/complaints-procedure', [HomeController::class, 'complaints_procedure'])->name('home.complaints-procedure');


Route::middleware([Authenticate::class])->name('admin.')->prefix('admin')->group(function () {
    Route::name('forms.')->prefix('forms')->group(function () {
        Route::get('/layout', [FormController::class, 'layout'])->name('layout');
        Route::get('/layout-js', [FormController::class, 'layout2']);
        // Route::get('/{record}/edit', \App\Filament\Resources\FormResource\Pages\EditForm::class)->name('edit');
    });
});

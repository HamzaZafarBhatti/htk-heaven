<?php

use App\Filament\Pages\ViewRoadTrafficAccidentComments;
use App\Http\Controllers\AccidentClaimController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Filament\Http\Middleware\Authenticate;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::get('/profile/security', [PasswordController::class, 'edit'])->name('profile.security');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('claims', [AccidentClaimController::class, 'index'])->name('claims.index');
    Route::get('claims/{rta_number}', [AccidentClaimController::class, 'show'])->name('claims.show');
    Route::get('claims/{id}/comments', [AccidentClaimController::class, 'comments'])->name('claims.comments');



    Route::get(
        '/admin/road-traffic-accidents/{record}/comments',
        [ViewRoadTrafficAccidentComments::class, '__invoke']
    )->name('filament.admin.resources.road-traffic-accidents.comments');
});

Route::get('logs', [\Rap2hpoutre\LaravelLogViewer\LogViewerController::class, 'index']);

Route::get('/', [HomeController::class, 'index'])->name('home.index');
// Route::get('/how-is-it-free', [HomeController::class, 'how_is_it_free'])->name('home.how-is-it-free');
Route::get('/replacement-vehicle', [HomeController::class, 'replacement_vehicle'])->name('home.replacement-vehicle');
Route::get('/report-claim', [HomeController::class, 'report_claim'])->name('home.report-claim');
Route::post('/report-claim', [AccidentClaimController::class, 'store']);
Route::get('/privacy-policy', [HomeController::class, 'privacy_policy'])->name('home.privacy-policy');
Route::get('/cookie-policy', [HomeController::class, 'cookie_policy'])->name('home.cookie-policy');
Route::get('/terms-and-conditions', [HomeController::class, 'terms_and_conditions'])->name('home.terms-and-conditions');
Route::get('/complaints-procedure', [HomeController::class, 'complaints_procedure'])->name('home.complaints-procedure');
Route::get('/thankyou', [HomeController::class, 'thankyou_page'])->name('home.thankyou-page');
Route::get('/service/{slug?}', [HomeController::class, 'service_show'])->name('service.show');


Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/accident-repairs', [HomeController::class, 'accident_repairs'])->name('home.accident-repairs');
});


Route::middleware([Authenticate::class])->name('admin.')->prefix('admin')->group(function () {
    Route::name('forms.')->prefix('forms')->group(function () {
        Route::get('/layout', [FormController::class, 'layout'])->name('layout');
        Route::get('/layout-js', [FormController::class, 'layout2'])->name('layout-js');
        // Route::get('/{record}/edit', \App\Filament\Resources\FormResource\Pages\EditForm::class)->name('edit');
    });
});

require __DIR__ . '/auth.php';

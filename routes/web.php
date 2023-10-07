<?php

use App\Http\Controllers\Admin\BusController;
use App\Http\Controllers\Admin\CompanyController;
use App\Http\Controllers\Admin\PetugasController;
use App\Http\Controllers\Admin\RuteController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SendMailController;
use App\Http\Controllers\TiketController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', HomeController::class)->name('home');
Route::get('/search', [TiketController::class, 'index'])->name('search_tiket');
Route::get('/about', fn () => view('about'))->name('about');
Route::get('/contact', fn () => view('contact'))->name('contact');

Route::post('/contact-send', [SendMailController::class, 'sendMail'])->name('contact.send');

Route::middleware('role:Penumpang')->group(function () {
    Route::get('my-tiket', [TiketController::class, 'all'])->name('tiket.list');
    Route::get('detail-tiket/{order}', [TiketController::class, 'show'])->name('tiket.show');
    Route::get('update-tiket/{order}', [OrderController::class, 'edit'])->name('tiket.edit');
    Route::patch('update-tiket/{order}', [OrderController::class, 'update'])->name('tiket.update');

    Route::get('payment/{order}', [PaymentController::class, 'index'])->name('payment.index');
    Route::post('payment/{order}', [PaymentController::class, 'store'])->name('payment.store');

    Route::get('success/{order}', [PaymentController::class, 'success'])->name('payment.success');

    Route::get('pesan/{rute}', [OrderController::class, 'index'])->name('order.index');
    Route::post('pesan/{rute}', [OrderController::class, 'store'])->name('order.store');

    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::get('/profile-update', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::match(['patch', 'put'], '/profile-update', [ProfileController::class, 'update'])->name('profile.update');
});

Route::middleware(['auth', 'role:Admin|Petugas'])->group(function () {
    Route::get('/dashboard', DashboardController::class)->name('dashboard');

    Route::get('ticket/unverified', [\App\Http\Controllers\Admin\TiketController::class, 'indexUnverified'])->name('ticket.unverified');
    Route::get('ticket/verified', [\App\Http\Controllers\Admin\TiketController::class, 'indexVerified'])->name('ticket.verified');
    Route::get('ticket/{order}', [\App\Http\Controllers\Admin\TiketController::class, 'show'])->name('ticket.show');
    Route::patch('ticket/{order}', [\App\Http\Controllers\Admin\TiketController::class, 'update'])->name('ticket.update');

    Route::middleware('role:Admin')->group(function () {
        Route::resource('petugas', PetugasController::class)->parameters([
            'petugas' => 'user',
        ])->except('show');
        Route::resource('company', CompanyController::class);
        Route::resource('bus', BusController::class)->parameters([
            'bus' => 'bus',
        ]);
        Route::resource('rute', RuteController::class);
    });
});

require __DIR__.'/auth.php';

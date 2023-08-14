<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SendMailController;
use App\Http\Controllers\Admin\BusController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\RuteController;
use App\Http\Controllers\Admin\CompanyController;
use App\Http\Controllers\Admin\PetugasController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\TiketController;

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

Route::get('/my-tiket', fn () => view('list-tiket'))->name('mytiket');
Route::get('/detail-tiket', fn () => view('detail-tiket'))->name('detailTiket');
Route::get('/update-tiket', fn () => view('update-tiket'))->name('updateTiket');
Route::get('/payment', fn () => view('payment'))->name('payment');
Route::get('/success', fn () => view('success-payment'))->name('success');

Route::post('/contact-send', [SendMailController::class, 'sendMail'])->name('contact.send');

Route::middleware('role:Penumpang')->group(function () {
    Route::get('pesan/{rute}', [OrderController::class, 'index'])->name('order.index');
    Route::post('pesan/{rute}', [OrderController::class, 'store'])->name('order.store');
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::get('/profile-update', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::match(['patch', 'put'], '/profile-update', [ProfileController::class, 'update'])->name('profile.update');
});

Route::middleware('auth')->group(function () {
    // Dashboard
    Route::get('/dashboard', DashboardController::class)->name('dashboard');
    Route::resource('petugas', PetugasController::class)->parameters([
        'petugas' => 'user'
    ])->except('show');
    Route::resource('company', CompanyController::class);
    Route::resource('bus', BusController::class)->parameters([
        'bus' => 'bus'
    ]);
    Route::resource('rute', RuteController::class);
});

require __DIR__ . '/auth.php';

<?php

use App\Http\Controllers\Admin\PetugasController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SendMailController;

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

Route::get('/', function () {
    $kotas = ['Jakarta', 'Surabaya', 'Bandung', 'Cilacap', 'Jepara', 'Yogyakarta', 'Bali', 'Semarang', 'Malang', 'Magelang', 'Palembang', 'Medan'];
    return view('home', compact('kotas'));
})->name('home');
Route::get('/about', fn () => view('about'))->name('about');
Route::get('/contact', fn () => view('contact'))->name('contact');
Route::get('/search', function () {
    $kotas = ['Jakarta', 'Surabaya', 'Bandung', 'Cilacap', 'Jepara', 'Yogyakarta', 'Bali', 'Semarang', 'Malang', 'Magelang', 'Palembang', 'Medan'];
    return view('search', compact('kotas'));
});
Route::get('/my-tiket', fn () => view('list-tiket'))->name('mytiket');
Route::get('/detail-tiket', fn () => view('detail-tiket'))->name('detailTiket');
Route::get('/update-tiket', fn () => view('update-tiket'))->name('updateTiket');
Route::get('/pesan', fn () => view('pesan'))->name('pesan');
Route::get('/payment', fn () => view('payment'))->name('payment');
Route::get('/success', fn () => view('success-payment'))->name('success');

Route::post('/contact-send', [SendMailController::class, 'sendMail'])->name('contact.send');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/dashboard', DashboardController::class)->name('dashboard');
    Route::resource('petugas', PetugasController::class)->parameters([
        'petugas' => 'user'
    ])->except('show');
});

require __DIR__ . '/auth.php';

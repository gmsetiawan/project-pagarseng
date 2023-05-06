<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DropdownController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\ParticipantController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SupportController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'verified'])->group(function () {

    route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    route::resource('users', UserController::class);
    route::get('/users-search', [UserController::class, 'search'])->name('users.search');

    route::resource('supports', SupportController::class);

    route::get('/supports/{support}/family', [SupportController::class, 'showfamily'])->name('supports.showfamily');
    route::put('/supports/{support}/family', [SupportController::class, 'removerelation'])->name('supports.removerelation');
    route::get('/supports/{support}/create-relation', [SupportController::class, 'relation'])->name('supports.relation');
    route::post('/supports/{support}/create-relation/store', [SupportController::class, 'storerelation'])->name('supports.storerelation');
    route::get('/search', [SupportController::class, 'search'])->name('supports.search');

    Route::put('/supports/{support}/remove-parent', [SupportController::class, 'removeParent'])->name('supports.remove-parent');

    route::resource('participants', ParticipantController::class);
    route::resource('locations', LocationController::class);

    Route::get('/dropdown', [DropdownController::class, 'index']);
    Route::post('api/fetch-kecamatan', [DropdownController::class, 'fetchKecamatan']);
    Route::post('api/fetch-kelurahan', [DropdownController::class, 'fetchKelurahan']);
});

require __DIR__ . '/auth.php';

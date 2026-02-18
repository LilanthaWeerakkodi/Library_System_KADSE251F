<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\LendingController; // This line fixes your error

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// 1. Dashboard (The Main Homepage)
Route::get('/', function () {
    return view('dashboard');
});

// 2. Books Module (CRUD for Entity 1)
Route::resource('books', BookController::class);

// 3. Members Module (CRUD for Entity 2)
Route::resource('members', MemberController::class);

// 4. Lending Module (CRUD for Entity 3)
Route::resource('lendings', LendingController::class);

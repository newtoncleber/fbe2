<?php

use App\Http\Livewire\Dashboard;
use App\Http\Livewire\Users\UserCreate;
use App\Http\Livewire\Users\UserEdit;
use App\Http\Livewire\Users\UserIndex;
use App\Http\Livewire\Users\UserShow;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
*/

Route::get('/', Dashboard::class)->middleware(['auth'])->name('home');
Route::get('/dashboard', Dashboard::class)->middleware(['auth'])->name('dashboard');
Route::get('/users', UserIndex::class)->middleware(['auth'])->name('users.index');
Route::get('/users/{user}', UserShow::class)->middleware(['auth'])->name('users.show');
Route::get('/users/{user}/create', UserCreate::class)->middleware(['auth'])->name('users.create');
Route::get('/users/{user}/edit', UserEdit::class)->middleware(['auth'])->name('users.edit');


require __DIR__.'/auth.php';

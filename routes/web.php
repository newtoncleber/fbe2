<?php

use App\Http\Livewire\Dashboard;
use App\Http\Livewire\Atendimento\Index as AtendimentoIndex;
use App\Http\Livewire\Estoque\Index as EstoqueIndex;
use App\Http\Livewire\Estoque\ConfirmaImpressao as EstoqueConfirmaImpressao;
use App\Http\Livewire\Pedidos\Index as PedidosIndex;
use App\Http\Livewire\Pedidos\Show as PedidosShow;
use App\Http\Livewire\Pedidos\Voucher as PedidosVoucher;
use App\Http\Livewire\Pedidos\Declaracao as PedidosDeclaracao;
use App\Http\Livewire\Pedidos\Enviarreceber as PedidosEnviarreceber;
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

Route::get('/pedidos', PedidosIndex::class)->middleware(['auth'])->name('pedidos.index');
Route::get('/pedidos/{pedido}', PedidosShow::class)->middleware(['auth'])->name('pedidos.show');
Route::get('/pedidos/{pedido}/voucher', PedidosVoucher::class)->middleware(['auth'])->name('pedidos.voucher');
Route::get('/pedidos/{pedido}/declaracao', PedidosDeclaracao::class)->middleware(['auth'])->name('pedidos.declaracao');
Route::get('/enviarreceberpedidos', PedidosEnviarreceber::class)->middleware(['auth'])->name('pedidos.enviarreceber');

Route::get('/atendimento', AtendimentoIndex::class)->middleware(['auth'])->name('atendimento.index');

Route::get('/estoque', EstoqueIndex::class)->middleware(['auth'])->name('estoque.index');
Route::get('/estoque/confirmaimpressao', EstoqueConfirmaImpressao::class)->middleware(['auth'])->name('estoque.confirmaimpressao');

Route::get('/users', UserIndex::class)->middleware(['auth'])->name('users.index');
Route::get('/users/{user}', UserShow::class)->middleware(['auth'])->name('users.show');
Route::get('/users/{user}/create', UserCreate::class)->middleware(['auth'])->name('users.create');
Route::get('/users/{user}/edit', UserEdit::class)->middleware(['auth'])->name('users.edit');


require __DIR__.'/auth.php';

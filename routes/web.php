<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChamadoController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\LoginController;
use App\Models\Banco;



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
    
    if(auth::check()){
        $id = Banco::where('user_id',Auth::user()->id)->first()->id;
        return redirect()->route("chamados.view",['id',$id]);
    }else{
        return redirect()->route("login.index");
    }
});

Route::get('/cadastrar_usuario_form', function () {
    return view('cadastrar_usuario_form');
})->name('cadastrar.usuario.form');

Route::get('/banco_chamados', function () {
    return view('banco_chamados');
})->name('banco.chamados');

Route::get('/cadastrar_banco_form', function () {
    return view('cadastrar_banco_form');
})->name('cadastrar.banco.form');

Route::get('/return', function () {
    $previousUrl = session('previousUrl');
    return redirect($previousUrl ?: '/');
})->name('return');


Route::get("/cadastrar_chamado_form/{id}", [ChamadoController::class,"cadastrar_chamado_form"])->name('cadastrar.chamado.form');
Route::get("/banco_chamados", [ChamadoController::class,"banco_chamados"])->name('banco.chamados');
Route::get("/chamados_view/{id}", [ChamadoController::class,"chamados_view"])->name('chamados.view');
Route::get("/chamado_visualizar/{id}", [ChamadoController::class,"chamado_visualizar"])->name('chamado.visualizar');
Route::get("/editar_chamado_form/{id}", [ChamadoController::class,"editar_chamado_form"])->name('editar.chamado.form');
Route::get("/excluir_banco/{id}", [ChamadoController::class,"excluir_banco"])->name('excluir.banco');
Route::get("/excluir_chamado/{id}/{banco}", [ChamadoController::class,"excluir_chamado"])->name('excluir.chamado');
Route::get("/parceiros_view/{id}", [ChamadoController::class,"parceiros_view"])->name('parceiros.view');
Route::get("/cadastrar_parceiro_form/{id}", [ChamadoController::class,"cadastrar_parceiro_form"])->name('cadastrar.parceiro.form');


Route::post("/editar_chamado/{id}", [ChamadoController::class,"editar_chamado"])->name('editar.chamado');
Route::post("/cadastrar_chamado", [ChamadoController::class,"cadastrar_chamado"])->name('cadastrar.chamado');
Route::post("/cadastrar_banco", [ChamadoController::class,"cadastrar_banco"])->name('cadastrar.banco');
Route::post("/cadastrar_usuario", [ChamadoController::class,"cadastrar_usuario"])->name('cadastrar.usuario ');
Route::post("/cadastrar_parceiro", [ChamadoController::class,"cadastrar_parceiro"])->name('cadastrar.usuario ');


Route::controller(LoginController::class)->group(function (){
    Route::get('/login', 'index')->name('login.index');
    Route::post('/login_store', 'store')->name('login.store');
    Route::get('/logout', 'destroy')->name('login.destroy');
});

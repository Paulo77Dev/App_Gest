<?php

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
Route::get('/', [\App\Http\Controllers\PrincipalController::class, "principal"])->name('site.index');
//ENDEREÇO DE ROTAS PRINCIPAIS

Route::get('/sobre-nos', 'App\Http\Controllers\SobreNosController@sobreNos')->name('site.sobrenos');
//ROTAS NORMAIS NO CODIGO NO MENU DE OPÇÕES

Route::get('/contato', 'App\Http\Controllers\ContatoController@contato')->name('site.contato');
//ROTAS NORMAIS NO CODIGO NO MENU DE OPÇÕES

Route::get('/login', function () {return 'Login';})->name('site.login');
//ROTAS NORMAIS NO CODIGO MENCIONANDO SEM LINK NA BARRA DE PESQUISA


Route::prefix('/app')->group(function () { //PREFIXO DE AGRUPAMENTO  DE CLASSES PRIVADAS
    Route::get('/clientes', function () {return 'Clientes';})->name('app.clientes');
    //CAMINHO DE CODIGO MENCIONADOS E PRIVADOS

    Route::get('/fornecedores', 'App\Http\Controllers\FornecedorController@index')->name('app.fornecedores');
    //CAMINHO DE CODIGO MENCIONADOS E PRIVADOS

    Route::get('/produtos', function () {return 'produtos';})->name('app.produtos');
    //CAMINHO DE CODIGO MENCIONADOS E PRIVADOS
});

Route::get('/teste/{p1}/{p2}', 'App\Http\Controllers\TesteController@teste')->name('site.teste');
//CAMINHO DE CODIGO MENCIONADOS E PRIVADOS SEMPRE INSERIR
//(App\Http\Controllers\+PASTA DE  CONTROLLER+@+MENCIONAR+A VIEW.BLADE)

Route::fallback(function () {
    echo 'A rota acessada não existe. <a href="' . route('site.index') . '">clique aqui</a> para ir para página inicial';
});
//LINK DE ACESSO PARA A PAGINA INICIAL


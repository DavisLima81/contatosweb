<?php

use Illuminate\Support\Facades\Route;
use App\Mail\MensagemTesteMail;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])
    ->name('index')
    ->middleware('verified');

    //Rotas protegidas por autenticação
Route::resource('tipo-telefone', TipoTelefoneController::class)
    ->middleware('verified');


    

//Rota de fallback, tratamento de erro 404
Route::fallback(function () {
    //Caso a rota digitada no navegador não seja econtrada, redirecionar para /home:
    if (Auth::check())
    {   
        return back();

    } else
    {
    return view('auth.login');

    }
});

Route::get('mensagem-teste', function() {
    //Ao chamar essa rota, um email será enviado:
    Mail::to('davislima81@yahoo.com.br')->send(new MensagemTesteMail());
    return 'Email enviado com sucesso.';
});  
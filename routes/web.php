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


Route::redirect('/redirect1','/redirect2');

// Route::get('redirect1',function(){
//     return redirect('/redirect2');
// });

Route::get('redirect2',function(){
    return 'Redirect 02';
});

Route::get('/produtos/{idProdutos?}',function($idProduto = ''){
    return "Produto(s)" . $idProduto;
});

Route::get('/categoria/{flag}/posts',function($flag){
    return "Produtos da categoria : {$flag}";
});

Route::get('/categorias/{flag}',function($bla){
    return "Produtos da categoria : {$bla}";
});

Route::match(['post','get'],'/match',function(){
    return "Match";
});

Route::any('/any',function(){
    return "Any" ;
});

Route::post('/register', function () {
    return;
});

Route::get('/contato', function(){
    return view('contato');
});

Route::get('/empresa', function(){
    return view();
});

Route::view('/view','welcome');

Route::get('/', function () {
    return view('welcome');
});

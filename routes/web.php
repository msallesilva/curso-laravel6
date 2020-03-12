<?php

use GuzzleHttp\Middleware;
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
// Rota padrão para acesso ao Middleware através de autenticação

Route::get('/login', function(){
    return 'Login';
})->name('login');

// Rota com grupo de autenticação de Middleware com funções de agrupamento como Auth e admin
/* Route::middleware([])->group(function(){

    Route::prefix('admin')->group(function(){
        Route::namespace('Admin')->group(function(){
            Route::name('admin.')->group(function(){
                Route::get('/dashboard', 'TesteController@teste')->name('dashboard');
                Route::get('/financeiro', 'TesteController@teste')->name('financeiro');
                Route::get('/produtos', 'TesteController@teste')->name('produtos');
                Route::get('/', function(){
                    return redirect()->route('admin.dashboard');
                })->name('home');
            });

        });

         Route::get('/dashboard', function(){
            return 'Home Admin';
         });
        
         Route::get('/financeiro', function(){
             return 'Financeiro Admin';
         });
        
         Route::get('/produtos', function(){
             return 'Produtos Admin';
        });

         Route::get('/', function(){
         return 'Admin';
        });
        
    });

});
*/


Route::group([
    'middleware' => [],
    'prefix' => 'admin',
    'namespace' => 'Admin',
    'name' => '.admin'
],function(){
                Route::get('/dashboard', 'TesteController@teste')->name('dashboard');
                Route::get('/financeiro', 'TesteController@teste')->name('financeiro');
                Route::get('/produtos', 'TesteController@teste')->name('produtos');
                Route::get('/', function(){
                    return redirect()->route('admin.dashboard');
                })->name('home');
});

Route::get('redirect3',function(){
    return redirect()->route('url.name');
});

Route::get('/nurl', function(){
    return 'Hey hey hey hey';
})->name('url.name');

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

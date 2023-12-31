<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\
{
    CargoController,
    ClienteController,
    EnderecoController,
    ProfileController,
    PedidoController,
    ProdutoController,
    ProdutoTamanhoController,
    UserController,
};
use App\Models\Cargo;
use Illuminate\Support\Facades\Auth;

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
    return view('index');
});


Route::get('/entradas', function () {
    return view('entradas');
});

Route::get('/montesuapizza', function () {
    return view('montesuapizza');
});

Route::get('/contato', function () {
    return view('contato');
});

Route::get('/sobrenos', function () {
    return view('sobrenos');
});

Route::get('/pizzas', function () {
    return view('pizzas');
});

Route::get('/pizzas2', function () {
    return view('pizzas2');
});

Route::get('/bebidas', function () {
    return view('bebidas');
});

Route::get('/bebidas2', function () {
    return view('bebidas2');
});

Route::get('/sobremesas', function () {
    return view('sobremesas');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


/**
 * ------------------------
 *        |Users|
 *-------------------------
 */

 Route::prefix('user')
        ->controller(UserController::class)
        ->group(function () {
            Route::get('/','index')->name('user.index');
            Route::get('/novo','create')->name('user.create');
            Route::get('/{id}','show')->name('user.show');
            Route::get('/editar/{id}','edit')->name('user.edit');
            Route::get('/{id}','show')->name('user.show');

            Route::post('/store','store')->name('user.store');
            Route::post('/update/{id}','update')->name('user.update');
            Route::delete('/destroy/{id}','destroy')->name('user.destroy');
        });
/**
 * ------------------------
 *        |Cargos|
 *-------------------------
 */

 Route::prefix('cargos')
        ->controller(CargoController::class)
        ->group(function () {
            Route::get('/','index')->name('cargo.index');
            Route::get('/novo','create')->name('cargo.create');
            Route::get('/{id}','show')->name('cargo.show');
            Route::get('/editar/{id}','edit')->name('cargo.edit');

            Route::post('/store','store')->name('cargo.store');
            Route::post('/update','update')->name('cargo.update');
            Route::delete('/destroy/{id}','destroy')->name('cargo.destroy');

            // Route::get('/usuario/{id}','show')->name('cargo.showUser');

            // Route::get('/usuario/{id}','createUser')->name('cargo.createUser');
            // Route::get('/usuario/editar/{id}','editarUser')->name('cargo.editUser');

            // Route::post('/usuario/store','store')->name('cargo.storeUser');
            // Route::post('/usuario/update','update')->name('cargo.updateUser');
            // Route::delete('/usuario/destroy/{id}','destroy')->name('cargo.destroyUser');
        });
/**
 * ------------------------
 *        |Clientes|
 * ------------------------
 */

 Route::prefix('clientes')
        ->controller(ClienteController::class)
        ->group(function () {
            Route::get('/','index')->name('cliente.index');
            Route::get('/novo','create')->name('cliente.create');
            Route::get('/{id}','show')->name('cliente.show');
            Route::get('/editar/{id_cliente}','edit')->name('cliente.edit');

            Route::get('endereco/novo/{id_cliente}','createEndereco')->name('cliente.createEndereco');
            Route::get('endereco/editar/{id_endereco}','editEndereco')->name('cliente.editEndereco');

            Route::post('cliente/store','store')->name('cliente.store');
            Route::post('cliente/update/{id_cliente}','update')->name('cliente.update');
            Route::delete('cliente/destroy/{id}','destroy')->name('cliente.destroy');


            Route::post('endereco/store/{id_cliente}','storeEndereco')->name('cliente.storeEndereco');
            Route::post('endereco/update/{id_cliente}/{id_endereco}','updateEndereco')->name('cliente.updateEndereco');
            Route::post('endereco/destroy/{id_endereco}','destroyEndereco')->name('cliente.destroyEndereco');
        });

/**
 * ------------------------
 *        |Endereço|
 * ------------------------
 */

//  Route::prefix('enderecos')
//         ->controller(EnderecoController::class)
//         ->group(function () {
//             Route::get('/','index')->name('endereco.index');
//             Route::get('/novo','create')->name('endereco.create');
//             Route::get('/{id}','show')->name('endereco.show');
//             Route::get('/editar/{id}','edit')->name('endereco.edit');

//             Route::post('/store','store')->name('endereco.store');
//             Route::post('/update','update')->name('endereco.update');
//             Route::post('/destroy','destroy')->name('endereco.destroy');
//         });
/**
 * ------------------------
 *        |Pedidos|
 * ------------------------
 */

 Route::prefix('pedidos')
        ->controller(PedidoController::class)
        ->group(function () {
            Route::get('/','index')->name('pedido.index');
            Route::get('/novo','create')->name('pedido.create');
            Route::get('/{id}','show')->name('pedido.show');
            Route::get('/editar/{id}','edit')->name('pedido.edit');

            Route::post('/store','store')->name('pedido.store');
            Route::post('/update','update')->name('pedido.update');
            Route::post('/destroy','destroy')->name('pedido.destroy');
        });
/**
 * ------------------------
 *        |Produtos|
 * ------------------------
 */

 Route::prefix('produtos')
        ->controller(ProdutoController::class)
        ->group(function () {
            Route::get('/','index')->name('produto.index');
            Route::get('/novo','create')->name('produto.create');
            Route::get('/{id}','show')->name('produto.show');
            Route::get('/editar/{id}','edit')->name('produto.edit');
            Route::get('/cardapio/{id_tipo_produto}','indexTipo')->name('produto.indexTipo');



            Route::get('/tamanho/{id_produto}','createTamanho')->name('produto.createTamanho');
            Route::get('/tamanho/editar/{id}','editarTamanho')->name('produto.editTamanho');


            Route::get('/tipo/novo','createTipo')->name('produto.createTipo');
            Route::get('/tipo/editar/{id}','editarTipo')->name('produto.editTipo');
            Route::post('/tipo/store','storeTipo')->name('produto.storeTipo');


            Route::post('/store','store')->name('produto.store');
            Route::post('/update/{id}','update')->name('produto.update');
            Route::delete('/destroy/{id}','destroy')->name('produto.destroy');

            Route::post('/tamanho/store/{id_produto}', 'storeTamanho')->name('produto.storeTamanho');
            Route::post('/tamanho/update', 'updateTamanho')->name('produto.updateTamanho');
            Route::post('/tamanho/destroy', 'destroyTamanho')->name('produto.destroyTamanho');

        });

/**
 * ------------------------
 *   |Produtos Tamanhos|
 * -----------------------
 */

 Route::prefix('tamanhos')
        ->controller(ProdutoTamanhoController::class)
        ->group(function () {
            Route::get('/','index')->name('tamanho.index');
            Route::get('/novo','create')->name('tamanho.create');
            Route::get('/{id}','show')->name('tamanho.show');
            Route::get('/editar/{id}','edit')->name('tamanho.edit');

            Route::post('/store','store')->name('tamanho.store');
            Route::post('/update','update')->name('tamanho.update');
            Route::post('/destroy','destroy')->name('tamanho.destroy');
        });




require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

<?php

/**
 *
 * |--------------------------------|
 * |  Gabriel Morganti  27-06-2023  |
 * |--------------------------------|
 *
 *
 *
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\
{
    Cargo,
    User
};
use Ramsey\Uuid\Type\Integer;

class CargoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       // $cargos = Cargo::all('cargo');
        $cargos = Cargo::orderBy('cargo')->get();
        // $users = User::orderBy('user')->get();
        return view('cargo.index')->with(compact('cargos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cargo = null ;
        return view('cargo.form')->with(compact('cargo'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cargo = Cargo::create($request->all());
        return redirect()->route('cargo.index')->with('success','Cadastrado com Sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Int $id)
    {
        $cargo = Cargo::find($id);

        return view('cargo.show')->with(compact('cargo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Int $id)
    {
        $cargo = Cargo::find($id);
        return view('cargo.form')->with(compact('cargo'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Int $id)
    {
        $cargo = Cargo::find($id);
        $cargo->update($request->all());
        return redirect()->route('cargo.index')->with('success', 'Atualizado com Sucesso!');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Int $id)
    {
        Cargo::find($id)->delete();
        return redirect()
                    ->back()
                    ->with('danger', 'Excluído com Sucesso!');
    }



//-------------------------------------------------------------------------//
//               USERS
//-------------------------------------------------------------------------//



// public function indexUser()
// {
//    // $cargos = Cargo::all('cargo');
//    $user = User::where('id_user');
//     $users = User::orderBy('user')->get();
//     return view('user.index')->with(compact('users'));
// }

// /**
//  * Show the form for creating a new resource.
//  */
// public function createUser()
// {
//     $user = null ;
//     return view('user.form')->with(compact('user'));
// }

// /**
//  * Store a newly created resource in storage.
//  */
// public function userStore(Request $request)
// {
//     $user = User::create($request->all());
//     return redirect()->route('user.index')->with('success','Cadastrado com Sucesso!');
// }

// /**
//  * Display the specified resource.
//  */
// public function userShow(Int $id)
// {
//     $user = User::find($id);
//     return view('user.show')->with(compact('user'));
// }

// /**
//  * Show the form for editing the specified resource.
//  */
// public function userEdit(Int $id)
// {
//     $user = User::find($id);
//     return view('user.form')->with(compact('user'));

// }

// /**
//  * Update the specified resource in storage.
//  */
// public function userUpdate(Request $request, Int $id)
// {
//     $user = User::find($id);
//     $user->update($request->all());
//     return redirect()->route('user.index')->with('success', 'Atualizado com Sucesso!');


// }

// /**
//  * Remove the specified resource from storage.
//  */
// public function userDestroy(Int $id)
// {
//     User::find($id)->delete();
//     return redirect()
//                 ->back()
//                 ->with('danger', 'Excluído com Sucesso!');
// }




}

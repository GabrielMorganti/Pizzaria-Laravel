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

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */


    public function index()
    {
       // $cargos = Cargo::all('cargo');


    $users = User::all();
    $user = User::orderBy('nome');//->paginate(10);
        return view('user.index')->with(compact('users', 'user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $cargo = Cargo::class;
        $user = null ;

        return view('user.form')->with(compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function Store(Request $request)
    {
        $cargo = Cargo::all();
        $user = User::create($request->all());

        return redirect()->route('user.index')->with('success','Cadastrado com Sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Int $id)
    {
        $user = User::find($id);
        return view('user.show')->with(compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function Edit(Int $id)
    {
        $user = User::find($id);
        $cargo = Cargo::all();
        return view('user.form')->with(compact('user','cargo'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function Update(Request $request, Int $id)
    {
        $cargo = Cargo::all();
        $user = User::find($id);
        $user->update($request->all());
        return redirect()->route('user.index')->with('success', 'Atualizado com Sucesso!');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function Destroy(Int $id)
    {
        User::find($id)->delete();
        return redirect()
                    ->back()
                    ->with('danger', 'Excluído com Sucesso!');
    }
}

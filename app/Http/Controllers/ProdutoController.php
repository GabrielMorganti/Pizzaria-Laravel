<?php

/**
 *
 * |--------------------------------|
 * |  Gabriel Morganti  18-07-2023  |
 * |--------------------------------|
 *
 *
 *
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreProdutoRequest;
use App\Http\Requests\UpdateProdutoRequest;
use App\Models\{
    Produto,
    ProdutoTamanho,
    TipoProduto,
    Tamanho
};

class ProdutoController extends Controller
{

    public function index()
    {
        $produtos = Produto::orderBy('nome');
        $tamanhos = Tamanho::class;
        return view('produto.index')->with(compact('produtos'));
    }

    public function create()
    {
        $produto = null;
        $tiposProduto = TipoProduto::class;
        return view('produto.form')
            ->with(compact(
                'produto',
                'tiposProduto'
            ));
    }

    public function store(Request $request)
    {
        $produto = Produto::create($request->all());
        return redirect()
            ->route('produto.show',['id' => $produto->id_produto])
            ->with('success', 'Cadastrado com Sucesso!');
    }

    public function show(Int $id)
    {
        $produto = Produto::find($id);
        $tamanhos = Tamanho::class;



        return view('produto.show')
            ->with(compact(
                'produto',
                'tamanhos'
            ));
    }
    public function edit(Int $id)
    {
        $produto = Produto::find($id);
        $tiposProduto = TipoProduto::class;
        return view('produto.form')
            ->with(compact(
                'produto',
                'tiposProduto'));
    }

    public function update(Request $request, Int $id_produto)
    {



        $produto = Produto::find($id_produto);
        $produto->update($request->all());


        return redirect()
            ->route('produto.show',['id' => $produto->id_produto])
            ->with('success','Atualizado com Sucesso!');
    }

    public function destroy(Int $id)
    {
        Produto::find($id)->delete();
        return redirect()
            ->back()
            ->with('danger', 'Excluído com Sucesso!');
    }

    /*
    *|----------------------------------|*
    *|       TAMANHOS DE PRODUTOS       |*
    *|----------------------------------|*
    */

    public function createTamanho(int $id_produto)
    {
        $produtoTamanho = null;
        $produto = Produto::find($id_produto);
        $tamanhos = Tamanho::class;

        return view('produto.formTamanho')
            ->with(compact('produto', 'tamanhos', 'produtoTamanho'));
    }

    public function storeTamanho(Request $request, int $id_produto)
    {
        $produtoTamanho = ProdutoTamanho::create([
            'id_produto'    => $id_produto,
            'id_tamanho'    => $request->id_tamanho,
            'preco'         => $request->preco,
            'observacoes'   => $request->observacoes,
        ]);

        return redirect()->route('produto.show', ['id' => $id_produto])->with('success', 'Tamanho Cadastrado com Sucesso!');
    }

    public function editTamanho(int $id)
    {
        $produtoTamanho = ProdutoTamanho::find($id);
        // $produto   = Produto::find($produtoTamanho->id_produto);
        $produto   = $produtoTamanho->produto();
        $tamanhos  = ProdutoTamanho::class;

        return view('produto.formTamanho')
            ->with(compact('produto', 'tamanhos', 'produtoTamanho'));
    }

    public function updateTamanho(Request $request, int $id)
    {
        $produtoTamanho = ProdutoTamanho::find($id);
        $produtoTamanho->update($request->all());

        return redirect()
            ->route('produto.show',['id' => $produtoTamanho->id_produto])
            ->with('success', 'Atualizado com sucesso');
    }

    public function destroyTamanho(int $id)
    {
        produtoTamanho::find($id)->delete();
        return redirect()
            ->back()
            ->with('danger', 'Excluído com Sucesso!');

    }


    // tipos de tamanho



    public function createTipo(int $id_produto)
    {
        $produtoTipo = null;
        $produto = Produto::find($id_produto);
        $tipos = Tamanho::class;

        return view('produto.form')
            ->with(compact('tipo'));
    }



    public function storeTipo(Request $request )
    {

        $produtoTipo =  TipoProduto::create([



            'tipo'    => $request->tipo

        ]);

        // TipoProduto::create($request->all());

        return redirect()
            ->route('produto.index')
            ->with('success', 'Cadastrado com Sucesso!');


    }


    public function editTipo(int $id)
    {
        $produtoTipo = TipoProduto::find($id);
        // $produto   = Produto::find($produtoTamanho->id_produto);
        $produto   = $produtoTipo->produto();
        $tipos  = ProdutoTamanho::class;

        return view('produto.form')
            ->with(compact('tipo'));
    }

    // public function showTipo(Int $id)
    // {
    //     $produto = Produto::find($id);
    //     $tipos = TipoProduto::class;


    //     return view('produto.show')
    //         ->with(compact(

    //             'tipo'
    //         ));
    // }

    public function destroyTipo(int $id)
    {
        TipoProduto::find($id)->delete();
        return redirect()
            ->back()
            ->with('danger', 'Excluído com Sucesso!');

    }

}


<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreProdutoRequest;
use App\Http\Requests\UpdateProdutoRequest;

use App\Models\{
    Produto,
    ProdutoTamanho,
    Tamanho,
    TipoProduto
};

class ProdutoController extends Controller
{
    public function index()
    {
        $produtos = Produto::orderBy('nome')->paginate(10);

        return view('produto.index')
            ->with(compact('produtos'));
    }

    public function indexTipo(int $id_tipo_produto)
    {
        $produtos = Produto::where('id_tipo_produto', $id_tipo_produto)->orderBy('created_at');
        $tiposProdutos = TipoProduto::find($id_tipo_produto);
        $produtosTamanho = ProdutoTamanho::class;
        $tamanhos = tamanho::class;

        return view('produto.mostrarTipo')
            ->with(compact('produtos', 'tiposProdutos', 'produtosTamanho', 'tamanhos'));
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
        //subir a foto
        if($request->foto){
            //pegar a extensão do arquivo
            $extension =  $request->foto->getClientOriginalExtension();
            //criar um nome unico para o arquivo
            $nomeFoto = date('YmdHis').rand(0,1000).'.'.$extension;
            //subir o arquivo para a pasta fotos
            $request->foto->storeAs('/public/fotos/',$nomeFoto);
            //atribuir o nome do arquivo a propriedade foto
            $produto->foto = $nomeFoto;
            $produto->save();
        }
        return redirect()
            ->route(
                'produto.show',
                ['id' => $produto->id_produto]
            )
            ->with('success', 'Cadastrado com sucesso.');
    }

    public function show(int $id)
    {
        $produto = Produto::find($id);
        $tamanhos = Tamanho::class;

        return view('produto.show')
            ->with(compact('produto', 'tamanhos'));
    }

    public function edit(int $id)
    {
        $produto = Produto::find($id);
        $tiposProduto = TipoProduto::class;
        return view('produto.form')
            ->with(compact(
                'produto',
                'tiposProduto'
            ));
    }

    public function update(Request $request, int $id)
    {
        $produto = Produto::find($id);
        $produto->update($request->all());
        //subir a foto
        if($request->foto){
            //pegar a extensão do arquivo
            $extension =  $request->foto->getClientOriginalExtension();
            //criar um nome unico para o arquivo
            $nomeFoto = date('YmdHis').rand(0,1000).'.'.$extension;
            //subir o arquivo para a pasta fotos
            $request->foto->storeAs('/public/fotos',$nomeFoto);
            //atribuir o nome do arquivo a propriedade foto
            $produto->foto = $nomeFoto;
            $produto->save();
        }
        return redirect()
            ->route(
                'produto.show',
                ['id' => $produto->id_produto]
            )
            ->with('success', 'Atualizado com sucesso!');
    }

    public function destroy(int $id)
    {
        Produto::find($id)->delete();
        return redirect()
            ->back()
            ->with('danger', 'Removido com sucesso!');
    }

    /*
    *|--------------------------------------------
    *| Tamanhos de Produtos
    *|--------------------------------------------
    */

    public function createTamanho(int $id_produto)
    {
        $produtoTamanho = null;
        $produto = Produto::find($id_produto);
        $tamanhos = Tamanho::class;

        return view('produto.formTamanho')
            ->with(compact(
                'produto',
                'tamanhos',
                'produtoTamanho'
            ));
    }

    public function storeTamanho(Request $request, int $id_produto)
    {
        $produtoTamanho = ProdutoTamanho::create([
            'id_produto' => $id_produto,
            'id_tamanho' => $request->id_tamanho,
            'preco'      => $request->preco,
            'observacoes' => $request->observacoes
        ]);

        return redirect()
            ->route('produto.show', ['id' => $id_produto])
            ->with('success', 'Tamanho cadastrado com sucesso.');
    }

    public function editTamanho(int $id)
    {
        $produtoTamanho = ProdutoTamanho::find($id);
        // $produto  = Produto::find($produtoTamanho->id_produto);
        $produto  = $produtoTamanho->produto();
        $tamanhos = ProdutoTamanho::class;

        return view('produto.formTamanho')
            ->with(compact(
                'produto',
                'tamanhos',
                'produtoTamanho'
            ));
    }

    public function updateTamanho(Request $request, int $id)
    {
        $produtoTamanho = ProdutoTamanho::find($id);
        $produtoTamanho->update($request->all());

        return redirect()
            ->route(
                'produto.show',
                ['id' => $produtoTamanho->id_produto]
            )
            ->with('success', 'Atualizado com sucesso');
    }

    public function destroyTamanho(int $id)
    {
        ProdutoTamanho::find($id)->delete();
        return redirect()
            ->back()
            ->with('danger', 'Removido com sucesso!');
    }

     /*
    *|--------------------------------------------
    *| Tipos de Produtos
    *|--------------------------------------------
    */


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

<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Produto;

use Illuminate\Http\Request;

class ControladorProdutos extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prds = Produto::all();
        return view('produtos/produtos', compact('prds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cats = Categoria::all();
        return view('produtos/create-produto', compact('cats'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $prd = new Produto();
        $prd->nome = $request->input('nomeProduto');
        $prd->estoque = $request->input('estoqueProduto');
        $prd->preco = $request->input('precoProduto');
        $prd->categoria_id = $request->input('categoriaProduto');
        $prd->save();
        return redirect('produtos');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $prd = Produto::find($id);
        $cats = Categoria::all();
        if (isset($prd)) {
            return view('produtos/update-produto', compact('prd', 'cats'));
        }
        return redirect('produtos/produtos');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $prd = Produto::find($id);
        if (isset($prd)) {
            $prd->nome = $request->input('nomeProduto');
            $prd->estoque = $request->input('estoqueProduto');
            $prd->preco = $request->input('precoProduto');
            $prd->categoria = $request->input('categoriaProduto');
            $prd->save();
        }
        return redirect('produtos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $prd = Produto::find($id);
        if (isset($prd)) {
            $prd->delete();
        }
        return redirect('produtos');
    }
}

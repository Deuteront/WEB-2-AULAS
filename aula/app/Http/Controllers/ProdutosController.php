<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produtos = session('produtos');
        return view('produto.index', compact(['produtos']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('produto.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $produtos = session('produtos');
        if ((isset($produtos) > 0)) {
            $id = count($produtos) + 1;
        } else {
            $id = 1;
        }
        $nome = $request->nome;
        $dados = ["id" => $id, "nome" => $nome];
        $produtos[] = $dados;
        session(['produtos' => $produtos]);
        return redirect()->route('produtos.index');

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produtos = session('produtos');
        $produto = $produtos[$id - 1];
        return view('produto.info', compact(['produto']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produtos = session('produtos');
        $produto = $produtos[$id - 1];
        return view('produto.edit', compact(['produto']));
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
        $produtos = session('produtos');
        $nome = $request->nome;
        $dados = ["id" => $id, "nome" => $nome];
        $aux = null;
        foreach ($produtos as $struct) {
            $idComparacao = $struct["id"];
            if ($id == $idComparacao) {
                $aux = $struct;
                break;
            }
        }
        $key = array_search($aux, $produtos);
        if ($key !== false) {
            unset($produtos[$key]);
        }
        $produtos[$key] = $dados;
        session(['produtos' => $produtos]);
        return redirect()->route('produtos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produtos = session('produtos');
        foreach ($produtos as $struct) {
            $idComparacao = $struct["id"];
            if ($id == $idComparacao) {
                $aux = $struct;
                break;
            }
        }
        $key = array_search($aux, $produtos);
        if ($key !== false) {
            unset($produtos[$key]);
        }
        session(['produtos' => $produtos]);
        return redirect()->route('produtos.index');
    }
}

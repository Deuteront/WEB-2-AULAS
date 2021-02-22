<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteControlador extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = session('clientes');
        return view('cliente.index', compact(['clientes']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cliente.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $clientes = session('clientes');
        if ((isset($clientes) > 0)) {
            $id = count($clientes) + 1;
        } else {
            $id = 1;
        }
        $nome = $request->nome;
        $dados = ["id" => $id, "nome" => $nome];
        $clientes[] = $dados;
        session(['clientes' => $clientes]);
        return redirect()->route('clientes.index');

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $clientes = session('clientes');
        $cliente = $clientes[$id - 1];
        return view('cliente.info', compact(['cliente']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $clientes = session('clientes');
        $cliente = $clientes[$id - 1];
        return view('cliente.edit', compact(['cliente']));
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
        $clientes = session('clientes');
        $nome = $request->nome;
        $dados = ["id" => $id, "nome" => $nome];
        $aux = null;
        foreach ($clientes as $struct) {
            $idComparacao = $struct["id"];
            if ($id == $idComparacao) {
                $aux = $struct;
                break;
            }
        }
        $key = array_search($aux, $clientes);
        if ($key !== false) {
            unset($clientes[$key]);
        }
        $clientes[$key] = $dados;
        session(['clientes' => $clientes]);
        return redirect()->route('clientes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $clientes = session('clientes');
        foreach ($clientes as $struct) {
            $idComparacao = $struct["id"];
            if ($id == $idComparacao) {
                $aux = $struct;
                break;
            }
        }
        $key = array_search($aux, $clientes);
        if ($key !== false) {
            unset($clientes[$key]);
        }
        session(['clientes' => $clientes]);
        return redirect()->route('clientes.index');
    }
}

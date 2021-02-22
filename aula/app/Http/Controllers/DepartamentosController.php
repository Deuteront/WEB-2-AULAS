<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DepartamentosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departamentos = session('departamentos');
        return view('departamento.index', compact(['departamentos']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('departamento.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $departamentos = session('departamentos');
        if ((isset($departamentos) > 0)) {
            $id = count($departamentos) + 1;
        } else {
            $id = 1;
        }
        $nome = $request->nome;
        $dados = ["id" => $id, "nome" => $nome];
        $departamentos[] = $dados;
        session(['departamentos' => $departamentos]);
        return redirect()->route('departamentos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $departamentos = session('departamentos');
        $departamento = $departamentos[$id - 1];
        return view('departamento.info', compact(['departamento']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $departamentos = session('departamentos');
        $departamento = $departamentos[$id - 1];
        return view('departamento.edit', compact(['departamento']));
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
        $departamentos = session('departamentos');
        $nome = $request->nome;
        $dados = ["id" => $id, "nome" => $nome];
        $aux = null;
        foreach ($departamentos as $struct) {
            $idComparacao = $struct["id"];
            if ($id == $idComparacao) {
                $aux = $struct;
                break;
            }
        }
        $key = array_search($aux, $departamentos);
        if ($key !== false) {
            unset($departamentos[$key]);
        }
        $departamentos[$key] = $dados;
        session(['departamentos' => $departamentos]);
        return redirect()->route('departamentos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $departamentos = session('departamentos');
        foreach ($departamentos as $struct) {
            $idComparacao = $struct["id"];
            if ($id == $idComparacao) {
                $aux = $struct;
                break;
            }
        }
        $key = array_search($aux, $departamentos);
        if ($key !== false) {
            unset($departamentos[$key]);
        }
        session(['departamentos' => $departamentos]);
        return redirect()->route('departamentos.index');
    }
}

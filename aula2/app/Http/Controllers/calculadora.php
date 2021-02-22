<?php

namespace App\Http\Controllers;

use  Illuminate\Http\Request;

class Calculadora extends Controller
{
    public function adicao(Request $request)
    {
        $nota1 = $request->query('nota1');
        $nota2 = $request->query('nota1');

        return view('resultado', ['resultado' => $nota1 + $nota2]);

    }

    public function subtracao(Request $request)
    {
        $nota1 = $request->query('nota1');
        $nota2 = $request->query('nota1');

        return view('resultado', ['resultado' => $nota1 - $nota2]);

    }

    public function divisao(Request $request)
    {
        $nota1 = $request->query('nota1');
        $nota2 = $request->query('nota1');

        return view('resultado', ['resultado' => $nota1 / $nota2]);

    }

    public function multiplicacao(Request $request)
    {
        $nota1 = $request->query('nota1');
        $nota2 = $request->query('nota1');

        return view('resultado', ['resultado' => $nota1 * $nota2]);

    }


}

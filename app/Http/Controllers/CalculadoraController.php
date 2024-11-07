<?php

namespace App\Http\Controllers;

use App\Models\Calculadora;
use Illuminate\Http\Request;

class CalculadoraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function calcular(Request $request)
    {
        $valorUm = $request->valorUm;
        $valorDois = $request->valorDois;
        $operacao = $request->operacao;

        if($operacao == "+") {
            $resultado = $valorUm + $valorDois;
        } else if($operacao == "-") {
            $resultado = $valorUm - $valorDois;
        } else if($operacao == "/") {
            if($valorDois == 0) {
                $erro = "Divisão por zero.";
                static::guardarNoBanco($request, null, $erro);
                return response($erro, 422);
            }
            $resultado = $valorUm / $valorDois;
        } else if($operacao == "*") {
            $resultado = $valorUm * $valorDois;
        } else {
            $erro = "Operador inválido.";
            return response($erro, 422);
        }

        static::guardarNoBanco($request, $resultado, null);
        return response($resultado, 200);
    }
    private static function guardarNoBanco($request, $resultado, $erro) {
        $calculadora =  new Calculadora();
        $calculadora->valorUm = $request->valorUm;
        $calculadora->valorDois = $request->valorDois;
        $calculadora->operacao = $request->operacao;
        $calculadora->resultado = $resultado;
        $calculadora->erro = $erro;

        $calculadora->created_by = 1;

        $calculadora->save();

        return $calculadora;
    }

}

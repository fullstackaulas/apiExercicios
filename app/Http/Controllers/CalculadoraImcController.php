<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculadoraImcController extends Controller
{
    public function calcularImc(Request $request){
        $peso = $request->peso;
        $altura = $request->altura;

        $resultado = $peso / ($altura * $altura);

        return response($resultado,200);

    }

    public function calcularImcGet($peso,$altura){

        $altura = $altura / 100;
        $resultado = $peso / ($altura * $altura);
        $resultado = round($resultado,2);
        $texto = '';

        if($resultado< 18.5){
            $texto = 'Abaixo do peso';
        } else if($resultado <= 24.9){
            $texto = 'Peso normal';
        } else if($resultado <= 29.9){
            $texto = 'Sobrepeso';
        } else if($resultado <= 34.9){
            $texto = 'Obesidade grau I';
        } else if($resultado <= 39.9){
            $texto = 'Obesidade grau II';
        } else if($resultado <= 49.9){
            $texto = 'Obesidade grau III';
        } else if($resultado <= 59.9){
            $texto = 'Obsevidade grau IV';
        } else if($resultado> 59.9){
            $texto = 'Obesidade grau V';
        } else{
            $texto = 'Erro ao calcular';
        }
        
        //return response($resultado,200);
        return response(compact('resultado','texto'),200);
    }

}

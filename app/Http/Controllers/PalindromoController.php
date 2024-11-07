<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PalindromoController extends Controller
{
    public function verificar($palavra)
    {

        $palavraInvertida = strrev($palavra);

        $palindromo = false;

        if ($palavra == $palavraInvertida) {
            $palindromo = true;
        }

        return response()->json($palindromo, 200);
    }

}

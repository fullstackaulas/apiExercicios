<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContadorController extends Controller
{
    public function contarPost(Request $request){
        $de  = $request->de;
        $ate = $request->ate;

        $resposta = '';

        for($x=$de;$x<=$ate;$x++){
            $resposta = $resposta . ',' . $x;
        }

        return response($resposta, 200);
    }

    public function contarGet($de,$ate){
        $resposta = '';

        for($x=$de;$x<=$ate;$x++){
            $resposta = $resposta . ',' . $x;
        }

        return response($resposta, 200);
    }
}

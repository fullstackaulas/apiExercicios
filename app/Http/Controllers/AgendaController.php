<?php

namespace App\Http\Controllers;
use App\Models\Agenda;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    //

    public function salvar(Request $request)
    {
        $agenda = new Agenda();
        $agenda->nome = $request->nome;
        $agenda->email = $request->email;
        $agenda->telefoneCelular = $request->telefoneCelular;
        $agenda->telefoneFixo = $request->telefoneFixo;
        $agenda->endereco = $request->endereco;
        $agenda->created_by = 1;
        $agenda->save();

        return response($agenda, 201);

    }

    public function atualizarParcial($id, Request $request)
    {
        $agenda = Agenda::where('id', $id)->first();
        if (isset($request->nome))
            $agenda->nome = $request->nome;

        if (isset($request->email))
            $agenda->email = $request->email;

        if (isset($request->telefoneCelular))
            $agenda->telefoneCelular = $request->telefoneCelular;

        if (isset($request->telefoneFixo))
            $agenda->telefoneFixo = $request->telefoneFixo;

        if (isset($request->endereco))
            $agenda->endereco = $request->endereco;
        
        $agenda->updated_by = 1;
        $agenda->save();

        return response($agenda, 200);

    }

    public function listar()
    {
        $agenda = Agenda::get();

        return response($agenda, 200);
    }

    public function lerUm($id)
    {
        $code = 200;
        $agenda = Agenda::where('id', $id)->first();

        if ($agenda == null)
            $code = 404;

        return response($agenda, $code);
    }

    public function deletar($id)
    {
        $code = 200;

        $agenda = Agenda::where('id', $id)->delete();

        if ($agenda == 0)
            $code = 404;

        return response('', $code);
    }

}

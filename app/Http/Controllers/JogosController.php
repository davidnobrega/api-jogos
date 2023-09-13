<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jogo; 

class JogosController extends Controller
{
    public function index()
    {
        $cadastros = Jogo::all(); 
        return response()->json($cadastros);
    }

    public function jogo(Request $request)
    {
        $jogo = new Jogo();
        $jogo->name = $request->input('name');
        $jogo->category = $request->input('category');
        $jogo->description = $request->input('description');
        $jogo->image = $request->input('image');
        $jogo->favorite = $request->input('favorite');

        $jogo->save();

        return response()->json($jogo, 201);
    }

    public function getJogos(){
        $jogo = Jogo::get();

        return response()->json($jogo, 200);
    }
    

    public function updateJogos(Request $request, $id)
    {
        // Lógica para atualizar um registro de Jogo específico vai aqui
    }

    public function deleteJogos($id)
    {
        // Lógica para excluir um registro de Jogo específico vai aqui
    }
}
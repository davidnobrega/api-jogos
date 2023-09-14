<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jogo; 

class JogosController extends Controller
{
    public function index()
    {
        $jogos = Jogo::all(); 
        return response()->json($jogos, 200);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'category' => 'required',
            'description' => 'required',
            'image' => 'required',
            'favorite' => 'required',
        ]);

        $jogo = new Jogo();
        $jogo->name = $request->input('name');
        $jogo->category = $request->input('category');
        $jogo->description = $request->input('description');
        $jogo->image = $request->input('image');
        $jogo->favorite = $request->input('favorite');

        $jogo->save();

        return response()->json($jogo, 201);
    }

    public function update(Request $request, $id) {
        $jogo = Jogo::find($id);

        if (!$jogo) {
            return response()->json(["message" => "Jogo não encontrado"], 404);
        }

        $this->validate($request, [
            'name' => 'required',
            'category' => 'required',
            'description' => 'required',
            'image' => 'required',
            'favorite' => 'required',
        ]);

        $jogo->update($request->all());

        return response()->json($jogo, 200);
    }

    public function destroy($id) {
        $jogo = Jogo::find($id);

        if (!$jogo) {
            return response()->json(["message" => "Jogo não encontrado"], 404);
        }

        $jogo->delete();

        return response()->json(["message" => "Jogo deletado"], 202);
    }
}

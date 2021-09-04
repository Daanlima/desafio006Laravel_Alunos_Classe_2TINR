<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Classe;

class ClasseController extends Controller
{
    public function create(){
        return view('classe.create');
    }

    public function store(Request $request){
        Classe::create([
            'description' => $request->description,
            'duracao' => $request->duracao,
            'sigla' => $request->sigla,
        ]);

        return "Classe criado com sucesso!";
    }

    public function ver($id){
        $classe = Classe::findOrFail($id);
        return view('classe.ver', ['classe' => $classe]);
    }


    public function editar($id){
        $classe = Classe::findOrFail($id);
        return view('classe.editar', ['classe' => $classe]);
    }

    public function update(Request $request, $id){
        $classe = Classe::findOrFail($id);

        $classe->update([
            'description' => $request->description,
            'duracao' => $request->duracao,
            'sigla' => $request->sigla,
        ]);

        return "Classe atualizado com sucesso!";
    }

    public function delete($id){
        $classe = Classe::findOrFail($id);
        return view('classe.delete', ['classe' => $classe]);
    }

    public function destroy($id){
        $classe = Classe::findOrFail($id);
        $classe->delete();

        return "Classe excluída com sucesso";
    }
}

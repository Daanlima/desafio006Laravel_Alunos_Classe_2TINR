<?php

namespace App\Http\Controllers;
use App\Http\Requests\AlunoInsertPostRequest;

use Illuminate\Http\Request;

use App\Aluno;

class AlunosController extends Controller
{

    public function create(){
        return view('alunos.create');
    }

    public function store(Request $request){
        Aluno::create([
            'name' => $request->name,
            'data_nascimento' => $request->data_nascimento,
            'email' => $request->email,
            'cursoid' => $request->cursoid,
        ]);

        return "Aluno criado com sucesso!";
    }

    public function ver($id){
        $aluno = Aluno::findOrFail($id);
        return view('alunos.ver', ['aluno' => $aluno]);
    }

    public function editar($id){
        $aluno = Aluno::findOrFail($id);
        return view('alunos.editar', ['aluno' => $aluno]);
    }

    public function update(Request $request, $id){
        $aluno = Aluno::findOrFail($id);

        $aluno->update([
            'name' => $request->name,
            'data_nascimento' => $request->data_nascimento,
            'email' => $request->email,
            'cursoid' => $request->cursoid,
        ]);

        return "Aluno atualizado com sucesso!";
    }

    public function delete($id){
        $aluno = Aluno::findOrFail($id);
        return view('alunos.delete', ['aluno' => $aluno]);
    }

    public function destroy($id){
        $aluno = Aluno::findOrFail($id);
        $aluno->delete();

        return "Aluno excluido com sucesso";
    }
}

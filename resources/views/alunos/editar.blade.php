<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editando aluno</title>
</head>
<body>

    <form action="{{ route('alterar_aluno', ['id' => $aluno->id]) }}" method="POST">
        @csrf
        
        <label for="name">Nome</label> <br>
        <input type="text" name="name" value="{{ $aluno->name }}"><br>

        <label for="data_nascimento">Data Nascimento</label> <br>
        <input type="text" name="data_nascimento" value="{{ $aluno->data_nascimento }}"> <br>

        <label for="email">Email</label> <br>
        <input type="text" name="email" value="{{ $aluno->email }}"> <br>

        <label for="cursoid">Curso</label> <br>
        <input type="number" name="cursoid" value="{{ $aluno->cursoid }}"> <br>
        <button>Atualizar</button>
    </form>
    
</body>
</html>
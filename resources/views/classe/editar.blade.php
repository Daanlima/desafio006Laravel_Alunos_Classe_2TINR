<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editando classe</title>
</head>
<body>

    <form action="{{ route('alterar_classe', ['id' => $classe->id]) }}" method="POST">
        @csrf
        
        <label for="description">Descricao</label> <br>
        <input type="text" name="description" value="{{ $classe->description }}"><br>

        <label for="duracao">Duração</label> <br>
        <input type="text" name="duracao" value="{{ $classe->duracao }}"> <br>

        <label for="sigla">Email</label> <br>
        <input type="text" name="sigla" value="{{ $classe->sigla }}"> <br>
        <button>Atualizar</button>
    </form>
    
</body>
</html>
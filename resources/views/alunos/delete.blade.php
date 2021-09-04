<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Excluir uma Aluno</title>
</head>
<body>
    <form action="{{ route('deletar_aluno', ['id' => $aluno->id]) }}" method="POST">
        @csrf
        <label for="nome">Tem certeza que deseja excluir esta aluno??</label> <br>
        <input type="text" name="nome" value=" {{ $aluno->name }}" disabled> <br>
        <button>Sim</button>
    </form>
</body>
</html>
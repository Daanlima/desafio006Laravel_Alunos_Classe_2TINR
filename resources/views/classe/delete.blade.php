<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Excluir uma classe</title>
</head>
<body>
    <form action="{{ route('deletar_classe', ['id' => $classe->id]) }}" method="POST">
        @csrf
        <label for="sigla">Tem certeza que deseja excluir esta classe??</label> <br>
        <input type="text" name="sigla" value=" {{ $classe->sigla }}" disabled> <br>
        <button>Sim</button>
    </form>
</body>
</html>
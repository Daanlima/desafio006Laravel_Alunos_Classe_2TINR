<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadatrar novo aluno</title>
</head>
<body>

    <form action="{{ route('registrar_aluno')}}" method="POST">

        @csrf
        <label for="name">Nome</label> <br>
        <input type="text" name="name"> <br>

        <label for="data_nascimento">Data Nascimento</label> <br>
        <input type="text" name="data_nascimento"> <br>

        <label for="email">Email</label> <br>
        <input type="text" name="email"> <br>

        <label for="cursoid">Curso</label> <br>
        <input type="number" name="cursoid"> <br>

        <button>Salvar</button>
    </form>
    
</body>
</html>
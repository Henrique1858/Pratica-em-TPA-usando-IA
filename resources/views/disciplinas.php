<!DOCTYPE html>
<html>
<head>
    <title>Disciplinas</title>
</head>
<body>
    <h1>Disciplinas</h1>
    <a href="{{ route('disciplinas.create') }}">Adicionar Disciplina</a>
    <ul>
        @foreach ($disciplinas as $disciplina)
            <li>{{ $disciplina->nome }} - <a href="{{ route('disciplinas.edit', $disciplina->id) }}">Editar</a> - <a href="{{ route('disciplinas.show', $disciplina->id) }}">Detalhes</a></li>
        @endforeach
    </ul>
</body>
</html>

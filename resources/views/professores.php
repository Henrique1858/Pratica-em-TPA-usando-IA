<!DOCTYPE html>
<html>
<head>
    <title>Professores</title>
</head>
<body>
    <h1>Professores</h1>
    <a href="{{ route('professores.create') }}">Adicionar Professor</a>
    <ul>
        @foreach ($professores as $professor)
            <li>{{ $professor->nome }} - <a href="{{ route('professores.edit', $professor->id) }}">Editar</a> - <a href="{{ route('professores.show', $professor->id) }}">Detalhes</a></li>
        @endforeach
    </ul>
</body>
</html>

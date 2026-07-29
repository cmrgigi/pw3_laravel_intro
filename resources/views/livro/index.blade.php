<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livro - Laravel</title>
</head>
<body>
    <h1>Cadastro de Livros</h1>

    <form action="/livro" method="post">
        @csrf

        <label for="titulo">Título</label><br>
        <input type="text" id="titulo" name="titulo" required><br><br>

        <label for="autor">Autor</label><br>
        <input type="text" id="autor" name="autor" required><br><br>

        <label for="ano_publicaco">Ano de publicação</label><br>
        <input type="number" id="ano_publicacao" name="ano_publicacao" required><br><br>

        <button type="submit">Salvar</button>
    </form>

    <h2>Lista de livros</h2>

    @if($livro->isEmpty())
        <p>Nenhum livro cadastrado.</p>
    @else
        <ul>
            @foreach($livro as $livro)
                <li>
                    {{ $livro->titulo }} - {{ number_format ($livro->ano_publicacao) }} - autor: {{ $livro->autor }}
                </li>
            @endforeach
        </ul>
    @endif
</body>
</html>
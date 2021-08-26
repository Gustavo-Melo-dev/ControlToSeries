@extends('layout')

@section('cabecalho')
    Resgitrar-se
@endsection

@section('conteudo')
@include('erros', ['errors' => $errors])
<form method="post">
    @csrf
        <div class="form-group">
            <label for="name">Nome</label>
            <input type="text" class="form-control" name="name" id="name" required>
        </div>

        <div class="form-group">
            <label for="email">E-mail:</label>
            <input type="email" class="form-control" name="email" id="email" required>
        </div>

        <div class="form-group">
            <label for="password">Senha:</label>
            <input type="password" class="form-control" name="password" id="password" required>
        </div>

        <button type="submit" class="btn btn-primary mt-2">Adicionar</button>
</form>
@endsection
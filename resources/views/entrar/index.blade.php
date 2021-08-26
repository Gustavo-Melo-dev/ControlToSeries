@extends('layout')

@section('cabecalho')
    <div class="text-center">Autenticação de usuário</div>
@endsection

@section('conteudo')
@include('erros', ['errors' => $errors])
<form method="post">
    @csrf
    <div class="form-group">
        <label for="email">E-mail:</label>
        <input type="email" name="email" id="email" required class="form-control">
    </div>
    <div class="form-group">
        <label for="senha">Senha:</label>
        <input type="password" name="password" id="password" required class="form-control">
    </div>
    <button type="submit" class="btn btn-dark">
        Entrar
    </button>
    <a href="/registrar" class="btn btn-primary">
        Registre-se
    </a>
</form>
@endsection
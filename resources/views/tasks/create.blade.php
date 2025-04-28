@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Criar Nova Tarefa</h1>

    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf

        <div class="form-group mb-3">
            <label for="title">Título</label>
            <input type="text" name="title" class="form-control" id="title" required>
        </div>

        <div class="form-group mb-3">
            <label for="description">Descrição</label>
            <textarea name="description" class="form-control" id="description" rows="3" required></textarea>
        </div>

        <div class="form-group mb-4">
            <label for="status">Status</label>
            <select name="status" class="form-control" id="status" required>
                <option value="Pendente" selected>Pendente</option>
                <option value="Concluída">Concluída</option>
            </select>
        </div>

        <button type="submit" class="btn btn-success">Salvar</button>
        <a href="{{ route('tasks.index') }}" class="btn btn-secondary">Voltar</a>
    </form>
</div>
@endsection

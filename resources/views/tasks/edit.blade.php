@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Editar Tarefa</h1>

    <form action="{{ route('tasks.update', $task->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group mb-3">
            <label for="title">Título</label>
            <input type="text" name="title" class="form-control" id="title" value="{{ $task->title }}" required>
        </div>

        <div class="form-group mb-3">
            <label for="description">Descrição</label>
            <textarea name="description" class="form-control" id="description" rows="3" required>{{ $task->description }}</textarea>
        </div>

        <div class="form-group mb-4">
            <label for="status">Status</label>
            <select name="status" class="form-control" id="status" required>
                <option value="Pendente" {{ $task->status == 'Pendente' ? 'selected' : '' }}>Pendente</option>
                <option value="Concluída" {{ $task->status == 'Concluída' ? 'selected' : '' }}>Concluída</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Atualizar</button>
        <a href="{{ route('tasks.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
            <h4 class="mb-0">Painel de Controle</h4>
            <div>
                <a href="{{ route('tasks.index') }}" class="btn btn-light btn-sm">Minhas Tarefas</a>
                <a href="{{ route('profile.edit') }}" class="btn btn-light btn-sm">Editar Perfil</a>
            </div>
        </div>
        <div class="card-body">
            <h5 class="card-title">Bem-vindo, {{ Auth::user()->name }}!</h5>
            <p class="card-text">Gerencie suas tarefas e seu perfil através dos botões acima.</p>
        </div>
    </div>
</div>
@endsection

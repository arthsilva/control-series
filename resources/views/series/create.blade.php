<x-layout title="Novas séries">
    <form action="{{ route('series.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nome:</label>
            <input type="text" name="name" class="form-control" placeholder="Nova série">
        </div>
        <a href="{{ route('series.index') }}" class="btn btn-secondary">Voltar</a>
        <button type="submit" class="btn btn-success">Adicionar</button>
    </form>
</x-layout>
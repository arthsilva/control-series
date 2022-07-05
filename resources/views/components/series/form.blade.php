<form action="{{ $action }}" method="post">
    @csrf
    @isset($name)
        @method('PUT')
    @endisset
    <div class="mb-3">
        <label for="name" class="form-label">Nome:</label>
        <input 
            type="text" 
            name="name" 
            class="form-control" 
            placeholder="Nova série"
            autocomplete="off"
            @isset($name)
                value="{{ $name }}"
            @endisset>
    </div>
    <a href="{{ route('series.index') }}" class="btn btn-secondary">Voltar</a>
    <button type="submit" class="btn btn-success">
        @if(isset($name))
            Alterar
        @else
            Adicionar
        @endif
    </button>
</form>
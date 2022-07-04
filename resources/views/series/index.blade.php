<x-layout title="Séries">

    <a href= "{{ route('series.create') }}" class="btn btn-primary mb-2">Adicionar</a>

    @isset($mensageSuccess)
        <div class="alert alert-success">
            {{ $mensageSuccess }}
        </div>
    @endisset

    <div class="mb-3">
        <ul class="list-group">
            @foreach ($series as $serie)
            <li class="list-group-item d-flex justify-content-between align-items-center"> 
                {{ $serie->name }}
            
            <form action="{{ route('series.destroy', $serie->id) }}" method="post">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger btn-sm">X</button>
            </form>

            </li>
            @endforeach


        </ul>
    </div>

</x-layout>
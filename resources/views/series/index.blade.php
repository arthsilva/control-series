<x-layout title="Séries">

    <a href="/series/criar" class="btn btn-primary mb-2">Adicionar</a>

    <div class="mb-3">
        <ul class="list-group">
            @foreach ($series as $serie)
            <li class="list-group-item"> {{ $serie->name }} </li>
            @endforeach
        </ul>
    </div>

</x-layout>
<x-layout title="Alterar Série '{{ $serie->name }}'">
    <x-series.form :action="route('series.update', $serie)" :name="$serie->name"/>
</x-layout>
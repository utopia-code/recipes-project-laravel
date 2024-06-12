<x-app-layout>

    @if ($recipes->count())
        <h1 class="text-3xl font-bold text-orange-700 px-6">Recetas de la categoría "{{ $name }}"</h1>
        <x-cards-grid :recipes="$recipes" />
    @else
        <p class="text-center">No hay ninguna receta todavía.</p>
    @endif

</x-app-layout>
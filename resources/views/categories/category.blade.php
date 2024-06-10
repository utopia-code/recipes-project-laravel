<x-app-layout>
    <main class="max-w-6xl mx-auto pb-20 mt-6 lg:mt-14 space-y-6">
        
        @if ($recipes->count())
            <h1 class="text-3xl font-bold text-orange-700 px-6">Recetas de la categoría "{{ $name }}"</h1>
            <x-cards-grid :recipes="$recipes" />
        @else
            <p class="text-center">No hay ninguna receta todavía.</p>
        @endif

    </main>
</x-app-layout>
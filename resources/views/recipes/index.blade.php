<x-app-layout>
    <main class="max-w-6xl mx-auto pb-20 mt-6 lg:mt-14 space-y-6">
        
       @if ($selectedRecipes->count())
            <x-cards-grid :recipes="$selectedRecipes" />
        @else
            <p class="text-center">No hay ninguna receta todavía.</p>
        @endif

    </main>
</x-app-layout>


<x-app-layout>
        
    @if ($selectedRecipes->count())
        <x-cards-grid :recipes="$selectedRecipes" />
    @else
        <p class="text-center">No hay ninguna receta todavía.</p>
    @endif

</x-app-layout>


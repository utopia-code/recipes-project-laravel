@props(['recipes'])

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
    @foreach ($recipes as $recipe)
        <x-card :recipe="$recipe" />
    @endforeach
</div>
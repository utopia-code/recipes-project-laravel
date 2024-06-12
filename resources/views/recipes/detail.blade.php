@php
    use Carbon\Carbon;
@endphp

<x-app-layout>

    <article class="max-w-5xl mx-auto px-6 md:grid md:grid-cols-12 gap-x-6">
        
        <div class="col-span-12 justify-between mb-6">
            <a href="{{ url('/') }}"
                class="transition-colors duration-300 relative inline-flex items-center text-lg hover:text-orange-700">
                <svg width="22" height="22" viewBox="0 0 22 22" class="mr-2">
                    <g fill="none" fill-rule="evenodd">
                        <path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z">
                        </path>
                        <path class="fill-current"
                                d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z">
                        </path>
                    </g>
                </svg>
                Volver a la Home
            </a>
        </div>

        <div class="ol-span-12 md:col-span-8">
            <img src="{{ asset('images/' . $recipe->img) }}" alt="image {{ $recipe->name }}" class="rounded-xl">

            <h1 class="text-orange-700 font-bold text-3xl lg:text-4xl mt-10 mb-8">
                {{ $recipe->name }}
            </h1>

            <h2 class="text-xl font-bold my-4 text-orange-700">Instrucciones </h2>

            <div class="space-y-4 lg:text-lg leading-loose">{!! $recipe->instructions !!}</div>
        </div>

        <div class="col-span-12 md:col-span-4 mb-10 bg-orange-50 p-6">

            <div>
                <span class="font-bold">Publicado:</span> 
                <time>{{ Carbon::parse($recipe->published_at)->format('Y-m-d') }}</time>
            </div>

            <div>
                <span class="font-bold">Autor:</span> 
                <span>{{ $recipe->author }}</span>
            </div>

            <div><span class="font-bold">Tiempo de preparación:</span> {{ $recipe->preparation_time }} minutos</div>
            <div><span class="font-bold">Nivel de dificultad:</span> {{ $recipe->difficulty_level }}</div>

            <h2 class="text-xl font-bold my-4 text-orange-700">Ingredientes </h2>
            <div>{!! $recipe->ingredients !!}</div>

            <h2 class="text-xl font-bold my-4 text-orange-700">Categorías </h2>
            <div class="flex  justify-around flex-1 my-4">
                @foreach ($recipe->categories as $category)
                    <a href="{{ url('/categories/'.$category->slug) }}">
                        <span 
                            class="inline-flex items-center rounded-full bg-orange-100 px-5 py-1 m-1 text-s font-medium text-orange-700 ring-1 ring-inset ring-orange-700/10">
                            {{ $category->name }}
                        </span>
                    </a>
                @endforeach
            </div>

        </div>

    </article>

</x-app-layout>






<!-- <p class="font-bold mb-2">Para 4 personas:</p><ul><li>Patatas 700 g</li><li>Cebolla 300 g</li><li>Huevos 6</li><li>Sal</li><li>Aceite de oliva</li></ul> -->




@php
    use Carbon\Carbon;
@endphp

@props(['recipe'])

<article class="transition-colors duration-300 hover:bg-orange-50 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">
    <div class="py-6 px-5 h-full flex flex-col">

        <div class="min-h-[220px] max-h-[230px]">
            <img class="h-[230px] w-full object-cover" src="{{ asset('images/'.$recipe->img) }}" alt="image {{ $recipe->name }}">
        </div>

        <div class="mt-6 flex flex-col justify-between flex-1">

            <div class="mb-4">
                <h2 class="text-xl font-bold transition-colors duration-300 text-orange-700 hover:text-orange-800">
                    <a href="{{ url('/recipes/'.$recipe->slug) }}">
                        {{ $recipe->name }}
                    </a>
                </h2>
            </div>

            <p class="flex justify-around flex-1 mb-4">
                @foreach ($recipe->categories as $category)
                    <a href="{{ url('/categories/'.$category->slug) }}">
                        <span 
                            class="inline-flex items-center rounded-full bg-orange-100 px-5 py-1 text-s font-medium text-orange-700 ring-1 ring-inset ring-orange-700/10">
                            {{ $category->name }}
                        </span>
                    </a>
                @endforeach
            </p>

            <table class="table-auto border-collapse table-fixed w-full text-sm mb-4">
                <tbody>
                    <tr>
                        <td class="border-b border-slate-300 py-1 text-slate-500">Nivel de dificultad: </td>
                        <td class="border-b border-slate-300 py-1 text-slate-500">{{ $recipe->difficulty_level }}</td>
                    </tr>
                    <tr>
                        <td class="border-b border-slate-300 py-1 text-slate-500">Autor: </td>
                        <td class="border-b border-slate-300 py-1 text-slate-500">{{ $recipe->author }}</td>
                    </tr>
                    <tr>
                        <td class="border-b border-slate-300 py-1 text-slate-500">Publicado: </td>
                        <td class="border-b border-slate-300 py-1 text-slate-500"><time>{{ Carbon::parse($recipe->published_at)->format('Y-m-d') }}</time></td>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>
</article>
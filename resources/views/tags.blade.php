@extends('layouts.app')

@section('content')

   <div class="container mx-auto">

         <div class="border-b border-grey mb-2">
            <h1 class="text-xl text-gray-700 text-sm font-bold my-2">Búsqueda por descriptor</h1>
         </div>
         <p class="mb-4">Se encontraron {{ count($publications) }} publicaciones con el descriptor:  {{ request()->tag }}</p>
         
        <div class="flex">
            @if (count($publications) > 0)
                @foreach ($publications as $publication)
                    <div class="card w-1/3 rounded overflow-hidden shadow mx-2">
                        <div class="px-6 py-3">
                            <div class="border-b border-grey text-gray-700 font-bold text-xl mb-2 pb-2">#{{ $publication->id }} - <a class="no-underline hover:no-underline hover:text-teal-600" href="../publicacion/{{ $publication->id }}">{{ $publication->title }}</a></div>
                            <p>{{ $publication->resume }}</p>
                            <p class="mt-2">Autor: {{ $publication->author }}, ({{ $publication->publish_year }})</p>
                            <p class="mt-2">Tutor: {{ $publication->mentor->name }}</p>
                        </div>
                        <div class="px-6 pb-3">  
                            @foreach($publication->tags as $tag)
                                <a href="{{ route('tag', $tag->slug) }}"
                                class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-teal-600 {{ $loop->last ? '' : 'mr-2' }}">
                                    #{{ $tag->name }}
                                </a>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            @else
                <div class="h-64 w-full flex items-center justify-center">
                    <div>
                        <h1 class="text-2xl" >No hay nada que mostrar aqui :(</h1>
                    </div>
                </div>
            @endif    
        </div>
    </div>
@endsection

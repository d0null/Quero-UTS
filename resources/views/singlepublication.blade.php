@extends('layouts.app')

@section('content')





<div class="container mx-auto">

    <div class="flex items-center mb-3">
        <div class="w-full flex items-center">
            <div class="flex w-full justify-left items-center">
                <h1 class="text-xl text-gray-700 text-sm font-bold my-2">Detalles de la publicación (#{{ $publication->id }}) </h1>
            </div>
        </div>
    </div>
    <div class="card mb-6 py-3 px-6 shadow-md overflow-hidden">
         <div class="flex border-b border-40">
            <div class="w-1/4 py-4">
                <h4 class="font-normal text-80">Titulo</h4></div>
            <div class="w-3/4 py-4">
                <p class="text-90">{{ $publication->title }}</p>
            </div>
        </div>
        <div class="flex border-b border-40">
            <div class="w-1/4 py-4">
                <h4 class="font-normal text-80">Autor, año de publicación</h4></div>
            <div class="w-3/4 py-4">
                <p class="text-90">{{ $publication->author }}, {{ $publication->publish_year }} </p>
            </div>
        </div> 
        <div class="flex border-b border-40">
            <div class="w-1/4 py-4">
                <h4 class="font-normal text-80">Escuela</h4></div>
            <div class="w-3/4 py-4">
                <p class="text-90">{{ $publication->school->title }}</p>
            </div>
        </div>           
        <div class="flex border-b border-40">
            <div class="w-1/4 py-4">
                <h4 class="font-normal text-80">Tutor</h4></div>
            <div class="w-3/4 py-4">
                <a href="/tutor/{{ $publication->mentor->id }}" class="no-underline font-bold dim text-primary">
                    {{  $publication->mentor->escalafon ." ". $publication->mentor->name ." ". $publication->mentor->last_name }}
                </a>
            </div>
        </div>
        <div class="flex border-b border-40 remove-bottom-border">
            <div class="w-1/4 py-4">
                <h4 class="font-normal text-80">Mención</h4></div>
            <div class="w-3/4 py-4">
                <p class="text-90">
                @if ($publication->mention == "publication")
                    Publicación
                @elseif ($publication->mention == "honorific")
                    Honorifica
                @else
                    Ninguna
                @endif                              
                </p>
            </div>
        </div>
        <div class="flex border-b border-40">
            <div class="w-1/4 py-4">
                <h4 class="font-normal text-80">Lineas de Investigacion</h4></div>
            <div class="w-3/4 py-4">
            @foreach($publication->researchLines as $researchLine)
                                   <p> {{ $researchLine->parent }} {{ $researchLine->title }}</p>
                                
            @endforeach
            </div>
        </div>
        <div class="flex border-b border-40">
            <div class="w-1/4 py-4">
                <h4 class="font-normal text-80">Descriptores</h4></div>
            <div class="w-3/4 py-4">
            @foreach($publication->tags as $tag)
                                <a href="{{ route('tag', $tag->slug) }}"
                                class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-teal-600 {{ $loop->last ? '' : 'mr-2' }}">
                                    #{{ $tag->name }}
                                </a>
            @endforeach
            </div>
        </div>
        <div class="flex border-b border-40">
            <div class="w-1/4 py-4">
                <h4 class="font-normal text-80">Resumen</h4></div>
            <div class="w-3/4 py-4">
                <div>
                {{ $publication->resume }}</div>
            </div>
        </div>
        <div class="flex">
            <div class="w-1/4 py-4">
                <h4 class="font-normal text-80">Url de la publicacion</h4></div>
            <div class="w-3/4 py-4">
                @auth
                    <a href="{{ $publication->url }}" class="no-underline font-bold dim text-primary">
                    {{ $publication->url }}
                    </a>
                @else
                    Debes estar
                    <a href="{{ route('login') }}" class="no-underline font-bold dim text-primary">
                    Logueado o registrado
                    </a>
                    para poder ver el link del archivo
                @endauth

            </div>
        </div>
    </div>
</div>
@endsection
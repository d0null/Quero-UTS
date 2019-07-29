@extends('layouts.app')

@section('content')





<div class="container mx-auto">

    <div class="flex items-center mb-3">
        <div class="ml-3 w-full flex items-center">
            <div class="flex w-full justify-left items-center">
                <h1 class="flex-no-shrink text-90 font-normal text-2xl">Detalles de la publicación</h1>
            </div>
            <div class="ml-3">
                <!---->
                <!---->
            </div>
            <button data-testid="open-delete-modal" dusk="open-delete-modal-button" title="Eliminar" class="btn btn-default btn-icon btn-white mr-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" aria-labelledby="delete" role="presentation" class="fill-current text-80">
                    <path fill-rule="nonzero" d="M6 4V2a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2h5a1 1 0 0 1 0 2h-1v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6H1a1 1 0 1 1 0-2h5zM4 6v12h12V6H4zm8-2V2H8v2h4zM8 8a1 1 0 0 1 1 1v6a1 1 0 0 1-2 0V9a1 1 0 0 1 1-1zm4 0a1 1 0 0 1 1 1v6a1 1 0 0 1-2 0V9a1 1 0 0 1 1-1z"></path>
                </svg>
            </button>
            <!---->
            <!---->
            <a href="/admin/resources/publications/2/edit" class="btn btn-default btn-icon bg-primary" data-testid="edit-resource" dusk="edit-resource-button" title="Editar">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" aria-labelledby="edit" role="presentation" class="fill-current text-white" style="margin-top: -2px; margin-left: 3px;">
                    <path d="M4.3 10.3l10-10a1 1 0 0 1 1.4 0l4 4a1 1 0 0 1 0 1.4l-10 10a1 1 0 0 1-.7.3H5a1 1 0 0 1-1-1v-4a1 1 0 0 1 .3-.7zM6 14h2.59l9-9L15 2.41l-9 9V14zm10-2a1 1 0 0 1 2 0v6a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4c0-1.1.9-2 2-2h6a1 1 0 1 1 0 2H2v14h14v-6z"></path>
                </svg>
            </a>
        </div>
    </div>
    <div class="card mb-6 py-3 px-6 shadow-md overflow-hidden">
        <div class="flex border-b border-40">
            <div class="w-1/4 py-4">
                <h4 class="font-normal text-80">ID</h4></div>
            <div class="w-3/4 py-4">
                <p class="text-90">{{ $publication->id }}</p>
            </div>
        </div>
        <div class="flex border-b border-40">
            <div class="w-1/4 py-4">
                <h4 class="font-normal text-80">Tutor</h4></div>
            <div class="w-3/4 py-4">
                <a href="/mentors/{{ $publication->mentor->id }}" class="no-underline font-bold dim text-primary">
                    {{ $publication->mentor->name ." ". $publication->mentor->last_name }}
                </a>
            </div>
        </div>

        <div class="flex border-b border-40">
            <div class="w-1/4 py-4">
                <h4 class="font-normal text-80">Linea de Investigacion</h4></div>
            <div class="w-3/4 py-4"><a href="/admin/resources/research-lines/1" class="no-underline font-bold dim text-primary">
                THIS SHIT DOESNT WORK HERE
            </a></div>
        </div>
        <div class="flex border-b border-40">
            <div class="w-1/4 py-4">
                <h4 class="font-normal text-80">Titulo</h4></div>
            <div class="w-3/4 py-4">
                <p class="text-90">{{ $publication->title }}</p>
            </div>
        </div>
        <div class="flex border-b border-40">
            <div class="w-1/4 py-4">
                <h4 class="font-normal text-80">Autor</h4></div>
            <div class="w-3/4 py-4">
                <p class="text-90">{{ $publication->AUTHOR }}</p>
            </div>
        </div>
        <div class="flex border-b border-40">
            <div class="w-1/4 py-4">
                <h4 class="font-normal text-80">Url</h4></div>
            <div class="w-3/4 py-4">
                <a href="{{ $publication->url }}" class="no-underline font-bold dim text-primary">
                {{ $publication->url }}
                </a>
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
        <div class="flex border-b border-40">
            <div class="w-1/4 py-4">
                <h4 class="font-normal text-80">Año de publicacíon</h4></div>
            <div class="w-3/4 py-4">
                <p class="text-90">  
                {{ $publication->publish_year }}</p>
            </div>
        </div>
        <div class="flex border-b border-40 remove-bottom-border">
            <div class="w-1/4 py-4">
                <h4 class="font-normal text-80">Mención</h4></div>
            <div class="w-3/4 py-4">
                <p class="text-90">{{ $publication->mention }}</p>
            </div>
        </div>
    </div>
</div>
@endsection
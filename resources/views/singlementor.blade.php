@extends('layouts.app')

@section('content')

<div class="container mx-auto">

    <div class="flex items-center mb-3">
        <div class="w-full flex items-center">
            <div class="flex w-full justify-left items-center">
                <h1 class="text-xl text-gray-700 text-sm font-bold my-2">Detalles del tutor (#{{ $mentor->id }}) </h1>
            </div>
        </div>
    </div>
    <div class="card mb-6 py-3 px-6 shadow-md overflow-hidden">
        <div class="flex border-b border-40">
            <div class="w-1/4 py-4">
                <h4 class="font-normal text-80">Nombres</h4></div>
            <div class="w-3/4 py-4">

                 <p class="text-90">   {{  $mentor->escalafon ." ".  $mentor->name ." ". $mentor->last_name }}</p>

            </div>
        </div>


        <div class="flex border-b border-40">
            <div class="w-1/4 py-4">
                <h4 class="font-normal text-80">Email</h4></div>
            <div class="w-3/4 py-4">
                <p class="text-90">{{ $mentor->email }}</p>
            </div>
        </div>
        <div class="flex border-b border-40">
            <div class="w-1/4 py-4">
                <h4 class="font-normal text-80">Telefono</h4></div>
            <div class="w-3/4 py-4">
                <p class="text-90">{{ $mentor->phone }}</p>
            </div>
        </div>

        <div class="flex border-b border-40">
            <div class="w-1/4 py-4">
                <h4 class="font-normal text-80">Cedula</h4></div>
            <div class="w-3/4 py-4">
                <p class="text-90">{{ $mentor->cedula }}</p>
            </div>
        </div>

        <div class="flex">
            <div class="w-1/4 py-4">
                <h4 class="font-normal text-80">Publicaciones tutoradas: </h4></div>
            <div class="w-3/4 py-4">
            @foreach($mentor->publications as $publication)
            <p class="text-90"><a href="../publicacion/{{ $publication->id }}"
                                class="no-underline hover:no-underline hover:text-teal-600 {{ $loop->last ? '' : 'mr-2' }}">
                                {{ $publication->title }}, ( {{ $publication->publish_year }} )
                                </a></p>
            @endforeach           

            </div>
        </div>
    </div>
</div>
@endsection

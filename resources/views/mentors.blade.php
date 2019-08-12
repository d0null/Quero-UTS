@extends('layouts.app')

@section('content')

<div class="container mx-auto">
    <div class="border-b border-grey mb-2">
        <h1 class="text-xl text-gray-700 text-sm font-bold my-2">Tutores</h1>    
    </div>
         <p class="mb-4">Actualmente, el sistema posee un total de {{ count($mentors) }} tutores, descritos a continuación</p>
    <div class="flex">
        @foreach ($mentors as $mentor)
            <div class="card w-1/3 rounded overflow-hidden shadow mx-2">
                <div class="flex justify-between px-6 py-3">
                    <div class="text-gray-700 text-left text-90 font-semibold text-xl"><a class="no-underline hover:no-underline hover:text-teal-600" href="tutor/{{ $mentor->id }}">{{ $mentor->escalafon ." ". $mentor->name ." ". $mentor->last_name }}</a></div>
                    <div class="text-gray-700 text-right text-90 font-normal text-xl">
                        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">{{ $mentor->publications()->count() }} publicaciones</span>
                    </div>
                </div>
                <div class="px-6 mb-4">
                    <div class="border-b border-grey mb-1">
                        <h1 class="text-gray-700 text-sm font-bold my-1">Contacto:</h1>    
                    </div>                    
                    <p>{{ $mentor->email }}</p>
                    <p>{{ $mentor->phone }}</p>
                    <p></p>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection

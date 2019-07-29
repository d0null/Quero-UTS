@extends('layouts.app')

@section('content')

<div class="container mx-auto">
    <div class="flex">
        @foreach ($mentors as $mentor)
            <div class="flex-1 card max-w-sm rounded overflow-hidden shadow my-2 mx-2">
                <div class="flex justify-between px-6 py-3">
                    <div class="text-gray-700 text-left text-90 font-normal text-2xl"><a href="tutor/{{ $mentor->id }}">{{ $mentor->name ." ". $mentor->last_name }}</a></div>
                    <div class="text-gray-700 text-right text-90 font-normal text-xl">
                        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">COUNT publicaciones</span>
                    </div>
                </div>
                <div class="px-6 mb-4">
                    <p>{{ $mentor->email }}</p>
                    <p>{{ $mentor->phone }}</p>
                    <p>{{ $mentor->publications()->count() }}</p>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection

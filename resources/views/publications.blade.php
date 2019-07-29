@extends('layouts.app')

@section('content')





    <div class="container mx-auto">
        <div class="flex">
            @if (count($publications) > 0)
                @foreach ($publications as $publication)
                    <div class="card max-w-sm rounded overflow-hidden shadow my-2 mx-2">
                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2">{{ $publication->id }} - {{ $publication->title }}</div>
                            <p>{{ $publication->resume }}</p>
                        </div>
                        <div class="px-6 py-4">
                            @foreach($publication->tags as $tag)
                                <a href="{{ route('tag', $tag->slug) }}"
                                class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 {{ $loop->last ? '' : 'mr-2' }}">
                                    #{{ $tag->name }}
                                </a>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            @else
                <div class="h-64 w-full flex items-center justify-center">
                    <div>
                        <h1 class="text-2xl" >No hay resultados para {{ request()->q }}</h1>
                    </div>
                </div>
            @endif    
        </div>
    </div>
@endsection

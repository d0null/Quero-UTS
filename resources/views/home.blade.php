@extends('layouts.app')

@section('content')
<div class="container mx-auto">

    <div class="border-b border-grey mb-2">
    <h1 class="text-xl text-gray-700 text-sm font-bold my-2">¡Bienvenido de nuevo {{ Auth::user()->name }}!</h1>
    </div>
    <p class="mb-4">Se encontraron  publicaciones con la pababra clave: </p>

    
    </div>
</div>>
@endsection

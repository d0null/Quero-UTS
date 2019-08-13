@extends('layouts.app')

@section('content')

   <div class="container mx-auto">


         <div class="border-b border-grey mb-2">
            <h1 class="text-xl text-gray-700 text-sm font-bold my-2">Documentos de ayuda del Sistema Quero-UTS </h1>
         </div>
         <p class="mb-4">Por favor descarga los manuales disponibles:</p>

         
        <div class="flex">

                    <div class="card w-1/3 rounded overflow-hidden shadow mx-2">
                        <div class="px-6 py-3">
                            <div class="border-b border-grey text-gray-700 font-bold text-xl mb-2 pb-2"> Manual de Usuario</div>
                            <p class="mt-2">Autor: Daniel Majano</p>
                            <p class="mt-2">Fecha: 08 de Agosto de 2019 </p>
                            <a href="https://drive.google.com/file/d/1pWB5f36JQ6AVOOMUv7YKfjUbeviW4ibx/preview" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 mt-2 rounded inline-flex items-center no-underline">
                                <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M13 8V2H7v6H2l8 8 8-8h-5zM0 18h20v2H0v-2z"/></svg>
                                <span >Ver</span>
                            </a>
                        </div>
                    </div>
                    <div class="card w-1/3 rounded overflow-hidden shadow mx-2">
                        <div class="px-6 py-3">
                            <div class="border-b border-grey text-gray-700 font-bold text-xl mb-2 pb-2"> Manual de Operador</div>
                            <p class="mt-2">Autor: Daniel Majano</p>
                            <p class="mt-2">Fecha: 09 de Agosto de 2019 </p>
                            <a href="https://drive.google.com/file/d/16fV9LAuSjOu3znrBOxh0ZE1S5HZ2vId_/preview" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 mt-2 rounded inline-flex items-center no-underline">
                                <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M13 8V2H7v6H2l8 8 8-8h-5zM0 18h20v2H0v-2z"/></svg>
                                <span >Ver</span>
                            </a>
                        </div>
                    </div>
                    <div class="card w-1/3 rounded overflow-hidden shadow mx-2">
                        <div class="px-6 py-3">
                            <div class="border-b border-grey text-gray-700 font-bold text-xl mb-2 pb-2"> Tutorial Subir Archivo</div>
                            <p class="mt-2">Autor: Daniel Majano</p>
                            <p class="mt-2">Fecha: 11 de Agosto de 2019 </p>
                            <a href="https://drive.google.com/file/d/17GcBqWnAIizd5pokoqS1gFretOeywH_T/preview" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 mt-2 rounded inline-flex items-center no-underline">
                                <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M13 8V2H7v6H2l8 8 8-8h-5zM0 18h20v2H0v-2z"/></svg>
                                <span >Ver</span>
                            </a>
                        </div>
                    </div>
  
        </div>
    </div>
@endsection

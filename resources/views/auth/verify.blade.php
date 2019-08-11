@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verifica tu correo') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Se te ha enviado un correo con un enlace.') }}
                        </div>
                    @endif

                    {{ __('Antes de proceder, porfavor revisa lo que llegó a tu correo.') }}
                    {{ __('Si no recibiste correo') }}, <a href="{{ route('verification.resend') }}">{{ __('Haz click aquí para enviar otra.') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

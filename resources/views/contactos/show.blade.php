 @extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-2xl font-semibold mb-4">Detalles del Contacto</h1>
        <div class="bg-white shadow-md rounded-lg p-6">
            <div class="mb-4">
                <strong class="text-lg">Nombre:</strong> {{ $contacto->nombre }}
            </div>
            <div class="mb-4">
                <strong class="text-lg">Correo Electrónico:</strong> {{ $contacto->correo_electronico }}
            </div>
            <div class="mb-4">
                <strong class="text-lg">Teléfono:</strong> {{ $contacto->telefono ?? 'N/A' }}
            </div>
            <div class="mb-4">
                <strong class="text-lg">Empresa:</strong> {{ $contacto->empresa ?? 'N/A' }}
            </div>
            <div class="mt-8">
                <a href="{{ route('contactos.index') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Volver
                </a>
            </div>
        </div>
    </div>
@endsection


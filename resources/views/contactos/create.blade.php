@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-20">
    <h1 class="text-2xl font-semibold mb-4 text-center">Agregar Contacto</h1>



    <form method="POST" action="{{ route('contactos.store') }}" class="max-w-md mx-auto">
        @csrf

        <div class="mb-4">
            <label for="nombre" class="block text-sm font-medium text-gray-700">Nombre:</label>
            <input type="text" id="nombre" name="nombre" value="{{ old('nombre') }}" required
                class="mt-1 p-2 border border-gray-300 rounded-md w-full">
            @error('nombre')
            <div class="text-red-500 text-sm">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-4">
            <label for="correo_electronico" class="block text-sm font-medium text-gray-700">Correo Electrónico:</label>
            <input type="email" id="correo_electronico" name="correo_electronico"
                value="{{ old('correo_electronico') }}" required
                class="mt-1 p-2 border border-gray-300 rounded-md w-full">
            @error('correo_electronico')
            <div class="text-red-500 text-sm">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-4">
            <label for="telefono" class="block text-sm font-medium text-gray-700">Teléfono:</label>
            <input type="text" id="telefono" name="telefono" value="{{ old('telefono') }}"
                class="mt-1 p-2 border border-gray-300 rounded-md w-full"
                oninput="this.value = this.value.replace(/[^0-9]/g, '')">
            @error('telefono')
            <div class="text-red-500 text-sm">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-4">
            <label for="empresa" class="block text-sm font-medium text-gray-700">Empresa:</label>
            <input type="text" id="empresa" name="empresa" value="{{ old('empresa') }}"
                class="mt-1 p-2 border border-gray-300 rounded-md w-full">
            @error('empresa')
            <div class="text-red-500 text-sm">{{ $message }}</div>
            @enderror
        </div>

        <div class="flex justify-center">
            <button type="submit"
                class=" ml-3 mr-3 inline-block bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">Guardar</button>
                <a href="/contactos" class="inline-block bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded">
                    Volver a contactos
                </a>
        </div>
        
            
        
    </form>
</div>
@endsection

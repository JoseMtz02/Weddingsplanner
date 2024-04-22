@extends('layouts.app')

@section('content')

<div class="container mx-auto px-4 py-8">

    <h1 class="text-2xl font-semibold mb-4">Editar Contacto</h1>

    <form method="POST" action="{{ route('contactos.update', $contacto->id) }}" class="max-w-md mx-auto">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label for="nombre" class="block text-sm font-medium text-gray-700">Nombre:</label>
            <input type="text" id="nombre" name="nombre" value="{{ $contacto->nombre }}" required
                class="mt-1 p-2 border border-gray-300 rounded-md w-full">
        </div>

        <div class="mb-4">
            <label for="correo_electronico" class="block text-sm font-medium text-gray-700">Correo Electrónico:</label>
            <input type="email" id="correo_electronico" name="correo_electronico"
                value="{{ $contacto->correo_electronico }}" required
                class="mt-1 p-2 border border-gray-300 rounded-md w-full">
        </div>

        <div class="mb-4">
            <label for="telefono" class="block text-sm font-medium text-gray-700">Teléfono:</label>
            <input type="text" id="telefono" name="telefono" value="{{ $contacto->telefono ?? '' }}"
                class="mt-1 p-2 border border-gray-300 rounded-md w-full">
        </div>

        <div class="mb-4">
            <label for="empresa" class="block text-sm font-medium text-gray-700">Empresa:</label>
            <input type="text" id="empresa" name="empresa" value="{{ $contacto->empresa ?? '' }}"
                class="mt-1 p-2 border border-gray-300 rounded-md w-full">
        </div>

        <div class="flex justify-between">
            <button type="submit"
                class="inline-block bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">Guardar
                Cambios</button>
            <a href="{{ route('contactos.index') }}"
                class="inline-block bg-gray-400 hover:bg-gray-500 text-white font-bold py-2 px-4 rounded">Cancelar</a>
        </div>
    </form>

</div>

@endsection

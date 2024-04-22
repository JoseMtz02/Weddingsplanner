@extends('layouts.app')

@section('content')

<div class="container mx-auto px-4 py-8">

    <h1 class="text-2xl font-semibold mb-4">Contactos</h1>

    <a href="{{ route('contactos.create') }}" class="inline-block bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded mb-4">Agregar Contacto</a>

    <div class="overflow-x-auto shadow-md">
        <table class="table-auto w-full bg-white">
            <thead>
                <tr class="bg-gray-800 text-white uppercase text-sm leading-normal">
                    <th class="py-3 px-4">Nombre</th>
                    <th class="py-3 px-4">Correo Electrónico</th>
                    <th class="py-3 px-4">Teléfono</th>
                    <th class="py-3 px-4">Empresa</th>
                     <th class="py-2 px-4">Acciones</th>  
                </tr>
            </thead>
            <tbody class="text-gray-600 text-sm font-light">
                @foreach($contactos as $contacto)
                <tr class="border-b border-gray-200 hover:bg-gray-100">
                    <td class="py-3 px-4 text-center">{{ $contacto->nombre }}</td>
                    <td class="py-3 px-4 text-center">{{ $contacto->correo_electronico }}</td>
                    <td class="py-3 px-4 text-center">{{ $contacto->telefono }}</td>
                    <td class="py-3 px-4 text-center">{{ $contacto->empresa }}</td>
                    <td class="py-3 px-4 text-center">
                        <a href="{{ route('contactos.show', $contacto->id) }}" class="text-blue-500 hover:text-blue-600 mr-2">Ver</a>
                        <a href="{{ route('contactos.edit', $contacto->id) }}" class="text-indigo-500 hover:text-indigo-600 mr-2">Editar</a>
                        <button type="button" onclick="showConfirmModal({{ $contacto->id }})" class="text-red-500 hover:text-red-600">Eliminar</button>
                    </td>  
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>


    <!-- Modal -->
    <div id="confirmModal" class="fixed top-0 left-0 w-full h-full bg-gray-900 bg-opacity-50 flex justify-center items-center hidden">
        <div class="bg-white rounded p-8 max-w-md">
            <h2 class="text-xl font-semibold mb-4">¿Estás seguro de que deseas eliminar este contacto?</h2>
            <div class="flex justify-end">
                <form id="deleteForm" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded mr-2">Eliminar</button>
                </form>
                <button type="button" onclick="hideConfirmModal()" class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-4 rounded">Cancelar</button>
            </div>
        </div>
    </div>

</div>

<script>
    function showConfirmModal(contactoId) {
        var modal = document.getElementById('confirmModal');
        var form = document.getElementById('deleteForm');
        form.action = "{{ url('contactos') }}" + '/' + contactoId;
        modal.classList.remove('hidden');
    }

    function hideConfirmModal() {
        var modal = document.getElementById('confirmModal');
        modal.classList.add('hidden');
    }
</script>

@endsection

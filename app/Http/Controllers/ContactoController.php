<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use App\Http\Requests\StoreContactoRequest;
use App\Http\Requests\UpdateContactoRequest;

class ContactoController extends Controller
{
    
    public function index()
    {
        $contactos = Contacto::all();
        return view('contactos.index', compact('contactos'));
    }


    public function create()
    {
        return view('contactos.create');

    }

   
    public function store(StoreContactoRequest $request)
    {
         // Crear un nuevo contacto con los datos del formulario
    $contacto = new Contacto();
    $contacto->nombre = $request->input('nombre');
    $contacto->correo_electronico = $request->input('correo_electronico');
    $contacto->telefono = $request->input('telefono');
    $contacto->empresa = $request->input('empresa');
    $contacto->save();

    // Redirigir a la vista de índice de contactos con un mensaje de éxito
    return redirect()->route('contactos.index')->with('success', '¡Contacto creado correctamente!');
    }

    
    public function show(Contacto $contacto)
    {
        return view('contactos.show', compact('contacto'));
    }

   
    public function edit(Contacto $contacto)
    {
        return view('contactos.edit', compact('contacto'));

    }

   
    public function update(UpdateContactoRequest $request, Contacto $contacto)
    {
       
        $contacto->update($request->all());

        return redirect()->route('contactos.index')
            ->with('success', 'Contacto actualizado correctamente.');
    }

    
    public function destroy(Contacto $contacto)
    {
        $contacto->delete();

        return redirect()->route('contactos.index')
            ->with('success', 'Contacto eliminado correctamente.');
    }
}

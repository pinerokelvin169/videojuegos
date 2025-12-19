<?php

namespace App\Http\Controllers;

use App\Models\videojuegos;
use Illuminate\Http\Request;

class VideojuegosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $videojuegos = videojuegos::getVideojuegos();
        return view('videojuegos.index', compact('videojuegos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('videojuegos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'titulo' => 'required',
            'modulo' => 'required',
            'gravedad' => 'required',
            'pasos_reproduccion' => 'required',
        ]);
        videojuegos::createVideojuego($request->all());
        return redirect('/videojuegos')->with('success', 'eror registrado.');
    }


        /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $videojuego = videojuegos::getVideojuegosbyId($id);
        return view('videojuegos.show', compact('videojuego'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $videojuego = videojuegos::getVideojuegosbyId($id);
        return view('videojuegos.edit', compact('videojuego'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $videojuego = videojuegos::find($id);
        $videojuego->update($request->all());

        return redirect('/videojuegos')
            ->with('success', 'Bug actualizado.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, $id)
    {
        videojuegos::deleteVideojuego($id, $request->estado ?? 'FIX');

        return redirect('/videojuegos')
            ->with('success', 'bug eliminadp.');
    }

}

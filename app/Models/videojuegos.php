<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class videojuegos extends Model
{
    protected $table = 'videojuegos';

    protected $fillable = [
        'titulo',
        'modulo',
        'gravedad',
        'estado',
        'pasos_reproduccion',
        'deleted_at'
    ];

    public static function getVideojuegos()
    {
        return self::whereNull('deleted_at')
            ->where('estado', '!=', 'FIX')
            ->get();
    }



    public static function getVideojuegosbyId($id)
    {
        return self::find($id);
    }

    public static function createVideojuego($data)
    {
        return self::create($data);
    }

    public static function updateVideojuego($id, $data)
    {
        $videojuego = self::find($id);
        return $videojuego->update($data);
    }

    public static function deleteVideojuego($id)
    {
        $videojuego = self::find($id);

        return $videojuego->update([
            'estado' => 'DEL',
            'deleted_at' => now()
        ]);
    }
}

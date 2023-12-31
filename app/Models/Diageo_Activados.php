<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diageo_Activados extends Model
{
    use HasFactory;

    protected $fillable = [
        'codigo',
        'clienteFemsa',
        'razonSocial',
        'tipoD',
        'nDocumento',
        'nombreNegocio',
        'nFijo',
        'nCelular',
        'email',
        'departamento',
        'municipio',
        'localidad',
        'barrio',
        'direccion',
        'latitude',
        'longitude',
        'star',
        'user_id',
        'canal',
        'nombre_contacto',
        'apellidos_contacto',
        'telContacto',
        'mane_licores',
        'ventaPesos',
        'tamañoEst',
        'promotor',
        'estadoCarga',
        'motivo_nc',
        'gestionActual',
        'fechaCalidad',
        'usuarioCalidad',
        'obsCierre',
        'gift',
        'cantidad',
        'portafolioDiageo',
        'fotoActiv',
        'fotoDocs',
        'fotoGifts',
    ];


}

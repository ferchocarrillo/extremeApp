<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PuntosAuditoriaH extends Model
{
    use HasFactory;
    protected $table = 'puntos_auditoria_historico';

    protected $guarded = [];
    protected $fillable = [
        'id',
        'id_femsa',
        'codigo_femsa',
        'tipoDocumento',
        'nit',
        'nombreNegocio',
        'razonSocial',
        'direccion',
        'latitude',
        'longitude',
        'telFijo',
        'telCelular',
        'mail',
        'departamento',
        'municipio',
        'barrio',
        'tipologia',
        'segmentacion',
        'nombreContacto',
        'apellidoContacto',
        'telContact',
        'asignadoA',
        'estatusGestion',
        'fechaAsignado',
        'fechaFinalizado'

    ];

    protected $casts = [
        'fechaAsignado' => 'datetime',
     ];
}

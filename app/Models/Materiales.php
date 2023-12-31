<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Materiales extends Model
{
    protected $table = "auditorias";

    protected $fillable = [
        'id',
        'precarga_id',
        'bAndw1000',
        'caras_bAndw1000',
        'precio_bAndw1000',
        'bAndw700',
        'caras_bAndw700',
        'precio_bAndw700',
        'bAndw375',
        'caras_bAndw375',
        'precio_bAndw375',
        'smirnoff700',
        'caras_smirnoff700',
        'precio_smirnoff700',
        'smirnoff375',
        'caras_smirnoff375',
        'precio_smirnoff375',
        'smirnoff_ns700',
        'caras_smirnoff_ns700',
        'precio_smirnoff_ns700',
        'smirnoff_ns375',
        'caras_smirnoff_ns375',
        'precio_smirnoff_ns375',
        'jhonnie1000',
        'caras_jhonnie1000',
        'precio_jhonnie1000',
        'jhonnie700',
        'caras_jhonnie700',
        'precio_jhonnie700',
        'jhonnie375',
        'caras_jhonnie375',
        'precio_jhonnie375',
        'oldparr750',
        'caras_oldparr750',
        'precio_oldparr750',
        'buchannas700',
        'caras_buchannas700',
        'precio_buchannas700',
        'buchannas375',
        'caras_buchannas375',
        'precio_buchannas375',
        'cal_marc_visible',
        'cal_marc_danados',
        'cal_marc_et_danados',
        'hay_aguardiente',
        'hay_ron',
        'comp_ron1',
        'caras_comp_ron',
        'precio_comp_ron1',
        'comp_ron2',
        'precio_comp_ron2',
        'comp_aguard1',
        'caras_comp_aguardiente',
        'precio_comp_aguardiente1',
        'comp_aguard2',
        'precio_comp_aguardiente2',
        'seleccionLinealDiageo',
        'seleccionLinealA',
        'seleccionLinealR',
        'criticidad'
    ];

    public $timestamps = false;

    public function auditoria()
    {
        return $this->hasMany(PuntosAuditoria::class, 'id');
    }
}

<?php

namespace App\Exports;

use App\Models\Auditoria;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class AuditoriasExport implements FromCollection, WithHeadings
{

    public function collection()
    {
        return Auditoria::all();
    }


    /**
    * @return \Illuminate\Support\Collection
    */

    public function headings(): array
    {
        return [
            'id',
            'precarga_id',
            'nombreNegocio',
            'razonSocial',
            'nit',
            'direccion',
            'telefono',
            'departamento',
            'municipio',
            'barrio',
            'activacion',
            'noConcreciones',
            'cual',
            'observaciones',
            'fotoActiv',
            'latitude',
            'longitude',
            'star',
            'promotor',
            'state_tipologia',
            'tipologia',
            'OtraTipologia',
            'fototipologia',
            'state_segmento',
            'segmento',
            'fotosegmento',
            'caja_cerveza',
            'caja_aguardiente',
            'caja_ron',
            'caja_whiskey',
            'cenefa',
            'cenefa_visi',
            'cenefa_colo',
            'seleccionCenefa',
            'afiche',
            'afiche_visi',
            'afiche_colo',
            'marca_combo',
            'aficheCombotizado',
            'combox1',
            'combox2',
            'combox3',
            'seleccionAfiche',
            'marco',
            'marco_visi',
            'marco_colo',
            'seleccionMarco',
            'rompetraficos',
            'prod_rt_visibles',
            'prod_rt_properly',
            'seleccionRompetrafico',
            'fachadas',
            'fachadas_visi',
            'fachadas_colo',
            'seleccionFaxada',
            'hielera',
            'hl_con_prod',
            'prod_hl_visible',
            'prod_hl_danadas',
            'seleccionHielera',
            'bases_h',
            'baseshl_con_prod',
            'prod_baseshl_visible',
            'prod_baseshl_danadas',
            'seleccionBase_h',
            'dosificadorD',
            'prod_dsD_visibles',
            'prod_dsD_diferentes',
            'prod_dsD_danados',
            'seleccionDosificadorD',
            'dosificadorS',
            'prod_dsS_visibles',
            'prod_dsS_diferentes',
            'prod_dsS_danados',
            'seleccionDosificadorS',
            'branding',
            'branding_visible',
            'branding_danados',
            'seleccionBranding',
            'vasos',
            'vasos_visibles',
            'vasos_quebrados',
            'seleccionVasos',
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
            'seleccionLinealDiageo',
            'comp_ron1',
            'hay_ron',
            'precio_comp_ron1',
            'comp_ron2',
            'caras_comp_ron',
            'precio_comp_ron2',
            'seleccionLinealR',
            'comp_aguard1',
            'hay_aguardiente',
            'caras_comp_aguardiente',
            'precio_comp_aguardiente1',
            'comp_aguard2',
            'precio_comp_aguardiente2',
            'seleccionLinealA',
            'ron_byw',
            'seleccionron_byw',
            'ron_jhonny',
            'seleccionron_jhonny',
            'aguard_smirnoff',
            'seleccionaguard_smirnoff',
            'gift',
            'cant_gift',
            'selecciongift',
            'observacionesDetallista',
            'created_at',
            'updated_at',
            'revisadoPor',
            'revisionCalidad',
            'fechaCalidad',
            'criticidad',
        ];
    }
}

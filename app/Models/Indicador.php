<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Indicador
 * @package App\Models
 * @version April 18, 2018, 9:59 pm -05
 *
 * @property string indicador
 * @property string descripcion
 * @property integer proceso_id
 * @property integer actividad_id
 * @property integer frecuencia_id
 * @property integer tipoIndicador_id
 * @property float meta
 * @property string forma_calculo
 */
class Indicador extends Model
{

    public $table = 'indicador';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    public $fillable = [
        'indicador',
        'descripcion',
        'proceso_id',
        'actividad_id',
        'frecuencia_id',
        'tipoIndicador_id',
        'meta',
        'forma_calculo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'indicador' => 'string',
        'descripcion' => 'string',
        'proceso_id' => 'integer',
        'actividad_id' => 'integer',
        'frecuencia_id' => 'integer',
        'tipoIndicador_id' => 'integer',
        'meta' => 'float',
        'forma_calculo' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}

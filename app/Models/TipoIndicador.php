<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class TipoIndicador
 * @package App\Models
 * @version April 13, 2018, 12:44 am -05
 *
 * @property string tipo
 * @property string descripcion
 */
class TipoIndicador extends Model
{

    public $table = 'tipo_indicador';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    public $fillable = [
        'tipo',
        'descripcion',
        'organizacion_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'tipo' => 'string',
        'descripcion' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}

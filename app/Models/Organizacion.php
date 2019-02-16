<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Organizacion
 * @package App\Models
 * @version April 6, 2018, 12:23 am -05
 *
 * @property string nombre
 * @property string ruc
 * @property string direccion
 * @property string telefono
 * @property string politicaCalidad
 */
class Organizacion extends Model
{
//    use SoftDeletes;

    public $table = 'organizacion';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


//    protected $dates = ['deleted_at'];


    public $fillable = [
        'nombre',
        'ruc',
        'direccion',
        'telefono',
        'politicaCalidad'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombre' => 'string',
        'ruc' => 'string',
        'direccion' => 'string',
        'telefono' => 'string',
        'politicaCalidad' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}

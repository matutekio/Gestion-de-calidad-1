<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Responsable
 * @package App\Models
 * @version April 13, 2018, 12:18 am -05
 *
 * @property string nombre
 * @property string descripcion
 * @property integer organizacion_id
 */
class Responsable extends Model
{

    public $table = 'responsable';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    public $fillable = [
        'nombre',
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
        'nombre' => 'string',
        'descripcion' => 'string',
        'organizacion_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}

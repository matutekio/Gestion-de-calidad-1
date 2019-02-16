<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Recurso
 * @package App\Models
 * @version April 13, 2018, 12:13 am -05
 *
 * @property string recurso
 * @property string descripcion
 * @property integer organizacion_id
 */
class Recurso extends Model
{

    public $table = 'recurso';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    public $fillable = [
        'recurso',
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
        'recurso' => 'string',
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

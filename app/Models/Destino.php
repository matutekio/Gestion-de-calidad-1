<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Destino
 * @package App\Models
 * @version April 12, 2018, 10:50 pm -05
 *
 * @property string destino
 * @property integer organizacion_id
 * @property string descripcion
 */
class Destino extends Model
{

    public $table = 'destino';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    public $fillable = [
        'destino',
        'organizacion_id',
        'descripcion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'destino' => 'string',
        'organizacion_id' => 'integer',
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

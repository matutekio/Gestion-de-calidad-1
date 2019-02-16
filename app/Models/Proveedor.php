<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Proveedor
 * @package App\Models
 * @version April 12, 2018, 11:32 pm -05
 *
 * @property string proveedor
 * @property string descripcion
 * @property integer organizacion_id
 */
class Proveedor extends Model
{

    public $table = 'proveedor';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    public $fillable = [
        'proveedor',
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
        'proveedor' => 'string',
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

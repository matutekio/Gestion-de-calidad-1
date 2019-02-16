<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Frecuencia
 * @package App\Models
 * @version April 12, 2018, 11:22 pm -05
 *
 * @property string frecuencia
 * @property integer num_dias
 */
class Frecuencia extends Model
{

    public $table = 'frecuencia';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    public $fillable = [
        'frecuencia',
        'num_dias',
        'organizacion_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'frecuencia' => 'string',
        'num_dias' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}

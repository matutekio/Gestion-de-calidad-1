<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Objetivos
 * @package App\Models
 * @version April 14, 2018, 10:46 pm -05
 *
 * @property string objetivo
 * @property integer organizacion_id
 */
class Objetivos extends Model
{

    public $table = 'objetivo_calidad';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    public $fillable = [
        'objetivo',
        'organizacion_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'objetivo' => 'string',
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

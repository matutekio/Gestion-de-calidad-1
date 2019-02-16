<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Procesos
 * @package App\Models
 * @version April 18, 2018, 8:49 pm -05
 *
 * @property string nombre
 * @property string descripcion
 * @property integer organizacion_id
 */
class Procesos extends Model
{

    public $table = 'proceso';
    
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

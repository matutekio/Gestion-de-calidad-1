<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Role
 * @package App\Models
 * @version April 12, 2018, 7:25 pm -05
 *
 * @property string role
 * @property string descripcion
 * @property integer organizacion_id
 */
class Role extends Model
{

    public $table = 'role';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';



    public $fillable = [
        'role',
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
        'role' => 'string',
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
